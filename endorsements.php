<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/src/input.css" />
    <script type="module" src="/src/main.js" defer></script>
    <title>Come & See - Endorsements</title>
</head>

<body class="flex flex-col min-h-screen">

    <?php require_once 'header.php'; ?>

    <main class="flex-grow cs-main bg-cs-paper">
        <div class="flex flex-col items-center mb-32">
            <!-- 'Title' container -->
            <div class="relative flex flex-col items-end justify-center w-full h-36 sm:h-48  text-white bg-[url('/src/assets/endorsement.png')] bg-top bg-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-white bg-opacity-50"></div>
            </div>

            <!-- Content container -->
            <div class="w-full max-w-5xl px-6 mt-12 sm:px-10">
            </div>
        </div>
    </main>

    <?php require_once 'footer.php'; ?>
</body>

</html>