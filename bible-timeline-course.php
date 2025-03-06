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
    <main class="flex-grow mt-20 bg-cs-paper">
        <div class="flex flex-col items-center gap-2 mb-32 ">

            <!-- 'Title' container -->
            <div class="flex flex-col items-center w-full py-5 pl-10 text-white sm:py-10 bg-cs-blue-light">
                <div class="w-full max-w-[1000px]">
                    <ol class="flex flex-wrap items-center w-full tracking-widest uppercase cs-fs-2xs">
                        <li class="flex items-center cursor-pointer ">
                            <a href="#">Your Dashboard</a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-1">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                            </svg>
                        </li>
                        <li class="flex items-center cursor-pointer ">
                            <a href="#">Your Courses</a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="w-4 h-4 ml-1">
                                <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                            </svg>
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
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class="h-6 w-6 fill-cs-blue-light"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" fill="currentColor">
                            <g>
                                <g>
                                    <path d="M257,0C116.39,0,0,114.39,0,255s116.39,257,257,257s255-116.39,255-257S397.61,0,257,0z M392,285H287v107
                                        c0,16.54-13.47,30-30,30c-16.54,0-30-13.46-30-30V285H120c-16.54,0-30-13.46-30-30c0-16.54,13.46-30,30-30h107V120
                                        c0-16.54,13.46-30,30-30c16.53,0,30,13.46,30,30v105h105c16.53,0,30,13.46,30,30S408.53,285,392,285z"/>
                                </g>
                            </g>
                            </svg>
                    </button>
                    <button class=" cs-accordion-collapse">
                        <svg class="h-6 w-6 fill-cs-blue-light" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" x="0px" y="0px"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M257,0C116.39,0,0,114.39,0,255s116.39,257,257,257s255-116.39,255-257S397.61,0,257,0z M392,285H120
                                        c-16.54,0-30-13.46-30-30c0-16.54,13.46-30,30-30h272c16.53,0,30,13.46,30,30S408.53,285,392,285z"/>
                                </g>
                            </g>
                            </svg>
                    </button>
                </div>
                <div class="cs-bible-area-box">
                    <button type="button" onclick="toggleAccordion(1)"
                        class="flex items-center justify-between w-full cs-bible-accordion-header">
                        <span class=" text-cs-blue-light">Session 1</span>
                        <span id="icon-1" class="text-black transition-transform duration-300">
                        <svg class="h-6 w-6 fill-cs-blue-light" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" x="0px" y="0px"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M257,0C116.39,0,0,114.39,0,255s116.39,257,257,257s255-116.39,255-257S397.61,0,257,0z M392,285H120
                                        c-16.54,0-30-13.46-30-30c0-16.54,13.46-30,30-30h272c16.53,0,30,13.46,30,30S408.53,285,392,285z"/>
                                </g>
                            </g>
                            </svg>
                        </span>
                    </button>
                    <div id="content-1" class="overflow-hidden transition-all duration-300 ease-in-out">
                        <div class="flex flex-row justify-start text-black bg-cs-paper cs-bible-accordion-subtitle">Course Introduction</div>
                        <div class="flex flex-col cs-bible-accordion-content">
                            <div class="cs-course-item">
                                <a href="#" class="flex flex-row gap-4">
                                    <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Video" />
                                    Video recording of Session&nbsp;1
                                </a>
                                <div class="mt-3">
                                    <span class="inline-block font-sans italic font-normal cs-fs-sm">There are no Study Questions, Bible Reading or Course Notes for Session 1.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs-bible-area-box">
                    <button type="button" onclick="toggleAccordion(2)"
                        class="flex items-center justify-between w-full cs-bible-accordion-header">
                        <span class=" text-cs-blue-light">Session 2</span>
                        <span id="icon-2" class="text-black transition-transform duration-300">
                        <svg class="h-6 w-6 fill-cs-blue-light" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" x="0px" y="0px"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M257,0C116.39,0,0,114.39,0,255s116.39,257,257,257s255-116.39,255-257S397.61,0,257,0z M392,285H120
                                        c-16.54,0-30-13.46-30-30c0-16.54,13.46-30,30-30h272c16.53,0,30,13.46,30,30S408.53,285,392,285z"/>
                                </g>
                            </g>
                            </svg>
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
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf" />
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
                                    <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Video" />
                                    Video recording of Session&nbsp;2
                                </a>
                            </div>
                            <div class="cs-course-item">
                                <a href="#" class="flex flex-row gap-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf" />
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
                                <span class="inline-block font-sans font-normal cs-fs-sm">Course Notes relative to the periods covered in this session:</span>
                            </div>
                            <div class="cs-course-item">
                                <a href="#" class="flex flex-row gap-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf" />
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
                        <svg class="h-6 w-6 fill-cs-blue-light" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" x="0px" y="0px"
                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M257,0C116.39,0,0,114.39,0,255s116.39,257,257,257s255-116.39,255-257S397.61,0,257,0z M392,285H120
                                        c-16.54,0-30-13.46-30-30c0-16.54,13.46-30,30-30h272c16.53,0,30,13.46,30,30S408.53,285,392,285z"/>
                                </g>
                            </g>
                            </svg>
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
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf" />
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
                                    <img src="/src/assets/video-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Video" />
                                    Video recording of Session&nbsp;3
                                </a>
                            </div>
                            <div class="cs-course-item">
                                <a href="#" class="flex flex-row gap-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf" />
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
                                <span class="inline-block font-sans font-normal cs-fs-sm">Course Notes relative to the periods covered in this session:</span>
                            </div>
                            <div class="cs-course-item">
                                <a href="#" class="flex flex-row gap-4">
                                    <img src="/src/assets/pdf-icon.svg" class="inline-block w-8 h-8 mr-2" alt="Pdf" />
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