
<div class="fixed w-full z-50 text-center flex flex-col sm:flex-row items-center  justify-center gap-2 text-black bg-transparent top-0 left-0 cs-fs-sm">
    <div id="current-width"></div>
    <div class="inline xsm:hidden"> less than xsm (0 - 400) </div>
    <div class="hidden xsm:inline sm:hidden"> xsm (400 - 480) </div>
    <div class="hidden sm:inline md:hidden"> sm (480 - 550) </div>
    <div class="hidden md:inline lg:hidden"> md (920 - 1024) </div>
    <div class="hidden lg:inline lg2:hidden"> lg (1024 - 1100) </div>
    <div class="hidden lg2:inline xl:hidden"> lg2 (1100 - 1280) </div>
    <div class="hidden xl:inline 2xl:hidden"> xl (1280 - 1536) </div>
    <div class="hidden 2xl:inline"> 2xl (1536 and greater) </div>
</div>
<script>
  function printViewportWidth() {
    const updateWidth = () => {
      console.log(`Larghezza viewport: ${window.innerWidth}px`);
      document.getElementById('current-width').textContent = `current: ${window.innerWidth}px`;
    };

    // Stampa la larghezza iniziale
    updateWidth();

    // Aggiunge un listener per l'evento di ridimensionamento della finestra
    window.addEventListener('resize', updateWidth);
  }

    printViewportWidth();
</script>