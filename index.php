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
                <div class="cs-fs-sm"><a href="/login">Login</a></div>
                <div class="cs-fs-sm"><a href="/auth">Auth</a></div>
                <div class="cs-fs-sm"><a href="/course-registration">Course Registration</a></div>
                <div class="cs-fs-sm"><a href="/admin">Admin</a></div>
                <div class="cs-fs-sm"><a href="/your-dashboard">Your Dashboard</a></div>
                <div class="cs-fs-sm"><a href="/bible-timeline-course">Bible Timeline Course</a></div>
            </div>

            <div class="cs-fs-xs">(cs-fs-xs) The quick brown fox jumps over the lazy dog</div>
            <div class="cs-fs-sm">(cs-fs-sm) The quick brown fox jumps over the lazy dog</div>
            <div class="cs-fs-base">(cs-fs-base) The quick brown fox jumps over the lazy dog</div>
            <div class="cs-fs-lg">(cs-fs-lg) The quick brown fox jumps over the lazy dog</div>
            <div class="cs-fs-xl">(cs-fs-xl) The quick brown fox jumps over the lazy dog</div>

        </div>
    </main>
    <?php require_once 'footer.php'; ?>
</body>

</html>