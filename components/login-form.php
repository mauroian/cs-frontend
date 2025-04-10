<div class="mt-28 sm:mt-36 cs-form-box">
    <!-- Box Titolo -->
    <div class="relative flex flex-row items-baseline justify-center cs-form-login-header">
        <img src="/src/assets/logos/cs-logo-red-bg-circle-paper-h200.png" class="absolute -top-[70px] block h-28" alt="Login">
        <span class="cs-form-header-bigger-letter">W</span>elcome<span class="cs-form-header-bigger-letter">&nbsp;B</span>ack.
    </div>
    <!-- Box Form -->
    <div class="cs-form-container">
        <form class="flex flex-col items-start w-full">
            <label for="email" class="cs-form-label">Email</label>
            <!-- Input Email -->
            <div class="relative w-full my-2">
                <input id="email" required type="text" placeholder="Your email address" class="cs-form-input cs-form-input-icon">
                <img src="/src/assets/email-login.svg" alt="Email">
            </div>
            <a class="cs-form-link" href="#">Forgot email?</a>
            <label for="password" class="mt-6 cs-form-label">Password</label>
            <!-- Input Password -->
            <div class="relative w-full my-2">
                <input id="password" required type="password" placeholder="Enter your password" class="cs-form-input cs-form-input-icon">
                <img src="/src/assets/password-login.svg" alt="Password">
                <button type="button" class="absolute inset-y-0 z-20 flex items-center px-3 cursor-pointer cs-password-eye end-0 text-cs-red-main" onclick="togglePassword(this)">
                    <img src="/src/assets/password-eye.svg" alt="Mask" class="shrink-0 size-5 hs-password-deactive">
                    <img src="/src/assets/password-eye-closed.svg" alt="Mask" class="shrink-0 size-5 hs-password-active">
                </button>
            </div>
            <a class="cs-form-link" href="#">Reset password?</a>
            <button class="cs-form-submit">Login</button>
        </form>
    </div>
</div>