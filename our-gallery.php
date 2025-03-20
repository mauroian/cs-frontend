<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="/src/input.css" >
    <script type="module" src="/src/main.js"></script>
    <title>Come & See - Our Gallery</title>
</head>

<body class="flex flex-col min-h-screen">

    <?php require_once 'header.php'; ?>

    <main class="cs-main">
        <div class="cs-main-div">
            <!-- 'Title' container -->
            <div class="flex flex-col items-center justify-center flex-wrap w-full h-48 sm:h-64 md:h-72 cs-bg-our-gallery">
                <div class="w-full max-w-[850px] text-center px-5 bg-gradient-to-b from-cs-red-dark to-cs-red-bright via-cs-red-dark via-20% bg-clip-text text-transparent leading-tight ">
                    <h2 class="font-sans font-extrabold cs-fs-lg xsm:cs-fs-xl md:cs-fs-3xl sm:cs-fs-2xl">We bring <br> <span class="cs-fs-xl xsm:cs-fs-2xl md:cs-fs-4xl sm:cs-fs-3xl">people together</span> <br> with our courses and socials.</h2>
                </div>
            </div>

            <!-- Content container -->
            <div class="w-full max-w-6xl px-6 mt-12 sm:px-10">

            </div>
        </div>
    </main>

    <?php require_once 'footer.php'; ?>
</body>

</html>