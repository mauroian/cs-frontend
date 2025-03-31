<div class="absolute flex-col justify-start invisible opacity-0 cs-menu-logged">
    <!-- Container div for user menu upper part (user picture, name and email) (desktop & mobile) -->
    <div class="flex flex-row items-center cs-menu-logged-top ">
        <img class="w-8 h-8 rounded-full ring-2 ring-white" src="/src/assets/sample_avatar.png"
            alt="Bordered avatar">
        <div class="flex flex-col">
            <span class="font-serif italic cs-fs-base">Mauro Iannicelli</span>
            <span class="font-sans font-medium truncate cs-fs-2xs">mauro.iannicelli@comeandsee.org</span>
        </div>
    </div>

    <!-- Container list for L1 user menu items (desktop & mobile) -->
    <ul class="cs-menu-logged-items">
        <!-- L1 user menu item (desktop & mobile) -->
        <li class="block cs-menu-logged-item">
            <a class="flex flex-row justify-between w-full" href="#">Your area</a>
        </li>
        <!-- L1 user menu item (desktop & mobile) -->
        <li class="block cs-menu-logged-item cs-logged-nested">
            <a href="#" class="flex flex-row justify-between w-full">
                Your account
                <!-- L1 dropdown harrow (desktop & mobile) -->
                <img src="/src/assets/logged-arrow-down.svg"
                    class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                    alt="Arrow Down">
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
                <img src="/src/assets/logged-arrow-down.svg"
                    class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                    alt="Arrow Down">
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
            <img src="/src/assets/log-out-blue.svg" class="w-auto h-6 my-auto cs-menu-logout-icon"
                alt="Log Out">
            Log out
        </a>
    </div>
</div>