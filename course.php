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
<main class="flex-grow flex flex-col items-center justify-center mt-20 md:mt-0 mb-5 gap-5">
    <div class="flex flex-col items-center bg-cs-red-main w-full text-white py-12">
        <span class="uppercase tracking-widest">course registration</span>
        <h1 class="font-serif font-semibold text-center text-7xl italic">Bible Timeline Course</h1>
        <span class="uppercase tracking-widest cs-fs-xl ">September 2024</span>
    </div>
    <div class="flex flex-col items-center w-full md:w-auto rounded-[30px] max-w-[650px]">
        <!-- Box Titolo -->
        <div class="cs-course-header">
            Create an Account
        </div>
        <!-- Box Form -->
        <div class="cs-course-container bg-cs-paper-shade">
            <form class="flex flex-col items-start w-full">
                <label for="firstname" class="cs-form-label">First Name</label>
                <!-- Input Firstname -->
                <div class="relative cs-form-input-container">
                    <input id="firstname" required type="text" placeholder="" class="cs-course-input"/>
                </div>
                <label for="lastname" class="cs-form-label">Last Name</label>
                <!-- Input Lastname -->
                <div class="relative cs-form-input-container">
                    <input id="lastname" required type="text" placeholder="" class="cs-course-input"/>
                </div>
                <label for="email" class="cs-form-label">Email</label>
                <!-- Input Email -->
                <div class="relative cs-form-input-container">
                    <input id="email" required type="text" placeholder="" class="cs-course-input"/>
                    <img src="/src/assets/email-login.svg"/>
                </div>
                <label for="confirm_email" class="cs-form-label">Confirm Email</label>
                <!-- Input Email -->
                <div class="relative cs-form-input-container">
                    <input id="confirm_email" required type="text" placeholder="" class="cs-course-input"/>
                    <img src="/src/assets/email-login.svg"/>
                </div>
                <label for="password" class="cs-form-label">Password</label>
                <!-- Input Phone -->
                <div class="relative cs-form-input-container">
                    <input id="password" required type="password" placeholder="" class="cs-course-input"/>
                    <img src="/src/assets/password-login.svg"/>
                    <button type="button" class="cs-password-eye absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-cs-red-dark" onclick="togglePassword(this)">
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
                    <input id="confirm_password" required type="password" placeholder="" class="cs-course-input"/>
                    <img src="/src/assets/password-login.svg"/>
                    <button type="button" class="cs-password-eye absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-cs-red-dark" onclick="togglePassword(this)">
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
                    <span class="uppercase cs-fs-sm tracking-widest">agree to Terms and Conditions</span>
                    <button type="button" onclick="toggleAccordion(1)"
                            class="w-full flex justify-between items-center cs-course-accordion-button">
                        <span class="text-1">Show terms and conditions</span>
                        <span class="text-1 hidden">Hide terms and conditions</span>
                        <span id="icon-1" class="transition-transform duration-300">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                          </svg>
                        </span>
                    </button>
                    <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
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

    <div class="flex flex-col items-center w-full md:w-auto rounded-[30px] max-w-[650px]">
        <!-- Box Titolo -->
        <div class="cs-course-header">
            Course Registration
        </div>
        <!-- Box Form -->
        <div class="cs-course-container bg-cs-paper-shade">
            <p class="cs-course-text mb-6">
                Our long-term vision is to create <span class="font-bold">faith-sharing small groups</span> according to
                similar age brackets, balanced gender ratio & location.
            </p>
            <form class="flex flex-col items-start w-full">
                <label for="birthdate" class="cs-form-label">Your Year of birth</label>
                <!-- Input Firstname -->
                <div class="relative cs-form-input-container md:!w-1/2">
                    <input id="birthdate" required type="date" placeholder="" class="cs-course-input  md:!min-w-full"/>
                </div>
                <label for="sex" class="cs-form-label">Your sex</label>
                <!-- Input Lastname -->
                <div class="relative cs-form-input-container  md:!w-1/2">
                    <select id="sex" required class="cs-course-select md:!min-w-full">
                        <option value=""></option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                    <div class="cs-course-arrow absolute top-0 right-0 flex flex-row items-center justify-center pointer-events-none">
                        <svg width="23" height="10" viewBox="0 0 23 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.0365 8.90009C11.7091 9.10825 11.2909 9.10825 10.9635 8.90009L0.976737 2.5506C0.1323 2.01372 0.512612 0.706726 1.51327 0.706726L21.4867 0.706728C22.4874 0.706728 22.8677 2.01372 22.0233 2.55061L12.0365 8.90009Z"
                                  fill="#FEFBF7"/>
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
                    <div class="cs-course-arrow absolute top-0 right-0 flex flex-row items-center justify-center pointer-events-none">
                        <svg width="23" height="10" viewBox="0 0 23 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.0365 8.90009C11.7091 9.10825 11.2909 9.10825 10.9635 8.90009L0.976737 2.5506C0.1323 2.01372 0.512612 0.706726 1.51327 0.706726L21.4867 0.706728C22.4874 0.706728 22.8677 2.01372 22.0233 2.55061L12.0365 8.90009Z"
                                  fill="#FEFBF7"/>
                        </svg>
                    </div>
                </div>
                <label for="city" class="cs-form-label">Your City</label>
                <!-- Input City -->
                <div class="relative cs-form-input-container">
                    <input id="city" required type="text" placeholder="" class="cs-course-input"/>
                </div>
                <label for="diocese" class="cs-form-label">Your Diocese</label>
                <!-- Input Diocese -->
                <div class="relative cs-form-input-container">
                    <input id="diocese" required type="text" placeholder="" class="cs-course-input"/>
                </div>
                <label for="parish" class="cs-form-label">Your Parish</label>
                <!-- Input Parish -->
                <div class="relative cs-form-input-container">
                    <input id="parish" required type="text" placeholder="" class="cs-course-input"/>
                </div>
                <label for="phone" class="cs-form-label">Your Mobile Number</label>
                <div class="relative cs-form-input-container flex md:flex-row flex-col gap-3">
                    <!-- create a combobox with flag and number for mobile -->
                    <div class="relative">
                        <select id="country" required class="cs-course-phone-prefix">
                            <option value=""></option>
                            <option value="44">+44</option>
                            <option value="1">+1</option>
                            <option value="011">+011</option>
                        </select>
                        <div class="cs-course-arrow absolute top-0 right-0 flex flex-row items-center justify-center pointer-events-none">
                            <svg width="23" height="10" viewBox="0 0 23 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0365 8.90009C11.7091 9.10825 11.2909 9.10825 10.9635 8.90009L0.976737 2.5506C0.1323 2.01372 0.512612 0.706726 1.51327 0.706726L21.4867 0.706728C22.4874 0.706728 22.8677 2.01372 22.0233 2.55061L12.0365 8.90009Z"
                                      fill="#FEFBF7"/>
                            </svg>
                        </div>
                    </div>
                    <input id="phone" required type="text" placeholder="" class="cs-course-phone-number"/>
                </div>
                <div class="w-full md:w-auto">
                    <span class="uppercase cs-fs-sm tracking-widest">agree to Terms and Conditions</span>
                    <button type="button" onclick="toggleAccordion(2)"
                            class="w-full flex justify-between items-center cs-course-accordion-button">
                        <span class="text-2">Show terms and conditions</span>
                        <span class="text-2 hidden">Hide terms and conditions</span>
                        <span id="icon-2" class="transition-transform duration-300">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                          </svg>
                        </span>
                    </button>
                    <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
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
    <div class="flex flex-col items-center w-[98%] md:w-auto shadow-cs-all-around rounded-[30px]">
        <!-- Box Form -->
        <div class="cs-form-container !text-cs-red-dark rounded-[30px]">
            <div class="cs-form-title">
                Thank you.
            </div>
            <div class="cs-form-text  !max-w-[650px]">
                You are now registered to the Bible Timeline Course.
            </div>
        </div>
    </div>
</main>
<?php require_once 'footer.php'; ?>
</body>

</html>