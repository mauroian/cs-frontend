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
                            <img src="/src/assets/breadcrumb.svg" alt="Chevron right" class="w-4 h-4 ml-1">
                        </li>
                        <li class="flex items-center cursor-pointer ">
                            <a href="#">Your Courses</a>
                            <img src="/src/assets/breadcrumb.svg" alt="Chevron right" class="w-4 h-4 ml-1">
                        </li>
                        <li class="flex items-center cursor-pointer ">
                            <a href="#">Bible Timeline Course</a>
                        </li>
                    </ol>
                    <h1 class="font-serif text-left sm:cs-fs-3xl cs-fs-2xl leading-[40px] mt-3 sm:mt-5">The Bible Timeline Course</h1>
                </div>
            </div> <!-- END OF BIBLE TIMELINE COURSE HEADER SECTION -->


            <!-- OUTER CONTAINER (EXPAND/COLLAPSE BUTTONS & ALL SESSIONS -->
            <div class="flex flex-col items-center cs-personal-area-container">

                <!-- EXPAND/COLLAPSE BUTTONS -->
                <div class="flex flex-row items-center justify-end cs-accordion-manager">
                    <button class="mr-1 cs-accordion-expand text-cs-blue-light">
                        <!-- Note: cs-accordion-expand is called by Javascript -->
                        <img src="/src/assets/accordion-expand.svg" class="w-6 h-6" alt="Expand">
                    </button>
                    <button class=" cs-accordion-collapse">
                        <!-- Note: cs-accordion-collapse is called by Javascript -->
                        <img src="/src/assets/accordion-collapse.svg" class="w-6 h-6" alt="Collapse">
                    </button>
                </div>


                <!-- SESSION 1 OUTER CONTAINER -->
                <div class="cs-bible-area-box">

                    <!-- SESSION 1 HEADER -->
                    <button type="button" onclick="toggleAccordion(this)"
                        class="flex items-center justify-between w-full cs-bible-accordion-header">
                        <span class=" text-cs-blue-light">Session 1</span>
                        <span class="transition-transform duration-300 cs-icon">
                            <!-- Note: cs-icon is called by Javascript -->
                            <img src="/src/assets/accordion-expand.svg" class="w-6 h-6" alt="Expand">
                            <img src="/src/assets/accordion-collapse.svg" class="hidden w-6 h-6" alt="Expand">
                        </span>
                    </button>

                    <!-- SESSION 1 CONTAINER BELOW HEADER -->
                    <div class="overflow-hidden transition-all duration-300 ease-in-out cs-content">
                        <!-- Note: cs-content is called by Javascript -->

                        <!-- INTRODUCTION -->
                        <div class="flex flex-col">
                            <div class="flex flex-row justify-start bg-white text-cs-grey cs-bible-accordion-subtitle">
                                <div>
                                    Course Introduction
                                </div>
                            </div>
                        </div>

                        <!-- SESSION 1 CLICKABLE RESOURCES OUTER CONTAINER -->
                        <div class="cs-bible-accordion-content">

                            <!-- VIDEO RECORDING CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b">

                                <a href="#" class="flex flex-row mt-0">
                                    <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Video Recording of Session 1
                                    </span>
                                </a>

                            </div> <!-- END OF VIDEO RECORDING CONTAINER -->

                            <!-- COURSE NOTES CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 hover:rounded-b-3xl">

                                <div class="flex flex-row mt-0">
                                    <span class="font-sans font-normal cs-fs-sm">
                                        There are no Study Questions, Bible Reading or Course Notes for Session 1.
                                    </span>
                                </div>

                            </div> <!-- END OF COURSE NOTES CONTAINER -->

                        </div> <!-- END OF SESSION 1 CLICKABLE RESOURCES OUTER CONTAINER -->

                    </div> <!-- END OF SESSION 1 CONTAINER BELOW HEADER -->

                </div> <!-- END OF SESSION 1 OUTER CONTAINER -->


                <!-- SESSION 2 OUTER CONTAINER -->
                <div class="cs-bible-area-box">

                    <!-- SESSION 2 HEADER -->
                    <button type="button" onclick="toggleAccordion(this)"
                        class="flex items-center justify-between w-full cs-bible-accordion-header">
                        <span class=" text-cs-blue-light">Session 2</span>
                        <span class="transition-transform duration-300 cs-icon">
                            <!-- Note: cs-icon is called by Javascript -->
                            <img src="/src/assets/accordion-expand.svg" class="w-6 h-6" alt="Expand">
                            <img src="/src/assets/accordion-collapse.svg" class="hidden w-6 h-6" alt="Expand">
                        </span>
                    </button>

                    <!-- SESSION 2 CONTAINER BELOW HEADER -->
                    <div class="overflow-hidden transition-all duration-300 ease-in-out cs-content">
                        <!-- Note: cs-content is called by Javascript -->

                        <!-- PERIOD 1 EARLY WORLD -->
                        <div class="flex flex-col">
                            <div class="flex flex-row justify-start text-white bg-cs-period1-pri cs-bible-accordion-subtitle">
                                <div class="rounded-xl bg-cs-period1-sec cs-course-tag">
                                    Period 1
                                </div>
                                <div>
                                    Early World
                                </div>
                            </div>
                        </div>

                        <!-- SESSION 2 CLICKABLE RESOURCES OUTER CONTAINER -->
                        <div class="cs-bible-accordion-content">

                            <!-- BIBLE READING CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b">

                                <div class="flex flex-row mt-0">
                                    <span class="ml-0 cs-course-chip">
                                        before the session
                                    </span>
                                    <span class="ml-4 cs-course-chip">
                                        optional
                                    </span>
                                </div>

                                <a href="#" class="flex flex-row mt-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Bible reading
                                    </span>
                                </a>

                            </div> <!-- END OF BIBLE READING CONTAINER -->

                            <!-- VIDEO RECORDING CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b">

                                <a href="#" class="flex flex-row mt-0">
                                    <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Video Recording of Session 2
                                    </span>
                                </a>

                            </div> <!-- END OF VIDEO RECORDING CONTAINER -->

                            <!-- STUDY QUESTIONS CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b">

                                <div class="flex flex-row mt-0">
                                    <span class="ml-0 cs-course-chip">
                                        before the session
                                    </span>
                                    <span class="ml-4 cs-course-chip">
                                        optional
                                    </span>
                                </div>

                                <a href="#" class="flex flex-row mt-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Study Questions
                                    </span>
                                </a>

                            </div> <!-- END OF STUDY QUESTIONS CONTAINER -->

                            <!-- COURSE NOTES CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 hover:rounded-b-3xl">

                                <div class="flex flex-row mt-0">
                                    <span class="ml-0 cs-course-chip">
                                        after the session
                                    </span>
                                    <span class="ml-4 cs-course-chip">
                                        optional
                                    </span>
                                </div>

                                <div class="flex flex-row mt-4">
                                    <span class="font-sans font-normal cs-fs-sm">
                                        Course Notes relative to the periods covered in this session:
                                    </span>
                                </div>

                                <a href="#" class="flex flex-row mt-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Course Notes for Period 1, Early World
                                    </span>
                                </a>
                            </div> <!-- END OF COURSE NOTES CONTAINER -->

                        </div> <!-- END OF SESSION 2 CLICKABLE RESOURCES OUTER CONTAINER -->

                    </div> <!-- END OF SESSION 2 CONTAINER BELOW HEADER -->

                </div> <!-- END OF SESSION 2 OUTER CONTAINER -->

                <!-- SESSION 3 OUTER CONTAINER -->
                <div class="cs-bible-area-box">

                    <!-- SESSION 3 HEADER -->
                    <button type="button" onclick="toggleAccordion(this)"
                        class="flex items-center justify-between w-full cs-bible-accordion-header">
                        <span class=" text-cs-blue-light">Session 3</span>
                        <span class="transition-transform duration-300 cs-icon">
                            <!-- Note: cs-icon is called by Javascript -->
                            <img src="/src/assets/accordion-expand.svg" class="w-6 h-6" alt="Expand">
                            <img src="/src/assets/accordion-collapse.svg" class="hidden w-6 h-6" alt="Expand">
                        </span>
                    </button>

                    <!-- SESSION 3 CONTAINER BELOW HEADER -->
                    <div class="overflow-hidden transition-all duration-300 ease-in-out cs-content">
                        <!-- Note: cs-content is called by Javascript -->

                        <!-- PERIOD 2 PATRIARCHS -->
                        <div class="flex flex-col">
                            <div class="flex flex-row justify-start text-white bg-cs-period2-pri cs-bible-accordion-subtitle">
                                <div class="rounded-xl bg-cs-period2-sec cs-course-tag">
                                    Period 2
                                </div>
                                <div>
                                    Patriarchs
                                </div>
                            </div>
                        </div>

                        <!-- SESSION 3 CLICKABLE RESOURCES OUTER CONTAINER -->
                        <div class="cs-bible-accordion-content">

                            <!-- BIBLE READING CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b">

                                <div class="flex flex-row mt-0">
                                    <span class="ml-0 cs-course-chip">
                                        before the session
                                    </span>
                                    <span class="ml-4 cs-course-chip">
                                        optional
                                    </span>
                                </div>

                                <a href="#" class="flex flex-row mt-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Bible reading
                                    </span>
                                </a>

                            </div> <!-- END OF BIBLE READING CONTAINER -->

                            <!-- VIDEO RECORDING CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b">

                                <a href="#" class="flex flex-row mt-0">
                                    <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Video Recording of Session 3
                                    </span>
                                </a>

                            </div> <!-- END OF VIDEO RECORDING CONTAINER -->

                            <!-- STUDY QUESTIONS CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b">

                                <div class="flex flex-row mt-0">
                                    <span class="ml-0 cs-course-chip">
                                        before the session
                                    </span>
                                    <span class="ml-4 cs-course-chip">
                                        optional
                                    </span>
                                </div>

                                <a href="#" class="flex flex-row mt-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Study Questions
                                    </span>
                                </a>

                            </div> <!-- END OF STUDY QUESTIONS CONTAINER -->

                            <!-- COURSE NOTES CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 hover:rounded-b-3xl">

                                <div class="flex flex-row mt-0">
                                    <span class="ml-0 cs-course-chip">
                                        after the session
                                    </span>
                                    <span class="ml-4 cs-course-chip">
                                        optional
                                    </span>
                                </div>

                                <div class="flex flex-row mt-4">
                                    <span class="font-sans font-normal cs-fs-sm">
                                        Course Notes relative to the periods covered in this session:
                                    </span>
                                </div>

                                <a href="#" class="flex flex-row mt-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Course Notes for Period 2, Patriarchs
                                    </span>
                                </a>
                            </div> <!-- END OF COURSE NOTES CONTAINER -->

                        </div> <!-- END OF SESSION 3 CLICKABLE RESOURCES OUTER CONTAINER -->

                    </div> <!-- END OF SESSION 3 CONTAINER BELOW HEADER -->

                </div> <!-- END OF SESSION 3 OUTER CONTAINER -->

                <!-- SESSION 4 OUTER CONTAINER -->
                <div class="cs-bible-area-box">

                    <!-- SESSION 4 HEADER -->
                    <button type="button" onclick="toggleAccordion(this)"
                        class="flex items-center justify-between w-full cs-bible-accordion-header">
                        <span class=" text-cs-blue-light">Session 4</span>
                        <span class="transition-transform duration-300 cs-icon">
                            <!-- Note: cs-icon is called by Javascript -->
                            <img src="/src/assets/accordion-expand.svg" class="w-6 h-6" alt="Expand">
                            <img src="/src/assets/accordion-collapse.svg" class="hidden w-6 h-6" alt="Expand">
                        </span>
                    </button>

                    <!-- SESSION 4 CONTAINER BELOW HEADER -->
                    <div class="overflow-hidden transition-all duration-300 ease-in-out cs-content">
                        <!-- Note: cs-content is called by Javascript -->

                        <!-- PERIOD 3 EGYPT & EXODUS -->
                        <div class="flex flex-col">
                            <div class="flex flex-row justify-start text-white bg-cs-period3-pri cs-bible-accordion-subtitle">
                                <div class="rounded-xl bg-cs-period3-sec cs-course-tag">
                                    Period 3
                                </div>
                                <div>
                                    Egypt & Exodus
                                </div>
                            </div>
                        </div>

                        <!-- PERIOD 4 DESERT WANDERINGS -->
                        <div class="flex flex-col">
                            <div class="flex flex-row justify-start text-white bg-cs-period4-pri cs-bible-accordion-subtitle">
                                <div class="rounded-xl bg-cs-period4-sec cs-course-tag">
                                    Period 4
                                </div>
                                <div>
                                    Desert Wanderings
                                </div>
                            </div>
                        </div>

                        <!-- SESSION 4 CLICKABLE RESOURCES OUTER CONTAINER -->
                        <div class="cs-bible-accordion-content">

                            <!-- BIBLE READING CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b">

                                <div class="flex flex-row mt-0">
                                    <span class="ml-0 cs-course-chip">
                                        before the session
                                    </span>
                                    <span class="ml-4 cs-course-chip">
                                        optional
                                    </span>
                                </div>

                                <a href="#" class="flex flex-row mt-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Bible reading
                                    </span>
                                </a>

                            </div> <!-- END OF BIBLE READING CONTAINER -->

                            <!-- VIDEO RECORDING CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b">

                                <a href="#" class="flex flex-row mt-0">
                                    <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Video Recording of Session 4
                                    </span>
                                </a>

                            </div> <!-- END OF VIDEO RECORDING CONTAINER -->

                            <!-- STUDY QUESTIONS CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 cs-course-border-b">

                                <div class="flex flex-row mt-0">
                                    <span class="ml-0 cs-course-chip">
                                        before the session
                                    </span>
                                    <span class="ml-4 cs-course-chip">
                                        optional
                                    </span>
                                </div>

                                <a href="#" class="flex flex-row mt-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Study Questions
                                    </span>
                                </a>

                            </div> <!-- END OF STUDY QUESTIONS CONTAINER -->

                            <!-- COURSE NOTES CONTAINER -->
                            <div class="flex flex-col items-start px-8 pt-6 pb-6 hover:bg-gray-100 hover:rounded-b-3xl">

                                <div class="flex flex-row mt-0">
                                    <span class="ml-0 cs-course-chip">
                                        after the session
                                    </span>
                                    <span class="ml-4 cs-course-chip">
                                        optional
                                    </span>
                                </div>

                                <div class="flex flex-row mt-4">
                                    <span class="font-sans font-normal cs-fs-sm">
                                        Course Notes relative to the periods covered in this session:
                                    </span>
                                </div>

                                <a href="#" class="flex flex-row mt-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base">
                                        Course Notes for Period 3, Egypt & Exodus
                                    </span>
                                </a>

                                <a href="#" class="flex flex-row mt-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8" alt="Pdf">
                                    <span class="ml-5 font-semibold cs-fs-base ">
                                        Course Notes for Period 4, Desert Wanderigs
                                    </span>
                                </a>
                            </div> <!-- END OF COURSE NOTES CONTAINER -->

                        </div> <!-- END OF SESSION 4 CLICKABLE RESOURCES OUTER CONTAINER -->

                    </div> <!-- END OF SESSION 4 CONTAINER BELOW HEADER -->

                </div> <!-- END OF SESSION 4 OUTER CONTAINER -->

            </div> <!-- END OF OUTER CONTAINER (EXPAND/COLLAPSE BUTTONS & ALL SESSIONS -->

        </div>
    </main>
    <?php require_once 'components/footer.php'; ?>
</body>

</html>