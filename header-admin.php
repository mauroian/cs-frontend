<header class="fixed top-0 z-50 w-full bg-cs-blue-main md:relative" id="navbar">
    <!-- Container nav for header (desktop & mobile) -->
    <nav class="z-10 flex items-center w-full cs-admin-header" aria-label="Header">
        <!-- Hamburger button (mobile) -->
        <div class="flex justify-start cs-mobile-menu-container">
            <button id="btnSidebarToggler" class="inline-flex items-center justify-center w-10 h-10 text-center transition bg-white rounded-lg cs-navbar-button group"
                aria-pressed="false"
                onclick="this.setAttribute('aria-pressed', !(this.getAttribute('aria-pressed') === 'true'))">
                <svg class="w-6 h-6 pointer-events-none fill-cs-blue-main" viewBox="0 0 16 16"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect class="origin-center -translate-y-[5px] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.1)] group-[[aria-pressed=true]]:translate-x-0 group-[[aria-pressed=true]]:translate-y-0 group-[[aria-pressed=true]]:rotate-[315deg]"
                        y="7" width="16" height="2" rx="1"></rect>
                    <rect class="origin-center transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.8)] group-[[aria-pressed=true]]:rotate-45"
                        y="7" width="16" height="2" rx="1"></rect>
                    <rect class="origin-center translate-y-[5px] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.1)] group-[[aria-pressed=true]]:translate-y-0 group-[[aria-pressed=true]]:rotate-[135deg]"
                        y="7" width="16" height="2" rx="1"></rect>
                </svg>
            </button>
        </div>
        <!-- Container div for logo (desktop & mobile)-->
        <div class="flex flex-grow cs-menu-logo">
            <a href="/">
                <img src="/src/assets/admin-logo.svg" class="h-10" alt="Logo" />
            </a>
        </div>
        <!-- Container div for user avatar and user menu (desktop & mobile) | If user is logged -->
        <div class="relative z-30 flex flex-col items-end justify-center pt-1 ml-0 cs-menu-auth-logged group">
            <div class="flex flex-col items-center justify-end min-w-10">
                <!-- user avatar picture (desktop & mobile) -->
                <img class="cs-logged-avatar cs-admin-logged-avatar" src="/src/assets/sample_avatar.png" alt="Bordered avatar">
            </div>
            <!-- Container div for user menu (desktop & mobile) -->
            <div class="absolute flex-col justify-start invisible opacity-0 cs-menu-logged">
                <!-- Container div for user menu upper part (user picture, name and email) (desktop & mobile) -->
                <div class="flex flex-row items-center cs-menu-logged-top ">
                    <img class="w-8 h-8 rounded-full ring-2 ring-white" src="/src/assets/sample_avatar.png"
                        alt="Bordered avatar">
                    <div class="flex flex-col">
                        <span class="font-serif italic cs-fs-base">Mauro Iannicelli</span>
                        <span class="font-sans font-medium truncate cs-fs-3xs">mauro.iannicelli@comeandsee.org</span>
                    </div>
                </div>
                <!-- Container list for L1 user menu items (desktop & mobile) -->
                <ul class="cs-menu-logged-items" aria-labelledby="Logged Menu">
                    <!-- L1 user menu item (desktop & mobile) -->
                    <li class="block cs-menu-logged-item">
                        <a class="flex flex-row justify-between w-full" href="#">Your personal page</a>
                    </li>
                    <!-- L1 user menu item (desktop & mobile) -->
                    <li class="block cs-menu-logged-item cs-logged-nested">
                        <a href="#" class="flex flex-row justify-between w-full">
                            Your account
                            <!-- L1 dropdown harrow (desktop & mobile) -->
                            <img src="src/assets/logged-arrow-down.svg"
                                class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                alt="Arrow Down" />
                        </a>
                        <!-- Container list for L2 user menu items (desktop & mobile) -->
                        <ul class="hidden overflow-hidden list-none dropdown-menu">
                            <!-- L2 user menu item (desktop & mobile) -->
                            <li class="block cs-menu-logged-item">
                                <a class="flex flex-row justify-between w-full" href="#">Subscriptions</a>
                            </li>
                            <!-- L2 user menu item (desktop & mobile) -->
                            <li class="block cs-menu-logged-item">
                                <a class="flex flex-row justify-between w-full" href="#">Stats</a>
                            </li>
                        </ul>
                    </li>
                    <!-- L1 user menu item (desktop & mobile) -->

                    <!-- L1 user menu item (desktop & mobile) -->
                    <li class="block cs-menu-logged-item cs-logged-nested">
                        <a href="#" class="flex flex-row justify-between w-full">Options
                            <img src="src/assets/logged-arrow-down.svg"
                                class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                alt="Arrow Down" />
                        </a>
                        <ul class="hidden overflow-hidden list-none dropdown-menu">
                            <!-- L2 user menu item (desktop & mobile) -->
                            <li class="block cs-menu-logged-item">
                                <a class="flex flex-row justify-between w-full" href="#">Option 1</a>
                            </li>
                            <!-- L2 user menu item (desktop & mobile) -->
                            <li class="block cs-menu-logged-item">
                                <a class="flex flex-row justify-between w-full" href="#">Option 2</a>
                            </li>
                            <!-- L2 user menu item (desktop & mobile) -->
                            <li class="block cs-menu-logged-item">
                                <a class="flex flex-row justify-between w-full" href="#">Option 3</a>
                            </li>
                        </ul>
                    </li>
                    <!-- L1 user menu item (desktop & mobile) -->
                    <li class="block cs-menu-logged-item">
                        <a class="flex flex-row justify-between w-full" href="#">Change password</a>
                    </li>
                    <!-- L1 user menu item (desktop & mobile) -->
                    <li class="block cs-menu-logged-item">
                        <a class="flex flex-row justify-between w-full" href="#">Admin</a>
                    </li>
                </ul>
                <!-- L1 Log out user menu item (desktop & mobile) -->
                <div class="flex cs-menu-logged-bottom">
                    <a href="/" class="flex flex-row items-center">
                        <img src="src/assets/log-out.svg" class="w-auto h-6 my-auto cs-menu-logout-icon"
                            alt="Log Out" />
                        Log out
                    </a>
                </div>
            </div>
        </div>
