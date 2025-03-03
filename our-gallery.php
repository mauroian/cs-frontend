<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/src/input.css" />
    <script type="module" src="/src/main.js" defer></script>
    <title>Come & See - Our Gallery</title>
</head>

<body class="flex flex-col min-h-screen">

<?php require_once 'header.php'; ?>

<main class="flex-grow cs-main bg-cs-paper">
    <div class="flex flex-col items-center mb-32">
        <!-- 'Title' container -->
        <div class="flex flex-col items-center justify-center flex-wrap w-full h-96 text-cs-red-main bg-[url('/src/assets/our-gallery-header.png')] bg-center bg-cover bg-opacity-10">
            <h2 class="font-serif italic cs-fs-4xl">We bring <b>people</b> together</h2>
            <h2 class="font-serif italic cs-fs-4xl">with our <b>courses</b> and <b>socials.</b></h2>
        </div>

        <!-- Content container -->
        <div class="w-full max-w-6xl px-6 mt-12 sm:px-10">

        </div>
    </div>
</main>

<?php require_once 'footer.php'; ?>
</body>

</html>