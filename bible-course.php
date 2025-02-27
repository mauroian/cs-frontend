<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/src/input.css"/>
    <script type="module" src="/src/main.js" defer></script>
    <title>Come & See</title>
</head>

<body class="flex flex-col min-h-screen">
<?php require_once 'header.php'; ?>
<main class="flex-grow mt-20 md:mt-0 bg-cs-paper ">
    <div class="flex flex-col items-center gap-2 mb-32 ">
        <div class="flex flex-col items-start bg-cs-blue-light w-full text-white py-12 pl-10">
            <ol class="flex w-full flex-wrap items-center rounded-md uppercase cs-fs-xs tracking-widest">
                <li class="flex cursor-pointer items-center ">
                    <a href="#">Your Dashboard</a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="h-4 w-4 ml-1">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                </li>
                <li class="flex cursor-pointer items-center ">
                    <a href="#">Your Courses</a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="h-4 w-4 ml-1">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                    </svg>
                </li>
                <li class="flex cursor-pointer items-center ">
                    <a href="#">Bible Timeline Course</a>
                </li>
            </ol>
            <h1 class="font-serif text-left text-6xl">The Bible Timeline Course</h1>
        </div>
        <div class="flex flex-col items-center cs-personal-area-container">
            <div class="">

            </div>
            <div class="cs-bible-area-box">
                <button type="button" onclick="toggleAccordion(1)"
                        class="w-full flex justify-between items-center cs-bible-accordion-header">
                    <span>Session 1</span>
                    <span id="icon-1" class="text-black transition-transform duration-300">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                               class="w-4 h-4">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                          </svg>
                        </span>
                </button>
                <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="bg-cs-paper text-black  cs-bible-accordion-subtitle flex flex-row justify-start">Course Introduction</div>
                    <div class="cs-bible-accordion-content flex flex-col">
                        <div class="cs-course-item">
                            <a href="#" class="flex flex-row gap-4">
                                <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Video"/>
                                Video recording of Session 1
                            </a>
                            <div class="mt-3">
                                <span class="inline-block italic font-sans cs-fs-sm font-normal">There are no Study Questions, Bible Reading or Course Notes for Session 1.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs-bible-area-box">
                <button type="button" onclick="toggleAccordion(2)"
                        class="w-full flex justify-between items-center cs-bible-accordion-header">
                    <span>Session 2</span>
                    <span id="icon-2" class="text-black transition-transform duration-300">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                               class="w-4 h-4">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                          </svg>
                        </span>
                </button>
                <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="bg-cs-period1-pri text-white  cs-bible-accordion-subtitle flex flex-row justify-start">
                        <div class="rounded-xl bg-cs-period1-sec cs-course-tag">
                            Period 1
                        </div>
                        EARLY WORLD</div>
                    <div class="cs-bible-accordion-content flex flex-col">
                        <div class="cs-course-item">
                            <a href="#" class="flex flex-row gap-4">
                                <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf"/>
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
                                <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Video"/>
                                Video recording of Session 2
                            </a>
                        </div>
                        <div class="cs-course-item">
                            <a href="#" class="flex flex-row gap-4">
                                <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf"/>
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
                        <div>
                            <span class="inline-block font-sans cs-fs-sm font-normal">Course Notes relative to the periods covered in this session:</span>
                        </div>
                        <div class="cs-course-item">
                            <a href="#" class="flex flex-row gap-4">
                                <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf"/>
                                Course Notes for Period 1, Early World
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs-bible-area-box">
                <button type="button" onclick="toggleAccordion(3)"
                        class="w-full flex justify-between items-center cs-bible-accordion-header">
                    <span>Session 3</span>
                    <span id="icon-3" class="text-black transition-transform duration-300">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                               class="w-4 h-4">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"/>
                          </svg>
                        </span>
                </button>
                <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="bg-cs-period2-pri text-white cs-bible-accordion-subtitle flex flex-row justify-start">
                        <div class="rounded-xl bg-cs-period2-sec cs-course-tag">
                            Period 2
                        </div>
                        patriarchs</div>
                    <div class="cs-bible-accordion-content flex flex-col">
                        <div class="cs-course-item">
                            <a href="#" class="flex flex-row gap-4">
                                <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf"/>
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
                                <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Video"/>
                                Video recording of Session 3
                            </a>
                        </div>
                        <div class="cs-course-item">
                            <a href="#" class="flex flex-row gap-4">
                                <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf"/>
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
                        <div>
                            <span class="inline-block font-sans cs-fs-sm font-normal">Course Notes relative to the periods covered in this session:</span>
                        </div>
                        <div class="cs-course-item">
                            <a href="#" class="flex flex-row gap-4">
                                <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf"/>
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