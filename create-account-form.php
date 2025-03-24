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
                <input id="firstname" required type="text" placeholder="" class="cs-course-input">
            </div>
            <label for="lastname" class="cs-form-label">Last Name</label>
            <!-- Input Lastname -->
            <div class="relative cs-form-input-container">
                <input id="lastname" required type="text" placeholder="" class="cs-course-input">
            </div>
            <label for="email" class="cs-form-label">Email</label>
            <!-- Input Email -->
            <div class="relative cs-form-input-container">
                <input id="email" required type="text" placeholder="" class="cs-course-input cs-course-input-icon !bg-cs-red-bright/20">
                <img src="/src/assets/email-login.svg" alt="Email">
                <span class="p-2 text-sm text-cs-red-main">This email is already in use</span>
            </div>
            <label for="confirm_email" class="cs-form-label">Confirm Email</label>
            <!-- Input Email -->
            <div class="relative cs-form-input-container">
                <input id="confirm_email" required type="text" placeholder="" class="cs-course-input cs-course-input-icon">
                <img src="/src/assets/email-login.svg" alt="Email">
            </div>
            <label for="password" class="cs-form-label">Password</label>
            <!-- Input Phone -->
            <div class="relative cs-form-input-container">
                <input id="password" required type="password" placeholder="" class="cs-course-input cs-course-input-icon">
                <img src="/src/assets/password-login.svg" alt="Password">
                <button type="button" class="absolute inset-y-0 z-20 flex items-center px-3 cursor-pointer cs-password-eye end-0 text-cs-red-dark" onclick="togglePassword(this)">
                    <img src="/src/assets/password-eye.svg" alt="Mask" class="shrink-0 size-5 hs-password-deactive">
                    <img src="/src/assets/password-eye-closed.svg" alt="Mask" class="shrink-0 size-5 hs-password-active">
                </button>
            </div>
            <label for="confirm_password" class="cs-form-label">Confirm Password</label>
            <!-- Input Phone -->
            <div class="relative cs-form-input-container">
                <input id="confirm_password" required type="password" placeholder="" class="cs-course-input cs-course-input-icon">
                <img src="/src/assets/password-login.svg" alt="Password">
                <button type="button" class="absolute inset-y-0 z-20 flex items-center px-3 cursor-pointer cs-password-eye end-0 text-cs-red-dark" onclick="togglePassword(this)">
                    <img src="/src/assets/password-eye.svg" alt="Mask" class="shrink-0 size-5 hs-password-deactive">
                    <img src="/src/assets/password-eye-closed.svg" alt="Mask" class="shrink-0 size-5 hs-password-active">
                </button>
            </div>
            <div class="w-full md:w-auto">
                <span class="tracking-widest uppercase cs-fs-sm">agree to Terms and Conditions</span>
                <button type="button" onclick="toggleAccordion(this)"
                        class="flex items-center justify-between w-full cs-course-accordion-button">
                    <span class="text">Show terms and conditions</span>
                    <span class="hidden text">Hide terms and conditions</span>
                    <span class="transition-transform duration-300 cs-icon">
                                        <img src="/src/assets/accordion-expand-red.svg" class="w-6 h-6" alt="Expand">
                                        <img src="/src/assets/accordion-collapse-red.svg" class="hidden w-6 h-6" alt="Expand">
                                    </span>
                </button>
                <div class="overflow-hidden transition-all duration-300 ease-in-out cs-content max-h-0">
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
            <div class="flex items-center justify-center mx-auto max-w-2/3">
                                <span class="p-2 rounded-md text-cs-red-main bg-cs-red-bright/20">
                                    Messaggio di errore globale!
                                </span>
            </div>
            <div class="flex flex-row justify-end w-full gap-4">
                <button class="cs-course-reset">Reset</button>
                <button class="cs-course-submit">Submit</button>
            </div>
        </form>
    </div>
</div>