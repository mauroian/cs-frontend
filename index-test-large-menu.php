<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="/src/input.css" >
    <script type="module" src="/src/main.js"></script>
    <title>Come & See</title>
</head>

<body class="flex flex-col min-h-screen">
    <?php require_once 'header-test-large-menu.php'; ?>
    <main class="flex-grow cs-main">
        <div class="flex flex-col items-center gap-2 mt-8 mb-32">
            <div class="flex flex-col pt-20">
                <div class="cs-fs-xl max-w-[400px]">Menu Test with many menu items in header and footer.</div>
            </div>
        </div>
    </main>
    <?php require_once 'footer-test-large-menu.php'; ?>
</body>

</html>