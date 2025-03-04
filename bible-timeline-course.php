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
                    <ol class="flex flex-wrap items-center w-full tracking-widest uppercase rounded-md cs-fs-2xs">
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
                <div class="flex flex-row justify-end items-center cs-accordion-manager">
                    <button class="mr-1 cs-accordion-expand">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"  class="w-6 h-6 fill-cs-blue-light">
                            <path d="M12.4999 0C5.59654 0 0 5.59654 0 12.5C0 19.4035 5.59654 24.9999 12.4999 24.9999C19.4034 24.9999 24.9999 19.4035 24.9999 12.5C25 5.59654 19.4035 0 12.4999 0ZM19.6334 14.5078H14.3147V19.8259C14.3147 20.7368 13.5766 21.4756 12.6654 21.4756C11.7545 21.4756 11.0156 20.7368 11.0156 19.8259V14.5078H5.69781C4.7866 14.5078 4.04786 13.7694 4.04786 12.8582C4.04786 11.947 4.7866 11.2084 5.69781 11.2084H11.0159V5.89061C11.0159 4.9794 11.7545 4.24115 12.6657 4.24115C13.577 4.24115 14.3154 4.9794 14.3154 5.89061V11.2087H19.6334C20.5444 11.2087 21.2834 11.9473 21.2834 12.8584C21.2834 13.7698 20.5444 14.5078 19.6334 14.5078Z" fill="#currentColor"/>
                        </svg>
                    </button>
                    <button class=" cs-accordion-collapse">
                        <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg"  class="w-6 h-6 fill-cs-blue-light">
                            <path d="M13.2988 0C6.43311 0 0.75 5.58545 0.75 12.4512C0.75 19.3169 6.43311 25 13.2988 25C20.1646 25 25.75 19.3169 25.75 12.4512C25.75 5.58545 20.1646 0 13.2988 0ZM19.8906 13.916H6.60938C5.80176 13.916 5.14453 13.2588 5.14453 12.4512C5.14453 11.6436 5.80176 10.9863 6.60938 10.9863H19.8906C20.6978 10.9863 21.3555 11.6436 21.3555 12.4512C21.3555 13.2588 20.6978 13.916 19.8906 13.916Z" fill="#currentColor"/>
                        </svg>
                    </button>
                </div>
                <div class="cs-bible-area-box">
                    <button type="button" onclick="toggleAccordion(1)"
                        class="flex items-center justify-between w-full cs-bible-accordion-header">
                        <span>Session 1</span>
                        <span id="icon-1" class="text-black transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="w-6 h-6">
                                <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
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
                        <span>Session 2</span>
                        <span id="icon-2" class="text-black transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="w-6 h-6">
                                <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
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
                        <span>Session 3</span>
                        <span id="icon-3" class="text-black transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="w-6 h-6">
                                <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
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