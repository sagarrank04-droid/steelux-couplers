// ==========================================
// ORIN REBAR COUPLER MULTI-DIAMETER SAVINGS ENGINE & LOGIC
// ==========================================

// Official Brochure Specifications & Per-Joint Rates (50D Overlap vs ORIN Mechanical Coupler)
const savingsData = {
  16: { lapLength: 0.80, lapWeight: 1.27, couplerCost: 20, threadCost: 20, totalCouplerCost: 40, parallelWt: 0.080, coldForgedWt: 0.070 },
  20: { lapLength: 1.00, lapWeight: 2.48, couplerCost: 30, threadCost: 30, totalCouplerCost: 60, parallelWt: 0.180, coldForgedWt: 0.160 },
  25: { lapLength: 1.25, lapWeight: 4.84, couplerCost: 48, threadCost: 32, totalCouplerCost: 80, parallelWt: 0.350, coldForgedWt: 0.300 },
  32: { lapLength: 1.60, lapWeight: 10.16, couplerCost: 90, threadCost: 35, totalCouplerCost: 125, parallelWt: 0.670, coldForgedWt: 0.600 },
  36: { lapLength: 1.80, lapWeight: 14.46, couplerCost: 133, threadCost: 45, totalCouplerCost: 178, parallelWt: 1.170, coldForgedWt: 1.100 },
  40: { lapLength: 2.00, lapWeight: 19.84, couplerCost: 183, threadCost: 50, totalCouplerCost: 233, parallelWt: 1.350, coldForgedWt: 1.250 }
};

let currentCouplerType = 'parallel'; // 'parallel' or 'cold_forged'

document.addEventListener('DOMContentLoaded', () => {
  // Initialize AOS Animations
  if (typeof AOS !== 'undefined') {
    AOS.init({
      once: true,
      duration: 600,
      easing: 'ease-out-cubic',
      offset: 40,
      disable: window.innerWidth < 768
    });
  }

  initCalculator();
  initForm();
  initMobileCollapse();
});

// Format Indian Currency (₹ 1,91,040)
function formatRupee(amount) {
  const safeVal = Number.isFinite(amount) ? amount : 0;
  return '₹' + Math.round(safeVal).toLocaleString('en-IN');
}

// Format Numbers
function formatNumber(num) {
  const safeVal = Number.isFinite(num) ? num : 0;
  return safeVal.toLocaleString('en-IN');
}

// Interactive Multi-Diameter Calculator Initializer
function initCalculator() {
  const typeButtons = document.querySelectorAll('.btn-coupler-type');
  const steelRateInput = document.getElementById('steelRateInput');
  const jointInputs = document.querySelectorAll('.calc-joint-input');
  const resetCalcBtn = document.getElementById('resetCalcBtn');
  const activeTypeBadge = document.getElementById('activeCouplerTypeBadge');

  if (!steelRateInput && jointInputs.length === 0) return;

  // Toggle between Parallel Threaded & Cold Forged
  typeButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      typeButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      currentCouplerType = btn.dataset.couplerType || 'parallel';

      if (activeTypeBadge) {
        activeTypeBadge.textContent = currentCouplerType === 'cold_forged'
          ? 'Cold Forged'
          : 'Parallel Threaded';
      }
      updateCalculation();
    });
  });

  // Steel Rate input listener
  if (steelRateInput) {
    steelRateInput.addEventListener('input', updateCalculation);
    steelRateInput.addEventListener('change', () => {
      let val = parseFloat(steelRateInput.value);
      if (isNaN(val) || val < 0) {
        steelRateInput.value = 0;
      }
      updateCalculation();
    });
  }

  // Multi-MM Joint Count input listeners
  jointInputs.forEach(input => {
    input.addEventListener('input', updateCalculation);
    input.addEventListener('focus', () => {
      if (input.value === '0') {
        input.select();
      }
    });
    input.addEventListener('blur', () => {
      if (input.value.trim() === '' || parseFloat(input.value) < 0) {
        input.value = '0';
        updateCalculation();
      }
    });
  });

  // Clear / Reset All Joint Inputs button
  if (resetCalcBtn) {
    resetCalcBtn.addEventListener('click', () => {
      jointInputs.forEach(input => {
        input.value = '0';
      });
      updateCalculation();
    });
  }

  updateCalculation();
}

