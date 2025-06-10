<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/input.css">
    <script type="module" src="/src/main.js"></script>
    <title>The Bible Timeline Course</title>
</head>

<body class="flex flex-col min-h-screen">

    <?php require_once 'components/header.php'; ?>

    <main class="cs-main">
        <div class="cs-main-div">
            <!-- Hero Section -->
            <div class="relative flex flex-col flex-wrap items-center justify-center w-full text-white min-h-[200px] md:min-h-[500px]">
                <div class="absolute inset-0 z-0">
                    <img src="/src/assets/bible-timeline/sixteen-miles-out.jpg" alt="Header Background" class="object-cover w-full h-full opacity-80">
                </div>
                <div class="relative z-10 w-full max-w-[1100px] text-center py-8 md:py-12 px-6">
                    <div class="-mt-0 tracking-widest uppercase cs-bt-uppercase-prompt-fs text-cs-red-main">Come & See Presents</div>
                    <div class="px-3 mt-3 font-sans font-bold cs-bt-fs-extralarge cs-gradient-text">
                        <h1>The&nbsp;Bible&nbsp;Timeline Course</h1>
                    </div>
                    <div class="mt-3 font-sans font-bold tracking-widest uppercase cs-bt-one-story-fs text-cs-red-main">73 Books, one story</div>
                    <div class="relative flex-col items-center justify-center hidden gap-0 mt-12 rounded-lg md:flex sm:flex-row flex-nowrap"
                        id="timeline-desktop">
                        <!-- Immagini dei periodi -->
                        <img src="/src/assets/bible-timeline/p1.png" alt="Period 1"
                            class="object-contain w-1/12 timeline-period-img" data-index="0">
                        <img src="/src/assets/bible-timeline/p2.png" alt="Period 2"
                            class="object-contain w-1/12 timeline-period-img" data-index="1">
                        <img src="/src/assets/bible-timeline/p3.png" alt="Period 3"
                            class="object-contain w-1/12 timeline-period-img" data-index="2">
                        <img src="/src/assets/bible-timeline/p4.png" alt="Period 4"
                            class="object-contain w-1/12 timeline-period-img" data-index="3">
                        <img src="/src/assets/bible-timeline/p5.png" alt="Period 5"
                            class="object-contain w-1/12 timeline-period-img" data-index="4">
                        <img src="/src/assets/bible-timeline/p6.png" alt="Period 6"
                            class="object-contain w-1/12 timeline-period-img" data-index="5">
                        <img src="/src/assets/bible-timeline/p7.png" alt="Period 7"
                            class="object-contain w-1/12 timeline-period-img" data-index="6">
                        <img src="/src/assets/bible-timeline/p8.png" alt="Period 8"
                            class="object-contain w-1/12 timeline-period-img" data-index="7">
                        <img src="/src/assets/bible-timeline/p9.png" alt="Period9"
                            class="object-contain w-1/12 timeline-period-img" data-index="8">
                        <img src="/src/assets/bible-timeline/p10.png" alt="Period 10"
                            class="object-contain w-1/12 timeline-period-img" data-index="9">
                        <img src="/src/assets/bible-timeline/p11.png" alt="Period 11"
                            class="object-contain w-1/12 timeline-period-img" data-index="10">
                        <img src="/src/assets/bible-timeline/p12.png" alt="Period 12"
                            class="object-contain w-1/12 timeline-period-img" data-index="11">

                        <!-- Card tooltip nascosta di default -->
                        <div id="timeline-tooltip-card"
                            class="absolute left-0 z-20 hidden transition-all duration-300 rounded-lg top-full cs-timeline-tooltip-card">
                            <div class="relative flex flex-col items-center w-full border border-gray-800 rounded-lg group">
                                <div id="timeline-tooltip-header"
                                    class="flex flex-row items-center justify-between w-full cs-tooltip-header">
                                    <button id="timeline-tooltip-prev"
                                        class="flex items-center justify-center transition cs-tooltip-navigation disabled:opacity-0">
                                        <img src="/src/assets/bible-timeline/prev.svg" /> prev
                                    </button>
                                    <div class="cs-tooltip-period" id="timeline-tooltip-period">1</div>
                                    <button id="timeline-tooltip-next"
                                        class="flex items-center justify-center transition cs-tooltip-navigation disabled:opacity-0">
                                        next <img src="/src/assets/bible-timeline/next.svg" /></button>
                                </div>
                                <div id="timeline-tooltip-box"
                                    class="flex flex-col items-center justify-center w-full cs-tooltip-card-content">
                                    <div class="cs-tooltip-card-title" id="timeline-tooltip-title">Titolo periodo</div>
                                    <div class="text-sm text-center cs-tooltip-card-description"
                                        id="timeline-tooltip-desc">Descrizione periodo
                                    </div>
                                    <div class="flex flex-wrap justify-center cs-tooltip-card-tags"
                                        id="timeline-tooltip-books">
                                        <!-- badge libri -->
                                        <span class="cs-box-timeline-chip first:ml-0">
                                            genesis 1-11
                                        </span>
                                    </div>
                                </div>
                                <div id="timeline-tooltip-img-box"
                                    class="relative flex flex-col items-center justify-center w-full cs-tooltip-card-content">
                                    <div class="relative w-full text-left">
                                        <img id="timeline-tooltip-img" src="/src/assets/bible-timeline/bt-card-p1.png"
                                            alt="" class="cs-tooltip-card-img" />
                                        <div id="timeline-tooltip-overlay"
                                            class="absolute inset-0 flex flex-col justify-end px-4 py-2 text-white transition-opacity duration-300 opacity-0 bg-gradient-to-b from-transparent via-black/50 to-black/50 group-hover:opacity-100">
                                            <h3 id="timeline-tooltip-art-title" class="font-bold cs-fs-xs"></h3>
                                            <span id="timeline-tooltip-scripture" class="italic cs-fs-2xs"></span>
                                            <p id="timeline-tooltip-art-author" class="cs-fs-2xs"></p>
                                            <p id="timeline-tooltip-art-location" class="cs-fs-2xs"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex-col items-center justify-center hidden gap-0 mt-7 md:flex sm:flex-row flex-nowrap">
                        <img src="/src/assets/bible-timeline/btc-characters.png" alt="Characters" class="object-contain w-full opacity-0" id="timeline-characters">
                    </div>
                </div>
            </div>

            <!-- Box Mobile Timeline -->
            <div class="relative flex flex-col flex-wrap items-center justify-center w-full overflow-hidden text-center text-white">
                <div class="w-full max-w-[1100px] md:hidden ">
                    <div class="flex flex-row ">
                        <div class="cs-box-timeline-number bg-cs-period1-sec">
                            1
                        </div>
                        <div class="cs-box-timeline-description bg-cs-period1-pri ">
                            <div class="flex flex-row">
                                <span class="bg-white cs-box-timeline-vertical-line"></span>
                                <div class="flex flex-col cs-box-timeline-container">
                                    <div class="cs-box-timeline-title">Early World</div>
                                    <div class="cs-box-timeline-legend">Creation and Fall of Humankind</div>
                                </div>
                            </div>
                            <div class="flex flex-row">
                                <span class="cs-box-timeline-chip bg-cs-period1-sec">
                                    genesis 1-11
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row ">
                        <div class="cs-box-timeline-number bg-cs-period2-sec">
                            2
                        </div>
                        <div class="cs-box-timeline-description bg-cs-period2-pri ">
                            <div class="flex flex-row">
                                <span class="bg-white cs-box-timeline-vertical-line"></span>
                                <div class="flex flex-col cs-box-timeline-container">
                                    <div class="cs-box-timeline-title">Patriarchs</div>
                                    <div class="cs-box-timeline-legend">Creation and Fall of Humankind</div>
                                </div>
                            </div>
                            <div class="flex flex-row">
                                <span class="cs-box-timeline-chip bg-cs-period2-sec">
                                    genesis 12-50
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row ">
                        <div class="cs-box-timeline-number bg-cs-period3-sec">
                            3
                        </div>
                        <div class="cs-box-timeline-description bg-cs-period3-pri ">
                            <div class="flex flex-row">
                                <span class="bg-white cs-box-timeline-vertical-line"></span>
                                <div class="flex flex-col cs-box-timeline-container">
                                    <div class="cs-box-timeline-title">Egypt & Exodus</div>
                                    <div class="cs-box-timeline-legend">Creation and Fall of Humankind</div>
                                </div>
                            </div>
                            <div class="flex flex-row">
                                <span class="cs-box-timeline-chip bg-cs-period3-sec">
                                    exodus
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row ">
                        <div class="cs-box-timeline-number bg-cs-period4-sec">
                            4
                        </div>
                        <div class="cs-box-timeline-description bg-cs-period4-pri ">
                            <div class="flex flex-row">
                                <span class="bg-white cs-box-timeline-vertical-line"></span>
                                <div class="flex flex-col cs-box-timeline-container">
                                    <div class="cs-box-timeline-title">Desert Wanderings</div>
                                    <div class="cs-box-timeline-legend">Refusal to enter the Promised Land</div>
                                </div>
                            </div>
                            <div class="flex flex-row">
                                <span class="cs-box-timeline-chip bg-cs-period4-sec">
                                    exodus
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row ">
                        <div class="cs-box-timeline-number bg-cs-period5-sec">
                            5
                        </div>
                        <div class="cs-box-timeline-description bg-cs-period5-pri ">
                            <div class="flex flex-row">
                                <span class="bg-white cs-box-timeline-vertical-line"></span>
                                <div class="flex flex-col cs-box-timeline-container">
                                    <div class="cs-box-timeline-title">Conquest & Judges</div>
                                    <div class="cs-box-timeline-legend">Conquest of the Promised Land</div>
                                </div>
                            </div>
                            <div class="flex flex-row">
                                <span class="cs-box-timeline-chip bg-cs-period5-sec">
                                    Joshua
                                </span>
                                <span class="cs-box-timeline-chip bg-cs-period5-sec">
                                    Judges
                                </span>
                                <span class="cs-box-timeline-chip bg-cs-period5-sec">
                                    1 Samuel 1-8
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row ">
                        <div class="cs-box-timeline-number bg-cs-period6-sec">
                            6
                        </div>
                        <div class="cs-box-timeline-description bg-cs-period6-pri ">
                            <div class="flex flex-row">
                                <span class="bg-white cs-box-timeline-vertical-line"></span>
                                <div class="flex flex-col cs-box-timeline-container">
                                    <div class="cs-box-timeline-title">Royal Kingdom</div>
                                    <div class="cs-box-timeline-legend">Establishment of the Davidic Kingdom</div>
                                </div>
                            </div>
                            <div class="flex flex-row">
                                <span class="cs-box-timeline-chip bg-cs-period6-sec">
                                    1 Samuel 9-31
                                </span>
                                <span class="cs-box-timeline-chip bg-cs-period6-sec">
                                    2 Samuel
                                </span>
                                <span class="cs-box-timeline-chip bg-cs-period6-sec">
                                    1 Kings 1-11
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row ">
                        <div class="cs-box-timeline-number bg-cs-period7-sec">
                            7
                        </div>
                        <div class="cs-box-timeline-description bg-cs-period7-pri ">
                            <div class="flex flex-row">
                                <span class="bg-white cs-box-timeline-vertical-line"></span>
                                <div class="flex flex-col cs-box-timeline-container">
                                    <div class="cs-box-timeline-title">Divided Kingdom</div>
                                    <div class="cs-box-timeline-legend">The Kingdom splits in two</div>
                                </div>
                            </div>
                            <div class="flex flex-row">
                                <span class="cs-box-timeline-chip bg-cs-period7-sec">
                                    1 Kings 12-22
                                </span>
                                <span class="cs-box-timeline-chip bg-cs-period7-sec">
                                    2 Kings 1-16
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row ">
                        <div class="cs-box-timeline-number bg-cs-period8-sec">
                            8
                        </div>
                        <div class="cs-box-timeline-description bg-cs-period8-pri ">
                            <div class="flex flex-row">
                                <span class="bg-white cs-box-timeline-vertical-line"></span>
                                <div class="flex flex-col cs-box-timeline-container">
                                    <div class="cs-box-timeline-title">Exile</div>
                                    <div class="cs-box-timeline-legend">The Israelites are sent into exile</div>
                                </div>
                            </div>
                            <div class="flex flex-row">
                                <span class="cs-box-timeline-chip bg-cs-period8-sec">
                                    2 Kings 17-25
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row text-black ">
                        <div class="cs-box-timeline-number bg-cs-period9-sec">
                            9
                        </div>
                        <div class="cs-box-timeline-description bg-cs-period9-pri ">
                            <div class="flex flex-row">
                                <span class="bg-black cs-box-timeline-vertical-line"></span>
                                <div class="flex flex-col cs-box-timeline-container">
                                    <div class="cs-box-timeline-title">Return</div>
                                    <div class="cs-box-timeline-legend">The tribe of Judah returns to the Promised land</div>
                                </div>
                            </div>
                            <div class="flex flex-row">
                                <span class="cs-box-timeline-chip bg-cs-period9-sec">
                                    Ezra
                                </span>
                                <span class="cs-box-timeline-chip bg-cs-period9-sec">
                                    Nehemiah
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row ">
                        <div class="cs-box-timeline-number bg-cs-period10-sec">
                            10
                        </div>
                        <div class="cs-box-timeline-description bg-cs-period10-pri ">
                            <div class="flex flex-row">
                                <span class="bg-white cs-box-timeline-vertical-line"></span>
                                <div class="flex flex-col cs-box-timeline-container">
                                    <div class="cs-box-timeline-title">Maccabean Revolt</div>
                                    <div class="cs-box-timeline-legend">The Israelites rebel against the Greeks</div>
                                </div>
                            </div>
                            <div class="flex flex-row">
                                <span class="cs-box-timeline-chip bg-cs-period10-sec">
                                    1 Maccabees
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row ">
                        <div class="cs-box-timeline-number bg-cs-period11-sec">
                            11
                        </div>
                        <div class="cs-box-timeline-description bg-cs-period11-pri ">
                            <div class="flex flex-row">
                                <span class="bg-white cs-box-timeline-vertical-line"></span>
                                <div class="flex flex-col cs-box-timeline-container">
                                    <div class="cs-box-timeline-title">Messianic Fulfillment</div>
                                    <div class="cs-box-timeline-legend">The coming of the Jesus Christ</div>
                                </div>
                            </div>
                            <div class="flex flex-row">
                                <span class="cs-box-timeline-chip bg-cs-period11-sec">
                                    LUKE
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row text-black ">
                        <div class="cs-box-timeline-number bg-cs-period12-sec">
                            12
                        </div>
                        <div class="cs-box-timeline-description bg-cs-period12-pri ">
                            <div class="flex flex-row">
                                <span class="bg-black cs-box-timeline-vertical-line"></span>
                                <div class="flex flex-col cs-box-timeline-container">
                                    <div class="cs-box-timeline-title">The Church</div>
                                    <div class="cs-box-timeline-legend">The spreading of the Christian faith</div>
                                </div>
                            </div>
                            <div class="flex flex-row">
                                <span class="cs-box-timeline-chip bg-cs-period12-sec">
                                    ACTS
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course Introduction -->
            <div class="flex flex-col items-center w-full bg-cs-paper">
                <div class="w-full max-w-[1000px] flex flex-col text-center gap-16 py-16 px-6">
                    <div>
                        <div class="mb-6 tracking-widest uppercase cs-bt-uppercase-prompt-fs text-cs-red-main">Register today</div>
                        <div class="font-sans font-bold cs-bt-fs-medium cs-gradient-text">Jeff Cavins' world-famous Catholic Bible Study</div>
                    </div>
                    <div class="flex flex-col items-center gap-6 md:flex-row md:gap-10">
                        <div class="flex flex-col items-center text-center p-6 bg-cs-paper-shade rounded-xl shadow-cs-all-around min-w-[30%] max-w-[400px]">
                            <img src="/src/assets/bible-timeline/free-course.svg" alt="Comprehensive" class="w-48 h-24 mb-4">
                            <div class="mt-4 cs-bt-fs-base text-cs-grey">This course is free for everyone—for <b>individuals, parishes & dioceses.</b></div>
                        </div>
                        <div class="flex flex-col items-center text-center p-6 bg-cs-paper-shade rounded-xl gap-4 shadow-cs-all-around min-w-[30%] max-w-[400px]">
                            <img src="/src/assets/bible-timeline/live-streamed.svg" alt="Simple" class="w-48 h-24 mb-4">
                            <img src="/src/assets/mauro-closeup.jpg" id="meet-mauro"
                                class="object-cover w-auto h-48 rounded-full" alt="Mauro">
                            <div class="mt-4 cs-bt-fs-base text-cs-grey">Delivered by presenter <b>Mauro Iannicelli</b> through live-streamed, interactive sessions.</div>
                        </div>
                        <div class="flex flex-col items-center text-center p-6 bg-cs-paper-shade rounded-xl shadow-cs-all-around min-w-[30%] max-w-[400px]">
                            <img src="/src/assets/bible-timeline/life-changing.svg" alt="Transformative" class="w-48 h-24 mb-4">
                            <div class="mt-4 cs-bt-fs-base text-cs-grey">Grasp <b>the Big Picture of the Bible</b> from start to finish!</div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="text-center text-cs-grey cs-bt-fs-large">
                            An <b>8 session course</b> which takes you through <b>Salvation&nbsp;History</b>.
                        </div>

                        <button class="mt-10 cs-support-us-button bg-cs-red-main">Sign up</button>

                    </div>
                </div>
            </div>

            <!-- Mauro's Introduction -->
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark">

                <div class="w-full max-w-[1000px] my-14 flex flex-col gap-6  text-center items-center">

                    <span class="tracking-widest uppercase cs-bt-uppercase-prompt-fs text-cs-red-main">watch</span>

                    <div class="font-sans font-bold cs-bt-fs-video-title cs-gradient-text">Mauro's course introduction:</div>

                    <img src="/src/assets/bible-timeline/image-36.jpg" alt="Mauro's Introduction" class="w-full h-auto max-w-3xl rounded-xl shadow-cs-all-around">

                    <div class="w-full mt-8 text-center">
                        <button class="cs-support-us-button bg-cs-red-main">
                            Register
                        </button>
                    </div>

                </div>
            </div>

            <!-- Storyboard Section -->
            <div class="flex flex-col items-center w-full px-5 sm:px-10 bg-cs-paper">
                <div class="w-full max-w-[1000px] flex flex-col items-center justify-center">

                    <div class="mt-16 font-sans font-bold text-center cs-bt-fs-extralarge text-cs-red-medium cs-gradient-text">
                        Do&nbsp;you&nbsp;find the&nbsp;Bible
                        <br />too&nbsp;big&nbsp;and complicated?
                    </div>

                    <img src="/src/assets/bible-timeline/vector-14.svg" class="w-40 mb-20 text-center md:w-52">

                </div>
            </div>

            <div class="flex flex-col items-center w-full px-5 sm:px-10 bg-cs-paper-dark">
                <div class="w-full max-w-[1000px] flex flex-col items-center py-12">
                    <img src="/src/assets/bible-timeline/cloud-bible-characters.png" alt="Bible Timeline" class="z-10 w-full max-w-[600px]">
                </div>
            </div>

            <!-- Course Details -->
            <div class="flex flex-col items-center w-full px-5 sm:px-10 bg-cs-paper">
                <div class=" relative w-full max-w-[1000px] my-0 flex flex-col items-center">
                    <img src="/src/assets/bible-timeline/the-truth.svg" class="mt-12 w-72">
                    <div class="mt-12 font-sans text-center cs-bt-fs-extralarge text-cs-red-main cs-gradient-text">
                        Many&nbsp;Catholics long&nbsp;to&nbsp;read the&nbsp;Bible, but&nbsp;<span class="font-bold">don't&nbsp;know where&nbsp;to&nbsp;start.</span>
                    </div>
                    <div class="w-full mt-8 text-center cs-bt-fs-large">
                        So&nbsp;they&nbsp;often&nbsp;begin,
                        and&nbsp;<b>then&nbsp;give&nbsp;up</b>.
                    </div>
                    <img src="/src/assets/bible-timeline/vector-17.svg" class="mt-10 w-72">
                    <div class="font-sans text-center cs-bt-fs-extralarge text-cs-red-main cs-gradient-text">
                        <span class="whitespace-nowrap">
                            What if we told you
                        </span>
                        <span class="whitespace-nowrap">
                            <b>there is a</b>
                        </span>
                        <span class="whitespace-nowrap">
                            <b>definitive solution</b>
                        </span>
                        <span class="whitespace-nowrap">
                            to this problem?
                        </span>
                    </div>
                    <img src="/src/assets/bible-timeline/trail.svg" class="w-72">
                </div>
            </div>
            <div class="flex flex-col items-center w-full px-5 sm:px-10 bg-cs-paper-shade">
                <div class=" relative w-full max-w-[1000px] my-0 flex flex-col items-center py-8">
                    <img src="/src/assets/bible-timeline/12-periods-only.png" class="w-full mb-4" alt="12 Periods" />

                    <div class="cs-bt-fs-base text-center w-[70%] md:w-[50%]">

                        The Bible Timeline methodology
                        breaks the Bible into <b>12 colour-coded</b>
                        <b>time periods</b> that are easy to
                        understand and memorize!

                    </div>

                </div>
            </div>

            <div class="flex flex-col items-center w-full px-5 sm:px-10 bg-cs-paper">
                <div class=" relative w-full max-w-[1000px] my-0 flex flex-col items-center">
                    <div class="flex flex-col items-center justify-center w-full mb-20 ">
                        <img src="/src/assets/bible-timeline/hooked.svg" class="ml-20 w-60" alt="Vector 17">
                    </div>
                    <div class="flex flex-col items-center justify-around gap-4 md:flex-row">
                        <div class="w-full mt-8 font-sans text-center cs-bt-fs-large text-cs-grey">
                            <span class="whitespace-nowrap">
                                During this course,
                            </span><br />
                            <span class="whitespace-nowrap">
                                presenter Mauro Iannicelli
                            </span><br />
                            <span class="whitespace-nowrap">
                                will walk you through
                            </span><br />
                            <span class="whitespace-nowrap">
                                <b>each of the 12 Periods.</b>
                            </span>
                        </div>
                        <img class="w-auto max-w-[600px]" src="/src/assets/bible-timeline/bt2-mauro-pointing-screen.jpg" alt="12 Periods Larger" />

                    </div>

                    <div class="flex flex-col items-center justify-center w-full mt-20">
                        <div class="w-full mt-8 ml-auto text-center cs-bt-fs-extralarge text-cs-red-main cs-gradient-text">
                            With this approach, you will grasp <b>the Big Picture of the Bible</b> from start to finish, the Old and the New Testament... for&nbsp;life!
                        </div>
                        <img src="/src/assets/bible-timeline/im-in.svg" class="text-center w-60">

                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center w-full px-6 py-5 mt-20 sm:py-20 sm:px-6 bg-cs-paper-shade">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-[800px]">

                    <div class="flex flex-col items-center cs-benefit-box bg-cs-paper">
                        <img src="/src/assets/bible-timeline/icon-map.png" class="cs-benefit-icon" alt="Discover">
                        <div class="font-bold text-center text-cs-red-main cs-benefit cs-gradient-text">Discover</div>
                        <div class="text-center cs-benefit-descr">
                            how the key people, places, and events in the Bible fit&nbsp;together.
                        </div>
                    </div>
                    <div class="flex flex-col items-center cs-benefit-box bg-cs-paper">
                        <img src="/src/assets/bible-timeline/icon-preacher.png" class="cs-benefit-icon" alt="Gain">
                        <div class="font-bold text-center text-cs-red-main cs-benefit cs-gradient-text">Gain</div>
                        <div class="text-center cs-benefit-descr">
                            a greater understanding for the Scripture readings you hear&nbsp;at&nbsp;mass.
                        </div>
                    </div>
                    <div class="flex flex-col items-center cs-benefit-box bg-cs-paper">
                        <img src="/src/assets/bible-timeline/icon-scroll.png" class="cs-benefit-icon" alt="Understand">
                        <div class="font-bold text-center text-cs-red-main cs-benefit cs-gradient-text">Understand</div>
                        <div class="text-center cs-benefit-descr">
                            how the events in the Old Testament are fulfilled in the New&nbsp;Testament.
                        </div>
                    </div>
                    <div class="flex flex-col items-center cs-benefit-box bg-cs-paper">
                        <img src="/src/assets/bible-timeline/icon-lightbulb.png" class="cs-benefit-icon" alt="Learn">
                        <div class="font-bold text-center text-cs-red-main cs-benefit cs-gradient-text">Learn</div>
                        <div class="text-center cs-benefit-descr">
                            how God's Word applies to your life&nbsp;today.
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center w-full bg-cs-paper">
                <div class="relative w-full max-w-[1000px] flex flex-col gap-8 text-center items-center py-16">
                    <div class="w-full mt-8 ml-auto font-bold text-center cs-bt-fs-extralarge text-cs-red-main cs-gradient-text">
                        We make the complex<br>
                        simple.
                    </div>
                    <div class="w-full px-8 text-center cs-fs-lg">
                        Join us online. <b>Come&nbsp;and&nbsp;see!</b>
                    </div>
                    <div class="w-full text-center">
                        <button class="cs-support-us-button bg-cs-red-main">Register</button>
                    </div>
                </div>
            </div>

            <!-- Jeff's Endorsement -->
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark">
                <div class="w-full max-w-[1000px] my-10 flex flex-col gap-6  text-center items-center">
                    <span class="tracking-widest uppercase cs-bt-uppercase-prompt-fs text-cs-red-main">endorsement</span>
                    <div class="max-w-2xl font-sans font-bold cs-bt-fs-video-title cs-gradient-text">Jeff Cavins endorses
                        Mauro Iannicelli as Bible Timeline teacher</div>
                    <img src="/src/assets/bible-timeline/image-34.jpg" alt="Mauro's Introduction"
                        class="w-full h-auto max-w-2xl rounded-xl">
                    <div class="mt-2 font-serif font-bold text-center md:mt-16 cs-fs-3xl">
                        <img src="/src/assets/endorsement-quote-red.svg" class="w-16 h-16 mx-auto " alt="Quote">
                    </div>

                    <div class="max-w-2xl mt-5 mb-6 font-serif italic text-center cs-fs-xl text-cs-red-main">Mauro has such a depth of
                        knowledge of the Bible and theology that it's an honour for me to give my endorsement to him as a
                        wonderful&nbsp;teacher.
                    </div>

                    <div class="font-serif text-center uppercase cs-fs-base text-cs-red-main">Jeff Cavins</div>

                    <div class="w-full mt-4 text-center">
                        <button class="bg-transparent border-2 cs-support-us-button text-cs-red-main border-cs-red-main">MORE ENDORSEMENTS</button>
                    </div>
                </div>
            </div>

            <!-- Boxes Testimonial Header -->
            <div class="relative flex flex-col items-end justify-center w-full h-40 text-white sm:h-[500px] cs-bg-testimonials-bible">
                <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full px-4 bg-white bg-opacity-30">
                    <div class="w-[1000px] mt-16">
                        <img src="/src/assets/bible-timeline/testimonial-title.png" class="sm:w-[800px] w-[300px] ml-auto" alt="Header">
                    </div>
                </div>
            </div>

            <!-- Boxes Testimonial Wrapper -->
            <div class="flex flex-col items-center w-full p-5 my-10 sm:p-10 bg-cs-paper">
                <div class="flex flex-col md:flex-row gap-4 md:gap-12 max-w-[1000px]">
                    <div class="flex flex-col w-full gap-4 md:w-1/2">
                        <!-- Box Testimonial -->
                        <div class="flex flex-col items-center w-full cs-testimonials-box border-cs-red-dark">
                            <!-- Box Author -->
                            <div class="relative flex flex-col justify-center cs-testimonials-box-author bg-cs-red-dark pl-[20px]">
                                <div class="flex flex-row items-center justify-start gap-2 -mt-1">
                                    <span class="font-bold text-white">Helen B.</span>
                                </div>
                                <div class="tracking-widest text-white uppercase cs-fs-2xs">Advent Sunday Gospels - Nov 2021</div>
                            </div>
                            <!-- Box Post -->
                            <div class="flex flex-col gap-5 px-8 py-8">
                                <p>I feel completely blessed by the Advent Bible Series (as I have by all the courses I have taken with comeandsee.org to be honest), it has brought the scripture to life for me and helped me to see things in a totally new way.</p>
                                <p>I love that the sessions are live and that I am taking part with others from all over the world at the same time - it gives me such a feeling of fellowship.</p>
                            </div>
                        </div>


                        <!-- Box Testimonial -->
                        <div class="flex flex-col items-center w-full cs-testimonials-box border-cs-red-bright">
                            <!-- Box Author -->
                            <div class="relative flex flex-col justify-center cs-testimonials-box-author bg-cs-red-bright pl-[20px]">
                                <div class="flex flex-row items-center justify-start gap-2 -mt-1">
                                    <span class="font-bold text-white">Marie D.</span>
                                </div>
                                <div class="tracking-widest text-white uppercase cs-fs-2xs">Advent Sunday Gospels - Nov 2021</div>
                            </div>
                            <!-- Box Post -->
                            <div class="flex flex-col gap-5 px-8 py-8">
                                <p>This course has been such a blessing from God in my life! Each and every session has been jam packed with in depth teachings that have taught me more than I could ever imagine!</p>
                            </div>
                        </div>

                    </div>
                    <div class="flex flex-col w-full gap-4 md:w-1/2">
                        <!-- Box Testimonial -->
                        <div class="flex flex-col items-center w-full cs-testimonials-box border-cs-red-medium">
                            <!-- Box Author -->
                            <div class="relative flex flex-col justify-center cs-testimonials-box-author bg-cs-red-medium pl-[20px]">
                                <div class="flex flex-row items-center justify-start gap-2 -mt-1">
                                    <span class="font-bold text-white">Anne B.</span>
                                </div>
                                <div class="mt-1 tracking-widest text-white uppercase cs-fs-2xs">Advent Sunday Gospels - Nov 2021</div>
                            </div>
                            <!-- Box Post -->
                            <div class="flex flex-col gap-5 px-8 py-8">
                                <p>The depth Mauro goes to to open the Sunday Gospel is astounding. Mauro's teaching is 100% Catholic, and will bring something new to everyone, whatever their level of understanding of the Faith and their knowledge of the Scripture.</p>
                            </div>
                        </div>

                        <!-- Box Testimonial -->
                        <div class="flex flex-col items-center w-full cs-testimonials-box border-cs-red-main">
                            <!-- Box Author -->
                            <div class="relative flex flex-col justify-center cs-testimonials-box-author bg-cs-red-main pl-[20px]">
                                <div class="flex flex-row items-center justify-start gap-2 -mt-1">
                                    <span class="font-bold text-white">Anita P.</span>
                                </div>
                                <div class="mt-1 tracking-widest text-white uppercase cs-fs-2xs">Advent Sunday Gospels - Nov 2021</div>
                            </div>
                            <!-- Box Post -->
                            <div class="flex flex-col gap-5 px-8 py-8">
                                <p>Just SO surprisingly interesting and informative! Mauro's infectious enthusiasm and his analysis interspersed with interesting historical facts and (often surprising) connections within the Bible, lures and retains one's attention.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full mt-10 text-center">
                    <button class="bg-transparent border-2 cs-support-us-button text-cs-red-main border-cs-red-main">MORE TESTIMONIALS</button>
                </div>
            </div>

            <!-- Quote Jerome -->
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark cs-bg-jerome-quote">
                <div class="w-full max-w-[1000px] my-14 flex flex-col gap-6  text-center items-center">
                    <div class="mt-2 font-serif font-bold text-center md:mt-16 cs-fs-3xl">
                        <img src="/src/assets/endorsement-quote-red.svg" class="w-16 h-16 mx-auto " alt="Quote">
                    </div>

                    <div class="max-w-2xl mb-6 font-serif italic text-center cs-fs-xl md:cs-fs-2xl text-cs-red-main">You cannot make your way into the Holy Scriptures without having someone to go before you and show you the road.
                    </div>

                    <div class="font-serif text-center uppercase cs-fs-base text-cs-red-main">St. Jerome</div>

                </div>
            </div>

            <!-- Call to Action -->
            <div class="flex flex-col items-center w-full p-8 text-white sm:p-16 bg-cs-red-main">
                <div class="w-full max-w-[1000px] my-5 flex flex-col items-center gap-8 text-center">
                    <div class="font-sans font-bold text-white cs-bt-fs-extralarge">This course is free</div>
                    <div class="cs-fs-xl md:cs-fs-2xl">for all individuals, parishes & dioceses.</div>

                    <button class="px-8 py-3 font-bold uppercase transition-colors bg-white text-cs-red-main rounded-xl cs-fs-base hover:bg-cs-paper">
                        Register
                    </button>

                </div>
            </div>

            <!-- Box Come & See -->
            <div class="flex flex-col items-center w-full pt-8 sm:pt-16 bg-cs-paper text-cs-red-main">

                <div class="w-full max-w-[1000px] mt-10 flex flex-col items-center gap-8 text-center">

                    <img src="/src/assets/bible-timeline/come-and-see-logo-no-text.png" class="w-1/2 md:w-1/4 max-w-72" alt="Come & See Logo">

                    <img src="/src/assets/bible-timeline/come-and-see-text.svg" class="w-1/2 md:w-1/3 max-w-72" alt="Come & See Logo">

                    <div class="px-8 mt-6 font-serif italic cs-bt-fs-large">Serving Dioceses, Parishes & Individuals<br> with Teachings & Formation</div>

                </div>
            </div>
        </div>
    </main>

    <?php require_once 'components/footer.php'; ?>

</body>

</html>