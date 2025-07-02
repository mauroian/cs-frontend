<html>

<head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"/>
    <title>BT Chart Detail</title>
    <script type="text/javascript" src="/src/wheel-zoom.min.js"></script>
    <style>
        .scaled-image {
            /* empirically, 330% works well if Chrome's zoom is 90% which is what I want */
        }

        #myViewport {
            cursor: grab;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 400px;
            margin-top: 0px;
            margin-bottom: 0px;
            margin-right: 500px;
            border: 0px solid black;
            width: 100%;
            height: 100%;

        }


        .drag-scroll--enabled {
            cursor: grab
        }
        .drag-scroll--scrolling {
            cursor: grabbing;
            user-select: none;
            scroll-snap-type: none
        }
    </style>
</head>

<body style="font-family: Arial; overflow: auto" id="pagebody">
<div
        style="
        width: 5500px;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 500px;
        font-size: 16px;
        border: 0px solid black;
      ">
    Bible Timeline Chart (Jeff Cavins | Ascension
    Press)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Bible Timeline Chart (Jeff Cavins | Ascension
    Press)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Bible Timeline Chart (Jeff Cavins | Ascension
    Press)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Bible Timeline Chart (Jeff Cavins | Ascension
    Press)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Bible Timeline Chart (Jeff Cavins | Ascension
    Press)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Bible Timeline Chart (Jeff Cavins | Ascension
    Press)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<div id="myViewport">

<img
        src="btc.jpg"
        id="myContent"
        class="scaled-image"
        style="
      "/>
</div>

<script>
  // WHEEL ZOOM
  //
  var wzoom = WZoom.create('#myContent', {
    onGrab: function () {
      frame.style.cursor = 'grabbing';
    },
    onDrop: function () {
      frame.style.cursor = 'grab';
    }
  });

  window.addEventListener('resize', function () {
    if (wzoom) wzoom.prepare();
  });
</script>
<script>
  (function() {
    const ref = document.getElementById('pagebody');
    
    const startDragScroll = () => {

      // We set a listener for mousedcown so we know when to start the drag and scroll
      document.addEventListener('mousedown', mouseDownHandler)
      //We set this class on the container to allow the CSS to set some styles such as the cursor: grab
      ref.classList.add('drag-scroll--enabled')
    }
    
    const stopDragScroll =  () => {
      document.removeEventListener('mousedown', mouseDownHandler)
      ref.classList.remove('drag-scroll--enabled')
      // This clears up some event listeners and resets our classes
      mouseUpHandler()
    }
    
    const hasTouchScreen = () => {

      // If this is a touch device, scrolling is already easy, so we don't need to enable our drag scroll feature
      return ('ontouchstart' in window)
    }
    const hasOverflowAuto = () => {
      /*
        Rather than worrying about breakpoints here, we let CSS handle it, as they may be different for each component
        If overflow-x: auto is not on the element, then it is not a scrolling element, so we don't need to run DragToScroll
      */
      return (getComputedStyle(ref).getPropertyValue('overflow-x') === 'auto')
    }
    
    const mouseDownHandler = (e) => {
      e.preventDefault()
      // We set a class here to let the CSS know that we are currently scrolling, and to apply the relevant styles, such as the grabbing cursor
      ref.classList.add('drag-scroll--scrolling')

      position = {
        // The current scroll
        left: ref.scrollLeft,
        // Get the current mouse position
        x: e.clientX
      }

      // We want to listen to the mouse move so we know how much to scroll the container
      document.addEventListener('mousemove', mouseMoveHandler)

      // We want to know when to stop dragging and scrolling
      document.addEventListener('mouseup', mouseUpHandler)
    }
    
    const mouseMoveHandler = (e) => {
      // How far the mouse has been moved
      const dx = e.clientX - position.x

      // Scroll the element
      ref.scrollLeft = position.left - dx
    }
    const mouseUpHandler = () => {
       console.log('mouse up handler fired')
      // We don't care about listening to the mouse moving now, so we can remove the listener
      document.removeEventListener('mousemove', mouseMoveHandler)

      // We can now remove the class which means we don't show the styles specific to when we are scrolling
      ref.classList.remove('drag-scroll--scrolling')
    }
    
    const dragScrollWatcher = () =>  {
        console.log('Checking if we should start drag scroll', hasTouchScreen(), hasOverflowAuto())
      // We only want to start drag scroll if the following conditions are met
      if (!hasTouchScreen() && hasOverflowAuto()) {
        startDragScroll()
      } else {
        stopDragScroll()
      }
    }
    
    dragScrollWatcher()
  })();
</script>
</body>

</html>