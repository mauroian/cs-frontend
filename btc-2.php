<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>BT Chart</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            background: white;
            color: #ddd;
            font-family: arial;
        }

        /* Full-height stage with a small left margin; content is vertically centered */
        /** Tiis is the image container **/
        .stage {
            margin-top: 35px; /** distance from the watermark element **/
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center; /* vertical centering */
            padding-left: 24px; /* small left margin */
            box-sizing: border-box;
        }

        /* Disclaimer style */
        .disclaimer {
            background: white;
            padding: 4px 8px;
            width: 100%;
            text-align: center;
            position: fixed;
            top: 0px;
            left: 49%;
            transform: translateX(-50%);
            font-size: 20px;
            color: black;
            pointer-events: none;
            user-select: none;
            z-index: 10;
        }

        /* Wrapper to catch wheel/touch; prevents page scroll while zooming/panning */
        .pz-wrapper {
            position: relative;
            width: calc(100vw - 24px);
            height: 100%;
            touch-action: none; /* enable pinch-zoom/pan gestures */
            -webkit-user-select: none;
            user-select: none;
        }

        /* Image is transformed by Panzoom; disable intrinsic scaling constraints */
        #btcImage {
            display: block;
            max-width: none; /* allow scaling beyond natural constraints */
            will-change: transform;
            cursor: default !important; /* show pointer cursor when hovering */
            -webkit-user-drag: none;
            user-drag: none;
            pointer-events: auto;
            touch-action: none; /* ensure pinch and pan work directly on the image */
        }


        #btcImage:active {
            cursor: default; /* keep pointer cursor while dragging */
        }


    </style>
</head>
<body>
<div class="disclaimer">Jeff Cavins | Ascension Press</div>
<div class="stage">
    <div class="pz-wrapper" id="pzWrapper">
        <img src="btc.jpg" id="btcImage" alt="BTC"/>
    </div>
</div>

<!-- Panzoom -->
<script src="https://unpkg.com/@panzoom/panzoom@4.6.0/dist/panzoom.min.js"></script>
<script>
  (function () {
    const MARGIN_LEFT = 24; // matches CSS padding-left
    const DEFAULT_WIDTH_RATIO = 0.75; // 75% of viewport width
    const H_PAN_SPEED = 1.5; // Shift+wheel horizontal pan speed multiplier
    const MIN_SCALE = 0.1;
    const MAX_SCALE = 12;
    const WHEEL_ZOOM_SENSITIVITY = 0.0015; // smaller = slower zoom; tuned for precision

    const wrapper = document.getElementById('pzWrapper');
    const img = document.getElementById('btcImage');

    // Init Panzoom on the image element
    const panzoom = Panzoom(img, {
      maxScale: MAX_SCALE,
      minScale: MIN_SCALE,
      // contain: 'outside' // optional; free panning feels better for large maps
    });

    // Helper to apply transform safely across Panzoom versions
    function applyTransform(x, y, scale) {
      if (typeof panzoom.setTransform === 'function') {
        panzoom.setTransform({x, y, scale});
      } else {
        // Fallback: set zoom first, then pan
        if (typeof panzoom.zoom === 'function') panzoom.zoom(scale, {animate: false});
        if (typeof panzoom.pan === 'function') panzoom.pan(x, y, {animate: false});
      }
    }

    // Zoom with mouse wheel; Shift+wheel pans horizontally instead
    wrapper.addEventListener('wheel', function (e) {
      // Allow horizontal scroll with Shift+wheel to pan
      if (e.shiftKey) {
        e.preventDefault();
        const pan = typeof panzoom.getPan === 'function' ? panzoom.getPan() : {x: 0, y: 0};
        const scale = typeof panzoom.getScale === 'function' ? panzoom.getScale() : 1;
        // Prefer deltaY when present; fall back to deltaX
        const raw = Math.abs(e.deltaY) > 0 ? e.deltaY : e.deltaX;
        const dx = -raw * H_PAN_SPEED; // invert so scrolling down moves content right-to-left naturally
        applyTransform(pan.x + dx, pan.y, scale);
        return;
      }
      // Precise wheel zoom centered at cursor to avoid drift
      e.preventDefault();
      const currentScale = typeof panzoom.getScale === 'function' ? panzoom.getScale() : 1;
      // Use an exponential to make zoom speed proportional and smooth
      const nextScaleUnclamped = currentScale * Math.exp(-e.deltaY * WHEEL_ZOOM_SENSITIVITY);
      const nextScale = Math.max(MIN_SCALE, Math.min(MAX_SCALE, nextScaleUnclamped));
      if (typeof panzoom.zoomToPoint === 'function') {
        panzoom.zoomToPoint(nextScale, e);
      } else if (typeof panzoom.zoom === 'function') {
        panzoom.zoom(nextScale, {animate: false});
      }
    }, {passive: false});

    // Enable panning via drag (mouse/touch) on the image
    // Panzoom already wires pointerdown/move on the target element.

    // Compute initial transform once the image is loaded
    function setInitialView() {
      const vw = window.innerWidth;
      const vh = window.innerHeight;

      const naturalWidth = img.naturalWidth;
      const naturalHeight = img.naturalHeight;
      if (!naturalWidth || !naturalHeight) return;

      // Scale so the image width takes up 75% of the viewport width
      const targetPixelWidth = DEFAULT_WIDTH_RATIO * vw;
      const scale = targetPixelWidth / naturalWidth;

      const scaledHeight = naturalHeight * scale;
      // Vertically center the image in the stage (which is full height)
      const y = Math.round((vh - scaledHeight) / 2);
      // Small left margin is provided via stage padding; align image's x to 0
      const x = 0;

      //applyTransform(x, y, scale);
    }

    if (img.complete) {
      setInitialView();
    } else {
      img.addEventListener('load', setInitialView, {once: true});
    }

    // Optional: keep pinch-to-zoom smooth
    // Ensure the wrapper also blocks default touch gestures that cause page scroll
    ['touchstart', 'touchmove'].forEach(evt => {
      wrapper.addEventListener(evt, function (e) {
        e.preventDefault();
      }, {passive: false});
    });

    // Prevent images from being dragged by the browser default
    img.addEventListener('dragstart', e => e.preventDefault());

    // Optional: double-click to zoom in a bit
    wrapper.addEventListener('dblclick', function (e) {
      const factor = 1.4;
      const current = typeof panzoom.getScale === 'function' ? panzoom.getScale() : 1;
      if (typeof panzoom.zoomToPoint === 'function') {
        panzoom.zoomToPoint(current * factor, e);
      } else if (typeof panzoom.zoom === 'function') {
        panzoom.zoom(current * factor, {animate: false});
      }
    });

    // Optional: Ctrl+0 to reset view
    window.addEventListener('keydown', function (e) {
      if ((e.ctrlKey || e.metaKey) && e.key === '0') {
        e.preventDefault();
        setInitialView();
      }
    });
  })();
</script>
</body>
</html>
