@extends('layouts.app')

@section('content')
  <!-- Page Header Banner -->
  <section class="py-5" style="background: linear-gradient(180deg, #ffffff 0%, var(--bg-section-alt) 100%); border-bottom: 1px solid var(--border-subtle);">
    <div class="container py-3 text-center">
      <h1 class="hero-title mb-2">Steel <span class="text-gradient">Savings Calculator</span></h1>
      <p class="hero-lead mx-auto mb-0" style="max-width: 600px;">
        Compare 50D lapping cost vs. Steelux rebar couplers.
      </p>
    </div>
  </section>

  <!-- Interactive ROI Calculator + Cost Matrix -->
  <section class="py-5">
    <div class="container py-4">
      
      <!-- Interactive Multi-Diameter Calculator Card -->
      <div class="calc-wrapper mb-5" data-aos="zoom-in" data-aos-duration="700">
        <div class="d-flex flex-wrap justify-content-between align-items-center pb-3 mb-4 border-bottom">
          <div class="calc-type-tabs" role="tablist" aria-label="Coupler Type">
            <button type="button" class="btn-coupler-type active" data-coupler-type="parallel">
              <i class="bi bi-gear-wide-connected"></i> Parallel Threaded
            </button>
            <button type="button" class="btn-coupler-type" data-coupler-type="cold_forged">
              <i class="bi bi-hammer"></i> Cold Forged
            </button>
          </div>
          <button type="button" id="resetCalcBtn" class="btn btn-sm btn-outline-secondary fw-semibold">
            <i class="bi bi-arrow-counterclockwise"></i> Clear Inputs
          </button>
        </div>

        <div class="row g-4 align-items-stretch">
          <div class="col-lg-6">
            <div class="calc-panel-box h-100">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="fw-bold text-dark mb-0">
                  <i class="bi bi-sliders text-primary me-1"></i> Input Parameters
                </h5>
                <span class="badge bg-light text-secondary border" id="activeCouplerTypeBadge">Parallel Threaded</span>
              </div>

              <div class="calc-steel-rate-row mb-3">
                <label for="steelRateInput" class="fw-bold text-dark mb-0">Steel Rate :</label>
                <div class="calc-rate-input-group">
                  <span class="calc-unit-prefix">₹</span>
                  <input type="number" id="steelRateInput" class="calc-number-input" value="56" min="1" step="0.5" placeholder="56">
                  <span class="calc-unit-suffix">per kg</span>
                </div>
              </div>

              <div class="calc-joints-list">
                <div class="calc-joints-header d-flex justify-content-between text-muted small fw-bold text-uppercase pb-2 mb-2 border-bottom">
                  <span>Rebar Diameter (mm)</span>
                  <span>No. of Joints</span>
                </div>

                <div class="calc-joint-row">
                  <label for="joints_16" class="calc-joint-label">
                    <span class="mm-badge">16 mm</span>
                    <span class="text-secondary small">No. of Joints</span>
                  </label>
                  <div class="calc-joint-input-wrap">
                    <input type="number" id="joints_16" class="calc-joint-input" data-size="16" value="0" min="0" step="10" placeholder="0">
                    <span class="calc-joint-unit">joints</span>
                  </div>
                </div>

                <div class="calc-joint-row">
                  <label for="joints_20" class="calc-joint-label">
                    <span class="mm-badge">20 mm</span>
                    <span class="text-secondary small">No. of Joints</span>
                  </label>
                  <div class="calc-joint-input-wrap">
                    <input type="number" id="joints_20" class="calc-joint-input" data-size="20" value="0" min="0" step="10" placeholder="0">
                    <span class="calc-joint-unit">joints</span>
                  </div>
                </div>

                <div class="calc-joint-row">
                  <label for="joints_25" class="calc-joint-label">
                    <span class="mm-badge">25 mm</span>
                    <span class="text-secondary small">No. of Joints</span>
                  </label>
                  <div class="calc-joint-input-wrap">
                    <input type="number" id="joints_25" class="calc-joint-input" data-size="25" value="1000" min="0" step="10" placeholder="0">
                    <span class="calc-joint-unit">joints</span>
                  </div>
                </div>

                <div class="calc-joint-row">
                  <label for="joints_32" class="calc-joint-label">
                    <span class="mm-badge">32 mm</span>
                    <span class="text-secondary small">No. of Joints</span>
                  </label>
                  <div class="calc-joint-input-wrap">
                    <input type="number" id="joints_32" class="calc-joint-input" data-size="32" value="0" min="0" step="10" placeholder="0">
                    <span class="calc-joint-unit">joints</span>
                  </div>
                </div>

                <div class="calc-joint-row">
                  <label for="joints_36" class="calc-joint-label">
                    <span class="mm-badge">36 mm</span>
                    <span class="text-secondary small">No. of Joints</span>
                  </label>
                  <div class="calc-joint-input-wrap">
                    <input type="number" id="joints_36" class="calc-joint-input" data-size="36" value="0" min="0" step="10" placeholder="0">
                    <span class="calc-joint-unit">joints</span>
                  </div>
                </div>

                <div class="calc-joint-row">
                  <label for="joints_40" class="calc-joint-label">
                    <span class="mm-badge">40 mm</span>
                    <span class="text-secondary small">No. of Joints</span>
                  </label>
                  <div class="calc-joint-input-wrap">
                    <input type="number" id="joints_40" class="calc-joint-input" data-size="40" value="0" min="0" step="10" placeholder="0">
                    <span class="calc-joint-unit">joints</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="calc-output-panel h-100 d-flex flex-column justify-content-between">
              <div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="fw-bold text-dark mb-0">
                    <i class="bi bi-graph-up-arrow text-success me-1"></i> Output Summary
                  </h5>
                  <span class="badge bg-primary-subtle text-primary fw-bold" id="totalJointsBadge">1,000 Total Joints</span>
                </div>

                <div class="calc-output-box calc-output-y mb-3">
                  <div class="d-flex justify-content-between align-items-start gap-2">
                    <div>
                      <span class="calc-var-pill var-y">y</span>
                      <span class="fw-bold text-dark">Total Amount Lapping</span>
                      <small class="d-block text-secondary mt-1">Standard 50D overlap length</small>
                    </div>
                    <div class="calc-output-amount text-danger" id="steelWastageCost">₹2,71,040</div>
                  </div>
                </div>

                <div class="calc-output-box calc-output-x mb-3">
                  <div class="d-flex justify-content-between align-items-start gap-2">
                    <div>
                      <span class="calc-var-pill var-x">x</span>
                      <span class="fw-bold text-dark">Total Cost Using M. Couplers</span>
                      <small class="d-block text-secondary mt-1">Coupler + 2-End Threading Cost</small>
                    </div>
                    <div class="calc-output-amount text-primary" id="couplerJointCost">₹80,000</div>
                  </div>
                </div>
              </div>

              <div class="savings-card mt-2">
                <div class="row g-3 align-items-center">
                  <div class="col-sm-6 text-center text-sm-start border-end-sm">
                    <small class="text-uppercase text-success fw-bold d-block mb-1">
                      % Saving <span class="badge bg-white text-success border ms-1 font-monospace">(y - x) / y</span>
                    </small>
                    <div class="savings-total" id="percentSavedBadge">70.48%</div>
                  </div>
                  <div class="col-sm-6 text-center text-sm-end">
                    <small class="text-uppercase text-success fw-bold d-block mb-1">
                      Net Saving <span class="font-monospace">(y - x)</span>
                    </small>
                    <div class="fw-bolder text-success fs-3 font-monospace" id="totalSavings">₹1,91,040</div>
                    <small class="text-secondary fw-semibold d-block mt-1" id="steelWeightSaved">4,840 kg Steel Saved</small>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Cost Comparison Sheet -->
      <div class="orin-card p-4 mb-4" data-aos="fade-up">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
          <h4 class="fw-bold text-dark mb-0">Cost Comparison Matrix (1 Joint)</h4>
          <span class="badge bg-primary px-3 py-2">Steel Rate: Rs. 56 / KG</span>
        </div>

        <div class="table-responsive-custom">
          <table class="table-custom table-sticky-col align-middle text-nowrap text-center">
            <thead>
              <tr>
                <th class="text-start">Steel (D) Size</th>
                <th>Overlap (50D)</th>
                <th>Lap Steel Wt.</th>
                <th>Lapping Cost</th>
                <th>Coupler Cost</th>
                <th>2-End Threading</th>
                <th>Total Coupler Cost</th>
                <th class="text-success fw-bold">Saving Per Joint</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-start text-primary fw-bold">40 mm</td>
                <td>2.00 m</td>
                <td>19.84 kg</td>
                <td>₹1,111.04</td>
                <td>₹183.00</td>
                <td>₹50.00</td>
                <td>₹233.00</td>
                <td class="text-success fw-bold">₹878.04 (79.0%)</td>
              </tr>
              <tr>
                <td class="text-start text-primary fw-bold">36 mm</td>
                <td>1.80 m</td>
                <td>14.46 kg</td>
                <td>₹809.76</td>
                <td>₹133.00</td>
                <td>₹45.00</td>
                <td>₹178.00</td>
                <td class="text-success fw-bold">₹631.76 (78.0%)</td>
              </tr>
              <tr>
                <td class="text-start text-primary fw-bold">32 mm</td>
                <td>1.60 m</td>
                <td>10.16 kg</td>
                <td>₹568.96</td>
                <td>₹90.00</td>
                <td>₹35.00</td>
                <td>₹125.00</td>
                <td class="text-success fw-bold">₹443.96 (78.0%)</td>
              </tr>
              <tr>
                <td class="text-start text-primary fw-bold">25 mm</td>
                <td>1.25 m</td>
                <td>4.84 kg</td>
                <td>₹271.04</td>
                <td>₹48.00</td>
                <td>₹32.00</td>
                <td>₹80.00</td>
                <td class="text-success fw-bold">₹191.04 (70.5%)</td>
              </tr>
              <tr>
                <td class="text-start text-primary fw-bold">20 mm</td>
                <td>1.00 m</td>
                <td>2.48 kg</td>
                <td>₹138.88</td>
                <td>₹30.00</td>
                <td>₹30.00</td>
                <td>₹60.00</td>
                <td class="text-success fw-bold">₹78.88 (56.8%)</td>
              </tr>
              <tr>
                <td class="text-start text-primary fw-bold">16 mm</td>
                <td>0.80 m</td>
                <td>1.27 kg</td>
                <td>₹71.12</td>
                <td>₹20.00</td>
                <td>₹20.00</td>
                <td>₹40.00</td>
                <td class="text-success fw-bold">₹31.12 (43.8%)</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </section>
@endsection
