<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/src/input.css"/>
    <script type="module" src="/src/main.js" defer></script>
    <title>Come & See</title>
</head>

<body class="flex flex-col min-h-screen">
<?php require_once 'header.php'; ?>
<main class="flex-grow flex flex-col gap-6 justify-center items-center min-h-[746px] mt-20 md:mt-0">
    <!-- Box -->
    <div class="flex flex-col items-center cs-form-box">
        <!-- Box Titolo -->
        <div class="cs-form-header">
            <span class="cs-form-header-bigger-letter">R</span>eset <span class="cs-form-header-bigger-letter">&nbsp;P</span>assword
        </div>
        <!-- Box Form -->
        <div class="cs-form-container">
            <div class="cs-form-text">
                Please let us kow your email address and we will email you a link to reset your password.
            </div>
            <form class="flex flex-col items-start w-full">
                <label for="email" class="font-sans uppercase text-lg tracking-widest pl-1">Email</label>
                <!-- Input Email -->
                <div class="relative cs-form-input-container">
                    <input id="email" required type="text" placeholder="Your email on our system"
                           class="cs-form-input"/>
                    <img src="/src/assets/email-login.svg" />
                </div>
                <button class="cs-form-submit">Send me the password reset link</button>
            </form>
        </div>
    </div>
    <!-- Box -->
    <div class="flex flex-col items-center cs-form-box">
        <!-- Box Form -->
        <div class="cs-form-container  rounded-[30px]">
            <div class="cs-form-title">
                Thank you.
            </div>
            <div class="cs-form-text cs-form-thank-you">
                If this email exists on our system, we will email you the password reset link.
            </div>
        </div>
    </div>
    <!-- Box -->
    <div class="flex flex-col items-center cs-form-box">
        <!-- Box Titolo -->
        <div class="cs-form-header">
            <span class="cs-form-header-bigger-letter">R</span>eset <span class="cs-form-header-bigger-letter">&nbsp;P</span>assword
        </div>
        <!-- Box Form -->
        <div class="cs-form-container">
            <div class="cs-form-text">
                Please choose a new password:
            </div>
            <form class="flex flex-col items-start w-full">
                <label for="email" class="cs-form-label">Email</label>
                <!-- Input Email -->
                <div class="relative cs-form-input-container">
                    <input id="email" required type="text" placeholder="youremail@example.com" class="cs-form-input"/>
                    <img src="/src/assets/email-login.svg" />
                </div>
                <label for="password" class="cs-form-label">Password</label>
                <!-- Input Password -->
                <div class="relative cs-form-input-container">
                    <input id="password" required type="password" placeholder="Password" class="cs-form-input"/>
                    <img src="/src/assets/password-login.svg" />
                </div>
                <label for="password" class="cs-form-label">Password</label>
                <!-- Input Password -->
                <div class="relative cs-form-input-container">
                    <input id="password" required type="password" placeholder="Password confirmation"
                           class="cs-form-input"/>
                </div>
                <button class="cs-form-submit">Reset password</button>
            </form>
        </div>
    </div>
    <!-- Box -->
    <div class="flex flex-col items-center cs-form-box">
        <!-- Box Form -->
        <div class="cs-form-container  rounded-[30px]">
            <div class="cs-form-title">
                Thank you.
            </div>
            <div class="cs-form-text cs-form-thank-you">
                Your password has been reset. You can now use it to login.
            </div>
            <button class="cs-form-submit">Login</button>
        </div>
    </div>
    <!-- Box -->
    <div class="flex flex-col items-center cs-form-box">
        <!-- Box Titolo -->
        <div class="cs-form-header">
            <span class="cs-form-header-bigger-letter">F</span>orgot <span class="cs-form-header-bigger-letter">&nbsp;Y</span>our&nbsp;<span class="cs-form-header-bigger-letter">E</span>mail?
        </div>
        <!-- Box Form -->
        <div class="cs-form-container">
            <div class="cs-form-text mb-6">
                Enter your information below so we can help you.
            </div>
            <form class="flex flex-col items-start w-full">
                <label for="firstname" class="cs-form-label">First Name</label>
                <!-- Input Firstname -->
                <div class="relative cs-form-input-container">
                    <input id="firstname" required type="text" placeholder="Your name" class="cs-form-input"/>
                </div>
                <label for="lastname" class="cs-form-label">Last Name</label>
                <!-- Input Lastname -->
                <div class="relative cs-form-input-container">
                    <input id="lastname" required type="text" placeholder="Your last name" class="cs-form-input"/>
                </div>
                <label for="email" class="cs-form-label">Alternative Email to Contact You</label>
                <!-- Input Email -->
                <div class="relative cs-form-input-container">
                    <input id="email" required type="text" placeholder="youremail@example.com" class="cs-form-input"/>
                    <img src="/src/assets/email-login.svg"/>
                </div>
                <label for="phone" class="cs-form-label">Your phone number</label>
                <!-- Input Phone -->
                <div class="relative cs-form-input-container">
                    <input id="phone" required type="text" placeholder="" class="cs-form-input"/>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="fill-cs-red-main stroke-cs-red-main absolute top-4 left-5 size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                </div>
                <button class="cs-form-submit">Submit</button>
            </form>
        </div>
    </div>
    <!-- Box -->
    <div class="flex flex-col items-center cs-form-box">
        <!-- Box Form -->
        <div class="cs-form-container  rounded-[30px]">
            <div class="cs-form-title">
                Thank you.
            </div>
            <div class="cs-form-text cs-form-thank-you">
                We will try to contact you within a few hours with instructions.
            </div>
        </div>
    </div>
</main>
<?php require_once 'footer.php'; ?>
</body>
</html>
