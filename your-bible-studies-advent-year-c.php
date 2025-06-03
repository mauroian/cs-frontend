<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/input.css">
    <script type="module" src="/src/main.js"></script>
    <title>Bible Timeline Course (Your Area)</title>
</head>

<body class="flex flex-col min-h-screen">
    <?php require_once 'components/header.php'; ?>
    <main class="cs-main">
        <div class="cs-main-div">

            <!-- BIBLE TIMELINE COURSE HEADER SECTION -->
            <div class="flex flex-col items-center w-full py-5 pl-10 text-white sm:py-10 bg-cs-blue-light">
                <div class="w-full max-w-[1000px]">
                    <ol class="flex flex-wrap items-center w-full tracking-widest uppercase cs-fs-2xs">
                        <li class="flex items-center cursor-pointer ">
                            <a href="#">Your Area</a>
                            <img src="/src/assets/breadcrumb.svg" class="w-4 h-4 ml-1">
                        </li>
                        <li class="flex items-center cursor-pointer ">
                            <a href="#">Your Courses</a>
                        </li>
                    </ol>
                    <h1 class="font-serif text-left sm:cs-fs-3xl cs-fs-2xl leading-[40px] mt-3 sm:mt-5">Advent Sunday Gospels (Year C)</h1>
                </div>
            </div> <!-- END OF BIBLE TIMELINE COURSE HEADER SECTION -->


            <!-- OUTER CONTAINER (EXPAND/COLLAPSE BUTTONS & ALL SESSIONS -->
            <div class="flex flex-col items-center cs-personal-area-container">

                <!-- EXPAND/COLLAPSE BUTTONS -->
                <div class="flex flex-row items-center justify-end cs-accordion-manager">
                    <button class="mr-1 cs-accordion-expand text-cs-blue-light">
                        <!-- Note: cs-accordion-expand is called by Javascript -->
                        <img src="/src/assets/accordion-collapse.svg" class="w-6 h-6" alt="Expand">
                    </button>
                    <button class=" cs-accordion-collapse">
                        <!-- Note: cs-accordion-collapse is called by Javascript -->
                        <img src="/src/assets/accordion-expand.svg" class="w-6 h-6" alt="Collapse">
                    </button>
                </div>


                <!-- 1ST SUNDAY OUTER CONTAINER -->
                <div class="cs-bible-area-box">

                    <!-- 1ST SUNDAY HEADER -->
                    <button type="button" onclick="toggleAccordion(this)"
                        class="flex items-start justify-between w-full cs-bible-accordion-header">

                        <div>
                            <div class=" text-cs-blue-light">First Sunday of Advent (Year&nbsp;C) - Lk&nbsp;21:25-28,34-36</div>
                            <div class="mt-2 italic cs-fs-sm text-cs-grey">
                                They will see the Son of Man coming in a cloud
                            </div>
                        </div>

                        <div class="pt-2 pl-10 transition-transform duration-300 cs-icon">
                            <!-- Note: cs-icon is called by Javascript -->
                            <img src="/src/assets/accordion-expand.svg" class="flex-shrink-0 w-6 h-6 min-w-6 min-h-6" alt="Expand">
                            <img src="/src/assets/accordion-collapse.svg" class="flex-shrink-0 hidden w-6 h-6 min-w-6 min-h-6" alt="Collapse">
                        </div>

                    </button>

                    <!-- 1ST SUNDAY CONTAINER BELOW HEADER -->
                    <div class="overflow-hidden transition-all duration-300 ease-in-out cs-content">
                        <!-- Note: cs-content is called by Javascript -->

                        <!-- 1ST SUNDAY CLICKABLE RESOURCES OUTER CONTAINER -->
                        <div class="cs-bible-accordion-content">

                            <!-- VIDEO RECORDING CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b cs-course-border-t">

                                <a href="get-resource/adv-c-s1-video----1sun-adv-c" class="flex flex-row mt-0">
                                    <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Video of First Sunday of Advent
                                    </span>
                                </a>

                            </div> <!-- END OF VIDEO RECORDING CONTAINER -->

                            <!-- STUDY QUESTIONS CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b">

                                <div class="flex flex-row mt-0">
                                    <span class="ml-0 cs-course-chip">
                                        after the session
                                    </span>
                                    <span class="ml-4 cs-course-chip">
                                        optional
                                    </span>
                                </div>

                                <a href="get-resource/adv-c-s1-study-questions---2sun-adv-c" class="flex flex-row mt-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Study Questions
                                    </span>
                                </a>

                            </div> <!-- END OF STUDY QUESTIONS CONTAINER -->

                        </div> <!-- END OF 1ST SUNDAY CLICKABLE RESOURCES OUTER CONTAINER -->

                    </div> <!-- END OF 1ST SUNDAY CONTAINER BELOW HEADER -->

                </div> <!-- END OF 1ST SUNDAY OUTER CONTAINER -->

                <!-- 2ND SUNDAY OUTER CONTAINER -->
                <div class="cs-bible-area-box">

                    <!-- 2ND SUNDAY HEADER -->
                    <button type="button" onclick="toggleAccordion(this)"
                        class="flex items-start justify-between w-full cs-bible-accordion-header">

                        <div>
                            <div class=" text-cs-blue-light">Second Sunday of Advent (Year&nbsp;C) - Lk&nbsp;3:1-6</div>
                            <div class="mt-2 italic cs-fs-sm text-cs-grey">
                                Prepare a way for the Lord, make his paths straight
                            </div>
                        </div>

                        <div class="pt-2 pl-10 transition-transform duration-300 cs-icon">
                            <!-- Note: cs-icon is called by Javascript -->
                            <img src="/src/assets/accordion-expand.svg" class="flex-shrink-0 w-6 h-6 min-w-6 min-h-6" alt="Expand">
                            <img src="/src/assets/accordion-collapse.svg" class="flex-shrink-0 hidden w-6 h-6 min-w-6 min-h-6" alt="Collapse">
                        </div>

                    </button>

                    <!-- 2ND SUNDAY CONTAINER BELOW HEADER -->
                    <div class="overflow-hidden transition-all duration-300 ease-in-out cs-content">
                        <!-- Note: cs-content is called by Javascript -->

                        <!-- 2ND SUNDAY CLICKABLE RESOURCES OUTER CONTAINER -->
                        <div class="cs-bible-accordion-content">

                            <!-- VIDEO RECORDING CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b cs-course-border-t">

                                <a href="get-resource/adv-c-s2-video----2sun-adv-c" class="flex flex-row mt-0">
                                    <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Video of Second Sunday of Advent
                                    </span>
                                </a>

                            </div> <!-- END OF VIDEO RECORDING CONTAINER -->

                            <!-- STUDY QUESTIONS CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b">

                                <div class="flex flex-row mt-0">
                                    <span class="ml-0 cs-course-chip">
                                        after the session
                                    </span>
                                    <span class="ml-4 cs-course-chip">
                                        optional
                                    </span>
                                </div>

                                <a href="get-resource/adv-c-s2-study-questions---2sun-adv-c" class="flex flex-row mt-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Study Questions
                                    </span>
                                </a>

                            </div> <!-- END OF STUDY QUESTIONS CONTAINER -->

                        </div> <!-- END OF 2ND SUNDAY CLICKABLE RESOURCES OUTER CONTAINER -->

                    </div> <!-- END OF 2ND SUNDAY CONTAINER BELOW HEADER -->

                </div> <!-- END OF 2ND SUNDAY OUTER CONTAINER -->

                <!-- 3RD SUNDAY OUTER CONTAINER -->
                <div class="cs-bible-area-box">

                    <!-- 3RD SUNDAY HEADER -->
                    <button type="button" onclick="toggleAccordion(this)"
                        class="flex items-start justify-between w-full cs-bible-accordion-header">

                        <div>
                            <div class=" text-cs-blue-light">Third Sunday of Advent (Year&nbsp;C) - Lk&nbsp;3:10-18</div>
                            <div class="mt-2 italic cs-fs-sm text-cs-grey">
                                I baptise you with water; he will baptise you with the Holy Spirit and fire
                            </div>
                        </div>

                        <div class="pt-2 pl-10 transition-transform duration-300 cs-icon">
                            <!-- Note: cs-icon is called by Javascript -->
                            <img src="/src/assets/accordion-expand.svg" class="flex-shrink-0 w-6 h-6 min-w-6 min-h-6" alt="Expand">
                            <img src="/src/assets/accordion-collapse.svg" class="flex-shrink-0 hidden w-6 h-6 min-w-6 min-h-6" alt="Collapse">
                        </div>

                    </button>

                    <!-- 3RD SUNDAY CONTAINER BELOW HEADER -->
                    <div class="overflow-hidden transition-all duration-300 ease-in-out cs-content">
                        <!-- Note: cs-content is called by Javascript -->

                        <!-- 3RD SUNDAY CLICKABLE RESOURCES OUTER CONTAINER -->
                        <div class="cs-bible-accordion-content">

                            <!-- VIDEO RECORDING CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b cs-course-border-t">

                                <a href="get-resource/adv-c-s3-video----3sun-adv-c" class="flex flex-row mt-0">
                                    <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Video of Third Sunday of Advent
                                    </span>
                                </a>

                            </div> <!-- END OF VIDEO RECORDING CONTAINER -->

                            <!-- STUDY QUESTIONS CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b">

                                <div class="flex flex-row mt-0">
                                    <span class="ml-0 cs-course-chip">
                                        after the session
                                    </span>
                                    <span class="ml-4 cs-course-chip">
                                        optional
                                    </span>
                                </div>

                                <a href="get-resource/adv-c-s3-study-questions---3sun-adv-c" class="flex flex-row mt-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Study Questions
                                    </span>
                                </a>

                            </div> <!-- END OF STUDY QUESTIONS CONTAINER -->

                        </div> <!-- END OF 3RD SUNDAY CLICKABLE RESOURCES OUTER CONTAINER -->

                    </div> <!-- END OF 3RD SUNDAY CONTAINER BELOW HEADER -->

                </div> <!-- END OF 3RD SUNDAY OUTER CONTAINER -->

                <!-- 4TH SUNDAY OUTER CONTAINER -->
                <div class="cs-bible-area-box">

                    <!-- 4TH SUNDAY HEADER -->
                    <button type="button" onclick="toggleAccordion(this)"
                        class="flex items-start justify-between w-full cs-bible-accordion-header">

                        <div>
                            <div class=" text-cs-blue-light">Fourth Sunday of Advent (Year&nbsp;C) - Lk&nbsp;1:39-45</div>
                            <div class="mt-2 italic cs-fs-sm text-cs-grey">
                                'Of all women you are the most blessed, and blessed is the fruit of your womb'
                            </div>
                        </div>

                        <div class="pt-2 pl-10 transition-transform duration-300 cs-icon">
                            <!-- Note: cs-icon is called by Javascript -->
                            <img src="/src/assets/accordion-expand.svg" class="flex-shrink-0 w-6 h-6 min-w-6 min-h-6" alt="Expand">
                            <img src="/src/assets/accordion-collapse.svg" class="flex-shrink-0 hidden w-6 h-6 min-w-6 min-h-6" alt="Collapse">
                        </div>

                    </button>

                    <!-- 4TH SUNDAY CONTAINER BELOW HEADER -->
                    <div class="overflow-hidden transition-all duration-300 ease-in-out cs-content">
                        <!-- Note: cs-content is called by Javascript -->

                        <!-- 4TH SUNDAY CLICKABLE RESOURCES OUTER CONTAINER -->
                        <div class="cs-bible-accordion-content">

                            <!-- VIDEO RECORDING CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b cs-course-border-t">

                                <a href="get-resource/adv-c-s4-video----4sun-adv-c" class="flex flex-row mt-0">
                                    <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Video of Fourth Sunday of Advent
                                    </span>
                                </a>

                            </div> <!-- END OF VIDEO RECORDING CONTAINER -->

                            <!-- STUDY QUESTIONS CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b">

                                <div class="flex flex-row mt-0">
                                    <span class="ml-0 cs-course-chip">
                                        after the session
                                    </span>
                                    <span class="ml-4 cs-course-chip">
                                        optional
                                    </span>
                                </div>

                                <a href="get-resource/adv-c-s4-study-questions---4sun-adv-c" class="flex flex-row mt-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Study Questions
                                    </span>
                                </a>

                            </div> <!-- END OF STUDY QUESTIONS CONTAINER -->

                        </div> <!-- END OF 4TH SUNDAY CLICKABLE RESOURCES OUTER CONTAINER -->

                    </div> <!-- END OF 4TH SUNDAY CONTAINER BELOW HEADER -->

                </div> <!-- END OF 4TH SUNDAY OUTER CONTAINER -->

                <!-- NATIVITY MASS DURING THE DAY OUTER CONTAINER -->
                <div class="cs-bible-area-box">

                    <!-- NATIVITY MASS DURING THE DAY HEADER -->
                    <button type="button" onclick="toggleAccordion(this)"
                        class="flex items-start justify-between w-full cs-bible-accordion-header">

                        <div>
                            <div class=" text-cs-blue-light">Fifth Sunday of Advent (Year&nbsp;C) - Jn&nbsp;12:20-33</div>
                            <div class="mt-2 italic cs-fs-sm text-cs-grey">
                                'Father, glorify your name!'
                            </div>
                        </div>

                        <div class="pt-2 pl-10 transition-transform duration-300 cs-icon">
                            <!-- Note: cs-icon is called by Javascript -->
                            <img src="/src/assets/accordion-expand.svg" class="flex-shrink-0 w-6 h-6 min-w-6 min-h-6" alt="Expand">
                            <img src="/src/assets/accordion-collapse.svg" class="flex-shrink-0 hidden w-6 h-6 min-w-6 min-h-6" alt="Collapse">
                        </div>

                    </button>

                    <!-- NATIVITY MASS DURING THE DAY CONTAINER BELOW HEADER -->
                    <div class="overflow-hidden transition-all duration-300 ease-in-out cs-content">
                        <!-- Note: cs-content is called by Javascript -->

                        <!-- NATIVITY MASS DURING THE DAY CLICKABLE RESOURCES OUTER CONTAINER -->
                        <div class="cs-bible-accordion-content">

                            <!-- VIDEO RECORDING CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b cs-course-border-t">

                                <a href="get-resource/adv-c-s5-video---nativity-lord-day-abc" class="flex flex-row mt-0">
                                    <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Video of the Nativity (Gospel of the Mass during the Day)
                                    </span>
                                </a>

                            </div> <!-- END OF VIDEO RECORDING CONTAINER -->

                            <!-- STUDY QUESTIONS CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b">

                                <div class="flex flex-row mt-0">
                                    <span class="ml-0 cs-course-chip">
                                        after the session
                                    </span>
                                    <span class="ml-4 cs-course-chip">
                                        optional
                                    </span>
                                </div>

                                <a href="get-resource/adv-c-s5-study-questions---nativity-lord-day-abc" class="flex flex-row mt-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Study Questions
                                    </span>
                                </a>

                            </div> <!-- END OF STUDY QUESTIONS CONTAINER -->

                        </div> <!-- END OF NATIVITY MASS DURING THE DAY CLICKABLE RESOURCES OUTER CONTAINER -->

                    </div> <!-- END OF NATIVITY MASS DURING THE DAY CONTAINER BELOW HEADER -->

                </div> <!-- END OF NATIVITY MASS DURING THE DAY OUTER CONTAINER -->

            </div> <!-- END OF OUTER CONTAINER (EXPAND/COLLAPSE BUTTONS & ALL SESSIONS -->

        </div>
    </main>
    <?php require_once 'components/footer.php'; ?>
</body>

</html>