// Update Real-Time Multi-Diameter Calculation & Visuals
// Formula from client sheet:
// y = Total amount Lapping considering standard 50D
// x = Total cost of Joints using M. couplers
// % Saving = ((y - x) / y) * 100
function updateCalculation() {
  const steelRateInput = document.getElementById('steelRateInput');
  const jointInputs = document.querySelectorAll('.calc-joint-input');
  if (jointInputs.length === 0) return;

  const steelRate = Math.max(0, parseFloat(steelRateInput?.value) || 0);

  let totalLappingAmountY = 0;     // y
  let totalCouplerAmountX = 0;     // x
  let totalSteelWeightSavedKg = 0;
  let totalJointsCount = 0;

  jointInputs.forEach(input => {
    const size = parseInt(input.dataset.size, 10);
    const joints = Math.max(0, parseInt(input.value, 10) || 0);
    const spec = savingsData[size];

    if (spec && joints > 0) {
      const rowLapWeightKg = joints * spec.lapWeight;
      const rowLapCostY = rowLapWeightKg * steelRate;
      const rowCouplerCostX = joints * spec.totalCouplerCost;

      totalLappingAmountY += rowLapCostY;
      totalCouplerAmountX += rowCouplerCostX;
      totalSteelWeightSavedKg += rowLapWeightKg;
      totalJointsCount += joints;

      input.closest('.calc-joint-row')?.classList.add('has-value');
    } else {
      input.closest('.calc-joint-row')?.classList.remove('has-value');
    }
  });

  const netSavings = totalLappingAmountY - totalCouplerAmountX; // (y - x)
  const percentSaved = totalLappingAmountY > 0
    ? ((netSavings / totalLappingAmountY) * 100)
    : 0;

  // Update DOM Elements
  const totalSavingsEl = document.getElementById('totalSavings');
  const percentSavedBadge = document.getElementById('percentSavedBadge');
  const steelWastageCostEl = document.getElementById('steelWastageCost');
  const couplerJointCostEl = document.getElementById('couplerJointCost');
  const steelWeightSavedEl = document.getElementById('steelWeightSaved');
  const totalJointsBadgeEl = document.getElementById('totalJointsBadge');

  if (steelWastageCostEl) {
    steelWastageCostEl.textContent = formatRupee(totalLappingAmountY);
  }
  if (couplerJointCostEl) {
    couplerJointCostEl.textContent = formatRupee(totalCouplerAmountX);
  }
  if (totalSavingsEl) {
    totalSavingsEl.textContent = formatRupee(netSavings);
  }
  if (percentSavedBadge) {
    percentSavedBadge.textContent = totalLappingAmountY > 0
      ? `${percentSaved.toFixed(2)}%`
      : '0%';
  }
  if (steelWeightSavedEl) {
    steelWeightSavedEl.textContent = `${formatNumber(Math.round(totalSteelWeightSavedKg))} kg Steel Saved`;
  }
  if (totalJointsBadgeEl) {
    totalJointsBadgeEl.textContent = `${formatNumber(totalJointsCount)} Total Joints`;
  }
}

// Handle Form Submission & WhatsApp Redirect
function initForm() {
  const form = document.getElementById('inquiryForm');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('fullName')?.value || '';
      const phone = document.getElementById('phoneNum')?.value || '';
      const barSize = document.getElementById('reqBarSize')?.value || 'All Sizes';
      const quantity = document.getElementById('reqQuantity')?.value || '1000';
      const message = document.getElementById('reqMessage')?.value || '';

      const whatsappText = `Hello Steelux Industries,\n\nName: ${name}\nPhone: ${phone}\nRebar Size Required: ${barSize}\nEstimated Quantity: ${quantity}\nProject Details: ${message}`;
      const whatsappUrl = `https://wa.me/918849001529?text=${encodeURIComponent(whatsappText)}`;

      // Toast feedback
      showToast('Redirecting to WhatsApp for instant quotation...');
      setTimeout(() => {
        window.open(whatsappUrl, '_blank');
        form.reset();
      }, 1000);
    });
  }
}

// Toast Feedback Notification
function showToast(msg) {
  let toast = document.getElementById('orinToast');
  if (!toast) {
    toast = document.createElement('div');
    toast.id = 'orinToast';
    toast.className = 'position-fixed bottom-0 start-50 translate-middle-x mb-4 px-4 py-3 rounded-3 shadow-lg text-white d-flex align-items-center gap-2';
    toast.style.cssText = 'background: #0f172a; border: 1px solid #10b981; z-index: 9999; transition: all 0.3s ease; opacity: 0; transform: translate(-50%, 50px);';
    document.body.appendChild(toast);
  }
  toast.innerHTML = `<i class="bi bi-check-circle-fill text-success fs-5"></i> <span>${msg}</span>`;
  toast.style.opacity = '1';
  toast.style.transform = 'translate(-50%, 0)';
  setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transform = 'translate(-50%, 50px)';
  }, 3500);
}

// Auto-close Bootstrap Navbar on mobile link click
function initMobileCollapse() {
  const navLinks = document.querySelectorAll('.nav-link-custom');
  const navbarCollapse = document.getElementById('navbarContent');

  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      if (navbarCollapse && navbarCollapse.classList.contains('show')) {
        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
        if (bsCollapse) {
          bsCollapse.hide();
        }
      }
    });
  });
}
