/**
 * STEELUX INDUSTRIES (ORIN) - Interactive 3D Step-by-Step Splicing Process Video Engine
 * Animates the complete 3-Stage Process:
 *   Stage 1: Machine Peeling & Roll Threading on TMT Rebar End
 *   Stage 2: Red Protective Plastic Thread Cap Fitting & Removal
 *   Stage 3: Joining 2 TMT Rebars Together with a Mechanical Coupler & Final Lock
 */
(function () {
  'use strict';

  function initProcess3DVideo() {
    const canvas = document.getElementById('process3DVideoCanvas');
    if (!canvas || typeof THREE === 'undefined') return;

    const wrap = canvas.parentElement;
    const stageBadge = document.getElementById('process3DStageBadge');
    const stageTitle = document.getElementById('process3DStageTitle');
    const stageDesc = document.getElementById('process3DStageDesc');
    const stepBtns = document.querySelectorAll('[data-process-step]');

    const scene = new THREE.Scene();
    scene.background = new THREE.Color(0x0b1326);

    const renderer = new THREE.WebGLRenderer({
      canvas: canvas,
      antialias: true,
      powerPreference: 'high-performance'
    });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
    renderer.toneMapping = THREE.ACESFilmicToneMapping;
    renderer.toneMappingExposure = 1.3;

    const camera = new THREE.PerspectiveCamera(36, 16 / 9, 0.1, 100);
    camera.position.set(0, 1.1, 8.8);
    camera.lookAt(0, 0, 0);

    // Lighting
    scene.add(new THREE.AmbientLight(0xdbeafe, 0.9));

    const keyLight = new THREE.DirectionalLight(0xffffff, 2.8);
    keyLight.position.set(5, 8, 7);
    scene.add(keyLight);

    const rimLight = new THREE.DirectionalLight(0x38bdf8, 2.0);
    rimLight.position.set(-7, 4, -5);
    scene.add(rimLight);

    const warmLight = new THREE.DirectionalLight(0xf59e0b, 1.4);
    warmLight.position.set(4, -5, 5);
    scene.add(warmLight);

    // Materials
    const tmtMat = new THREE.MeshStandardMaterial({
      color: 0x334155,
      metalness: 0.82,
      roughness: 0.38
    });

    const threadChromeMat = new THREE.MeshStandardMaterial({
      color: 0xe2e8f0,
      metalness: 0.96,
      roughness: 0.14
    });

    const couplerMat = new THREE.MeshStandardMaterial({
      color: 0x475569,
      metalness: 0.92,
      roughness: 0.22
    });

    const redCapMat = new THREE.MeshStandardMaterial({
      color: 0xdc2626,
      metalness: 0.15,
      roughness: 0.25
    });

    const machineHeadMat = new THREE.MeshStandardMaterial({
      color: 0xea580c,
      metalness: 0.75,
      roughness: 0.28
    });

    const dieRollerMat = new THREE.MeshStandardMaterial({
      color: 0x0284c7,
      metalness: 0.88,
      roughness: 0.2
    });

    const lockGlowMat = new THREE.MeshBasicMaterial({
      color: 0x10b981,
      transparent: true,
      opacity: 0
    });

    // Helper: Create Ribbed TMT Bar with Male Threads
    function buildTMTBar(side) {
      // side = -1 (left bar, threads on +X end), +1 (right bar, threads on -X end)
      const group = new THREE.Group();
      const barR = 0.48;
      const bodyLen = 4.2;
      const threadLen = 1.15;

      // Ribbed body
      const bodyGeo = new THREE.CylinderGeometry(barR, barR, bodyLen, 32);
      bodyGeo.rotateZ(-Math.PI / 2);
      const body = new THREE.Mesh(bodyGeo, tmtMat);
      body.position.x = -side * (threadLen + bodyLen / 2);
      group.add(body);

      // Transverse ribs
      const ribGeo = new THREE.TorusGeometry(barR * 0.99, barR * 0.08, 8, 24);
      ribGeo.rotateY(Math.PI / 2);
      for (let i = 0; i < 16; i++) {
        const rib = new THREE.Mesh(ribGeo, tmtMat);
        rib.position.x = -side * (threadLen + 0.22 + i * 0.24);
        rib.rotation.z = (i % 2 === 0 ? 1 : -1) * 0.38;
        group.add(rib);
      }

      // Threaded core
      const coreR = barR * 0.87;
      const coreGeo = new THREE.CylinderGeometry(coreR, coreR, threadLen, 32);
      coreGeo.rotateZ(-Math.PI / 2);
      const core = new THREE.Mesh(coreGeo, threadChromeMat);
      core.position.x = -side * (threadLen / 2);
      group.add(core);

      // Helical thread rings
      const tGeo = new THREE.TorusGeometry(coreR * 1.01, barR * 0.06, 10, 28);
      tGeo.rotateY(Math.PI / 2);
      const threadMeshes = [];
      for (let t = 0; t < 13; t++) {
        const tm = new THREE.Mesh(tGeo, threadChromeMat);
        tm.position.x = -side * (0.06 + t * 0.082);
        tm.rotation.z = 0.07;
        group.add(tm);
        threadMeshes.push(tm);
      }

      group.userData = { core, threadMeshes };
      return group;
    }

    const leftBar = buildTMTBar(-1);
    const rightBar = buildTMTBar(1);
    scene.add(leftBar);
    scene.add(rightBar);

    // Build Threading Machine Spinning Die Head (for Stage 1)
    const machineHead = new THREE.Group();
    const headChuckGeo = new THREE.CylinderGeometry(1.15, 1.15, 0.9, 32, 1, true);
    headChuckGeo.rotateZ(-Math.PI / 2);
    const headChuck = new THREE.Mesh(headChuckGeo, machineHeadMat);
    machineHead.add(headChuck);

    const headRingGeo = new THREE.RingGeometry(0.62, 1.15, 32);
    headRingGeo.rotateY(-Math.PI / 2);
    const headFrontRing = new THREE.Mesh(headRingGeo, dieRollerMat);
    headFrontRing.position.x = -0.45;
    machineHead.add(headFrontRing);

    // 3 Spinning Threading Rollers inside head
    const rollerGeo = new THREE.CylinderGeometry(0.22, 0.22, 0.75, 20);
    rollerGeo.rotateZ(-Math.PI / 2);
    for (let r = 0; r < 3; r++) {
      const ang = (r / 3) * Math.PI * 2;
      const roller = new THREE.Mesh(rollerGeo, threadChromeMat);
      roller.position.set(-0.2, Math.cos(ang) * 0.72, Math.sin(ang) * 0.72);
      machineHead.add(roller);
    }
    scene.add(machineHead);

    // Build Red Protective Plastic Thread Cap (for Stage 2)
    const redCap = new THREE.Group();
    const capSleeveGeo = new THREE.CylinderGeometry(0.56, 0.56, 1.25, 32);
    capSleeveGeo.rotateZ(-Math.PI / 2);
    const capSleeve = new THREE.Mesh(capSleeveGeo, redCapMat);
    redCap.add(capSleeve);

    const capRimGeo = new THREE.CylinderGeometry(0.61, 0.61, 0.14, 32);
    capRimGeo.rotateZ(-Math.PI / 2);
    const capRim = new THREE.Mesh(capRimGeo, redCapMat);
    capRim.position.x = 0.58;
    redCap.add(capRim);
    scene.add(redCap);

    // Build Steelux Mechanical Coupler (for Stage 3)
    const coupler = new THREE.Group();
    const cLen = 2.3;
    const cOuterGeo = new THREE.CylinderGeometry(0.74, 0.74, cLen, 40);
    cOuterGeo.rotateZ(-Math.PI / 2);
    const cOuter = new THREE.Mesh(cOuterGeo, couplerMat);
    coupler.add(cOuter);

    // Chrome bands on coupler
    [-0.85, 0, 0.85].forEach((bx) => {
      const bGeo = new THREE.CylinderGeometry(0.75, 0.75, 0.06, 40);
      bGeo.rotateZ(-Math.PI / 2);
      const bMesh = new THREE.Mesh(bGeo, threadChromeMat);
      bMesh.position.x = bx;
      coupler.add(bMesh);
    });

    // Lock glow ring
    const glowGeo = new THREE.TorusGeometry(0.78, 0.035, 12, 40);
    glowGeo.rotateY(Math.PI / 2);
    const glowRing = new THREE.Mesh(glowGeo, lockGlowMat);
    coupler.add(glowRing);
    scene.add(coupler);

    // Stage metadata
    const stages = [
      {
        badge: 'STAGE 01 • MACHINE THREADING',
        title: '1. Rebar End Threading on Machine (સળિયામાં આંટા પાડવા)',
        desc: 'Spinning hydraulic threading head peels surface ribs and rolls ISO metric threads onto the TMT steel bar end.'
      },
      {
        badge: 'STAGE 02 • PROTECTIVE CAPPING',
        title: '2. Protective Plastic End Cap (આંટા પાડીને કેપ પહેરાવવી)',
        desc: 'Red plastic protective cap is fitted immediately over the machined threads to prevent dust, rust, or thread damage.'
      },
      {
        badge: 'STAGE 03 • 2-BAR COUPLER SPLICING',
        title: '3. Joining 2 Rebars with Coupler (કપલરથી ૨ સળિયા જોડવા)',
        desc: 'Cap is removed, coupler screws onto the first rebar, and the second TMT rebar screws in to lock both bars at 100% strength.'
      }
    ];

    let forcedStep = null; // null = auto cycle through 0, 1, 2
    let activeStageIdx = -1;

    stepBtns.forEach((btn) => {
      btn.addEventListener('click', () => {
        const val = btn.getAttribute('data-process-step');
        stepBtns.forEach((b) => b.classList.remove('active'));
        btn.classList.add('active');
        forcedStep = val === 'auto' ? null : parseInt(val, 10);
      });
    });

    function updateStageUI(idx) {
      if (idx === activeStageIdx) return;
      activeStageIdx = idx;
      const st = stages[idx];
      if (stageBadge) stageBadge.textContent = st.badge;
      if (stageTitle) stageTitle.textContent = st.title;
      if (stageDesc) stageDesc.textContent = st.desc;
    }

    function resize() {
      const w = wrap.clientWidth || 640;
      const h = wrap.clientHeight || 360;
      renderer.setSize(w, h, false);
      camera.aspect = w / Math.max(1, h);
      camera.position.z = camera.aspect < 1.1 ? 11.2 : 8.6;
      camera.updateProjectionMatrix();
    }
    resize();
    window.addEventListener('resize', resize, { passive: true });

    const clock = new THREE.Clock();

    function animate() {
      requestAnimationFrame(animate);
      const elapsed = clock.getElapsedTime();

      // Each stage takes 5 seconds (15 sec total cycle)
      const stageDuration = 5.0;
      const stageIdx = forcedStep !== null ? forcedStep : Math.floor((elapsed / stageDuration) % 3);
      const p = (elapsed % stageDuration) / stageDuration; // 0.0 -> 1.0 within current stage

      updateStageUI(stageIdx);

      if (stageIdx === 0) {
        // STAGE 1: Machine Threading on Left Bar
        leftBar.visible = true;
        rightBar.visible = false;
        machineHead.visible = true;
        redCap.visible = false;
        coupler.visible = false;

        leftBar.position.set(-0.6, 0, 0);
        leftBar.rotation.x = 0;

        // Machine head feeds in from right, spins fast, then retracts
        const feed = Math.sin(p * Math.PI); // 0 -> 1 -> 0
        machineHead.position.set(1.3 - feed * 1.45, 0, 0);
        machineHead.rotation.x = elapsed * 10.0;

        // Reveal threads progressively as head cuts
        leftBar.userData.threadMeshes.forEach((tm, i) => {
          tm.visible = p > 0.15 + (i / 13) * 0.45;
        });
      } else if (stageIdx === 1) {
        // STAGE 2: Placing Red Protective Cap on Threaded Rebar
        leftBar.visible = true;
        rightBar.visible = false;
        machineHead.visible = false;
        redCap.visible = true;
        coupler.visible = false;

        leftBar.position.set(-0.6, 0, 0);
        leftBar.userData.threadMeshes.forEach((tm) => { tm.visible = true; });

        // Cap slides onto the threads and pauses
        const capSlide = Math.min(1, p * 1.8);
        const eased = capSlide * capSlide * (3 - 2 * capSlide);
        redCap.position.set(1.4 - eased * 2.55, 0, 0);
        redCap.rotation.x = (1 - eased) * 4.0;
      } else {
        // STAGE 3: Joining 2 Rebars with Steelux Coupler
        leftBar.visible = true;
        rightBar.visible = true;
        machineHead.visible = false;
        redCap.visible = false;
        coupler.visible = true;

        leftBar.userData.threadMeshes.forEach((tm) => { tm.visible = true; });

        // Smoothly bring both bars + rotating coupler together
        const joinProgress = Math.min(1, p * 1.5);
        const eased = joinProgress * joinProgress * (3 - 2 * joinProgress);

        leftBar.position.set(-0.9 + eased * 0.85, 0, 0);
        rightBar.position.set(1.6 - eased * 1.55, 0, 0);
        rightBar.rotation.x = (1 - eased) * 8.0;

        coupler.position.set(0, 0, 0);
        coupler.rotation.x = (1 - eased) * 6.0 + elapsed * 0.6;
        lockGlowMat.opacity = eased > 0.92 ? 0.85 : 0.0;
      }

      renderer.render(scene, camera);
    }

    animate();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initProcess3DVideo);
  } else {
    initProcess3DVideo();
  }
})();

