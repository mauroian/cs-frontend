<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="/src/input.css" >
    <script type="module" src="/src/main.js"></script>
    <title>Come & See</title>
</head>

<body class="flex flex-col min-h-screen">
    <?php require_once 'header.php'; ?>
    <main class="flex-grow mt-20 bg-cs-paper">
        <div class="flex flex-col items-center gap-2 mb-32 ">

            <!-- 'Title' container -->
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
            </div>

            <div class="flex flex-col items-center cs-personal-area-container">
                <div class="flex flex-row items-center justify-end cs-accordion-manager">
                    <button class="mr-1 cs-accordion-expand text-cs-blue-light">
                        <img src="/src/assets/accordion-expand.svg" class="w-6 h-6" alt="Expand" >
                    </button>
                    <button class=" cs-accordion-collapse">
                        <img src="/src/assets/accordion-collapse.svg" class="w-6 h-6" alt="Collapse" >

                    </button>
                </div>
                <div class="cs-bible-area-box">
                    <button type="button" onclick="toggleAccordion(1)"
                        class="flex items-center justify-between w-full cs-bible-accordion-header">
                        <span class=" text-cs-blue-light">Session 1</span>
                        <span id="icon-1" class="text-black transition-transform duration-300">
                            <img src="/src/assets/accordion-expand.svg" class="w-6 h-6" alt="Expand" >
                            <img src="/src/assets/accordion-collapse.svg" class="w-6 h-6 hidden" alt="Expand" >
                        </span>
                    </button>
                    <div id="content-1" class="overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="flex flex-row justify-start text-black bg-cs-paper cs-bible-accordion-subtitle">Course Introduction</div>
                        <div class="flex flex-col cs-bible-accordion-content">
                            <div class="cs-course-item">
                                <a href="#" class="flex flex-row gap-4">
                                    <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Video" >
                                    Video recording of Session&nbsp;1
                                </a>

                            </div>
                            <div class="cs-course-item">
                                <span class="inline-block font-sans italic font-normal cs-fs-sm">There are no Study Questions, Bible Reading or Course Notes for Session 1.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs-bible-area-box">
                    <button type="button" onclick="toggleAccordion(2)"
                        class="flex items-center justify-between w-full cs-bible-accordion-header">
                        <span class=" text-cs-blue-light">Session 2</span>
                        <span id="icon-2" class="text-black transition-transform duration-300">
                            <img src="/src/assets/accordion-expand.svg" class="w-6 h-6" alt="Expand" >
                            <img src="/src/assets/accordion-collapse.svg" class="w-6 h-6 hidden" alt="Expand" >

                        </span>
                    </button>
                    <div id="content-2" class="overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="flex flex-row justify-start text-white bg-cs-period1-pri cs-bible-accordion-subtitle">
                            <div class="rounded-xl bg-cs-period1-sec cs-course-tag">
                                Period 1
                            </div>
                            EARLY WORLD
                        </div>
                        <div class="flex flex-col cs-bible-accordion-content">
                            <div class="cs-course-item">
                                <a href="#" class="flex flex-row gap-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf" >
                                    <div class="flex flex-col gap-2">
                                        Bible Reading
                                        <div class="flex flex-row gap-1.5 md:gap-2">
                                            <div class="cs-course-chip">
                                                pre-session
                                            </div>
                                            <div class="cs-course-chip">
                                                optional
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="cs-course-item">
                                <a href="#" class="flex flex-row gap-4">
                                    <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Video" >
                                    Video recording of Session&nbsp;2
                                </a>
                            </div>
                            <div class="cs-course-item">
                                <a href="#" class="flex flex-row gap-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf" >
                                    <div class="flex flex-col gap-2">
                                        Study Questions
                                        <div class="flex flex-row gap-1.5 md:gap-2">
                                            <div class="cs-course-chip">
                                                post-session
                                            </div>
                                            <div class="cs-course-chip">
                                                optional
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="cs-course-item">
                                <span class="inline-block font-sans font-normal cs-fs-sm">Course Notes relative to the periods covered in this session:</span>
                            </div>
                            <div class="cs-course-item">
                                <a href="#" class="flex flex-row gap-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf" >
                                    Course Notes for Period 1, Early World
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs-bible-area-box">
                    <button type="button" onclick="toggleAccordion(3)"
                        class="flex items-center justify-between w-full cs-bible-accordion-header">
                        <span class=" text-cs-blue-light">Session 3</span>
                        <span id="icon-3" class="text-black transition-transform duration-300">
                            <img src="/src/assets/accordion-expand.svg" class="w-6 h-6" alt="Expand" >
                            <img src="/src/assets/accordion-collapse.svg" class="w-6 h-6 hidden" alt="Expand" >
                        </span>
                    </button>
                    <div id="content-3" class="overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="flex flex-row justify-start text-white bg-cs-period2-pri cs-bible-accordion-subtitle">
                            <div class="rounded-xl bg-cs-period2-sec cs-course-tag">
                                Period 2
                            </div>
                            patriarchs
                        </div>
                        <div class="flex flex-col cs-bible-accordion-content">
                            <div class="cs-course-item">
                                <a href="#" class="flex flex-row gap-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf" >
                                    <div class="flex flex-col gap-2">
                                        Bible Reading
                                        <div class="flex flex-row gap-1.5 md:gap-2">
                                            <div class="cs-course-chip">
                                                pre-session
                                            </div>
                                            <div class="cs-course-chip">
                                                optional
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="cs-course-item">
                                <a href="#" class="flex flex-row gap-4">
                                    <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Video" >
                                    Video recording of Session&nbsp;3
                                </a>
                            </div>
                            <div class="cs-course-item">
                                <a href="#" class="flex flex-row gap-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf" >
                                    <div class="flex flex-col gap-2">
                                        Study Questions
                                        <div class="flex flex-row gap-1.5 md:gap-2">
                                            <div class="cs-course-chip">
                                                post-session
                                            </div>
                                            <div class="cs-course-chip">
                                                optional
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="cs-course-item">
                                <span class="inline-block font-sans font-normal cs-fs-sm">Course Notes relative to the periods covered in this session:</span>
                            </div>
                            <div class="cs-course-item">
                                <a href="#" class="flex flex-row gap-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf" >
                                    Course Notes for Period 2, Patriarchs
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once 'footer.php'; ?>
</body>

</html>