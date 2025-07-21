<html>

<head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"/>
    <title>BT Chart Detail</title>
    <script type="text/javascript" src="/src/wheel-zoom.min.js"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #myViewport {
            width: 100vw;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            margin-left: 20%;
            margin-top: 3%;
            padding: 0;
        }
        .scaled-image {
            max-height: 90vh;
            height: 90vh;
            width: auto;
            display: block;
            user-select: none;
            -webkit-user-drag: none;
        }
    </style>
</head>

<body style="font-family: Arial; overflow: auto" id="pagebody">

<div id="myViewport">

<img
        src="btc.jpg"
        id="myContent"
        class="scaled-image"/>
</div>

<script>
  // WHEEL ZOOM
  //
  var wzoom = WZoom.create('#myContent', {
    width: null, // auto
    dragScrollable: true,
    dblclickZoom: false,
    clickZoom: false,
    maxScale: 10,
    minScale: 0.5,
    onGrab: function () {
      document.body.style.cursor = 'grabbing';
    },
    onDrop: function () {
      document.body.style.cursor = 'grab';
    }
  });

  window.addEventListener('resize', function () {
   // if (wzoom) wzoom.prepare();
  });

  // Set initial zoom to scale 1
  if (wzoom && wzoom.transform) {
    wzoom.transform(0, 2700, 1);
  }
</script>
</body>

</html>