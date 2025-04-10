<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/input.css">
    <script type="module" src="/src/main.js"></script>
    <title>Auth</title>
</head>

<body class="flex flex-col min-h-screen">
    <?php require_once 'components/header.php'; ?>
    <main class="cs-main">
        <div class="px-5 cs-main-div gap-36 pt-14 sm:px-8">
            <!-- Reset Password Form -->
            <?php require_once 'components/reset-password-form.php' ?>
            <!-- Reset Password Thank You -->
            <?php require_once 'components/reset-password-thankyou.php' ?>
            <!-- Reset Password Choose Form -->
            <?php require_once 'components/reset-password-choose-form.php' ?>
            <!-- Reset Password Choose Thank You -->
            <?php require_once 'components/reset-password-choose-thankyou.php' ?>
            <!-- Forgot Your Email Form -->
            <?php require_once 'components/forgot-your-email-form.php' ?>
            <!-- Forgot Your Email Thank You -->
            <?php require_once 'components/forgot-your-email-thankyou.php' ?>
        </div>
    </main>
    <?php require_once 'components/footer.php'; ?>
</body>

</html>