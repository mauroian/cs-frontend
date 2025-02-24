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
<?php require_once 'header_admin.php'; ?>

<main class="flex-grow mt-20 md:mt-0 md:ml-0 transform duration-300 main-admin">
    <nav aria-label="breadcrumb" class="w-max justify-self-end mt-3 hidden md:flex">
        <ol class="flex w-full flex-wrap items-center rounded-md uppercase px-4 py-2">
            <li class="flex cursor-pointer items-center cs-admin-breadcrumb">
                <a href="#">Membership</a>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="h-4 w-4 ml-1">
                    <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                </svg>
            </li>
            <li class="flex cursor-pointer items-center cs-admin-breadcrumb">
                <a href="#">Add Membership</a>
            </li>
        </ol>
    </nav>
    <!-- create a centered box containing a crud from -->
    <section class="">
        <div class="py-4 px-4 mx-auto max-w-5xl lg:py-8">
            <h1 class="mb-5 cs-fs-xl font-semibold"> Add Membership</h1>
            <form action="#">
                <div class="flex flex-col gap-3 w-full border border-cs-grey/20 p-6 rounded-[30px]">
                    <div class="w-full flex flex-col md:flex-row gap-2 md:items-center justify-between">
                        <label for="level" class="cs-fs-sm">Level</label>
                        <input type="text" name="level" id="level" class="cs-admin-form-input" placeholder="Type product name" required="">
                    </div>
                    <div class="w-full flex flex-col md:flex-row gap-2 md:items-center justify-between">
                        <label for="name" class="cs-fs-sm">Name</label>
                        <input type="text" name="name" id="name" class="cs-admin-form-input" placeholder="Type product name" required="">
                    </div>
                    <div class="w-full flex flex-col md:flex-row gap-2 md:items-center justify-between">
                        <label for="description" class="cs-fs-sm">Description</label>
                        <textarea id="description" rows="8" class="cs-admin-form-input" placeholder="Your description here"></textarea>
                    </div>
                    <div class="w-full flex flex-col md:flex-row gap-2 md:items-center justify-between">
                        <label for="default" class="cs-fs-sm">Default</label>
                        <input type="text" name="default" id="default" class="cs-admin-form-input" placeholder="Type product name" required="">
                    </div>
                    <div class="w-full flex flex-col md:flex-row gap-2 md:items-center justify-end mt-4 md:mt-0">
                        <button type="reset" class="inline-flex items-center justify-center cs-admin-form-button">
                            Cancel
                        </button>
                        <button type="submit" class="inline-flex items-center justify-center cs-admin-form-button">
                            Save
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </section>
</main>
</body>

</html>