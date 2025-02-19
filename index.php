<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/src/input.css"/>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="/src/main.js" defer></script>
    <title>Come & See</title>
</head>
<body class="min-h-screen flex flex-col">
<?php require_once 'header.php'; ?>
<!-- Contenitore Sfondo -->
<main class="flex-grow flex justify-center items-center bg-[url('/src/assets/background-login.png')] bg-no-repeat bg-center bg-contain min-h-[746px]">
    <!-- Box -->
    <div class="flex flex-col items-center">
        <!-- Box Logo -->
        <div class="relative w-[119px] h-[119px] bg-transparent">
            <img src="/src/assets/logo-login.svg" class="absolute top-10">
        </div>
        <!-- Box Titolo -->
        <div class="font-serif uppercase text-[24px] tracking-[0.45rem] text-cs-paper bg-cs-red-main h-28 pt-12 px-28 rounded-t-[30px]">
            <span class="text-[35px]">W</span>elcome <span class="text-[35px]">b</span>ack.
        </div>
        <!-- Box Form -->
        <div class="bg-cs-paper w-full rounded-b-[30px] flex flex-col items-center pt-9 pb-11 px-12">
            <form class="flex flex-col items-start">
                <label class="font-sans uppercase text-lg tracking-widest pl-1">Email</label>
                <!-- Input Email -->
                <div>
                    <input type="text" placeholder="Your email address" class="cs-form-input"/>
                </div>
                <a class="cs-form-link" href="#">Forgot email?</a>
                <label class="font-sans uppercase text-lg tracking-widest pt-8 pl-1">Password</label>
                <!-- Input Password -->
                <div>
                    <input type="password" placeholder="Enter your password" class="cs-form-input"/>
                </div>
                <a class="cs-form-link" href="#">Reset password?</a>
                <button class="font-sans font-bold uppercase text-xl tracking-wider">Login</button>
            </form>
        </div>
    </div>
</main>
<?php require_once 'footer.php'; ?>
</body>
</html>

