// ==========================================
// ORIN REBAR COUPLER SAVINGS ENGINE & LOGIC
// ==========================================

const savingsData = {
  16: { lapLength: 0.80, lapWeight: 1.27, lapCost: 71.12, couplerCost: 20, threadCost: 20, totalCouplerCost: 40, unitSaving: 31.12 },
  20: { lapLength: 1.00, lapWeight: 2.48, lapCost: 138.88, couplerCost: 30, threadCost: 30, totalCouplerCost: 60, unitSaving: 78.88 },
  25: { lapLength: 1.25, lapWeight: 4.84, lapCost: 271.04, couplerCost: 48, threadCost: 32, totalCouplerCost: 80, unitSaving: 191.04 },
  32: { lapLength: 1.60, lapWeight: 10.16, lapCost: 568.96, couplerCost: 90, threadCost: 35, totalCouplerCost: 125, unitSaving: 443.96 },
  36: { lapLength: 1.80, lapWeight: 14.46, lapCost: 809.76, couplerCost: 133, threadCost: 45, totalCouplerCost: 178, unitSaving: 631.76 },
  40: { lapLength: 2.00, lapWeight: 19.84, lapCost: 1111.04, couplerCost: 183, threadCost: 50, totalCouplerCost: 233, unitSaving: 878.04 }
};

let currentBarSize = 25;
let currentJointCount = 1000;

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
  return '₹' + Math.round(amount).toLocaleString('en-IN');
}

// Format Numbers
function formatNumber(num) {
  return num.toLocaleString('en-IN');
}

// Interactive Calculator Initializer
function initCalculator() {
  const barButtons = document.querySelectorAll('.btn-bar-size');
  const jointsRange = document.getElementById('jointsRange');
  const jointsInput = document.getElementById('jointsInput');

  barButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      barButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      currentBarSize = parseInt(btn.dataset.size);
      updateCalculation();
    });
  });

  if (jointsRange && jointsInput) {
    jointsRange.addEventListener('input', (e) => {
      currentJointCount = parseInt(e.target.value);
      jointsInput.value = currentJointCount;
      updateCalculation();
    });

    jointsInput.addEventListener('input', (e) => {
      let val = parseInt(e.target.value) || 100;
      if (val < 100) val = 100;
      if (val > 50000) val = 50000;
      currentJointCount = val;
      jointsRange.value = currentJointCount;
      updateCalculation();
    });
  }

  updateCalculation();
}

// Update Real-Time Calculation & Visuals
function updateCalculation() {
  const data = savingsData[currentBarSize];
  if (!data) return;

  const totalLapCost = data.lapCost * currentJointCount;
  const totalCouplerCost = data.totalCouplerCost * currentJointCount;
  const totalSavings = totalLapCost - totalCouplerCost;
  const percentSaved = Math.round((totalSavings / totalLapCost) * 100);
  const totalSteelSavedKg = (data.lapWeight * currentJointCount).toFixed(0);

  // Update DOM Elements
  const totalSavingsEl = document.getElementById('totalSavings');
  const percentSavedBadge = document.getElementById('percentSavedBadge');
  const steelWastageCostEl = document.getElementById('steelWastageCost');
  const couplerJointCostEl = document.getElementById('couplerJointCost');
  const steelWeightSavedEl = document.getElementById('steelWeightSaved');
  const lapLengthDisplayEl = document.getElementById('lapLengthDisplay');

  if (totalSavingsEl) {
    // Quick number transition
    totalSavingsEl.textContent = formatRupee(totalSavings);
  }
  if (percentSavedBadge) percentSavedBadge.textContent = `${percentSaved}% Cost Saved`;
  if (steelWastageCostEl) steelWastageCostEl.textContent = formatRupee(totalLapCost);
  if (couplerJointCostEl) couplerJointCostEl.textContent = formatRupee(totalCouplerCost);
  if (steelWeightSavedEl) steelWeightSavedEl.textContent = `${formatNumber(parseInt(totalSteelSavedKg))} kg Steel Saved`;
  if (lapLengthDisplayEl) lapLengthDisplayEl.textContent = `${data.lapLength.toFixed(2)} m (50D)`;
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

      const whatsappText = `Hello ORIN / Steelux Industries,\n\nName: ${name}\nPhone: ${phone}\nRebar Size Required: ${barSize}\nEstimated Quantity: ${quantity}\nProject Details: ${message}`;
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

