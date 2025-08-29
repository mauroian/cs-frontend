<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type"/>
    <title>BTC Image Viewer</title>
    <!-- Zoomist CSS -->
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .zoomist-image {
            height: 100vh;
            width: auto;
        }

        #myContent {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

    </style>
</head>

<body>
    <div class="zoomist-container">
        <div class="zoomist-wrapper">
            <div class="zoomist-image">
                <img src="btc.jpg" id="myContent" alt="BTC Image">
            </div>
        </div>
    </div>

    <!-- Zoomist JS -->
    <script src="https://unpkg.com/@panzoom/panzoom@4.6.0/dist/panzoom.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
          const elem = document.getElementById('myContent')
          const panzoom = Panzoom(elem, {
            maxScale: 10,
            minScale: 3,
            overflow: 'auto',
            startX: 400,
            startY: 0,
          })

          elem.parentElement.addEventListener('dblclick', function (event) {
              panzoom.zoomToPoint(8, event);
          });

          elem.parentElement.addEventListener('wheel', function (event) {
            if (event.shiftKey) {
              var delta = Math.max(-1, Math.min(1, event.wheelDelta || -event.detail));
              panzoom.pan(delta * 20 , 0,  { relative: true });
              return;
            }
            // Panzoom will automatically use `deltaX` here instead
            // of `deltaY`. On a mac, the shift modifier usually
            // translates to horizontal scrolling, but Panzoom assumes
            // the desired behavior is zooming.
            panzoom.zoomWithWheel(event)
          });
        });
    </script>
</body>

</html>