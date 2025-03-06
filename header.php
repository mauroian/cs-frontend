<?php
// changing the following variable to false will toggle the user logged state
$isLogged = isset($_GET['logged']) && $_GET['logged'] === 'true';
?>
<!--  <header class="md:relative"> would make the navbar scroll from md (instead of being sticky like in mobile)-->
<header class="fixed top-0 z-50 w-full bg-cs-paper">
    <!-- Container nav for header (desktop & mobile) -->
    <nav class="z-10 flex items-center w-full p-4 mx-auto bg-cs-paper cs-header" aria-label="Header">
        <!-- Container div for logo (desktop & mobile)-->
        <div class="flex cs-menu-logo">
            <a href="/">
                <img src="/src/assets/logos/cs-logo-paper-name-red.png" class="h-20" alt="Logo" />
            </a>
        </div>
        <!-- Container list for public menu (desktop) -->
        <ul class="flex-row hidden md:flex cs-menu-level1">
            <!-- L1 public menu item (desktop) -->
            <li class="relative inline-block group">
                <a
                    aria-haspopup="true"
                    aria-controls="menu"
                    class="flex items-center cs-menu-item cs-menu-item-active">
                    <span class="cs-menu-item-span">What we offer</span>
                    <img src="src/assets/menu-arrow-down.svg"
                        class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                        alt="Arrow Down" />
                </a>
                <!-- Container list for L2 public menu items (desktop) -->
                <ul
                    id="menu"
                    aria-hidden="true"
                    class="mx-auto tracking-widest cs-menu-level2">
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">The bible timeline course</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">The bible and the mass</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (desktop) -->
                    <li class="relative cs-menu-voice-item cs-dropdown">
                        <a
                            aria-haspopup="true"
                            aria-controls="menu-lang"
                            class="w-full text-left flex items-center cs-menu-item h-3.5"
                            href="#">
                            <span class="pr-1 cs-menu-item-span">Sunday gospels</span>
                            <span class="ml-auto">
                                <img src="src/assets/menu-arrow-down.svg"
                                    class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                    alt="Arrow Down" />

                            </span>
                        </a>
                        <!-- Container list for L3 public menu items (desktop) -->
                        <ul
                            id="menu-lang"
                            aria-hidden="true"
                            class="absolute border bg-cs-paper-dark rounded-xl cs-menu-level3 min-w-32">
                            <!-- L3 public menu item (desktop) -->
                            <li class="cs-menu-voice-item">
                                <a href="" class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Advent journey</span>
                                </a>
                            </li>
                            <!-- L3 public menu item (desktop) -->
                            <li class="cs-menu-voice-item">
                                <a href="" class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Lenten journey</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- L2 public menu item (desktop) -->
                    <li class="relative cs-menu-voice-item cs-dropdown">
                        <a
                            aria-haspopup="true"
                            aria-controls="menu-lang"
                            class="w-full text-left flex items-center cs-menu-item  h-3.5"
                            href="#">
                            <span class="pr-1 cs-menu-item-span">The four last things</span>
                            <span class="ml-auto">
                                <img src="src/assets/menu-arrow-down.svg"
                                    class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                    alt="Arrow Down" />
                            </span>
                        </a>
                        <!-- Container list for L3 public menu items (desktop) -->
                        <ul
                            id="menu-lang"
                            aria-hidden="true"
                            class="absolute border bg-cs-paper-dark rounded-xl cs-menu-level3 min-w-32">
                            <!-- L3 public menu item (desktop) -->
                            <li class="cs-menu-voice-item">
                                <a href="" class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Hell</span>
                                </a>
                            </li>
                            <!-- L3 public menu item (desktop) -->
                            <li class="cs-menu-voice-item">
                                <a href="" class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Purgatory</span>
                                </a>
                            </li>
                            <!-- L3 public menu item (desktop) -->
                            <li class="cs-menu-voice-item">
                                <a href="" class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Heaven</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Prayer with a rule of life</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Concise Catechism</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- L1 public menu item (desktop) -->

            <!-- L1 public menu item (desktop) -->
            <li class="relative inline-block group">
                <a
                    aria-haspopup="true"
                    aria-controls="menu-2"
                    class="flex items-center cs-menu-item cs-menu-item-active">
                    <span class="cs-menu-item-span">Resources</span>
                    <img src="src/assets/menu-arrow-down.svg"
                        class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                        alt="Arrow Down" />
                </a>
                <!-- Container list for L2 public menu items (desktop) -->
                <ul
                    id="menu-2"
                    aria-hidden="true"
                    class="mx-auto tracking-widest cs-menu-level2">
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Ascension Press</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Bible Tools</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- L1 public menu item (desktop) -->
            <li class="relative inline-block group">
                <a
                    aria-haspopup="true"
                    aria-controls="menu-2"
                    class="flex items-center cs-menu-item cs-menu-item-active">
                    <span class="cs-menu-item-span">About us</span>
                    <img src="src/assets/menu-arrow-down.svg"
                        class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                        alt="Arrow Down" />
                </a>
                <!-- Container list for L2 public menu items (desktop) -->
                <ul
                    id="menu-2"
                    aria-hidden="true"
                    class="mx-auto tracking-widest cs-menu-level2">
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Let's get personal</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (desktop) -->
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Gallery</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- L1 public menu item (desktop) -->
            <li>
                <a href="" class="relative flex items-center cs-menu-item">
                    <span class="cs-menu-item-span">Testimonials</span>
                    <!-- Testimonials badge -->
                    <span class="absolute font-bold rounded-full cs-testimonials-badge">1,252</span>
                </a>
            </li>
        </ul>
        <!-- Hamburger button (mobile) -->
        <div class="flex justify-end cs-mobile-menu-container md:hidden">
            <button class="inline-flex items-center justify-center w-6 h-6 text-center transition cs-mobile-menu-button group"
                aria-pressed="false"
                onclick="this.setAttribute('aria-pressed', !(this.getAttribute('aria-pressed') === 'true'))">
                <svg class="w-6 h-6 pointer-events-none fill-current" viewBox="0 0 16 16"
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

        <?php
        if ($isLogged) { ?>
            <!-- Container div for user avatar and user menu (desktop & mobile) | If user is logged -->
            <div class="relative z-30 flex flex-col items-end justify-end pt-1 cs-menu-auth-logged group">
                <div class="flex flex-col items-center justify-end">
                    <!-- user avatar picture (desktop & mobile) -->
                    <img class="cs-logged-avatar" src="/src/assets/sample_avatar.png" alt="Bordered avatar">
                    <img class="hidden p-2 cs-logged-avatar" src="/src/assets/close-icon.svg" alt="Bordered avatar">
                    <!-- user avatar name (desktop & mobile) -->
                    <span class="hidden cs-logged-name md:block">Mauro</span>
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
        <?php } else { ?>
            <!-- Container div for auth buttons (desktop) | If user is not logged -->
            <div class="justify-end hidden cs-menu-auth md:flex">

                <!-- Sign up button (desktop) | If user is not logged -->

                <a href="#" class="flex flex-row items-center cs-menu-auth-item">
                    <span>Sign Up</span>
                    <img src="src/assets/sign-up.svg" class="w-auto my-auto cs-menu-auth-icon cs-menu-auth-gap" alt="Sign Up" />
                </a>

                <!-- Log in button (desktop) | If user is not logged -->
                <a href="/?logged=true" class="flex flex-row items-center cs-menu-auth-item">
                    <span>Log In</span>
                    <img src="src/assets/log-in.svg" class="w-auto my-auto cs-menu-auth-icon" alt="Log In" />
                </a>
            </div>
        <?php } ?>
    </nav>
    <!-- Container of public menu (mobile) -->
    <div class="z-20 w-full md:hidden overscroll-contain overflow-auto cs-mobile-menu-container bg-transparent max-h-[89dvh]">
        <!-- Inner container of public menu (mobile) -->
        <ul class="hidden h-full cs-mobile-menu bg-cs-paper">
            <!-- Container div for L1 public menu item (mobile) -->
            <li class="flex flex-col items-center w-full group cs-menu-item">
                <!-- L1 public menu item (mobile) -->
                <a
                    aria-haspopup="true"
                    aria-controls="menu"
                    href="#"
                    class="flex items-center w-full cs-mobile-menu-button cs-menu-item cs-menu-voice-item cs-menu-item-active">
                    <span class="cs-menu-item-span">What we offer</span>
                    <img src="src/assets/menu-arrow-down.svg"
                        class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                        alt="Arrow Down" />
                </a>
                <!-- Container list for L2 public menu items (mobile) -->
                <ul
                    aria-hidden="true"
                    class="hidden w-full mx-auto tracking-widest cs-mobile-menu bg-cs-paper-shade">
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">The bible timeline course</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">The bible and the mass</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (mobile) -->
                    <li class="relative w-full cs-menu-item">
                        <a
                            aria-haspopup="true"
                            aria-controls="cs-menu-lang"
                            href="#"
                            class="flex items-center w-full text-left cs-mobile-menu-button cs-menu-voice-item cs-menu-item">
                            <span class="pr-1 cs-menu-item-span">Sunday gospels</span>
                            <span class="flex justify-end flex-1 ml-auto">
                                <img src="src/assets/menu-arrow-down.svg"
                                    class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                    alt="Arrow Down" />
                            </span>
                        </a>
                        <!-- Container list for L3 public menu items (mobile) -->
                        <ul
                            aria-hidden="true"
                            class="hidden overflow-hidden border bg-cs-paper-dark cs-mobile-menu min-w-32 cs-inner">
                            <!-- L3 public menu item (mobile) -->
                            <li class="cs-menu-voice-item">
                                <a href="" class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Advent journey</span>
                                </a>
                            </li>
                            <!-- L3 public menu item (mobile) -->
                            <li class="cs-menu-voice-item ">
                                <a href="" class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Lenten journey</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- L2 public menu item (mobile) -->
                    <li class="relative cs-menu-item">
                        <a
                            aria-haspopup="true"
                            aria-controls="menu-lang"
                            href="#"
                            class="flex items-center w-full text-left cs-mobile-menu-button cs-menu-voice-item cs-menu-item">
                            <span class="pr-1 cs-menu-item-span">The four last things</span>
                            <span class="flex justify-end flex-1 ml-auto">
                                <img src="src/assets/menu-arrow-down.svg"
                                    class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                    alt="Arrow Down" />

                            </span>
                        </a>
                        <!-- Container list for L3 public menu items (mobile) -->
                        <ul
                            aria-hidden="true"
                            class="hidden overflow-hidden border bg-cs-paper-dark cs-mobile-menu min-w-32 cs-inner">
                            <!-- L3 public menu item (mobile) -->
                            <li class="cs-menu-voice-item">
                                <a href="" class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Hell</span>
                                </a>
                            </li>
                            <!-- L3 public menu item (mobile) -->
                            <li class="cs-menu-voice-item">
                                <a href="" class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Purgatory</span>
                                </a>
                            </li>
                            <!-- L3 public menu item (mobile) -->
                            <li class="cs-menu-voice-item ">
                                <a href="" class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Heaven</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Prayer with a rule of life</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item ">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Concise Catechism</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- L1 public menu item (mobile) -->
            <a href="" class="flex items-center cs-menu-item cs-menu-voice-item">
                <span class="cs-menu-item-span">Endorsements</span>
            </a>
            <!-- Container div for L1 public menu item (mobile) -->
            <li class="flex flex-col items-center w-full group cs-menu-item">
                <!-- L1 public menu item (mobile) -->
                <a
                    aria-haspopup="true"
                    aria-controls="menu-2"
                    href="#"
                    class="flex items-center w-full cs-mobile-menu-button cs-menu-item cs-menu-voice-item cs-menu-item-active">
                    <span class="cs-menu-item-span">Resources</span>
                    <img src="src/assets/menu-arrow-down.svg"
                        class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                        alt="Arrow Down" />
                </a>
                <!-- Container list for L2 public menu items (mobile) -->
                <ul
                    id="menu-2"
                    aria-hidden="true"
                    class="hidden w-full mx-auto overflow-hidden tracking-widest cs-mobile-menu bg-cs-paper-shade">
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Ascension Press</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item ">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Bible Tools</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- L1 public menu item (mobile) -->
            <a href="" class="relative flex items-center cs-menu-item cs-menu-voice-item">
                <span class="cs-menu-item-span !mr-2">Testimonials</span>
                <span class="cs-mobile-testimonials-badge">1,252</span>
            </a>
            <!-- Container div for L1 public menu item (mobile) -->
            <li class="flex flex-col items-center w-full group cs-menu-item">
                <!-- L1 public menu item (mobile) -->
                <a
                    aria-haspopup="true"
                    aria-controls="menu-2"
                    href="#"
                    class="flex items-center w-full cs-mobile-menu-button cs-menu-item cs-menu-voice-item cs-menu-item-active">
                    <span class="cs-menu-item-span">About us</span>
                    <img src="src/assets/menu-arrow-down.svg"
                        class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                        alt="Arrow Down" />
                </a>
                <!-- Container list for L2 public menu items (mobile) -->
                <ul
                    id="menu-2"
                    aria-hidden="true"
                    class="hidden w-full mx-auto overflow-hidden tracking-widest cs-mobile-menu bg-cs-paper-shade">
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Let's get personal</span>
                        </a>
                    </li>
                    <!-- L2 public menu item (mobile) -->
                    <li class="cs-menu-voice-item ">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Gallery</span>
                        </a>
                    </li>
                </ul>
            </li>
            <?php if (!$isLogged) { ?>
                <!-- Sign up button (mobile) | If user is not logged -->
                <a href="#" class="flex flex-row items-center cs-fs-base cs-mobile-menu-auth-item">
                    <img src="src/assets/sign-up.svg" class="w-auto my-auto cs-mobile-menu-auth-icon" alt="Sign Up" />
                    <span>Sign Up</span>
                </a>
                <!-- Log in button (mobile) | If user is not logged -->
                <a href="/?logged=true" class="flex flex-row items-center cs-fs-base cs-mobile-menu-auth-item">
                    <img src="src/assets/log-in.svg" class="w-auto my-auto cs-mobile-menu-auth-icon" alt="Log In" />
                    <span>Log In</span>
                </a>
            <?php } else { ?>
                <!-- Log out button (mobile) | If user is logged -->
                <a href="/" class="flex flex-row items-center cs-fs-base cs-mobile-menu-auth-item">
                    <img src="src/assets/log-in.svg" class="w-auto my-auto cs-mobile-menu-auth-icon" alt="Log Out" />
                    <span>Log Out</span>
                </a>
            <?php } ?>
            <li class="flex flex-col items-center cs-mobile-menu-footer-item">
                <span>Come & See 2025</span>
                <span>All rights Reserved</span>
            </li>
        </ul>
    </div>
</header>

<?php require_once 'breakpoints-widget.php'; ?>