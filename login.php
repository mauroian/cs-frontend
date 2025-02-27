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
        <div class="flex flex-col items-center w-full md:w-auto">
            <!-- Box Titolo -->
            <div class="relative flex flex-row items-baseline justify-center cs-form-login-header">
                <img src="/src/assets/logo-login.svg" class="absolute -top-[80px] block" alt="Login">
                <span class="cs-form-header-bigger-letter">W</span>elcome <span class="cs-form-header-bigger-letter">&nbsp;B</span>ack.
            </div>
            <!-- Box Form -->
            <div class="cs-form-container">
                <form class="flex flex-col items-start w-full">
                    <label for="email" class="cs-form-label">Email</label>
                    <!-- Input Email -->
                    <div class="relative w-full my-2">
                        <input id="email" required type="text" placeholder="Your email address" class="cs-form-input" />
                        <img src="/src/assets/email-login.svg" />
                    </div>
                    <a class="cs-form-link" href="#">Forgot email?</a>
                    <label for="password" class="mt-6 cs-form-label">Password</label>
                    <!-- Input Password -->
                    <div class="relative w-full my-2">
                        <input id="password" required type="password" placeholder="Enter your password" class="cs-form-input" />
                        <img src="/src/assets/password-login.svg" />
                        <button type="button" class="cs-password-eye absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-cs-red-main" onclick="togglePassword(this)">
                            <svg class="shrink-0 size-5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path class="hs-password-active" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                <path class="hs-password-active" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                                <path class="hs-password-active" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                <line class="hs-password-active" x1="2" x2="22" y1="2" y2="22"></line>
                                <path class="hs-password-deactive" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                <circle class="hs-password-deactive" cx="12" cy="12" r="3"></circle>
                            </svg>
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