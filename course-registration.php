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

    <main class="flex-grow cs-main">

        <!-- Page Title container -->
        <div class="flex flex-col items-center w-full px-5 py-6 text-white bg-cs-red-main">
            <span class="tracking-widest uppercase sm:cs-fs-sm cs-fs-xs">course registration</span>
            <h1 class="font-sans  font-semibold leading-[45px] my-3 text-center cs-fs-2xl sm:cs-fs-3xl">Bible Timeline Course</h1>
            <span class="tracking-widest uppercase sm:cs-fs-sm cs-fs-xs">September 2024</span>
        </div>

        <!-- Outer container -->
        <div class="flex flex-col items-center px-4 sm:px-4">

            <!-- Create account -->
            <div class="flex flex-col items-center mt-20 cs-form-box">
                <!-- Box Titolo -->
                <div class="cs-course-header">
                    Create an Account
                </div>
                <!-- Box Form -->
                <div class="cs-course-container">
                    <form class="flex flex-col items-start w-full">
                        <label for="firstname" class="cs-form-label">First Name</label>
                        <!-- Input Firstname -->
                        <div class="relative cs-form-input-container">
                            <input id="firstname" required type="text" placeholder="" class="cs-course-input" />
                        </div>
                        <label for="lastname" class="cs-form-label">Last Name</label>
                        <!-- Input Lastname -->
                        <div class="relative cs-form-input-container">
                            <input id="lastname" required type="text" placeholder="" class="cs-course-input" />
                        </div>
                        <label for="email" class="cs-form-label">Email</label>
                        <!-- Input Email -->
                        <div class="relative cs-form-input-container">
                            <input id="email" required type="text" placeholder="" class="cs-course-input cs-course-input-icon" />
                            <img src="/src/assets/email-login.svg" />
                        </div>
                        <label for="confirm_email" class="cs-form-label">Confirm Email</label>
                        <!-- Input Email -->
                        <div class="relative cs-form-input-container">
                            <input id="confirm_email" required type="text" placeholder="" class="cs-course-input cs-course-input-icon" />
                            <img src="/src/assets/email-login.svg" />
                        </div>
                        <label for="password" class="cs-form-label">Password</label>
                        <!-- Input Phone -->
                        <div class="relative cs-form-input-container">
                            <input id="password" required type="password" placeholder="" class="cs-course-input cs-course-input-icon" />
                            <img src="/src/assets/password-login.svg" />
                            <button type="button" class="absolute inset-y-0 z-20 flex items-center px-3 cursor-pointer cs-password-eye end-0 text-cs-red-dark" onclick="togglePassword(this)">
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
                        <label for="confirm_password" class="cs-form-label">Confirm Password</label>
                        <!-- Input Phone -->
                        <div class="relative cs-form-input-container">
                            <input id="confirm_password" required type="password" placeholder="" class="cs-course-input cs-course-input-icon" />
                            <img src="/src/assets/password-login.svg" />
                            <button type="button" class="absolute inset-y-0 z-20 flex items-center px-3 cursor-pointer cs-password-eye end-0 text-cs-red-dark" onclick="togglePassword(this)">
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
                        <div class="w-full md:w-auto">
                            <span class="tracking-widest uppercase cs-fs-sm">agree to Terms and Conditions</span>
                            <button type="button" onclick="toggleAccordion(1)"
                                class="flex items-center justify-between w-full cs-course-accordion-button">
                                <span class="text-1">Show terms and conditions</span>
                                <span class="hidden text-1">Hide terms and conditions</span>
                                <span id="icon-1" class="transition-transform duration-300">
                                    <svg class="w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" fill="currentColor">
                                        <g>
                                            <g>
                                                <path d="M257,0C116.39,0,0,114.39,0,255s116.39,257,257,257s255-116.39,255-257S397.61,0,257,0z M392,285H287v107
                                                    c0,16.54-13.47,30-30,30c-16.54,0-30-13.46-30-30V285H120c-16.54,0-30-13.46-30-30c0-16.54,13.46-30,30-30h107V120
                                                    c0-16.54,13.46-30,30-30c16.53,0,30,13.46,30,30v105h105c16.53,0,30,13.46,30,30S408.53,285,392,285z" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </button>
                            <div id="content-1" class="overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="cs-course-accordion-content">
                                    In order to comply with GDPR data protection rules, please confirm by ticking the box that
                                    you agree that your personal details provided by you above may be retained and used by Mauro
                                    Iannicelli and his ‘Come & See Ministry’ (‘us’, ‘we’), and that we can contact you in
                                    relation to any courses or initiatives we organise in the future or which we believe to be
                                    relevant to what we do. We confirm that we won’t share your personal details with anyone and
                                    that they will be kept confidential unless otherwise requested by you. You can contact us
                                    anytime at info [[at]] comeandsee.org to withdraw your consent. By submitting this form you
                                    also agree to the Terms and Conditions which you can find at <a
                                        href="https://comeandsee.org/terms-and-conditions" target="_blank">https://comeandsee.org/terms-and-conditions</a>.
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center my-6">
                            <input id="agree" type="checkbox" value=""
                                class="cs-course-checkbox">
                            <label for="agree" class="cs-course-checkbox-label">Yes, i
                                agree <span class="font-normal">(required)<span></label>
                        </div>
                        <div class="flex flex-row justify-end w-full gap-4">
                            <button class="cs-course-reset">Reset</button>
                            <button class="cs-course-submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Course Registration -->
            <div class="flex flex-col items-center mt-48 cs-form-box">
                <!-- Box Titolo -->
                <div class="cs-course-header">
                    Course Registration
                </div>
                <!-- Box Form -->
                <div class="cs-course-container bg-cs-paper-shade">
                    <p class="mb-6 cs-course-text">
                        Our long-term vision is to create <span class="font-bold">faith-sharing small groups</span> according to
                        similar age brackets, balanced gender ratio & location.
                    </p>
                    <form class="flex flex-col items-start w-full">
                        <label for="birthdate" class="cs-form-label">Your Year of birth</label>
                        <!-- Input YOB -->
                        <div class="relative cs-form-input-container cs-form-small-container">
                            <input id="birthdate" required type="date" placeholder="" class="cs-course-input" />
                        </div>
                        <label for="sex" class="cs-form-label">Your sex</label>
                        <!-- Input Sex -->
                        <div class="relative cs-form-input-container cs-form-small-container">
                            <select id="sex" required class="cs-course-select">
                                <option value=""></option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                            <div class="absolute top-0 right-0 flex flex-row items-center justify-center pointer-events-none cs-course-arrow">
                                <svg width="23" height="10" viewBox="0 0 23 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0365 8.90009C11.7091 9.10825 11.2909 9.10825 10.9635 8.90009L0.976737 2.5506C0.1323 2.01372 0.512612 0.706726 1.51327 0.706726L21.4867 0.706728C22.4874 0.706728 22.8677 2.01372 22.0233 2.55061L12.0365 8.90009Z"
                                        fill="#FEFBF7" />
                                </svg>
                            </div>
                        </div>
                        <label for="country" class="cs-form-label">Your Country</label>
                        <!-- Input Country -->
                        <div class="relative cs-form-input-container">
                            <select id="country" required class="cs-course-select">
                                <option value=""></option>
                                <option value="UK">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                            </select>
                            <div class="absolute top-0 right-0 flex flex-row items-center justify-center pointer-events-none cs-course-arrow">
                                <svg width="23" height="10" viewBox="0 0 23 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0365 8.90009C11.7091 9.10825 11.2909 9.10825 10.9635 8.90009L0.976737 2.5506C0.1323 2.01372 0.512612 0.706726 1.51327 0.706726L21.4867 0.706728C22.4874 0.706728 22.8677 2.01372 22.0233 2.55061L12.0365 8.90009Z"
                                        fill="#FEFBF7" />
                                </svg>
                            </div>
                        </div>
                        <label for="city" class="cs-form-label">Your City</label>
                        <!-- Input City -->
                        <div class="relative cs-form-input-container">
                            <input id="city" required type="text" placeholder="" class="cs-course-input" />
                        </div>
                        <label for="diocese" class="cs-form-label">Your Diocese</label>
                        <!-- Input Diocese -->
                        <div class="relative cs-form-input-container">
                            <input id="diocese" required type="text" placeholder="" class="cs-course-input" />
                        </div>
                        <label for="parish" class="cs-form-label">Your Parish</label>
                        <!-- Input Parish -->
                        <div class="relative cs-form-input-container">
                            <input id="parish" required type="text" placeholder="" class="cs-course-input" />
                        </div>
                        <label for="phone" class="cs-form-label">Your Mobile Number</label>
                        <div class="relative flex flex-row gap-3 cs-form-input-container">
                            <!-- create a combobox with flag and number for mobile -->
                            <div class="relative">
                                <select id="country" required class="cs-course-phone-prefix">
                                    <option value=""></option>
                                    <option value="44">+44</option>
                                    <option value="1">+1</option>
                                    <option value="011">+011</option>
                                </select>
                                <div class="absolute top-0 right-0 flex flex-row items-center justify-center pointer-events-none cs-course-arrow">
                                    <svg width="23" height="10" viewBox="0 0 23 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.0365 8.90009C11.7091 9.10825 11.2909 9.10825 10.9635 8.90009L0.976737 2.5506C0.1323 2.01372 0.512612 0.706726 1.51327 0.706726L21.4867 0.706728C22.4874 0.706728 22.8677 2.01372 22.0233 2.55061L12.0365 8.90009Z"
                                            fill="#FEFBF7" />
                                    </svg>
                                </div>
                            </div>
                            <input id="phone" required type="text" placeholder="" class="cs-course-phone-number" />
                        </div>
                        <div class="w-full md:w-auto">
                            <span class="tracking-widest uppercase cs-fs-sm">agree to Terms and Conditions</span>
                            <button type="button" onclick="toggleAccordion(2)"
                                class="flex items-center justify-between w-full cs-course-accordion-button">
                                <span class="text-2">Show terms and conditions</span>
                                <span class="hidden text-2">Hide terms and conditions</span>
                                <span id="icon-2" class="transition-transform duration-300">
                                    <svg class="w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" fill="currentColor">
                                        <g>
                                            <g>
                                                <path d="M257,0C116.39,0,0,114.39,0,255s116.39,257,257,257s255-116.39,255-257S397.61,0,257,0z M392,285H287v107
                                                    c0,16.54-13.47,30-30,30c-16.54,0-30-13.46-30-30V285H120c-16.54,0-30-13.46-30-30c0-16.54,13.46-30,30-30h107V120
                                                    c0-16.54,13.46-30,30-30c16.53,0,30,13.46,30,30v105h105c16.53,0,30,13.46,30,30S408.53,285,392,285z" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </button>
                            <div id="content-2" class="overflow-hidden transition-all duration-300 ease-in-out max-h-0">
                                <div class="cs-course-accordion-content">
                                    In order to comply with GDPR data protection rules, please confirm by ticking the box that
                                    you agree that your personal details provided by you above may be retained and used by Mauro
                                    Iannicelli and his ‘Come & See Ministry’ (‘us’, ‘we’), and that we can contact you in
                                    relation to any courses or initiatives we organise in the future or which we believe to be
                                    relevant to what we do. We confirm that we won’t share your personal details with anyone and
                                    that they will be kept confidential unless otherwise requested by you. You can contact us
                                    anytime at info [[at]] comeandsee.org to withdraw your consent. By submitting this form you
                                    also agree to the Terms and Conditions which you can find at <a
                                        href="https://comeandsee.org/terms-and-conditions" target="_blank">https://comeandsee.org/terms-and-conditions</a>.
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center my-6">
                            <input id="agree" type="checkbox" value=""
                                class="cs-course-checkbox">
                            <label for="agree" class="cs-course-checkbox-label">Yes, i
                                agree <span class="font-normal">(required)<span></label>
                        </div>
                        <div class="flex flex-row justify-end w-full gap-4">
                            <button class="cs-course-reset">Reset</button>
                            <button class="cs-course-submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php require_once 'footer.php'; ?>
</body>

</html>