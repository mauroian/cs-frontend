<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/src/input.css" />
    <script type="module" src="/src/main.js" defer></script>
    <title>Come & See</title>
</head>

<body class="flex flex-col min-h-screen">
    <?php require_once 'header.php'; ?>
    <main class="flex-grow mt-20 md:mt-0">
        <div class="flex flex-col items-center gap-2 mt-8 mb-32">

            <div class="cs-fs-sm">
                <div class="inline sm:hidden"> less than sm (0 - 480) </div>
                <div class="hidden sm:inline md:hidden"> sm (480 - 920) </div>
                <div class="hidden md:inline lg:hidden"> md (920 - 1024) </div>
                <div class="hidden lg:inline xl:hidden"> lg (1024 - 1280) </div>
                <div class="hidden xl:inline 2xl:hidden"> xl (1280 - 1536) </div>
                <div class="hidden 2xl:inline"> 2xl (1536 and greater) </div>
            </div>

            <div class="cs-fs-xs">(cs-fs-xs) The quick brown fox jumps over the lazy dog</div>
            <div class="cs-fs-sm">(cs-fs-sm) The quick brown fox jumps over the lazy dog</div>
            <div class="cs-fs-base">(cs-fs-base) The quick brown fox jumps over the lazy dog</div>
            <div class="cs-fs-lg">(cs-fs-lg) The quick brown fox jumps over the lazy dog</div>
            <div class="cs-fs-xl">(cs-fs-xl) The quick brown fox jumps over the lazy dog</div>

        </div>
    </main>
    <?php require_once 'footer.php'; ?>
</body>

</html>