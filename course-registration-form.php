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
                <input id="birthdate" required type="date" class="cs-course-input">
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
                    <img src="/src/assets/select-arrow.svg" class="w-4 h-4" alt="Arrow">
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
                    <img src="/src/assets/select-arrow.svg" class="w-4 h-4" alt="Arrow">
                </div>
            </div>
            <label for="city" class="cs-form-label">Your City</label>
            <!-- Input City -->
            <div class="relative cs-form-input-container">
                <input id="city" required type="text" placeholder="" class="cs-course-input">
            </div>
            <label for="diocese" class="cs-form-label">Your Diocese</label>
            <!-- Input Diocese -->
            <div class="relative cs-form-input-container">
                <input id="diocese" required type="text" placeholder="" class="cs-course-input">
            </div>
            <label for="parish" class="cs-form-label">Your Parish</label>
            <!-- Input Parish -->
            <div class="relative cs-form-input-container">
                <input id="parish" required type="text" placeholder="" class="cs-course-input">
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
                        <img src="/src/assets/select-arrow.svg" class="w-4 h-4" alt="Arrow">
                    </div>
                </div>
                <input id="phone" required type="text" placeholder="" class="cs-course-phone-number">
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
