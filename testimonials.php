<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/src/input.css" />
    <script type="module" src="/src/main.js" defer></script>
    <title>Come & See - Testimonials</title>
</head>

<body class="flex flex-col min-h-screen">

<?php require_once 'header.php'; ?>

<main class="flex-grow cs-main bg-cs-paper">
    <div class="flex flex-col items-center mb-32">
        <!-- 'Title' container -->
        <div class="relative flex flex-col items-end justify-center w-full h-96 text-white bg-[url('/src/assets/testimonial-header.jpeg')] bg-center bg-cover bg-opacity-10">
            <div class="absolute top-0 left-0 w-full h-full bg-white bg-opacity-30"></div>
            <h2 class="z-10 font-serif italic cs-fs-4xl mr-12 bg-cs-red-main px-6 h-28">What our past students</h2>
            <h2 class="z-10 font-serif font-bold italic cs-fs-4xl mr-6 bg-cs-red-bright -mt-4 px-6 h-28">have to say</h2>
        </div>

        <!-- Content container -->
        <div class="w-full max-w-5xl px-6 mt-12 sm:px-10">
        </div>
    </div>
</main>

<?php require_once 'footer.php'; ?>
</body>

</html>