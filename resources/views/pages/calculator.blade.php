@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-4 text-center">
      <h1 class="hero-title mb-2">ROI & Steel <span class="text-gradient">Savings Calculator</span></h1>
      <p class="hero-lead mx-auto" style="max-width: 750px;">
        Compare actual project costs between obsolete 50D overlap lapping and ORIN mechanical rebar couplers with live data calculations.
      </p>
    </div>
  </section>

  <!-- Interactive ROI Calculator + Full Cost Comparison Table -->
  <section class="py-5">
    <div class="container py-4">
      
      <!-- Interactive Calculator Card -->
      <div class="calc-wrapper mb-5" data-aos="zoom-in" data-aos-duration="700">
        <div class="row g-4 align-items-center">
          
          <div class="col-lg-6">
            <div class="mb-4">
              <label class="form-label text-dark fw-bold mb-2">1. Select Rebar Diameter (D):</label>
              <div class="bar-btn-grid">
                <button class="btn btn-bar-size" data-size="16">16 mm</button>
                <button class="btn btn-bar-size" data-size="20">20 mm</button>
                <button class="btn btn-bar-size active" data-size="25">25 mm</button>
                <button class="btn btn-bar-size" data-size="32">32 mm</button>
                <button class="btn btn-bar-size" data-size="36">36 mm</button>
                <button class="btn btn-bar-size" data-size="40">40 mm</button>
              </div>
            </div>

            <div class="mb-4">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <label for="jointsRange" class="form-label text-dark fw-bold mb-0">2. Number of Joints Required:</label>
                <span class="text-primary fw-bold font-monospace">
                  <input type="number" id="jointsInput" value="1000" min="100" max="50000" class="custom-input py-1 px-2 text-end d-inline-block font-monospace" style="width: 100px;"> joints
                </span>
              </div>
              <input type="range" class="form-range" id="jointsRange" min="100" max="20000" step="100" value="1000">
            </div>

            <div class="p-3 rounded-3" style="background: rgba(2, 132, 199, 0.08); border-left: 4px solid var(--accent-cyan);">
              <small class="text-secondary d-block">
                💡 <em>Calculation based on standard 50D lap length & ₹56/kg benchmark steel rate as certified in ORIN technical test sheet.</em>
              </small>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="savings-card mb-3">
              <small class="text-uppercase text-success fw-bold letter-spacing-1 d-block mb-1">Total Net Rupee Savings</small>
              <div class="savings-total" id="totalSavings">₹1,91,040</div>
              <span class="badge bg-success mt-2 py-2 px-3 fw-bold fs-6" id="percentSavedBadge">70% Cost Saved</span>
            </div>

            <div class="px-2">
              <div class="calc-breakdown-row">
                <span class="text-secondary">Traditional Lap Steel Cost (Wasted)</span>
                <span class="fw-bold font-monospace text-danger" id="steelWastageCost">₹2,71,040</span>
              </div>
              <div class="calc-breakdown-row">
                <span class="text-secondary">Total ORIN Coupler + Threading Cost</span>
                <span class="fw-bold font-monospace text-primary" id="couplerJointCost">₹80,000</span>
              </div>
              <div class="calc-breakdown-row">
                <span class="text-secondary">Total Steel Weight Conserved</span>
                <span class="fw-bold font-monospace text-success" id="steelWeightSaved">4,840 kg Steel</span>
              </div>
              <div class="calc-breakdown-row">
                <span class="text-secondary">Avoided Lap Length Per Joint</span>
                <span class="fw-bold font-monospace text-dark" id="lapLengthDisplay">1.25 m (50D)</span>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Complete 8-Column Cost Comparison Sheet -->
      <div class="orin-card p-4 p-md-5 mb-4" data-aos="fade-up">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
          <h4 class="fw-bold text-dark mb-0">Official Engineering Cost Comparison Matrix</h4>
          <span class="badge bg-primary px-3 py-2">Steel Rate Benchmark: Rs. 56 / KG</span>
        </div>
        <p class="text-secondary small mb-3">Direct comparison data for 1 Joint connection comparing traditional 50D overlapping vs. ORIN mechanical coupler joint:</p>

        <div class="d-md-none table-scroll-hint">
          <i class="bi bi-arrows-expand text-primary"></i> <span>Swipe horizontally to view all 8 technical matrix columns</span>
        </div>

        <div class="table-responsive-custom">
          <table class="table-custom table-sticky-col align-middle text-nowrap text-center">
            <thead>
              <tr>
                <th class="text-start" style="min-width: 140px;">Steel (D) Size</th>
                <th style="min-width: 130px;">Overlap Length (50D)</th>
                <th style="min-width: 140px;">Lap Steel Wt. (Kg)</th>
                <th style="min-width: 160px;">Overlapped Bar Cost</th>
                <th style="min-width: 140px;">Coupler Cost</th>
                <th style="min-width: 170px;">2-End Threading Cost</th>
                <th style="min-width: 170px;">Total Joint Cost</th>
                <th class="text-success fw-bold" style="min-width: 170px;">Saving Per Joint</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-start text-primary fw-bold">40 mm</td>
                <td>2.00 m</td>
                <td>19.84 kg</td>
                <td>₹1,111.04</td>
                <td>₹178.00</td>
                <td>₹80.00</td>
                <td>₹258.00</td>
                <td class="text-success fw-bold">₹853.04 (77%)</td>
              </tr>
              <tr>
                <td class="text-start text-primary fw-bold">36 mm</td>
                <td>1.80 m</td>
                <td>14.38 kg</td>
                <td>₹805.28</td>
                <td>₹134.00</td>
                <td>₹72.00</td>
                <td>₹206.00</td>
                <td class="text-success fw-bold">₹599.28 (74%)</td>
              </tr>
              <tr>
                <td class="text-start text-primary fw-bold">32 mm</td>
                <td>1.60 m</td>
                <td>10.10 kg</td>
                <td>₹565.60</td>
                <td>₹80.00</td>
                <td>₹64.00</td>
                <td>₹144.00</td>
                <td class="text-success fw-bold">₹421.60 (75%)</td>
              </tr>
              <tr>
                <td class="text-start text-primary fw-bold">25 mm</td>
                <td>1.25 m</td>
                <td>4.84 kg</td>
                <td>₹271.04</td>
                <td>₹45.00</td>
                <td>₹35.00</td>
                <td>₹80.00</td>
                <td class="text-success fw-bold">₹191.04 (70%)</td>
              </tr>
              <tr>
                <td class="text-start text-primary fw-bold">20 mm</td>
                <td>1.00 m</td>
                <td>2.47 kg</td>
                <td>₹138.32</td>
                <td>₹26.00</td>
                <td>₹24.00</td>
                <td>₹50.00</td>
                <td class="text-success fw-bold">₹88.32 (64%)</td>
              </tr>
              <tr>
                <td class="text-start text-primary fw-bold">16 mm</td>
                <td>0.80 m</td>
                <td>1.26 kg</td>
                <td>₹70.56</td>
                <td>₹17.00</td>
                <td>₹17.00</td>
                <td>₹34.00</td>
                <td class="text-success fw-bold">₹36.56 (52%)</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="text-center" data-aos="fade-up">
        <a href="{{ route('contact') }}" class="btn btn-orin-primary">
          <i class="bi bi-chat-dots-fill"></i> Request Custom Project Estimation
        </a>
      </div>

    </div>
  </section>
@endsection