</header>
<div id="containerSidebar" class="z-40">
    <div class="relative z-40 navbar-menu">
        <nav id="sidebar"
            class="fixed bottom-0 left-0 flex flex-col overflow-y-auto -translate-x-full cs-sidebar">
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
                        <a class="flex items-center active cs-sidebar-item"
                            href="#">
                            <img src="/src/assets/dashboard.svg" alt="Dashboard" class="w-5 h-5">
                            <span class="uppercase select-none">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center cs-sidebar-item"
                            href="#">
                            <img src="/src/assets/users.svg" alt="Users" class="w-5 h-5">
                            <span class="uppercase select-none">Users</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center cs-sidebar-item"
                            href="#">
                            <img src="/src/assets/events.svg" alt="Membership" class="w-5 h-5">
                            <span class="uppercase select-none">Events</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center cs-sidebar-item"
                            href="#">
                            <img src="/src/assets/membership.svg" alt="Membership" class="w-5 h-5">
                            <span class="uppercase select-none">Membership</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center cs-sidebar-item cs-admin-submenu-button"
                            href="#">
                            <img src="/src/assets/stats.svg" alt="Stats" class="w-5 h-5">
                            <span class="uppercase select-none">Stats</span>
                            <span class="flex justify-end flex-1 ml-auto">
                                <img src="src/assets/admin-arrow.svg"
                                    class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                    alt="Arrow Down" />

                            </span>
                        </a>
                        <ul class="hidden pl-4 mr-0 cs-admin-submenu">
                            <li>
                                <a class="flex items-center cs-sidebar-item cs-admin-submenu-button"
                                    href="#">
                                    <span class="uppercase select-none">Devices</span>
                                    <span class="flex justify-end flex-1 ml-auto">
                                        <img src="src/assets/admin-arrow.svg"
                                            class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                            alt="Arrow Down" />

                                    </span>
                                </a>
                                <ul class="hidden pl-4 mr-0 cs-admin-submenu">
                                    <li>
                                        <a class="flex items-center cs-sidebar-item"
                                            href="#">
                                            <span class="uppercase select-none">Browsers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center cs-sidebar-item"
                                            href="#">
                                            <span class="uppercase select-none">O.S.</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center cs-sidebar-item"
                                            href="#">
                                            <span class="uppercase select-none">Resolutions</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="flex items-center cs-sidebar-item"
                                    href="#">
                                    <span class="uppercase select-none">Online</span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center cs-sidebar-item"
                                    href="#">
                                    <span class="uppercase select-none">Pending</span>
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
<?php require_once 'breakpoints-widget.php'; ?>