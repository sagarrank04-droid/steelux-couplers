<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Home Page View
     */
    public function home()
    {
        return view('pages.home', [
            'metaTitle' => 'ORIN | One Stop Shop for Rebar Solutions | Steelux Industries Surat',
            'metaDescription' => 'ORIN Rebar Couplers by Steelux Industries Surat. One stop shop for creative infrastructure and rebar splicing solutions. Save up to 80% steel joint costs.'
        ]);
    }

    /**
     * About Us Page View
     */
    public function about()
    {
        return view('pages.about', [
            'metaTitle' => 'About Us | Steelux Industries (ORIN Precision Couplers)',
            'metaDescription' => 'Learn about Steelux Industries Surat, pioneering sustainable high-tensile TMT rebar splicing systems with 100% parent bar break guarantee.'
        ]);
    }

    /**
     * Services Page View
     */
    public function services()
    {
        return view('pages.services', [
            'metaTitle' => 'Core Splicing Services | Steelux Industries ORIN',
            'metaDescription' => 'Explore our infrastructure solutions, precision coupler manufacturing, on-site machine mobilization, and technical splicing services.'
        ]);
    }

    /**
     * Key Advantages Page View
     */
    public function advantages()
    {
        return view('pages.advantages', [
            'metaTitle' => 'Key Advantages of ORIN Couplers | Zero Wastage & Cost Savings',
            'metaDescription' => 'Save up to 80% steel costs, eliminate lap congestion, and ensure 100% tensile strength with ORIN mechanical rebar couplers.'
        ]);
    }

    /**
     * Machinery & Technical Specs Page View
     */
    public function machinery()
    {
        return view('pages.machinery', [
            'metaTitle' => 'Machinery & Coupler Matrix Specs | Parallel Thread & Cold Forging',
            'metaDescription' => 'Technical specifications and coupler dimensions matrix (16mm-40mm) for Parallel Threaded and Cold Forged rebar couplers.'
        ]);
    }

    /**
     * ROI & Steel Savings Calculator Page View
     */
    public function calculator()
    {
        return view('pages.calculator', [
            'metaTitle' => 'Interactive ROI Steel Savings Calculator | Lapping vs Coupler',
            'metaDescription' => 'Calculate instant rupee savings and conserved steel weight across 16mm-40mm TMT rebar sizes compared to traditional lapping.'
        ]);
    }

    /**
     * Landmark Projects & Customers Page View
     */
    public function projects()
    {
        return view('pages.projects', [
            'metaTitle' => 'Landmark Projects & Trusted Developers | ORIN Couplers',
            'metaDescription' => 'Trusted by 15 premier developer groups and supplied to iconic high-rise towers including Prism Luxuria, Anthem Arica, Vishwa 99 and more.'
        ]);
    }

    /**
     * Contact Us Page View
     */
    public function contact()
    {
        return view('pages.contact', [
            'metaTitle' => 'Contact Us | Direct Factory Dispatch & Mobilization | Surat',
            'metaDescription' => 'Get in touch with Steelux Industries Surat for instant quotation, coupler dispatch, and on-site rebar threading machine mobilization.'
        ]);
    }
}
