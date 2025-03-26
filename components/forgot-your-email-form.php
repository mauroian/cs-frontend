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