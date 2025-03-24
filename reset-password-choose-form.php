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