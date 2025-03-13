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

    <main class="flex-grow cs-main">

        <!-- Page Title container -->
        <div class="flex flex-col items-center w-full px-5 py-6 text-white bg-cs-red-main">
            <span class="tracking-widest uppercase sm:cs-fs-sm cs-fs-sm">course registration!</span>
            <h1 class="font-sans  font-semibold leading-[45px] my-3 text-center cs-fs-2xl sm:cs-fs-3xl">Bible Timeline Course</h1>
            <span class="tracking-widest uppercase sm:cs-fs-sm cs-fs-sm">September 2024</span>
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
                            <input id="firstname" required type="text" placeholder="" class="cs-course-input" >
                        </div>
                        <label for="lastname" class="cs-form-label">Last Name</label>
                        <!-- Input Lastname -->
                        <div class="relative cs-form-input-container">
                            <input id="lastname" required type="text" placeholder="" class="cs-course-input" >
                        </div>
                        <label for="email" class="cs-form-label">Email</label>
                        <!-- Input Email -->
                        <div class="relative cs-form-input-container">
                            <input id="email" required type="text" placeholder="" class="cs-course-input cs-course-input-icon" >
                            <img src="/src/assets/email-login.svg" alt="Email">
                        </div>
                        <label for="confirm_email" class="cs-form-label">Confirm Email</label>
                        <!-- Input Email -->
                        <div class="relative cs-form-input-container">
                            <input id="confirm_email" required type="text" placeholder="" class="cs-course-input cs-course-input-icon" >
                            <img src="/src/assets/email-login.svg" alt="Email">
                        </div>
                        <label for="password" class="cs-form-label">Password</label>
                        <!-- Input Phone -->
                        <div class="relative cs-form-input-container">
                            <input id="password" required type="password" placeholder="" class="cs-course-input cs-course-input-icon" >
                            <img src="/src/assets/password-login.svg" alt="Password">
                            <button type="button" class="absolute inset-y-0 z-20 flex items-center px-3 cursor-pointer cs-password-eye end-0 text-cs-red-dark" onclick="togglePassword(this)">
                                <img src="/src/assets/password-eye.svg" alt="Mask" class="shrink-0 size-5 hs-password-deactive">
                                <img src="/src/assets/password-eye-closed.svg" alt="Mask" class="shrink-0 size-5 hs-password-active">
                            </button>
                        </div>
                        <label for="confirm_password" class="cs-form-label">Confirm Password</label>
                        <!-- Input Phone -->
                        <div class="relative cs-form-input-container">
                            <input id="confirm_password" required type="password" placeholder="" class="cs-course-input cs-course-input-icon" >
                            <img src="/src/assets/password-login.svg" alt="Password">
                            <button type="button" class="absolute inset-y-0 z-20 flex items-center px-3 cursor-pointer cs-password-eye end-0 text-cs-red-dark" onclick="togglePassword(this)">
                                <img src="/src/assets/password-eye.svg" alt="Mask" class="shrink-0 size-5 hs-password-deactive">
                                <img src="/src/assets/password-eye-closed.svg" alt="Mask" class="shrink-0 size-5 hs-password-active">
                            </button>
                        </div>
                        <div class="w-full md:w-auto">
                            <span class="tracking-widest uppercase cs-fs-sm">agree to Terms and Conditions</span>
                            <button type="button" onclick="toggleAccordion(1)"
                                class="flex items-center justify-between w-full cs-course-accordion-button">
                                <span class="text-1">Show terms and conditions</span>
                                <span class="hidden text-1">Hide terms and conditions</span>
                                <span id="icon-1" class="transition-transform duration-300">
                                    <img src="/src/assets/accordion-expand-red.svg" class="w-6 h-6" alt="Expand" >
                                    <img src="/src/assets/accordion-collapse-red.svg" class="w-6 h-6 hidden" alt="Expand" >
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
                                agree <span class="font-normal">(required)</span></label>
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
                <div class="cs-course-container">
                    <p class="mb-6 cs-course-text">
                        Our long-term vision is to create <span class="font-bold">faith-sharing small groups</span> according to
                        similar age brackets, balanced gender ratio & location.
                    </p>
                    <form class="flex flex-col items-start w-full">
                        <label for="birthdate" class="cs-form-label">Your Year of birth</label>
                        <!-- Input YOB -->
                        <div class="relative cs-form-input-container cs-form-small-container">
                            <input id="birthdate" required type="date" class="cs-course-input" >
                        </div>
                        <label for="sex" class="cs-form-label">Your gender</label>
                        <!-- Input Sex -->
                        <div class="relative cs-form-input-container cs-form-small-container">
                            <select id="sex" required class="cs-course-select">
                                <option value="">-</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                            <div class="absolute top-0 right-0 flex flex-row items-center justify-center pointer-events-none cs-course-arrow">
                                <img src="/src/assets/select-arrow.svg" class="w-4 h-4" alt="Arrow" >
                            </div>
                        </div>
                        <label for="country" class="cs-form-label">Your Country</label>
                        <!-- Input Country -->
                        <div class="relative cs-form-input-container">
                            <select id="country" required class="cs-course-select">
                                <option value="">-</option>
                                <option value="UK">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                            </select>
                            <div class="absolute top-0 right-0 flex flex-row items-center justify-center pointer-events-none cs-course-arrow">
                                <img src="/src/assets/select-arrow.svg" class="w-4 h-4" alt="Arrow" >
                            </div>
                        </div>
                        <label for="city" class="cs-form-label">Your City</label>
                        <!-- Input City -->
                        <div class="relative cs-form-input-container">
                            <input id="city" required type="text" placeholder="" class="cs-course-input" >
                        </div>
                        <label for="diocese" class="cs-form-label">Your Diocese</label>
                        <!-- Input Diocese -->
                        <div class="relative cs-form-input-container">
                            <input id="diocese" required type="text" placeholder="" class="cs-course-input" >
                        </div>
                        <label for="parish" class="cs-form-label">Your Parish</label>
                        <!-- Input Parish -->
                        <div class="relative cs-form-input-container">
                            <input id="parish" required type="text" placeholder="" class="cs-course-input" >
                        </div>
                        <label for="phone" class="cs-form-label">Your Mobile Number</label>
                        <div class="relative flex flex-row gap-3 cs-form-input-container">
                            <!-- create a combobox with flag and number for mobile -->
                            <div class="relative">
                                <select required class="cs-course-phone-prefix">
                                    <option value="">-</option>
                                    <option value="44">+44</option>
                                    <option value="1">+1</option>
                                    <option value="011">+011</option>
                                </select>
                                <div class="absolute top-0 right-0 flex flex-row items-center justify-center pointer-events-none cs-course-arrow">
                                    <img src="/src/assets/select-arrow.svg" class="w-4 h-4" alt="Arrow" >
                                </div>
                            </div>
                            <input id="phone" required type="text" placeholder="" class="cs-course-phone-number" >
                        </div>
                        <div class="w-full md:w-auto">
                            <span class="tracking-widest uppercase cs-fs-sm">agree to Terms and Conditions</span>
                            <button type="button" onclick="toggleAccordion(2)"
                                class="flex items-center justify-between w-full cs-course-accordion-button">
                                <span class="text-2">Show terms and conditions</span>
                                <span class="hidden text-2">Hide terms and conditions</span>
                                <span id="icon-2" class="transition-transform duration-300">
                                    <img src="/src/assets/accordion-expand-red.svg" class="w-6 h-6" alt="Expand" >
                                    <img src="/src/assets/accordion-collapse-red.svg" class="w-6 h-6 hidden" alt="Expand" >
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
                            <input id="agree_2" type="checkbox" value=""
                                class="cs-course-checkbox">
                            <label for="agree_2" class="cs-course-checkbox-label">Yes, i
                                agree <span class="font-normal">(required)</span></label>
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