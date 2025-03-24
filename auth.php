<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/input.css">
    <script type="module" src="/src/main.js"></script>
    <title>Auth</title>
</head>

<body class="flex flex-col min-h-screen">
    <?php require_once 'header.php'; ?>
    <main class="cs-main bg-cs-paper-shade">
        <div class="px-5 cs-main-div gap-36 pt-14 sm:px-8">
            <!-- Box -->
            <div class="flex flex-col items-center mt-12 cs-form-box">
                <!-- Box Title -->
                <div class="cs-form-header">
                    <span class="cs-form-header-bigger-letter">R</span>eset <span class="cs-form-header-bigger-letter">&nbsp;P</span>assword
                </div>
                <!-- Box Form -->
                <div class="cs-form-container">
                    <div class="cs-form-text">
                        Please let us kow your email address and we will email you a link to reset your password.
                    </div>
                    <form class="flex flex-col items-start w-full">
                        <label for="email" class="cs-form-label">Email</label>
                        <!-- Input Email -->
                        <div class="relative cs-form-input-container">
                            <input id="email" required type="text" placeholder="Your email on our system"
                                class="cs-form-input cs-form-input-icon">
                            <img src="/src/assets/email-login.svg" alt="Email">
                        </div>
                        <button class="cs-form-submit">Send me the password&nbsp;reset&nbsp;link</button>
                    </form>
                </div>
            </div>
            <!-- Box -->
            <div class="flex flex-col items-center cs-form-box-success">
                <!-- Box Form -->
                <div class="cs-form-container-success">
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
                            <input id="email" required type="text" placeholder="youremail@example.com" class="cs-form-input cs-form-input-icon">
                            <img src="/src/assets/email-login.svg" alt="Email">
                        </div>
                        <label for="password" class="cs-form-label">Password</label>
                        <!-- Input Password -->
                        <div class="relative cs-form-input-container">
                            <input id="password" required type="password" placeholder="Password" class="cs-form-input cs-form-input-icon">
                            <img src="/src/assets/password-login.svg" alt="Password">
                            <button type="button" class="absolute inset-y-0 z-20 flex items-center px-3 cursor-pointer cs-password-eye end-0 text-cs-red-main" onclick="togglePassword(this)">
                                <img src="/src/assets/password-eye.svg" alt="Mask" class="shrink-0 size-5 hs-password-deactive">
                                <img src="/src/assets/password-eye-closed.svg" alt="Mask" class="shrink-0 size-5 hs-password-active">
                            </button>
                        </div>
                        <label for="password_confirmation" class="cs-form-label">Password Confirmation</label>
                        <!-- Input Password -->
                        <div class="relative cs-form-input-container">
                            <input id="password_confirmation" required type="password" placeholder="Password confirmation"
                                class="cs-form-input cs-form-input-icon">
                            <img src="/src/assets/password-login.svg" alt="Password">
                            <button type="button" class="absolute inset-y-0 z-20 flex items-center px-3 cursor-pointer cs-password-eye end-0 text-cs-red-main" onclick="togglePassword(this)">
                                <img src="/src/assets/password-eye.svg" alt="Mask" class="shrink-0 size-5 hs-password-deactive">
                                <img src="/src/assets/password-eye-closed.svg" alt="Mask" class="shrink-0 size-5 hs-password-active">
                            </button>
                        </div>
                        <button class="cs-form-submit">Reset password</button>
                    </form>
                </div>
            </div>
            <!-- Box -->
            <div class="flex flex-col items-center cs-form-box-success">
                <!-- Box Form -->
                <div class="cs-form-container-success">
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
                    <div class="mb-6 cs-form-text">
                        Enter your information below so we can help you.
                    </div>
                    <form class="flex flex-col items-start w-full">
                        <label for="firstname" class="cs-form-label">First Name</label>
                        <!-- Input Firstname -->
                        <div class="relative cs-form-input-container">
                            <input id="firstname" required type="text" placeholder="Your name" class="cs-form-input">
                        </div>
                        <label for="lastname" class="cs-form-label">Last Name</label>
                        <!-- Input Lastname -->
                        <div class="relative cs-form-input-container">
                            <input id="lastname" required type="text" placeholder="Your last name" class="cs-form-input">
                        </div>
                        <label for="email" class="cs-form-label">Alternative Email to Contact You</label>
                        <!-- Input Email -->
                        <div class="relative cs-form-input-container">
                            <input id="email" required type="text" placeholder="youremail@example.com" class="cs-form-input cs-form-input-icon">
                            <img src="/src/assets/email-login.svg" alt="Email">
                        </div>
                        <label for="phone" class="cs-form-label">Your phone number</label>
                        <!-- Input Phone -->
                        <div class="relative cs-form-input-container">
                            <input id="phone" required type="text" placeholder="" class="cs-form-input cs-form-input-icon">
                            <img src="/src/assets/phone.svg" class="size-6" alt="Phone">
                        </div>
                        <button class="cs-form-submit">Submit</button>
                    </form>
                </div>
            </div>
            <!-- Box -->
            <div class="flex flex-col items-center cs-form-box-success">
                <!-- Box Form -->
                <div class="cs-form-container-success">
                    <div class="cs-form-title">
                        Thank you.
                    </div>
                    <div class="cs-form-text cs-form-thank-you">
                        We will try to contact you within a few hours with instructions.
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once 'footer.php'; ?>
</body>

</html>