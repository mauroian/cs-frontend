<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/input.css">
    <script type="module" src="/src/main.js"></script>
    <title>Course Registration</title>
</head>

<body class="flex flex-col min-h-screen">

    <?php require_once 'header.php'; ?>

    <main class="cs-main bg-cs-paper-shade">
        <div class="cs-main-div">

            <!-- Page Title container -->
            <div class="flex flex-col items-center w-full px-5 py-6 text-white bg-cs-red-main">
                <span class="tracking-widest uppercase sm:cs-fs-sm cs-fs-sm">course registration</span>
                <h1 class="font-sans  font-semibold leading-[45px] my-3 text-center cs-fs-2xl sm:cs-fs-3xl">Bible Timeline Course</h1>
                <span class="tracking-widest uppercase sm:cs-fs-sm cs-fs-sm">September 2024</span>
            </div>

            <!-- Outer container -->
            <div class="flex flex-col items-center px-4 sm:px-4">

                <!-- Create account -->
                <?php require_once 'create-account-form.php' ?>

                <!-- Course Registration -->
                <?php require_once 'course-registration-form.php' ?>
            </div>
        </div>
    </main>
    <?php require_once 'footer.php'; ?>
</body>

</html>