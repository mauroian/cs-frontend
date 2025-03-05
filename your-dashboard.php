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

    <?php require_once 'header.php'; ?>

    <main class="flex-grow cs-main bg-cs-paper ">

        <!-- Outer container -->
        <div class="flex flex-col items-center mb-32 ">

            <!-- 'Title' container -->
            <div class="flex flex-col items-center w-full pt-8 pb-5 pl-10 text-white bg-cs-blue-light">
                <div class="w-full max-w-[1000px]">
                    <span class="tracking-widest uppercase">Welcome back, Mauro</span>
                    <h1 class="font-serif text-left sm:cs-fs-3xl cs-fs-2xl">Your Dashboard</h1>
                </div>
            </div>

            <!-- Container of all the accordions -->
            <div class="flex flex-col items-center cs-personal-area-container">
                <div class="flex flex-row items-center justify-end cs-accordion-manager">
                    <button class="mr-1 cs-accordion-expand text-cs-blue-light">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-cs-blue-light">
                            <path d="M12.4999 0C5.59654 0 0 5.59654 0 12.5C0 19.4035 5.59654 24.9999 12.4999 24.9999C19.4034 24.9999 24.9999 19.4035 24.9999 12.5C25 5.59654 19.4035 0 12.4999 0ZM19.6334 14.5078H14.3147V19.8259C14.3147 20.7368 13.5766 21.4756 12.6654 21.4756C11.7545 21.4756 11.0156 20.7368 11.0156 19.8259V14.5078H5.69781C4.7866 14.5078 4.04786 13.7694 4.04786 12.8582C4.04786 11.947 4.7866 11.2084 5.69781 11.2084H11.0159V5.89061C11.0159 4.9794 11.7545 4.24115 12.6657 4.24115C13.577 4.24115 14.3154 4.9794 14.3154 5.89061V11.2087H19.6334C20.5444 11.2087 21.2834 11.9473 21.2834 12.8584C21.2834 13.7698 20.5444 14.5078 19.6334 14.5078Z" fill="#currentColor" />
                        </svg>
                    </button>
                    <button class=" cs-accordion-collapse">
                        <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-cs-blue-light">
                            <path d="M13.2988 0C6.43311 0 0.75 5.58545 0.75 12.4512C0.75 19.3169 6.43311 25 13.2988 25C20.1646 25 25.75 19.3169 25.75 12.4512C25.75 5.58545 20.1646 0 13.2988 0ZM19.8906 13.916H6.60938C5.80176 13.916 5.14453 13.2588 5.14453 12.4512C5.14453 11.6436 5.80176 10.9863 6.60938 10.9863H19.8906C20.6978 10.9863 21.3555 11.6436 21.3555 12.4512C21.3555 13.2588 20.6978 13.916 19.8906 13.916Z" fill="#currentColor" />
                        </svg>
                    </button>
                </div>
                <!-- 'Your Courses' accordion -->
                <div class="cs-personal-area-box">
                    <button type="button" onclick="toggleAccordion(1)"
                        class="flex items-center justify-between w-full cs-personal-accordion-header">
                        <span>Your Courses</span>
                        <span id="icon-1" class="text-white transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="w-6 h-6">
                                <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
                            </svg>
                        </span>
                    </button>
                    <div id="content-1" class="overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="flex flex-col font-semibold cs-personal-accordion-content">
                            <a href="/bible-timeline-course.php">The Bible Timeline Course</a>
                            <a href="#">Advent 2024 Bible Series</a>
                            <a href="#">Lenten 2024 Bible Series</a>
                        </div>
                    </div>
                </div>

                <!-- 'Information for Come & See...' accordion -->
                <div class="cs-personal-area-box">
                    <button type="button" onclick="toggleAccordion(2)"
                        class="flex items-center justify-between w-full cs-personal-accordion-header">
                        <span>Information for Come & See Mission&nbsp;<br>Partners</span>
                        <span id="icon-2" class="text-white transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="w-6 h-6">
                                <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
                            </svg>
                        </span>
                    </button>
                    <div id="content-2" class="overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="flex flex-col cs-personal-accordion-content">
                            The next monthly Mass (September 2024) for our generous Come & See Mission Partners will be offered on Monday 2nd Sept 2024.
                            <br />
                            For your diary, the next monthly Masses will be celebrated as always every first Monday of the month on these days:
                            <br />
                            <ul class="ml-8 uppercase list-disc cs-fs-xs">
                                <li>7th October 2024</li>
                                <li>4th November 2024</li>
                            </ul>
                            On a personal note, we (Mauro and Janet) continue to lift up your name in our prayers, as our Mission Partner.
                        </div>
                    </div>
                </div>

                <!-- 'Join our Bible Timeline WhatsApp...' accordion -->
                <div class="cs-personal-area-box">
                    <button type="button" onclick="toggleAccordion(3)"
                        class="flex items-center justify-between w-full cs-personal-accordion-header">
                        <span>Join our Bible Timeline WhatsApp&nbsp;Group</span>
                        <span id="icon-3" class="text-white transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="w-6 h-6">
                                <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
                            </svg>
                        </span>
                    </button>
                    <div id="content-3" class="overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="flex flex-col cs-personal-accordion-content">
                            This is not a group to chat (the chat option is disabled!) but for me, the Administrator, to share with you some course communications.
                            <br /><br />
                            If you want to join, use this link from your mobile phone:
                            <br /><br />
                            <a href="#" class="ml-2 font-bold uppercase cs-fs-xs">Join Group</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once 'footer.php'; ?>
</body>

</html>