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
        <div class="flex flex-col items-center gap-2 mt-8 mb-32">
            <div class="flex flex-col gap-2 mb-8">
                <div class="cs-fs-3xl">Home.</div>
                <div class="mt-6 font-semibold cs-fs-base">Quick links:</div>
                <div class="flex flex-col gap-2 ml-4">
                    <div class="cs-fs-sm"><a href="/login.php" target="_blank">Login</a></div>
                    <div class="cs-fs-sm"><a href="/auth.php" target="_blank">Auth forms</a></div>
                    <div class="cs-fs-sm"><a href="/course-registration.php" target="_blank">Course Registration</a></div>
                    <div class="cs-fs-sm"><a href="/endorsements.php" target="_blank">Endorsements</a></div>
                    <div class="cs-fs-sm"><a href="/testimonials.php" target="_blank">Testimonials</a></div>
                    <div class="cs-fs-sm"><a href="/our-gallery.php" target="_blank">Our gallery</a></div>
                    <div class="cs-fs-sm"><a href="/ascension-press.php" target="_blank">Ascension Press</a></div>
                    <div class="cs-fs-sm"><a href="/your-area.php" target="_blank">Your Area</a></div>
                    <div class="cs-fs-sm"><a href="/bible-timeline-course.php" target="_blank">Bible Timeline Course</a></div>
                    <div class="cs-fs-sm"><a href="/admin.php" target="_blank">Admin</a></div>
                    <div class="font-bold cs-fs-sm"><a href="/index-test-large-menu.php" target="_blank">Index Test Large Menu</a></div>
                </div>
                <!--
            <div class="cs-fs-3xs">(cs-fs-3xs) The quick brown fox jumps over the lazy dog</div>
            <div class="cs-fs-2xs">(cs-fs-2xs) The quick brown fox jumps over the lazy dog</div>
            <div class="cs-fs-xs">(cs-fs-xs) The quick brown fox jumps over the lazy dog</div>
            <div class="cs-fs-sm">(cs-fs-sm) The quick brown fox jumps over the lazy dog</div>
            <div class="cs-fs-base">(cs-fs-base) The quick brown fox jumps over the lazy dog</div>
            <div class="cs-fs-lg">(cs-fs-lg) The quick brown fox jumps over the lazy dog</div>
            <div class="cs-fs-xl">(cs-fs-xl) The quick brown fox jumps over the lazy dog</div>
-->

            </div>
    </main>
    <?php require_once 'footer.php'; ?>
</body>

</html>