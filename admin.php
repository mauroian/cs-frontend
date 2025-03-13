<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="/src/input.css" >
    <script type="module" src="/src/admin.js"></script>
    <title>Come & See</title>
</head>

<body class="flex flex-col min-h-screen">
    <?php require_once 'header-admin.php'; ?>

    <main class="flex-grow mt-20 duration-300 transform md:mt-0 md:ml-80 main-admin">
        <?php require_once 'add-user.php'; ?>
    </main>
</body>

</html>