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
<div id="containerSidebar" class="z-40">
    <div class="navbar-menu relative z-40">
        <nav id="sidebar"
             class="fixed left-0 bottom-0 flex -translate-x-full flex-col overflow-y-auto cs-sidebar">
            <div class="px-5 pb-6">
                <button class="mr-1 cs-admin-expand">
                    <img src="/src/assets/plus.svg" alt="Expand" class="w-6 h-6">
                </button>
                <button class=" cs-admin-collapse">
                    <img src="/src/assets/minus.svg" alt="Collapse" class="w-6 h-6">
                </button>
            </div>
            <!-- one category / navigation group -->
            <div class="px-4 pb-6">
                <ul class="mb-8 text-sm font-medium">
                    <li>
                        <a class="active flex items-center cs-sidebar-item"
                           href="#">
                            <img src="/src/assets/dashboard.svg" alt="Dashboard" class="w-5 h-5">
                            <span class="select-none uppercase">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center cs-sidebar-item"
                           href="#">
                            <img src="/src/assets/users.svg" alt="Users" class="w-5 h-5">
                            <span class="select-none uppercase">Users</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center cs-sidebar-item"
                           href="#">
                            <span class="select-none uppercase">Events</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center cs-sidebar-item"
                           href="#">
                            <img src="/src/assets/membership.svg" alt="Membership" class="w-5 h-5">
                            <span class="select-none uppercase">Membership</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center cs-sidebar-item  cs-admin-submenu-button"
                           href="#">
                            <img src="/src/assets/stats.svg" alt="Stats" class="w-5 h-5">
                            <span class="select-none uppercase">Stats</span>
                            <span class="flex justify-end flex-1 ml-auto">
                                <img src="src/assets/admin-arrow.svg"
                                     class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                     alt="Arrow Down" />

                            </span>
                        </a>
                        <ul class="pl-4 cs-admin-submenu mr-0 hidden">
                            <li>
                                <a class="flex items-center cs-sidebar-item cs-admin-submenu-button"
                                   href="#">
                                    <span class="select-none uppercase">Devices</span>
                                    <span class="flex justify-end flex-1 ml-auto">
                                        <img src="src/assets/admin-arrow.svg"
                                             class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                             alt="Arrow Down" />

                                    </span>
                                </a>
                                <ul class="pl-4 cs-admin-submenu mr-0 hidden">
                                    <li>
                                        <a class="flex items-center cs-sidebar-item"
                                           href="#">
                                            <span class="select-none uppercase">Browsers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center cs-sidebar-item"
                                           href="#">
                                            <span class="select-none uppercase">O.S.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center cs-sidebar-item"
                                           href="#">
                                            <span class="select-none uppercase">Resolutions</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="flex items-center cs-sidebar-item"
                                   href="#">
                                    <span class="select-none uppercase">Online</span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center cs-sidebar-item"
                                   href="#">
                                    <span class="select-none uppercase">Pending</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- navigation group end-->
        </nav>
    </div>
    <div class="mx-auto lg:ml-80"></div>
</div>
<main class="flex-grow mt-20 md:mt-0">
    <nav aria-label="breadcrumb" class="w-max justify-self-end mt-3">
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
                    <div class="w-full flex flex-col md:flex-row gap-2 md:items-center justify-between">
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