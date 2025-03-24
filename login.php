<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/input.css">
    <script type="module" src="/src/main.js"></script>
    <title>Login</title>
</head>

<body class="flex flex-col min-h-screen">

    <?php require_once 'header.php'; ?>

    <main class="flex flex-col items-center justify-items min-h-[746px] cs-main px-5 sm:px-8 cs-bg-login">
        <!-- Outer Login Box -->
        <div class="cs-main-div mt-28 sm:mt-36 cs-form-box">
            <!-- Box Titolo -->
            <div class="relative flex flex-row items-baseline justify-center cs-form-login-header">
                <img src="/src/assets/logos/cs-logo-red-bg-circle-paper.svg" class="absolute -top-[70px] block h-28" alt="Login">
                <span class="cs-form-header-bigger-letter">W</span>elcome<span class="cs-form-header-bigger-letter">&nbsp;B</span>ack.
            </div>
            <!-- Box Form -->
            <div class="cs-form-container">
                <form class="flex flex-col items-start w-full">
                    <label for="email" class="cs-form-label">Email</label>
                    <!-- Input Email -->
                    <div class="relative w-full my-2">
                        <input id="email" required type="text" placeholder="Your email address" class="cs-form-input cs-form-input-icon">
                        <img src="/src/assets/email-login.svg" alt="Email">
                    </div>
                    <a class="cs-form-link" href="#">Forgot email?</a>
                    <label for="password" class="mt-6 cs-form-label">Password</label>
                    <!-- Input Password -->
                    <div class="relative w-full my-2">
                        <input id="password" required type="password" placeholder="Enter your password" class="cs-form-input cs-form-input-icon">
                        <img src="/src/assets/password-login.svg" alt="Password">
                        <button type="button" class="absolute inset-y-0 z-20 flex items-center px-3 cursor-pointer cs-password-eye end-0 text-cs-red-main" onclick="togglePassword(this)">
                            <img src="/src/assets/password-eye.svg" alt="Mask" class="shrink-0 size-5 hs-password-deactive">
                            <img src="/src/assets/password-eye-closed.svg" alt="Mask" class="shrink-0 size-5 hs-password-active">
                        </button>
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