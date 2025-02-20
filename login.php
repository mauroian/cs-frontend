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
<main class="flex-grow flex justify-center items-center bg-[url('/src/assets/background-login.png')] bg-no-repeat bg-center bg-cover min-h-[746px] mt-20 md:mt-0">
    <!-- Box -->
    <div class="flex flex-col items-center w-[98%] md:w-auto">
        <!-- Box Logo -->
        <div class="relative w-[119px] h-[119px] bg-transparent">
            <img src="/src/assets/logo-login.svg" class="absolute top-10">
        </div>
        <!-- Box Titolo -->
        <div class="font-serif uppercase cs-fs-xl tracking-[0.45rem] text-white bg-cs-red-main flex flex-row items-baseline justify-center h-28 pt-12 md:px-28 w-full rounded-t-[30px]">
            <span class="text-[35px]">W</span>elcome <span class="text-[35px]">&nbsp;B</span>ack.
        </div>
        <!-- Box Form -->
        <div class="cs-form-container">
            <form class="flex flex-col items-start">
                <label for="email" class="cs-form-label">Email</label>
                <!-- Input Email -->
                <div class="relative my-2 w-full">
                    <input id="email" required type="text" placeholder="Your email address" class="cs-form-input"/>
                    <img src="/src/assets/email-login.svg" class="absolute top-5 left-5"/>
                </div>
                <a class="cs-form-link" href="#">Forgot email?</a>
                <label for="password" class="cs-form-label mt-6">Password</label>
                <!-- Input Password -->
                <div class="relative my-2">
                    <input id="password" required type="password" placeholder="Enter your password" class="cs-form-input"/>
                    <img src="/src/assets/password-login.svg" class="absolute top-5 left-5"/>
                </div>
                <a class="cs-form-link" href="#">Reset password?</a>
                <button class="cs-form-submit">Login</button>
            </form>
        </div>
    </div>
</main>
<?php require_once 'footer.php'; ?>
</body>
</html>
