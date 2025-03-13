<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="/src/input.css" >
    <script type="module" src="/src/main.js"></script>
    <title>Come & See</title>
</head>

<body class="flex flex-col min-h-screen">
    <?php require_once 'header.php'; ?>
    <main class="flex-grow flex flex-col gap-36 justify-center items-center min-h-[746px] cs-main pt-14 px-5 sm:px-8">

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
                            class="cs-form-input cs-form-input-icon" >
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
                        <input id="email" required type="text" placeholder="youremail@example.com" class="cs-form-input cs-form-input-icon" >
                        <img src="/src/assets/email-login.svg" alt="Email">
                    </div>
                    <label for="password" class="cs-form-label">Password</label>
                    <!-- Input Password -->
                    <div class="relative cs-form-input-container">
                        <input id="password" required type="password" placeholder="Password" class="cs-form-input cs-form-input-icon" >
                        <img src="/src/assets/password-login.svg" alt="Password">
                        <button type="button" class="absolute inset-y-0 z-20 flex items-center px-3 cursor-pointer cs-password-eye end-0 text-cs-red-main" onclick="togglePassword(this)">
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
                    <label for="password_confirmation" class="cs-form-label">Password Confirmation</label>
                    <!-- Input Password -->
                    <div class="relative cs-form-input-container">
                        <input id="password_confirmation" required type="password" placeholder="Password confirmation"
                            class="cs-form-input cs-form-input-icon" >
                        <img src="/src/assets/password-login.svg" alt="Password">
                        <button type="button" class="absolute inset-y-0 z-20 flex items-center px-3 cursor-pointer cs-password-eye end-0 text-cs-red-main" onclick="togglePassword(this)">
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
                        <input id="firstname" required type="text" placeholder="Your name" class="cs-form-input" >
                    </div>
                    <label for="lastname" class="cs-form-label">Last Name</label>
                    <!-- Input Lastname -->
                    <div class="relative cs-form-input-container">
                        <input id="lastname" required type="text" placeholder="Your last name" class="cs-form-input" >
                    </div>
                    <label for="email" class="cs-form-label">Alternative Email to Contact You</label>
                    <!-- Input Email -->
                    <div class="relative cs-form-input-container">
                        <input id="email" required type="text" placeholder="youremail@example.com" class="cs-form-input cs-form-input-icon" >
                        <img src="/src/assets/email-login.svg" alt="Email">
                    </div>
                    <label for="phone" class="cs-form-label">Your phone number</label>
                    <!-- Input Phone -->
                    <div class="relative cs-form-input-container">
                        <input id="phone" required type="text" placeholder="" class="cs-form-input cs-form-input-icon" >
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
    </main>
    <?php require_once 'footer.php'; ?>
</body>

</html>