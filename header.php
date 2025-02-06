<?php
// changing the following variable to false will toggle the user logged state
$isLogged = isset($_GET['logged']) && $_GET['logged'] === 'true';
?>
<header class="bg-cs-paper">
    <nav class="cs-header relative mx-auto flex  items-center p-4 text-cs-red-main" aria-label="Header">
        <div class="flex cs-menu-logo">
            <a href="/" class="">
                <img src="/src/assets/logo.svg" class="h-14 w-auto" alt="Logo"/>
            </a>
        </div>
        <div class="hidden md:flex cs-menu flex-row">
            <div class=" group inline-block">
                <button
                        aria-haspopup="true"
                        aria-controls="menu"
                        class="flex items-center cs-menu-item cs-menu-item-active">
                    <span class="cs-menu-item-span">What we offer</span>
                    <img src="src/assets/menu-arrow-down.svg"
                         class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                         alt="Arrow Down"/>
                </button>
                <ul
                        id="menu"
                        aria-hidden="true"
                        class="mx-auto text-sm tracking-widest cs-menu-nested"
                >
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">The bible timeline course</span>
                        </a>
                    </li>
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">The bible and the mass</span>
                        </a>
                    </li>
                    <li class="relative cs-menu-voice-item cs-dropdown">
                        <a
                                aria-haspopup="true"
                                aria-controls="menu-lang"
                                class="w-full text-left flex items-center cs-menu-item h-3.5"
                                href="#"
                        >
                            <span class="pr-1 cs-menu-item-span">Sunday gospels</span>
                            <span class="ml-auto">
                        <img src="src/assets/menu-arrow-down.svg"
                             class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                             alt="Arrow Down"/>

            </span>
                        </a>
                        <ul
                                id="menu-lang"
                                aria-hidden="true"
                                class="bg-cs-paper-dark text-cs-red-main border rounded-xl absolute cs-menu-inner
                                  min-w-32"
                        >
                            <li class="cs-menu-voice-item">
                                <a href="" class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Advent journey</span>
                                </a>
                            </li>
                            <li class="px-4 py-3">
                                <a href="" class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Lenten journey</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="rounded-sm relative cs-menu-voice-item cs-dropdown">
                        <a
                                aria-haspopup="true"
                                aria-controls="menu-lang"
                                class="w-full text-left flex items-center cs-menu-item  h-3.5"
                                href="#"
                        >
                            <span class="pr-1 cs-menu-item-span">The four last things</span>
                            <span class="ml-auto">
                        <img src="src/assets/menu-arrow-down.svg"
                             class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                             alt="Arrow Down"/>
            </span>
                        </a>
                        <ul
                                id="menu-lang"
                                aria-hidden="true"
                                class="bg-cs-paper-dark text-cs-red-main border rounded-xl absolute cs-menu-inner
                                  min-w-32"
                        >
                            <li class="cs-menu-voice-item">
                                <a href="" class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Hell</span>
                                </a>
                            </li>
                            <li class="cs-menu-voice-item">
                                <a href="" class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Purgatory</span>
                                </a>
                            </li>
                            <li class="cs-menu-voice-item">
                                <a href="" class="flex items-center cs-menu-item">
                                    <span class="cs-menu-item-span">Heaven</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Prayer with a rule of life</span>
                        </a>
                    </li>
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Concise Catechism</span>
                        </a>
                    </li>
                </ul>
            </div>
            <a href="" class="flex items-center cs-menu-item">
                <span class="cs-menu-item-span">Endorsement</span>
            </a>
            <div class=" group inline-block">

                <button
                        aria-haspopup="true"
                        aria-controls="menu-2"
                        class="flex items-center cs-menu-item cs-menu-item-active">
                    <span class="cs-menu-item-span">Resources</span>
                    <img src="src/assets/menu-arrow-down.svg"
                         class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                         alt="Arrow Down"/>
                </button>
                <ul
                        id="menu-2"
                        aria-hidden="true"
                        class="mx-auto text-sm tracking-widest cs-menu-nested"
                >
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Ascension Press</span>
                        </a>
                    </li>
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Bible Tools</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class=" group inline-block">

                <button
                        aria-haspopup="true"
                        aria-controls="menu-2"
                        class="flex items-center cs-menu-item cs-menu-item-active">
                    <span class="cs-menu-item-span">About us</span>
                    <img src="src/assets/menu-arrow-down.svg"
                         class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                         alt="Arrow Down"/>
                </button>
                <ul
                        id="menu-2"
                        aria-hidden="true"
                        class="mx-auto text-sm tracking-widest cs-menu-nested"
                >
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Let's get personal</span>
                        </a>
                    </li>
                    <li class="cs-menu-voice-item">
                        <a href="" class="flex items-center cs-menu-item">
                            <span class="cs-menu-item-span">Gallery</span>
                        </a>
                    </li>
                </ul>
            </div>
            <a href="" class="flex items-center cs-menu-item relative">
                <span class="cs-menu-item-span">Testimonials</span>
                <span class="cs-testimonials-badge absolute font-bold rounded-full">1,252</span>
            </a>
        </div>
        <div class="cs-mobile-menu-container justify-end md:hidden flex">
            <button class="cs-mobile-menu-button group inline-flex w-6 h-6 text-center items-center justify-center transition"
                    aria-pressed="false"
                    onclick="this.setAttribute('aria-pressed', !(this.getAttribute('aria-pressed') === 'true'))">
                <svg class="w-6 h-6 fill-current pointer-events-none" viewBox="0 0 16 16"
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
            <div class="cs-menu-auth-logged group justify-end items-center flex flex-col relative">
                <img class="cs-logged-avatar" src="/src/assets/sample_avatar.png" alt="Bordered avatar">
                <span class="cs-logged-name hidden md:block">Mauro</span>
                <div class="flex-col justify-start absolute opacity-0 invisible cs-menu-logged">
                    <div class="cs-menu-logged-top flex flex-row items-center ">
                        <img class="w-8 h-8 rounded-full ring-2 ring-white" src="/src/assets/sample_avatar.png"
                             alt="Bordered avatar">
                        <div class="flex flex-col text-badge">
                            <span class="text-sm font-serif italic">Mauro Ianicelli</span>
                            <span class="font-medium truncate text-[7px] font-sans">name@flowbite.com</span>
                        </div>
                    </div>
                    <ul class="cs-menu-logged-items" aria-labelledby="Logged Menu">
                        <li class="block cs-menu-logged-item">
                            <a href="#">Your personal page</a>
                        </li>
                        <li class="block cs-menu-logged-item cs-logged-nested">
                            <a href="#" class="flex justify-between">Your account
                                <img src="src/assets/logged-arrow-down.svg"
                                     class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                     alt="Arrow Down"/>
                            </a>
                        </li>
                        <li class="dropdown-menu hidden">
                            <ul class="list-none overflow-hidden">
                                <li class="block cs-menu-logged-item">
                                    <a href="#">Subscriptions</a>
                                </li>
                                <li class="block cs-menu-logged-item">
                                    <a href="#">Stats</a>
                                </li>
                            </ul>
                        </li>
                        <li class="block cs-menu-logged-item cs-logged-nested">
                            <a href="#" class="flex justify-between">Options
                                <img src="src/assets/logged-arrow-down.svg"
                                     class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                                     alt="Arrow Down"/>
                            </a>
                        </li>
                        <li class="dropdown-menu hidden">
                            <ul class="list-none overflow-hidden">
                                <li class="block cs-menu-logged-item">
                                    <a href="#">Option 1</a>
                                </li>
                                <li class="block cs-menu-logged-item">
                                    <a href="#">Option 2</a>
                                </li>
                                <li class="block cs-menu-logged-item">
                                    <a href="#">Option 3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="block cs-menu-logged-item">
                            <a href="#">Change password</a>
                        </li>
                        <li class="block cs-menu-logged-item">
                            <a href="#">Admin</a>
                        </li>
                    </ul>
                    <div class="cs-menu-logged-bottom flex">
                        <a href="/" class="flex flex-row items-center">
                            <img src="src/assets/log-out.svg" class="h-4 w-auto my-auto cs-menu-logged-icon"
                                 alt="Log Out"/>
                            Log out
                        </a>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="cs-menu-auth justify-end hidden md:flex">
                <a href="#" class="text-sm font-medium flex flex-row cs-menu-auth-item sign-up-login-spacing">
                    <span>Sign Up</span>
                    <img src="src/assets/sign-up.svg" class="h-4 w-auto my-auto cs-menu-auth-icon" alt="Sign Up"/>
                </a>
                <a href="/?logged=true" class="text-sm font-medium ml-4 flex flex-row cs-menu-auth-item">
                    <span>Log In</span>
                    <img src="src/assets/log-in.svg" class="h-4 w-auto my-auto cs-menu-auth-icon" alt="Log In"/>
                </a>
            </div>
        <?php } ?>
    </nav>
    <!-- mobile menu voices -->
    <div class="md:hidden">
    <div class="cs-mobile-menu hidden overflow-hidden text-cs-red-main">
        <div class=" group flex flex-col items-center cs-menu-item w-full">
            <button
                    aria-haspopup="true"
                    aria-controls="menu"
                    class="cs-mobile-menu-button flex items-center cs-menu-item cs-menu-voice-item cs-menu-item-active w-full">
                <span class="cs-menu-item-span">What we offer</span>
                <img src="src/assets/menu-arrow-down.svg"
                     class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                     alt="Arrow Down"/>
            </button>
            <ul
                    aria-hidden="true"
                    class="cs-mobile-menu hidden mx-auto text-sm tracking-widest w-full bg-cs-paper-shade"
            >
                <li class="cs-menu-voice-item">
                    <a href="" class="flex items-center cs-menu-item">
                        <span class="cs-menu-item-span">The bible timeline course</span>
                    </a>
                </li>
                <li class="cs-menu-voice-item">
                    <a href="" class="flex items-center cs-menu-item">
                        <span class="cs-menu-item-span">The bible and the mass</span>
                    </a>
                </li>
                <li class="relative cs-menu-item w-full">
                    <button
                            aria-haspopup="true"
                            aria-controls="cs-menu-lang"
                            class="w-full cs-mobile-menu-button cs-menu-voice-item text-left flex items-center cs-menu-item h-10"
                    >
                        <span class="pr-1 cs-menu-item-span">Sunday gospels</span>
                        <span class="ml-auto flex-1  flex justify-end">
                <img src="src/assets/menu-arrow-down.svg"
                     class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                     alt="Arrow Down"/>
            </span>
                    </button>
                    <ul
                            aria-hidden="true"
                            class="bg-cs-paper-dark overflow-hidden hidden text-cs-red-main border cs-mobile-menu min-w-32"
                    >
                        <li class="cs-menu-voice-item">
                            <a href="" class="flex items-center cs-menu-item">
                                <span class="cs-menu-item-span">Advent journey</span>
                            </a>
                        </li>
                        <li class="cs-menu-voice-item !border-b">
                            <a href="" class="flex items-center cs-menu-item">
                                <span class="cs-menu-item-span">Lenten journey</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="rounded-sm relative cs-menu-item">
                    <button
                            aria-haspopup="true"
                            aria-controls="menu-lang"
                            class="cs-mobile-menu-button cs-menu-voice-item  w-full text-left flex items-center cs-menu-item h-10"
                    >
                        <span class="pr-1 cs-menu-item-span">The four last things</span>
                        <span class="ml-auto flex-1 flex justify-end">
                <img src="src/assets/menu-arrow-down.svg"
                     class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                     alt="Arrow Down"/>

            </span>
                    </button>
                    <ul
                            aria-hidden="true"
                            class="bg-cs-paper-dark overflow-hidden hidden text-cs-red-main border cs-mobile-menu
                                  min-w-32"
                    >
                        <li class="cs-menu-voice-item">
                            <a href="" class="flex items-center cs-menu-item">
                                <span class="cs-menu-item-span">Hell</span>
                            </a>
                        </li>
                        <li class="cs-menu-voice-item">
                            <a href="" class="flex items-center cs-menu-item">
                                <span class="cs-menu-item-span">Purgatory</span>
                            </a>
                        </li>
                        <li class="cs-menu-voice-item !border-b">
                            <a href="" class="flex items-center cs-menu-item">
                                <span class="cs-menu-item-span">Heaven</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="cs-menu-voice-item">
                    <a href="" class="flex items-center cs-menu-item">
                        <span class="cs-menu-item-span">Prayer with a rule of life</span>
                    </a>
                </li>
                <li class="cs-menu-voice-item !border-b">
                    <a href="" class="flex items-center cs-menu-item">
                        <span class="cs-menu-item-span">Concise Catechism</span>
                    </a>
                </li>
            </ul>
        </div>
        <a href="" class="flex items-center cs-menu-item cs-menu-voice-item">
            <span class="cs-menu-item-span">Endorsement</span>
        </a>
        <div class=" group flex flex-col items-center cs-menu-item w-full">

            <button
                    aria-haspopup="true"
                    aria-controls="menu-2"
                    class="cs-mobile-menu-button flex items-center cs-menu-item cs-menu-voice-item cs-menu-item-active w-full">
                <span class="cs-menu-item-span">Resources</span>
                <img src="src/assets/menu-arrow-down.svg"
                     class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                     alt="Arrow Down"/>
            </button>
            <ul
                    id="menu-2"
                    aria-hidden="true"
                    class="cs-mobile-menu mx-auto overflow-hidden hidden text-sm tracking-widest w-full bg-cs-paper-shade"
            >
                <li class="cs-menu-voice-item">
                    <a href="" class="flex items-center cs-menu-item">
                        <span class="cs-menu-item-span">Ascension Press</span>
                    </a>
                </li>
                <li class="cs-menu-voice-item !border-b">
                    <a href="" class="flex items-center cs-menu-item">
                        <span class="cs-menu-item-span">Bible Tools</span>
                    </a>
                </li>
            </ul>
        </div>
        <a href="" class="flex items-center cs-menu-item relative cs-menu-voice-item">
            <span class="cs-menu-item-span !mr-2">Testimonials</span>
            <span class="cs-mobile-testimonials-badge">1,252</span>
        </a>
        <div class="group flex flex-col items-center cs-menu-item w-full">

            <button
                    aria-haspopup="true"
                    aria-controls="menu-2"
                    class="cs-mobile-menu-button flex items-center cs-menu-item cs-menu-voice-item cs-menu-item-active w-full">
                <span class="cs-menu-item-span">About us</span>
                <img src="src/assets/menu-arrow-down.svg"
                     class="cs-menu-item-icon object-contain shrink-0 self-stretch my-auto w-3 aspect-[1.5]"
                     alt="Arrow Down"/>
            </button>
            <ul
                    id="menu-2"
                    aria-hidden="true"
                    class="cs-mobile-menu mx-auto overflow-hidden hidden text-sm tracking-widest w-full bg-cs-paper-shade"
            >
                <li class="cs-menu-voice-item">
                    <a href="" class="flex items-center cs-menu-item">
                        <span class="cs-menu-item-span">Let's get personal</span>
                    </a>
                </li>
                <li class="cs-menu-voice-item  !border-b">
                    <a href="" class="flex items-center cs-menu-item">
                        <span class="cs-menu-item-span">Gallery</span>
                    </a>
                </li>
            </ul>
        </div>
        <?php if (!$isLogged) { ?>
            <a href="#" class="text-sm font-medium flex flex-row cs-mobile-menu-auth-item">
                <img src="src/assets/sign-up.svg" class="w-auto my-auto cs-mobile-menu-auth-icon" alt="Sign Up"/>
                <span>Sign Up</span>
            </a>
            <a href="/?logged=true" class="text-sm font-medium flex flex-row cs-mobile-menu-auth-item">
                <img src="src/assets/log-in.svg" class="w-auto my-auto cs-mobile-menu-auth-icon" alt="Log In"/>
                <span>Log In</span>
            </a>
        <?php } else { ?>
            <a href="/" class="text-sm font-medium flex flex-row cs-mobile-menu-auth-item">
                <img src="src/assets/log-in.svg" class="w-auto my-auto cs-mobile-menu-auth-icon" alt="Log Out"/>
                <span>Log Out</span>
            </a>
        <?php } ?>
    </div>
    </div>
</header>