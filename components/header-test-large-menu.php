<?php
// changing the following variable to false will toggle the user logged state
$isLogged = isset($_GET['logged']) && $_GET['logged'] === 'true';
?>
<!--  <header class="md:relative"> would make the navbar scroll from md (instead of being sticky like in mobile)-->
<header class="fixed top-0 z-50 w-full bg-cs-paper">
    <!-- Container nav for header (desktop & mobile) -->

    <nav class="z-10 flex items-center w-full p-4 mx-auto bg-cs-paper cs-header">

        <!-- Container div for logo (desktop & mobile)-->
        <div class="flex cs-menu-logo">
            <a href="/">
                <img src="/src/assets/logos/cs-logo-red-name-red-h200.png" class="h-20" alt="Logo">
            </a>
        </div>


        <!-- PLEASE NOTE: 
            If I want the Level 1 menu items split on two rows, I must change from:
            <ul class="flex-row hidden lg2:flex cs-menu-level1">
            To:
            <ul class="flex-row hidden lg2:flex cs-menu-level1 flex-wrap justify-center max-w-[800px]">
        -->
        <!-- Container list for public menu (desktop) -->
        <ul class="flex-row hidden lg2:flex cs-menu-level1">
            <!-- L1 public menu item (desktop) -->
            <li class="relative inline-block group">
                <a
                    class="flex items-center cs-menu-item cs-menu-item-active">
                    <span class="cs-menu-item-span">What we offer</span>
                    <img src="/src/assets/menu-arrow-down.svg"
                        class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                        alt="Arrow Down">
                </a>
                <!-- Container list for L2 public menu items (desktop) -->
                <ul
                    class="mx-auto tracking-widest cs-menu-level2">
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">The bible timeline course</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">The bible and the mass</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (desktop) -->
                    <li class="relative cs-menu-voice-item cs-dropdown">
                        <!-- Note: cs-dropdown is called by Javascript -->
                        <a
                            class="w-full text-left flex items-center cs-menu-item h-3.5"
                            href="#">
                            <span class="pr-1 cs-menu-item-span">Sunday gospels</span>
                            <span class="ml-auto">
                                <img src="/src/assets/menu-arrow-down.svg"
                                    class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                    alt="Arrow Down">

                            </span>
                        </a>
                        <!-- Container list for L3 public menu items (desktop) -->
                        <ul
                            class="absolute cs-menu-level3 min-w-32">
                            <!-- L3 public menu item (desktop) -->
                            <li class="cs-menu-voice-item">
                                <a class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Advent journey</span>
                                </a>
                            </li>
                            <!-- L3 public menu item (desktop) -->
                            <li class="cs-menu-voice-item">
                                <a class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Lenten journey</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- L2 public menu item (desktop) -->
                    <li class="relative cs-menu-voice-item cs-dropdown">
                        <!-- Note: cs-dropdown is called by Javascript -->
                        <a
                            class="w-full text-left flex items-center cs-menu-item  h-3.5"
                            href="#">
                            <span class="pr-1 cs-menu-item-span">The four last things</span>
                            <span class="ml-auto">
                                <img src="/src/assets/menu-arrow-down.svg"
                                    class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                    alt="Arrow Down">
                            </span>
                        </a>
                        <!-- Container list for L3 public menu items (desktop) -->
                        <ul
                            class="absolute cs-menu-level3 min-w-32">
                            <!-- L3 public menu item (desktop) -->
                            <li class="cs-menu-voice-item">
                                <a class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Hell</span>
                                </a>
                            </li>
                            <!-- L3 public menu item (desktop) -->
                            <li class="cs-menu-voice-item">
                                <a class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Purgatory</span>
                                </a>
                            </li>
                            <!-- L3 public menu item (desktop) -->
                            <li class="cs-menu-voice-item">
                                <a class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Heaven</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Prayer with a rule of life</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Concise Catechism</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- L1 public menu item (desktop) -->

            <!-- L1 public menu item (desktop) -->
            <li class="relative inline-block group">
                <a
                    class="flex items-center cs-menu-item cs-menu-item-active">
                    <span class="cs-menu-item-span">Resources</span>
                    <img src="/src/assets/menu-arrow-down.svg"
                        class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                        alt="Arrow Down">
                </a>
                <!-- Container list for L2 public menu items (desktop) -->
                <ul
                    class="mx-auto tracking-widest cs-menu-level2">
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Ascension Press</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Bible Tools</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- L1 public menu item (desktop) -->
            <li class="relative inline-block group">
                <a
                    class="flex items-center cs-menu-item cs-menu-item-active">
                    <span class="cs-menu-item-span">About us</span>
                    <img src="/src/assets/menu-arrow-down.svg"
                        class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                        alt="Arrow Down">
                </a>
                <!-- Container list for L2 public menu items (desktop) -->
                <ul
                    class="mx-auto tracking-widest cs-menu-level2">
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Let's get personal</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Gallery</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- L1 public menu item (desktop) -->
            <li>
                <a class="relative flex items-center cs-menu-item">
                    <span class="cs-menu-item-span">Testimonials</span>
                    <!-- Testimonials badge -->
                    <span class="absolute font-bold rounded-full cs-testimonials-badge">1,252</span>
                </a>
            </li>
        </ul>

        <!-- Hamburger button (mobile) -->
        <div class="flex justify-end cs-mobile-menu-container lg2:hidden">
            <button class="inline-flex items-center justify-center mt-2 mr-2 text-center transition w-9 h-9 cs-mobile-menu-button group"
                data-pressed="false"
                onclick="this.setAttribute('data-pressed', !(this.getAttribute('data-pressed') === 'true'))">
                <svg class="pointer-events-none fill-current w-9 h-9" viewBox="0 0 16 16"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect class="origin-center -translate-y-[5px] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.1)] group-[[data-pressed=true]]:translate-x-0 group-[[data-pressed=true]]:translate-y-0 group-[[data-pressed=true]]:rotate-[315deg]"
                        y="7" width="16" height="2" rx="1"></rect>
                    <rect class="origin-center transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.8)] group-[[data-pressed=true]]:rotate-45"
                        y="7" width="16" height="2" rx="1"></rect>
                    <rect class="origin-center translate-y-[5px] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.1)] group-[[data-pressed=true]]:translate-y-0 group-[[data-pressed=true]]:rotate-[135deg]"
                        y="7" width="16" height="2" rx="1"></rect>
                </svg>
            </button>
        </div>

        <?php
        if ($isLogged) { ?>
            <!-- Container div for user avatar and user menu (desktop & mobile) | If user is logged -->
            <div class="relative z-30 flex flex-col items-end justify-end min-w-0 pt-1 cs-menu-auth-logged group lg2:min-w-20 xl:min-w-52">
                <div class="flex flex-col items-center justify-end">
                    <!-- user avatar picture (desktop & mobile) -->
                    <img class="mt-1 h-11 w-11 cs-logged-avatar" src="/src/assets/sample_avatar.png" alt="Bordered avatar">
                    <img class="hidden p-2 mt-1 ml-0 w-11 h-11 cs-logged-avatar" src="/src/assets/close-icon.svg" alt="Bordered avatar">
                    <!-- user avatar name (desktop & mobile) -->
                    <span class="hidden pt-1 cs-logged-name lg2:block">Mauro</span>
                </div>

                <!-- Container div for user menu (desktop & mobile) -->
                <?php require_once 'components/user-menu.php'; ?>
            </div>
        <?php } else { ?>
            <!-- Container div for auth buttons (desktop) | If user is not logged -->
            <div class="justify-end hidden cs-menu-auth lg2:flex">

                <!-- Sign up button (desktop) | If user is not logged -->

                <a href="#" class="flex flex-row items-center cs-menu-auth-item">
                    <span>Sign Up</span>
                    <img src="/src/assets/sign-up.svg" class="w-auto my-auto cs-menu-auth-icon cs-menu-auth-gap" alt="Sign Up">
                </a>

                <!-- Log in button (desktop) | If user is not logged -->
                <a href="/?logged=true" class="flex flex-row items-center cs-menu-auth-item">
                    <span>Log In</span>
                    <img src="/src/assets/log-in.svg" class="w-auto my-auto cs-menu-auth-icon" alt="Log In">
                </a>
            </div>
        <?php } ?>
    </nav>
    <!-- Container of public menu (mobile) -->
    <div class="z-20 w-full lg2:hidden overscroll-contain overflow-auto cs-mobile-menu-container bg-transparent max-h-[89dvh]">
        <!-- Inner container of public menu (mobile) -->
        <ul class="hidden h-full cs-mobile-menu cs-menu-mobile-level1">
            <!-- Container div for L1 public menu item (mobile) -->
            <li class="flex flex-col items-center w-full group cs-menu-item">
                <!-- L1 public menu item (mobile) -->
                <a
                    href="#"
                    class="flex items-center w-full cs-mobile-menu-button cs-menu-item cs-menu-voice-item cs-menu-item-active">
                    <span class="cs-menu-item-span">What we offer</span>
                    <img src="/src/assets/menu-arrow-down.svg"
                        class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                        alt="Arrow Down">
                </a>
                <!-- Container list for L2 public menu items (mobile) -->
                <ul
                    class="hidden w-full mx-auto tracking-widest cs-mobile-menu cs-menu-mobile-level2">
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">The bible timeline course</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">The bible and the mass</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (mobile) -->
                    <li class="relative w-full cs-menu-item">
                        <a
                            href="#"
                            class="flex items-center w-full text-left cs-mobile-menu-button cs-menu-voice-item cs-menu-item">
                            <span class="pr-1 cs-menu-item-span">Sunday gospels</span>
                            <span class="flex justify-end flex-1 ml-auto">
                                <img src="/src/assets/menu-arrow-down.svg"
                                    class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                    alt="Arrow Down">
                            </span>
                        </a>
                        <!-- Container list for L3 public menu items (mobile) -->
                        <ul
                            class="hidden overflow-hidden border cs-menu-mobile-level3 cs-mobile-menu min-w-32 cs-inner">
                            <!-- Note: cs-inner is called by Javascript -->
                            <!-- L3 public menu item (mobile) -->
                            <li class="cs-menu-voice-item">
                                <a class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Advent journey</span>
                                </a>
                            </li>
                            <!-- L3 public menu item (mobile) -->
                            <li class="cs-menu-voice-item ">
                                <a class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Lenten journey</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- L2 public menu item (mobile) -->
                    <li class="relative cs-menu-item">
                        <a
                            href="#"
                            class="flex items-center w-full text-left cs-mobile-menu-button cs-menu-voice-item cs-menu-item">
                            <span class="pr-1 cs-menu-item-span">The four last things</span>
                            <span class="flex justify-end flex-1 ml-auto">
                                <img src="/src/assets/menu-arrow-down.svg"
                                    class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                    alt="Arrow Down">

                            </span>
                        </a>
                        <!-- Container list for L3 public menu items (mobile) -->
                        <ul
                            class="hidden overflow-hidden border cs-menu-mobile-level3 cs-mobile-menu min-w-32 cs-inner">
                            <!-- Note: cs-inner is called by Javascript -->
                            <!-- L3 public menu item (mobile) -->
                            <li class="cs-menu-voice-item">
                                <a class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Hell</span>
                                </a>
                            </li>
                            <!-- L3 public menu item (mobile) -->
                            <li class="cs-menu-voice-item">
                                <a class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Purgatory</span>
                                </a>
                            </li>
                            <!-- L3 public menu item (mobile) -->
                            <li class="cs-menu-voice-item ">
                                <a class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Heaven</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Prayer with a rule of life</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item ">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Concise Catechism</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Container div for L1 public menu item (mobile) -->
            <li class="flex flex-col items-center w-full group cs-menu-item">
                <!-- L1 public menu item (mobile) -->
                <a
                    href="#"
                    class="flex items-center w-full cs-mobile-menu-button cs-menu-item cs-menu-voice-item cs-menu-item-active">

                    <span class="cs-menu-item-span">Resources</span>
                    <img src="/src/assets/menu-arrow-down.svg"
                        class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                        alt="Arrow Down">
                </a>
                <!-- Container list for L2 public menu items (mobile) -->
                <ul
                    class="hidden w-full mx-auto overflow-hidden tracking-widest cs-mobile-menu cs-menu-mobile-level2">
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Ascension Press</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item ">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Bible Tools</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Container div for L1 public menu item (mobile) -->
            <li class="flex flex-col items-center w-full group cs-menu-item">
                <!-- L1 public menu item (mobile) -->
                <a
                    href="#"
                    class="flex items-center w-full cs-mobile-menu-button cs-menu-item cs-menu-voice-item cs-menu-item-active">
                    <span class="cs-menu-item-span">About us</span>
                    <img src="/src/assets/menu-arrow-down.svg"
                        class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                        alt="Arrow Down">
                </a>
                <!-- Container list for L2 public menu items (mobile) -->
                <ul
                    class="hidden w-full mx-auto overflow-hidden tracking-widest cs-mobile-menu cs-menu-mobile-level2">
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Let's get personal</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item ">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Endorsements</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item ">
                        <a class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Gallery</span>
                        </a>
                    </li>
                </ul>
            </li>


            <!-- Container div for L1 public menu item (mobile) -->
            <li class="flex flex-col items-center w-full group cs-menu-item">
                <!-- L1 public menu item (mobile) -->
                <a
                    href="#"
                    class="flex items-center w-full cs-mobile-menu-button cs-menu-item cs-menu-voice-item cs-menu-item-active">
                    <span class="cs-menu-item-span !mr-2">Testimonials</span>
                    <span class="cs-mobile-testimonials-badge">1,252</span>
                </a>
            </li>

            <?php if (!$isLogged) { ?>
                <li>
                    <!-- Sign up button (mobile) | If user is not logged -->
                    <a href="#" class="flex flex-row items-center cs-mobile-menu-auth-item">
                        <img src="/src/assets/sign-up-paper.svg" class="w-auto h-5 my-auto mr-2 cs-mobile-menu-auth-icon" alt="Sign Up">
                        <span>Sign Up</span>
                    </a>
                </li>
                <!-- Log in button (mobile) | If user is not logged -->
                <li>
                    <a href="/?logged=true" class="flex flex-row items-center cs-mobile-menu-auth-item">
                        <img src="/src/assets/log-in-paper.svg" class="w-auto h-6 my-auto mr-3 cs-mobile-menu-auth-icon" alt="Log In">
                        <span>Log In</span>
                    </a>
                </li>
            <?php } else { ?>
                <!-- Log out button (mobile) | If user is logged -->
                <li>
                    <a href="/" class="flex flex-row items-center cs-mobile-menu-auth-item">
                        <img src="/src/assets/log-out-paper.svg" class="w-auto h-6 my-auto mr-2 cs-mobile-menu-auth-icon" alt="Log Out">
                        <span>Log Out</span>
                    </a>
                </li>
            <?php } ?>
            <li class="flex flex-col items-center cs-mobile-menu-footer-item">
                <span>Come & See 2025</span>
                <span>All rights Reserved</span>
            </li>
        </ul>
    </div>
</header>