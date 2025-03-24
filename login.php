<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/input.css">
    <script type="module" src="/src/main.js"></script>
    <title>Login</title>
</head>

<body class="flex flex-col min-h-screen">

    <?php require_once 'header.php'; ?>

    <main class="flex flex-col items-center justify-items min-h-[746px] cs-main px-5 sm:px-8 cs-bg-login">
        <!-- Outer Login Box -->
        <?php require_once 'login-form.php' ?>
    </main>
    <?php require_once 'footer.php'; ?>
</body>

</html>