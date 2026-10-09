<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquiryController extends Controller
{
    /**
     * Handle Quote / Contact Inquiry Form Submission
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'fullName'    => 'required|string|max:100',
            'phoneNum'    => 'required|string|max:20',
            'reqBarSize'  => 'nullable|string|max:50',
            'reqQuantity' => 'nullable|numeric|min:1',
            'reqMessage'  => 'nullable|string|max:1000',
        ]);

        $name = $validated['fullName'];
        $phone = $validated['phoneNum'];
        $barSize = $validated['reqBarSize'] ?? 'All Sizes';
        $quantity = $validated['reqQuantity'] ?? '1000';
        $message = $validated['reqMessage'] ?? 'Need quote for upcoming construction project.';

        // Format WhatsApp Message URL
        $waText = "Hello Steelux Industries (ORIN),%0a%0a" .
                  "I would like to request an instant quote / technical details:%0a" .
                  "• Name: " . urlencode($name) . "%0a" .
                  "• Mobile: " . urlencode($phone) . "%0a" .
                  "• Rebar Size: " . urlencode($barSize) . "%0a" .
                  "• Estimated Quantity: " . urlencode($quantity) . " units%0a" .
                  "• Requirements: " . urlencode($message) . "%0a%0a" .
                  "Please contact me with factory rates and machine mobilization details.";

        $waUrl = "https://wa.me/918849001529?text=" . $waText;

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Inquiry prepared successfully.',
                'redirectUrl' => $waUrl
            ]);
        }

        return redirect()->away($waUrl);
    }
}
