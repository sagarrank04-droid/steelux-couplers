/**
 * ORIN / STEELUX INDUSTRIES - 3D Mechanical Rebar Coupler Hero Video Background
 * Renders photorealistic CNC-machined steel mechanical couplers rotating in 360°
 * and splicing ribbed TMT steel rebars. Automatically adapts camera & layout
 * for Mobile (portrait), Tablet, and Laptop/Desktop (landscape) screens.
 */

(function () {
  'use strict';

  function initCouplerHeroVideo() {
    const container = document.getElementById('heroCouplerVideoWrap');
    if (!container || typeof THREE === 'undefined') return;

    const canvas = document.getElementById('heroCouplerCanvas');
    if (!canvas) return;

    // 1. Scene & Renderer Setup
    const scene = new THREE.Scene();

    const renderer = new THREE.WebGLRenderer({
      canvas: canvas,
      antialias: true,
      alpha: true,
      powerPreference: 'high-performance'
    });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
    renderer.toneMapping = THREE.ACESFilmicToneMapping;
    renderer.toneMappingExposure = 1.25;
    if ('outputColorSpace' in renderer) {
      renderer.outputColorSpace = THREE.SRGBColorSpace;
    } else if ('outputEncoding' in renderer) {
      renderer.outputEncoding = THREE.sRGBEncoding;
    }

    const camera = new THREE.PerspectiveCamera(42, 16 / 9, 0.1, 100);
    camera.position.set(0, 0.4, 11);

    // 2. Procedural CNC Lathe Brushed Metal Texture (Bump & Roughness)
    function createCNCBrushedTexture() {
      const texCanvas = document.createElement('canvas');
      texCanvas.width = 512;
      texCanvas.height = 512;
      const ctx = texCanvas.getContext('2d');

      ctx.fillStyle = '#808080';
      ctx.fillRect(0, 0, 512, 512);

      // Fine circumferential CNC turning grooves
      for (let y = 0; y < 512; y++) {
        const wave = Math.sin(y * 0.65) * 18 + Math.sin(y * 2.3) * 8;
        const noise = (Math.random() - 0.5) * 16;
        const val = Math.max(0, Math.min(255, Math.round(128 + wave + noise)));
        ctx.fillStyle = `rgb(${val},${val},${val})`;
        ctx.fillRect(0, y, 512, 1);
      }

      const texture = new THREE.CanvasTexture(texCanvas);
      texture.wrapS = THREE.RepeatWrapping;
      texture.wrapT = THREE.RepeatWrapping;
      texture.repeat.set(2, 4);
      return texture;
    }

    const cncBumpMap = createCNCBrushedTexture();

    // 3. Procedural Studio Environment Map for Photorealistic Metallic Reflections
    function createStudioEnvironment(rendererInstance) {
      const pmremGenerator = new THREE.PMREMGenerator(rendererInstance);
      pmremGenerator.compileEquirectangularShader();

      const envScene = new THREE.Scene();
      envScene.background = new THREE.Color(0x070d19);

      const sphereGeo = new THREE.SphereGeometry(20, 32, 24);

      // Overhead bright studio softbox strip
      const topStrip = new THREE.Mesh(
        new THREE.PlaneGeometry(30, 8),
        new THREE.MeshBasicMaterial({ color: 0xffffff, side: THREE.DoubleSide })
      );
      topStrip.position.set(0, 14, 4);
      topStrip.rotation.x = Math.PI / 2;
      envScene.add(topStrip);

      // Cool Engineering Cyan Rim Reflection Strip
      const cyanStrip = new THREE.Mesh(
        new THREE.PlaneGeometry(28, 6),
        new THREE.MeshBasicMaterial({ color: 0x38bdf8, side: THREE.DoubleSide })
      );
      cyanStrip.position.set(-12, 6, 8);
      cyanStrip.lookAt(0, 0, 0);
      envScene.add(cyanStrip);

      // Warm Industrial Amber / Crimson Side Accent Strip
      const warmStrip = new THREE.Mesh(
        new THREE.PlaneGeometry(24, 5),
        new THREE.MeshBasicMaterial({ color: 0xf59e0b, side: THREE.DoubleSide })
      );
      warmStrip.position.set(13, -5, 6);
      warmStrip.lookAt(0, 0, 0);
      envScene.add(warmStrip);

      // Front Fill Soft Reflection
      const frontStrip = new THREE.Mesh(
        new THREE.PlaneGeometry(22, 4),
        new THREE.MeshBasicMaterial({ color: 0xe2e8f0, side: THREE.DoubleSide })
      );
      frontStrip.position.set(0, -3, 15);
      frontStrip.lookAt(0, 0, 0);
      envScene.add(frontStrip);

      const envRT = pmremGenerator.fromScene(envScene, 0.035);
      pmremGenerator.dispose();
      sphereGeo.dispose();
      return envRT.texture;
    }

    const envTexture = createStudioEnvironment(renderer);
    scene.environment = envTexture;

    // 4. Studio Lighting
    const ambientLight = new THREE.AmbientLight(0xdbeafe, 0.75);
    scene.add(ambientLight);

    const keyLight = new THREE.DirectionalLight(0xffffff, 2.6);
    keyLight.position.set(6, 9, 8);
    scene.add(keyLight);

    const cyanRimLight = new THREE.DirectionalLight(0x38bdf8, 2.0);
    cyanRimLight.position.set(-8, 5, -4);
    scene.add(cyanRimLight);

    const bottomFillLight = new THREE.DirectionalLight(0x94a3b8, 1.2);
    bottomFillLight.position.set(2, -7, 6);
    scene.add(bottomFillLight);

    const pointGlow = new THREE.PointLight(0x0284c7, 2.2, 14);
    pointGlow.position.set(0, 0.5, 3);
    scene.add(pointGlow);

    // 5. Industrial Steel Materials
    // Dark gunmetal forged outer coupler sleeve (matches ORIN brochure couplers)
    const couplerBodyMat = new THREE.MeshStandardMaterial({
      color: 0x475569,
      metalness: 0.92,
      roughness: 0.23,
      bumpMap: cncBumpMap,
      bumpScale: 0.012,
      envMapIntensity: 1.65
    });

    // Bright machined chrome/silver steel for chamfers, grooves & machined threads
    const machinedChromeMat = new THREE.MeshStandardMaterial({
      color: 0xe2e8f0,
      metalness: 0.96,
      roughness: 0.14,
      bumpMap: cncBumpMap,
      bumpScale: 0.006,
      envMapIntensity: 2.0
    });

    // Internal dark threaded bore contrast material
    const innerThreadMat = new THREE.MeshStandardMaterial({
      color: 0x94a3b8,
      metalness: 0.92,
      roughness: 0.22,
      envMapIntensity: 1.5
    });

    // Ribbed TMT Steel Rebar Material
    const tmtBarMat = new THREE.MeshStandardMaterial({
      color: 0x334155,
      metalness: 0.85,
      roughness: 0.36,
      bumpMap: cncBumpMap,
      bumpScale: 0.015,
      envMapIntensity: 1.35
    });

    // Glowing Engineering Precision Ring Material
    const accentGlowMat = new THREE.MeshBasicMaterial({
      color: 0x38bdf8,
      transparent: true,
      opacity: 0.75
    });

    // 6. Builder: Detailed 3D Mechanical Rebar Coupler (Hollow Cylinder + Chamfers + Grooves + Internal Threads)
    function createMechanicalCouplerMesh(outerRadius, innerRadius, length, threadCount) {
      const couplerGroup = new THREE.Group();
      const halfL = length / 2;
      const chamfer = Math.min(0.11, length * 0.045);

      // A) Lathe Profile for Thick-Walled Hollow Coupler Cylinder
      const points = [];
      // Start at inner bore bottom, go up inner bore, chamfer to outer wall, add CNC grip grooves, back to bottom
      points.push(new THREE.Vector2(innerRadius, -halfL + chamfer * 0.6));
      points.push(new THREE.Vector2(innerRadius, halfL - chamfer * 0.6));
      points.push(new THREE.Vector2(innerRadius + chamfer * 0.7, halfL));
      points.push(new THREE.Vector2(outerRadius - chamfer, halfL));
      points.push(new THREE.Vector2(outerRadius, halfL - chamfer));

      // Top CNC grip groove
      const g1 = halfL - length * 0.16;
      points.push(new THREE.Vector2(outerRadius, g1 + 0.035));
      points.push(new THREE.Vector2(outerRadius * 0.965, g1));
      points.push(new THREE.Vector2(outerRadius, g1 - 0.035));

      // Center stop-indicator groove
      points.push(new THREE.Vector2(outerRadius, 0.04));
      points.push(new THREE.Vector2(outerRadius * 0.96, 0));
      points.push(new THREE.Vector2(outerRadius, -0.04));

      // Bottom CNC grip groove
      const g2 = -halfL + length * 0.16;
      points.push(new THREE.Vector2(outerRadius, g2 + 0.035));
      points.push(new THREE.Vector2(outerRadius * 0.965, g2));
      points.push(new THREE.Vector2(outerRadius, g2 - 0.035));

      points.push(new THREE.Vector2(outerRadius, -halfL + chamfer));
      points.push(new THREE.Vector2(outerRadius - chamfer, -halfL));
      points.push(new THREE.Vector2(innerRadius + chamfer * 0.7, -halfL));
      points.push(new THREE.Vector2(innerRadius, -halfL + chamfer * 0.6));

      const latheGeo = new THREE.LatheGeometry(points, 64);
      // Orient along X axis by default for easy axial rotation
      latheGeo.rotateZ(-Math.PI / 2);
      const sleeveMesh = new THREE.Mesh(latheGeo, couplerBodyMat);
      couplerGroup.add(sleeveMesh);

      // B) Polished Silver-Chrome Chamfer Rings & Machined Bands (catch specular highlights)
      const bandPositions = [
        -halfL + length * 0.16,
        0,
        halfL - length * 0.16
      ];
      bandPositions.forEach((xPos, idx) => {
        const bandGeo = new THREE.CylinderGeometry(
          outerRadius * 1.002,
          outerRadius * 1.002,
          idx === 1 ? 0.055 : 0.045,
          48,
          1,
          true
        );
        bandGeo.rotateZ(-Math.PI / 2);
        const bandMesh = new THREE.Mesh(bandGeo, machinedChromeMat);
        bandMesh.position.x = xPos;
        couplerGroup.add(bandMesh);
      });

      // End face polished chrome bevel rings
      [-halfL + chamfer * 0.5, halfL - chamfer * 0.5].forEach((xEnd, i) => {
        const endRingGeo = new THREE.RingGeometry(innerRadius, outerRadius * 0.98, 48);
        endRingGeo.rotateY(i === 0 ? -Math.PI / 2 : Math.PI / 2);
        const endRingMesh = new THREE.Mesh(endRingGeo, machinedChromeMat);
        endRingMesh.position.x = i === 0 ? -halfL - 0.002 : halfL + 0.002;
        couplerGroup.add(endRingMesh);
      });

      // C) Longitudinal Machined Reference Flats / Knurl Notches around circumference
      // Gives unmistakable visual rotation feedback when spinning around its axis
      const notchCount = 8;
      const notchGeo = new THREE.BoxGeometry(length * 0.62, 0.035, 0.065);
      for (let n = 0; n < notchCount; n++) {
        const angle = (n / notchCount) * Math.PI * 2;
        const notch = new THREE.Mesh(notchGeo, machinedChromeMat);
        notch.position.set(
          0,
          Math.cos(angle) * (outerRadius - 0.005),
          Math.sin(angle) * (outerRadius - 0.005)
        );
        notch.rotation.x = -angle;
        couplerGroup.add(notch);
      }

      // D) Internal ISO Metric Helical Thread Rings inside the coupler bore
      const tCount = threadCount || 18;
      const threadDepth = (outerRadius - innerRadius) * 0.22;
      const threadTorusGeo = new THREE.TorusGeometry(innerRadius + threadDepth * 0.2, threadDepth, 12, 40);
      threadTorusGeo.rotateY(Math.PI / 2);

      for (let i = 0; i < tCount; i++) {
        const tFrac = (i / (tCount - 1)) - 0.5;
        const tMesh = new THREE.Mesh(threadTorusGeo, innerThreadMat);
        tMesh.position.x = tFrac * (length * 0.86);
        // Slight helical tilt to mimic real ISO pitch
        tMesh.rotation.z = 0.065;
        couplerGroup.add(tMesh);
      }

      return couplerGroup;
    }

    // 7. Builder: Ribbed TMT Steel Rebar with Precision Peeled & Rolled Male Threads
    function createThreadedTMTRebar(barRadius, totalLength, threadLength, side) {
      // side: -1 for left bar (threads on +X end), +1 for right bar (threads on -X end)
      const barGroup = new THREE.Group();
      const bodyLength = totalLength - threadLength;

      // A) Main Dark Forged TMT Bar Cylinder
      const bodyGeo = new THREE.CylinderGeometry(barRadius, barRadius, bodyLength, 36);
      bodyGeo.rotateZ(-Math.PI / 2);
      const bodyMesh = new THREE.Mesh(bodyGeo, tmtBarMat);
      const bodyCenterOffset = -side * (threadLength + bodyLength / 2);
      bodyMesh.position.x = bodyCenterOffset;
      barGroup.add(bodyMesh);

      // B) Longitudinal TMT Ribs (top & bottom along bar length)
      const longRibGeo = new THREE.BoxGeometry(bodyLength * 0.98, barRadius * 0.16, barRadius * 0.14);
      [1, -1].forEach((dir) => {
        const longRib = new THREE.Mesh(longRibGeo, tmtBarMat);
        longRib.position.set(bodyCenterOffset, dir * (barRadius * 0.98), 0);
        barGroup.add(longRib);
      });

      // C) Transverse Angled TMT Ribs (herringbone/crescent ribs)
      const ribStep = 0.22;
      const ribCount = Math.floor((bodyLength * 0.92) / ribStep);
      const ribTorusGeo = new THREE.TorusGeometry(barRadius * 0.99, barRadius * 0.085, 10, 28);
      ribTorusGeo.rotateY(Math.PI / 2);

      for (let i = 0; i < ribCount; i++) {
        const xPos = bodyCenterOffset + ((i / Math.max(1, ribCount - 1)) - 0.5) * (bodyLength * 0.9);
        const rib = new THREE.Mesh(ribTorusGeo, tmtBarMat);
        rib.position.x = xPos;
        rib.rotation.z = (i % 2 === 0 ? 1 : -1) * 0.42;
        barGroup.add(rib);
      }

      // D) Machined Transition Shoulder (Peeled Rib Zone)
      const shoulderGeo = new THREE.CylinderGeometry(barRadius * 0.93, barRadius * 1.01, 0.14, 36);
      shoulderGeo.rotateZ(side === -1 ? -Math.PI / 2 : Math.PI / 2);
      const shoulderMesh = new THREE.Mesh(shoulderGeo, machinedChromeMat);
      shoulderMesh.position.x = -side * threadLength;
      barGroup.add(shoulderMesh);

      // E) Peeled & Rolled ISO Parallel Male Thread Core
      const threadCoreRadius = barRadius * 0.88;
      const threadCoreGeo = new THREE.CylinderGeometry(threadCoreRadius, threadCoreRadius, threadLength, 36);
      threadCoreGeo.rotateZ(-Math.PI / 2);
      const threadCoreMesh = new THREE.Mesh(threadCoreGeo, machinedChromeMat);
      const threadCenterOffset = -side * (threadLength / 2);
      threadCoreMesh.position.x = threadCenterOffset;
      barGroup.add(threadCoreMesh);

      // Chamfered tip at the end of the threaded bar
      const tipGeo = new THREE.CylinderGeometry(threadCoreRadius * 0.78, threadCoreRadius, 0.08, 36);
      tipGeo.rotateZ(side === -1 ? -Math.PI / 2 : Math.PI / 2);
      const tipMesh = new THREE.Mesh(tipGeo, machinedChromeMat);
      tipMesh.position.x = 0;
      barGroup.add(tipMesh);

      // F) Helical Male Screw Thread Ridges on the Peeled End
      const pitch = 0.095;
      const maleThreads = Math.floor((threadLength * 0.92) / pitch);
      const maleRidgeGeo = new THREE.TorusGeometry(threadCoreRadius * 1.01, barRadius * 0.068, 12, 36);
      maleRidgeGeo.rotateY(Math.PI / 2);

      for (let t = 0; t < maleThreads; t++) {
        const xPos = -side * (0.06 + t * pitch);
        const ridge = new THREE.Mesh(maleRidgeGeo, machinedChromeMat);
        ridge.position.x = xPos;
        ridge.rotation.z = 0.07;
        barGroup.add(ridge);
      }

      return barGroup;
    }

    // ============================================================================
    // 8. ASSEMBLE MAIN HERO SPLICING & ROTATING MECHANICAL COUPLER SYSTEM
    // ============================================================================
    const mainSystemGroup = new THREE.Group();
    scene.add(mainSystemGroup);

    // Central Heavy-Duty ORIN Parallel Threaded Coupler
    const mainCouplerOuterR = 0.88;
    const mainCouplerInnerR = 0.61;
    const mainCouplerLength = 2.65;
    const mainCoupler = createMechanicalCouplerMesh(
      mainCouplerOuterR,
      mainCouplerInnerR,
      mainCouplerLength,
      20
    );
    mainSystemGroup.add(mainCoupler);

    // Subtle Precision Alignment Glow Rings at Coupler Ends
    const glowRingGeo = new THREE.TorusGeometry(mainCouplerOuterR * 0.99, 0.018, 12, 48);
    glowRingGeo.rotateY(Math.PI / 2);
    const leftGlowRing = new THREE.Mesh(glowRingGeo, accentGlowMat);
    leftGlowRing.position.x = -mainCouplerLength / 2;
    mainCoupler.add(leftGlowRing);

    const rightGlowRing = new THREE.Mesh(glowRingGeo, accentGlowMat);
    rightGlowRing.position.x = mainCouplerLength / 2;
    mainCoupler.add(rightGlowRing);

    // Left & Right Threaded TMT Rebars that splice into the Central Coupler
    const rebarRadius = 0.62;
    const rebarTotalLen = 5.8;
    const rebarThreadLen = 1.32;

    const leftRebar = createThreadedTMTRebar(rebarRadius, rebarTotalLen, rebarThreadLen, -1);
    const rightRebar = createThreadedTMTRebar(rebarRadius, rebarTotalLen, rebarThreadLen, 1);
    mainSystemGroup.add(leftRebar);
    mainSystemGroup.add(rightRebar);

    // ============================================================================
    // 9. SURROUNDING FLOATING 360°-ROTATING MECHANICAL COUPLERS (16mm - 40mm Showcase)
    // Shows the hollow threaded interior & CNC-machined cylindrical exterior from all angles
    // ============================================================================
    const floatingCouplersGroup = new THREE.Group();
    scene.add(floatingCouplersGroup);

    const floatingSpecs = [
      // Left upper: Large 40mm coupler tilted to show internal threads clearly
      { outerR: 0.72, innerR: 0.48, len: 2.0, rotSpeed: [0.011, 0.014, 0.006], initRot: [0.6, 0.8, 0.3] },
      // Right upper: Medium-Large 32mm coupler rotating smoothly
      { outerR: 0.64, innerR: 0.43, len: 1.75, rotSpeed: [-0.013, 0.010, -0.008], initRot: [1.1, -0.5, 0.4] },
      // Left lower: 25mm coupler showing isometric bore & threads
      { outerR: 0.56, innerR: 0.37, len: 1.55, rotSpeed: [0.009, -0.015, 0.007], initRot: [-0.5, 1.2, -0.4] },
      // Right lower: 20mm coupler tumbling in 3D
      { outerR: 0.50, innerR: 0.33, len: 1.38, rotSpeed: [-0.012, -0.011, 0.010], initRot: [0.8, 0.9, -0.6] }
    ];

    const floatingItems = floatingSpecs.map((spec) => {
      const mesh = createMechanicalCouplerMesh(spec.outerR, spec.innerR, spec.len, 14);
      mesh.rotation.set(spec.initRot[0], spec.initRot[1], spec.initRot[2]);
      floatingCouplersGroup.add(mesh);
      return { mesh, spec };
    });

    // ============================================================================
    // 10. RESPONSIVE MULTI-DEVICE LAYOUT (Mobile Portrait, Tablet & Desktop Landscape)
    // Ensures the rotating coupler video background looks balanced on ALL screens
    // ============================================================================
    function updateResponsiveSceneLayout() {
      const width = container.clientWidth || window.innerWidth;
      const height = container.clientHeight || window.innerHeight;
      const aspect = width / Math.max(1, height);

      renderer.setSize(width, height, false);
      camera.aspect = aspect;

      if (aspect < 0.78) {
        // MOBILE PORTRAIT (Phones)
        camera.fov = 50;
        camera.position.set(0, 0.15, 13.8);

        // Scale & angle main coupler+rebar assembly diagonally so both rebars + coupler fit on phone screen
        mainSystemGroup.scale.setScalar(0.76);
        mainSystemGroup.position.set(0, 0.25, -0.4);
        mainSystemGroup.userData.baseTiltZ = 0.42; // ~24 deg diagonal across mobile screen
        mainSystemGroup.userData.baseTiltY = 0.26;

        // Position floating 360-rotating couplers in top/bottom corners of mobile screen
        const mobilePositions = [
          [-2.05, 4.15, -1.8],
          [2.05, 3.85, -2.1],
          [-2.0, -3.75, -1.6],
          [2.05, -4.05, -2.0]
        ];
        floatingItems.forEach((item, idx) => {
          item.mesh.scale.setScalar(0.68);
          const p = mobilePositions[idx];
          item.mesh.userData.basePos = new THREE.Vector3(p[0], p[1], p[2]);
        });
      } else if (aspect < 1.25) {
        // TABLET / SMALL LAPTOP
        camera.fov = 45;
        camera.position.set(0, 0.2, 11.8);

        mainSystemGroup.scale.setScalar(0.88);
        mainSystemGroup.position.set(0, 0.2, 0);
        mainSystemGroup.userData.baseTiltZ = 0.26;
        mainSystemGroup.userData.baseTiltY = 0.24;

        const tabletPositions = [
          [-4.2, 2.7, -1.8],
          [4.3, 2.5, -2.0],
          [-4.0, -2.4, -1.5],
          [4.2, -2.6, -1.8]
        ];
        floatingItems.forEach((item, idx) => {
          item.mesh.scale.setScalar(0.82);
          const p = tabletPositions[idx];
          item.mesh.userData.basePos = new THREE.Vector3(p[0], p[1], p[2]);
        });
      } else {
        // DESKTOP / LAPTOP WIDESCREEN
        camera.fov = 40;
        camera.position.set(0, 0.2, 10.4);

        mainSystemGroup.scale.setScalar(1.02);
        mainSystemGroup.position.set(0, 0.22, 0);
        mainSystemGroup.userData.baseTiltZ = 0.21; // ~12 deg dynamic industrial angle
        mainSystemGroup.userData.baseTiltY = 0.25;

        const desktopPositions = [
          [-6.2, 2.35, -1.6],
          [6.3, 2.15, -1.9],
          [-5.8, -2.15, -1.2],
          [6.1, -2.3, -1.6]
        ];
        floatingItems.forEach((item, idx) => {
          item.mesh.scale.setScalar(0.95);
          const p = desktopPositions[idx];
          item.mesh.userData.basePos = new THREE.Vector3(p[0], p[1], p[2]);
        });
      }

      camera.updateProjectionMatrix();
    }

    updateResponsiveSceneLayout();
    window.addEventListener('resize', updateResponsiveSceneLayout, { passive: true });

    // Optional: Connect canvas stream to <video id="heroBgVideo"> so it acts as a live HTML5 video
    const videoEl = document.getElementById('heroBgVideo');
    if (videoEl && typeof canvas.captureStream === 'function') {
      try {
        const stream = canvas.captureStream(30);
        videoEl.srcObject = stream;
        videoEl.play().catch(() => {});
      } catch (err) {
        // Fallback: canvas itself is directly visible
      }
    }

    // ============================================================================
    // 11. ANIMATION LOOP (60fps Smooth Rotation + Mechanical Splicing Action)
    // ============================================================================
    const clock = new THREE.Clock();

    function animate() {
      requestAnimationFrame(animate);

      const t = clock.getElapsedTime();

      // A) Continuous 360° Axial Rotation of the Central Mechanical Coupler
      mainCoupler.rotation.x = t * 1.65;

      // B) Smooth Cyclic Mechanical Splicing Motion (Rebars threading in & locking tightly)
      // Cycle waves smoothly between slightly separated (showing threads clearly) and fully spliced
      const spliceCycle = (Math.sin(t * 0.85) + 1) * 0.5; // 0.0 -> 1.0
      // Smoothstep easing so it pauses briefly when locked and when open
      const easedSplice = spliceCycle * spliceCycle * (3 - 2 * spliceCycle);
      const barSeparation = 0.06 + easedSplice * 0.92; // 0.06 (locked inside coupler) to 0.98 (showing male threads)

      leftRebar.position.x = -barSeparation;
      rightRebar.position.x = barSeparation;

      // Counter-rotate rebars subtly as they thread into the rotating coupler
      leftRebar.rotation.x = -t * 0.45;
      rightRebar.rotation.x = -t * 0.45;

      // Pulse the precision cyan alignment rings brightest when locked tightly
      const lockIntensity = 1.0 - easedSplice;
      accentGlowMat.opacity = 0.35 + lockIntensity * 0.6;

      // C) Gentle 3D Orbital Sway of the Main Assembly so viewers see both side profile & threaded bore
      const baseTiltZ = mainSystemGroup.userData.baseTiltZ || 0.22;
      const baseTiltY = mainSystemGroup.userData.baseTiltY || 0.25;
      mainSystemGroup.rotation.z = baseTiltZ + Math.sin(t * 0.4) * 0.04;
      mainSystemGroup.rotation.y = baseTiltY + Math.sin(t * 0.32) * 0.24;
      mainSystemGroup.rotation.x = Math.cos(t * 0.28) * 0.12;

      // D) Rotate & Float the 4 Surrounding Mechanical Couplers in 3D Space
      floatingItems.forEach((item, idx) => {
        const { mesh, spec } = item;
        mesh.rotation.x += spec.rotSpeed[0];
        mesh.rotation.y += spec.rotSpeed[1];
        mesh.rotation.z += spec.rotSpeed[2];

        if (mesh.userData.basePos) {
          mesh.position.x = mesh.userData.basePos.x + Math.sin(t * 0.6 + idx * 1.5) * 0.12;
          mesh.position.y = mesh.userData.basePos.y + Math.cos(t * 0.75 + idx * 1.2) * 0.18;
          mesh.position.z = mesh.userData.basePos.z;
        }
      });

      renderer.render(scene, camera);
    }

    animate();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCouplerHeroVideo);
  } else {
    initCouplerHeroVideo();
  }
})();

