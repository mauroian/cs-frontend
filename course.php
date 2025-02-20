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
    <div class="flex flex-col items-center w-[98%] md:w-auto rounded-[30px] max-w-[650px]">
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
                    <img src="/src/assets/email-login.svg" class="absolute top-5 left-5"/>
                </div>
                <label for="confirm_email" class="cs-form-label">Confirm Email</label>
                <!-- Input Email -->
                <div class="relative cs-form-input-container">
                    <input id="confirm_email" required type="text" placeholder="" class="cs-course-input"/>
                    <img src="/src/assets/email-login.svg" class="absolute top-5 left-5"/>
                </div>
                <label for="password" class="cs-form-label">Password</label>
                <!-- Input Phone -->
                <div class="relative cs-form-input-container">
                    <input id="password" required type="password" placeholder="" class="cs-course-input"/>
                    <img src="/src/assets/password-login.svg" class="absolute top-5 left-5"/>
                </div>
                <label for="confirm_password" class="cs-form-label">Confirm Password</label>
                <!-- Input Phone -->
                <div class="relative cs-form-input-container">
                    <input id="confirm_password" required type="password" placeholder="" class="cs-course-input"/>
                    <img src="/src/assets/password-login.svg" class="absolute top-5 left-5"/>

                </div>
                <div class="w-full md:w-auto">
                    <span class="uppercase cs-fs-base tracking-widest">agree to Terms and Conditions</span>
                    <button type="button" onclick="toggleAccordion(1)"
                            class="w-full mt-4 uppercase flex justify-between items-center py-2 rounded-[30px] px-5 bg-cs-paper-dark text-cs-red-dark">
                        <span class="text-1">Show terms and conditions</span>
                        <span class="text-1 hidden">Hide terms and conditions</span>
                        <span id="icon-1" class="text-cs-red-dark transition-transform duration-300">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                          </svg>
                        </span>
                    </button>
                    <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 text-sm px-3 text-black bg-cs-paper cs-fs-sm">
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
                           class="appearance-none w-4 h-4 text-cs-red-dark bg-white border border-cs-red-dark rounded-md">
                    <label for="agree" class="ms-2 uppercase cs-fs-base font-bold tracking-wider text-black">Yes, i
                        agree <span class="font-normal">(required)<span></label>
                </div>
                <div class="flex flex-row justify-end w-full gap-4">
                    <button class="cs-course-reset">Reset</button>
                    <button class="cs-course-submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="flex flex-col items-center w-[98%] md:w-auto rounded-[30px] max-w-[650px]">
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
                <div class="relative cs-form-input-container">
                    <input id="birthdate" required type="date" placeholder="" class="cs-course-input md:!w-1/2"/>
                </div>
                <label for="sex" class="cs-form-label">Your sex</label>
                <!-- Input Lastname -->
                <div class="relative cs-form-input-container md:!w-1/2">
                    <select id="sex" required class="cs-course-select">
                        <option value=""></option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                    <div class="cs-course-arrow absolute top-0 right-0 bg-cs-red-dark w-14 h-[3.4rem] rounded-r-xl text-white flex flex-row items-center justify-center pointer-events-none">
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
                    <div class="cs-course-arrow absolute top-0 right-0 bg-cs-red-dark w-14 h-[3.4rem] rounded-r-xl text-white flex flex-row items-center justify-center pointer-events-none">
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
                        <div class="cs-course-arrow absolute top-0 right-0 bg-cs-red-dark w-14 h-[3.4rem] rounded-r-xl text-white flex flex-row items-center justify-center pointer-events-none">
                            <svg width="23" height="10" viewBox="0 0 23 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0365 8.90009C11.7091 9.10825 11.2909 9.10825 10.9635 8.90009L0.976737 2.5506C0.1323 2.01372 0.512612 0.706726 1.51327 0.706726L21.4867 0.706728C22.4874 0.706728 22.8677 2.01372 22.0233 2.55061L12.0365 8.90009Z"
                                      fill="#FEFBF7"/>
                            </svg>
                        </div>
                    </div>
                    <input id="phone" required type="text" placeholder="" class="cs-course-phone-number"/>
                </div>
                <div class="w-full md:w-auto">
                    <span class="uppercase cs-fs-base tracking-widest">agree to Terms and Conditions</span>
                    <button type="button" onclick="toggleAccordion(2)"
                            class="w-full mt-4 uppercase flex justify-between items-center py-2 rounded-[30px] px-5 bg-cs-paper-dark text-cs-red-dark">
                        <span class="text-2">Show terms and conditions</span>
                        <span class="text-2 hidden">Hide terms and conditions</span>
                        <span id="icon-2" class="text-cs-red-dark transition-transform duration-300">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                          </svg>
                        </span>
                    </button>
                    <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="pb-5 px-3 text-sm text-black bg-cs-paper cs-fs-sm">
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
                           class="appearance-none w-4 h-4 text-cs-red-dark bg-white border border-cs-red-dark rounded-md">
                    <label for="agree" class="ms-2 uppercase cs-fs-base font-bold tracking-wider text-black">Yes, i
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