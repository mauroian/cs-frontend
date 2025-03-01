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
            <div class="flex flex-col items-start w-full pt-8 pb-5 pl-10 text-white bg-cs-blue-light">
                <span class="tracking-widest uppercase">Welcome back, Mauro</span>
                <h1 class="font-serif text-left sm:cs-fs-3xl cs-fs-2xl">Your Dashboard</h1>
            </div>

            <!-- Container of all the accordions -->
            <div class="flex flex-col items-center cs-personal-area-container">

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
                        <span>Information for Come & See Mission&nbsp;Partners</span>
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