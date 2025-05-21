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

<main class="cs-main pb-0">
    <div class="cs-main-div">
        <!-- Hero Section -->
        <div class="relative flex flex-col flex-wrap items-center justify-center w-full text-white min-h-[300px] md:min-h-[600px] overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="/src/assets/bible-timeline/sixteen-miles-out.jpg" alt="Header Background" class="object-cover w-full h-full opacity-80">
            </div>
            <div class="relative z-10 w-full max-w-[1100px] text-center py-12 md:py-24">
                <div class="tracking-widest uppercase sm:cs-fs-xs cs-fs-xs text-cs-red-main">Come & See Presents</div>
                <div class="font-sans font-bold cs-fs-xl md:cs-fs-5xl sm:cs-fs-2xl cs-gradient-text"><h1>The Bible Timeline Course</h1></div>
                <div class="font-sans font-bold tracking-widest cs-fs-lg md:cs-fs-2xl sm:cs-fs-lg mt-2 uppercase text-cs-red-main">12 Periods, one story</div>
                <div class="hidden md:flex flex-col sm:flex-row items-center justify-center gap-4 mt-12">
                    <img src="/src/assets/bible-timeline/12-periods-with-larger-characters.jpg" alt="12 Periods Larger"/>
                </div>
            </div>
        </div>

        <!-- Box Mobile Timeline -->
        <div class="relative flex flex-col flex-wrap items-center justify-center w-full text-white overflow-hidden text-center">
            <div class="w-full max-w-[1100px] md:hidden ">
                <div class=" flex flex-row">
                    <div class="cs-box-timeline-number bg-cs-period1-sec">
                        1
                    </div>
                    <div class="cs-box-timeline-description bg-cs-period1-pri ">
                        <div class="flex flex-row">
                            <span class="w-0.5 h-full bg-white"></span>
                            <div class="flex flex-col ml-2 items-start">
                                <h4 class="cs-fs-lg font-bold">Early World</h4>
                                <p class="cs-fs-3xs font-thin -mt-1">Creation and Fall of Humankind</p>
                            </div>
                        </div>
                        <span class="cs-course-chip uppercase ml-3 mt-2 bg-cs-period1-sec text-white font-normal tracking-normal">
                              genesis 1-11
                        </span>
                    </div>
                </div>
                <div class=" flex flex-row">
                    <div class="cs-box-timeline-number bg-cs-period2-sec">
                        2
                    </div>
                    <div class="cs-box-timeline-description bg-cs-period2-pri ">
                        <div class="flex flex-row">
                            <span class="w-0.5 h-full bg-white"></span>
                            <div class="flex flex-col ml-2 items-start">
                                <h4 class="cs-fs-lg font-bold">Patriarchs</h4>
                                <p class="cs-fs-3xs font-thin -mt-1">Creation and Fall of Humankind</p>
                            </div>
                        </div>
                        <span class="cs-course-chip uppercase ml-3 mt-2 bg-cs-period2-sec text-white font-normal tracking-normal">
                              genesis 12-50
                        </span>
                    </div>
                </div>
                <div class=" flex flex-row">
                    <div class="cs-box-timeline-number bg-cs-period3-sec">
                        3
                    </div>
                    <div class="cs-box-timeline-description bg-cs-period3-pri ">
                        <div class="flex flex-row">
                            <span class="w-0.5 h-full bg-white"></span>
                            <div class="flex flex-col ml-2 items-start">
                                <h4 class="cs-fs-lg font-bold">Egypt & Exodus</h4>
                                <p class="cs-fs-3xs font-thin -mt-1">Creation and Fall of Humankind</p>
                            </div>
                        </div>
                        <span class="cs-course-chip uppercase ml-3 mt-2 bg-cs-period3-sec text-white font-normal tracking-normal">
                              exodus
                        </span>
                    </div>
                </div>
                <div class=" flex flex-row">
                    <div class="cs-box-timeline-number bg-cs-period4-sec">
                        4
                    </div>
                    <div class="cs-box-timeline-description bg-cs-period4-pri ">
                        <div class="flex flex-row">
                            <span class="w-0.5 h-full bg-white"></span>
                            <div class="flex flex-col ml-2 items-start">
                                <h4 class="cs-fs-lg font-bold">Desert Wanderings</h4>
                                <p class="cs-fs-3xs font-thin -mt-1">Refusal to enter the Promised Land</p>
                            </div>
                        </div>
                        <span class="cs-course-chip uppercase ml-3 mt-2 bg-cs-period4-sec text-white font-normal tracking-normal">
                              exodus
                        </span>
                    </div>
                </div>
                <div class=" flex flex-row">
                    <div class="cs-box-timeline-number bg-cs-period5-sec">
                        5
                    </div>
                    <div class="cs-box-timeline-description bg-cs-period5-pri ">
                        <div class="flex flex-row">
                            <span class="w-0.5 h-full bg-white"></span>
                            <div class="flex flex-col ml-2 items-start">
                                <h4 class="cs-fs-lg font-bold">Conquest & Judges</h4>
                                <p class="cs-fs-3xs font-thin -mt-1">Conquest of the Promised Land</p>
                            </div>
                        </div>
                        <div class="flex-row flex">
                            <span class="cs-course-chip uppercase ml-3 mt-2 bg-cs-period5-sec text-white font-normal tracking-normal">
                                  Joshua
                            </span>
                            <span class="cs-course-chip uppercase ml-2 mt-2 bg-cs-period5-sec text-white font-normal tracking-normal">
                                   Judges
                            </span>
                            <span class="cs-course-chip uppercase ml-2 mt-2 bg-cs-period5-sec text-white font-normal tracking-normal">
                                  1 Samuel 1-8
                            </span>
                        </div>
                    </div>
                </div>
                <div class=" flex flex-row">
                    <div class="cs-box-timeline-number bg-cs-period6-sec">
                        6
                    </div>
                    <div class="cs-box-timeline-description bg-cs-period6-pri ">
                        <div class="flex flex-row">
                            <span class="w-0.5 h-full bg-white"></span>
                            <div class="flex flex-col ml-2 items-start">
                                <h4 class="cs-fs-lg font-bold">Royal Kingdom</h4>
                                <p class="cs-fs-3xs font-thin -mt-1">Establishment of the Davidic Kingdom</p>
                            </div>
                        </div>
                        <div class="flex-row flex">
                            <span class="cs-course-chip uppercase ml-3 mt-2 bg-cs-period6-sec text-white font-normal tracking-normal">
                                  1 Samuel 9-31
                            </span>
                            <span class="cs-course-chip uppercase ml-2 mt-2 bg-cs-period6-sec text-white font-normal tracking-normal">
                                   2 Samuel
                            </span>
                            <span class="cs-course-chip uppercase ml-2 mt-2 bg-cs-period6-sec text-white font-normal tracking-normal">
                                  1 Kings 1-11
                            </span>
                        </div>
                    </div>
                </div>
                <div class=" flex flex-row">
                    <div class="cs-box-timeline-number bg-cs-period7-sec">
                        7
                    </div>
                    <div class="cs-box-timeline-description bg-cs-period7-pri ">
                        <div class="flex flex-row">
                            <span class="w-0.5 h-full bg-white"></span>
                            <div class="flex flex-col ml-2 items-start">
                                <h4 class="cs-fs-lg font-bold">Divided Kingdom</h4>
                                <p class="cs-fs-3xs font-thin -mt-1">The Kingdom splits in two</p>
                            </div>
                        </div>
                        <div class="flex-row flex">
                            <span class="cs-course-chip uppercase ml-3 mt-2 bg-cs-period7-sec text-white font-normal tracking-normal">
                                  1 Kings 12-22
                            </span>
                            <span class="cs-course-chip uppercase ml-2 mt-2 bg-cs-period7-sec text-white font-normal tracking-normal">
                                   2 Kings 1-16
                            </span>
                        </div>
                    </div>
                </div>
                <div class=" flex flex-row">
                    <div class="cs-box-timeline-number bg-cs-period8-sec">
                        8
                    </div>
                    <div class="cs-box-timeline-description bg-cs-period8-pri ">
                        <div class="flex flex-row">
                            <span class="w-0.5 h-full bg-white"></span>
                            <div class="flex flex-col ml-2 items-start">
                                <h4 class="cs-fs-lg font-bold">Exile</h4>
                                <p class="cs-fs-3xs font-thin -mt-1">The Israelites are sent into exile</p>
                            </div>
                        </div>
                        <div class="flex-row flex">
                            <span class="cs-course-chip uppercase ml-3 mt-2 bg-cs-period8-sec text-white font-normal tracking-normal">
                                  2 Kings 17-25
                            </span>
                        </div>
                    </div>
                </div>
                <div class=" flex flex-row text-black">
                    <div class="cs-box-timeline-number bg-cs-period9-sec">
                        9
                    </div>
                    <div class="cs-box-timeline-description bg-cs-period9-pri ">
                        <div class="flex flex-row">
                            <span class="w-0.5 h-full bg-black"></span>
                            <div class="flex flex-col ml-2 items-start">
                                <h4 class="cs-fs-lg font-bold">Return</h4>
                                <p class="cs-fs-3xs font-thin -mt-1">The tribe of Judah returns to the Promised land</p>
                            </div>
                        </div>
                        <div class="flex-row flex">
                            <span class="cs-course-chip uppercase ml-3 mt-2 bg-cs-period9-sec font-normal tracking-normal">
                                  Ezra
                            </span>
                            <span class="cs-course-chip uppercase ml-2 mt-2 bg-cs-period9-sec font-normal tracking-normal">
                                   Nehemiah
                            </span>
                        </div>
                    </div>
                </div>
                <div class=" flex flex-row">
                    <div class="cs-box-timeline-number bg-cs-period10-sec">
                        10
                    </div>
                    <div class="cs-box-timeline-description bg-cs-period10-pri ">
                        <div class="flex flex-row">
                            <span class="w-0.5 h-full bg-white"></span>
                            <div class="flex flex-col ml-2 items-start">
                                <h4 class="cs-fs-lg font-bold">Maccabean Revolt</h4>
                                <p class="cs-fs-3xs font-thin -mt-1">The Israelites rebel against the Greeks</p>
                            </div>
                        </div>
                        <div class="flex-row flex">
                            <span class="cs-course-chip uppercase ml-3 mt-2 bg-cs-period10-sec text-white font-normal tracking-normal">
                                  1 Maccabees
                            </span>
                        </div>
                    </div>
                </div>
                <div class=" flex flex-row">
                    <div class="cs-box-timeline-number bg-cs-period11-sec">
                        11
                    </div>
                    <div class="cs-box-timeline-description bg-cs-period11-pri ">
                        <div class="flex flex-row">
                            <span class="w-0.5 h-full bg-white"></span>
                            <div class="flex flex-col ml-2 items-start">
                                <h4 class="cs-fs-lg font-bold">Messianic Fulfillment</h4>
                                <p class="cs-fs-3xs font-thin -mt-1">The coming of the Jesus Christ</p>
                            </div>
                        </div>
                        <div class="flex-row flex">
                            <span class="cs-course-chip uppercase ml-3 mt-2 bg-cs-period11-sec text-white font-normal tracking-normal">
                                  LUKE
                            </span>
                        </div>
                    </div>
                </div>
                <div class=" flex flex-row text-black">
                    <div class="cs-box-timeline-number bg-cs-period12-sec">
                        12
                    </div>
                    <div class="cs-box-timeline-description bg-cs-period12-pri ">
                        <div class="flex flex-row">
                            <span class="w-0.5 h-full bg-black"></span>
                            <div class="flex flex-col ml-2 items-start">
                                <h4 class="cs-fs-lg font-bold">The Church</h4>
                                <p class="cs-fs-3xs font-thin -mt-1">The spreading of the Christian faith</p>
                            </div>
                        </div>
                        <div class="flex-row flex">
                            <span class="cs-course-chip uppercase ml-3 mt-2 bg-cs-period12-sec font-normal tracking-normal">
                                  ACTS
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Introduction -->
        <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper">
            <div class="w-full max-w-[1000px] flex flex-col gap-6 text-center my-10">
                <span class="tracking-widest uppercase sm:cs-fs-xs cs-fs-xs text-cs-red-main">register today</span>
                <h2 class="font-sans font-bold cs-fs-xl md:cs-fs-2xl sm:cs-fs-2xl cs-gradient-text">Jeff Cavins’ world-famous
                    Catholic Bible Study</h2>
                <div class="flex md:flex-row flex-col md:gap-10 gap-3 items-center">
                    <div class="flex flex-col items-center text-center p-6 bg-cs-paper-shade rounded-xl shadow-cs-all-around min-w-[30%]">
                        <img src="/src/assets/bible-timeline/free-course.svg" alt="Comprehensive" class="w-48 h-24 mb-4">
                        <p class="text-cs-grey mt-4">This course is free for everyone—for <b>individuals, parishes & dioceses.</b></p>
                    </div>
                    <div class="flex flex-col items-center text-center p-6 bg-cs-paper-shade rounded-xl shadow-cs-all-around min-w-[30%]">
                        <img src="/src/assets/bible-timeline/live-streamed.svg" alt="Simple" class="w-48 h-24 mb-4">
                        <img src="/src/assets/mauro-closeup.jpg" id="meet-mauro"
                             class="h-48 w-auto object-cover rounded-full" alt="Mauro">
                        <p class="text-cs-grey mt-4">Delivered by presenter <b>Mauro Iannicelli</b> through  live-streamed, interactive sessions.</p>
                    </div>
                    <div class="flex flex-col items-center text-center p-6 bg-cs-paper-shade rounded-xl shadow-cs-all-around min-w-[30%]">
                        <img src="/src/assets/bible-timeline/life-changing.svg" alt="Transformative" class="w-48 h-24 mb-4">
                        <p class="text-cs-grey mt-4">Grasp the Big Picture of the Bible from start to finish!</p>
                    </div>
                </div>
                <div class="w-full">
                    <p class="text-cs-grey mt-4 text-center cs-fs-lg mb-8">
                        Register today for our <b>8 session course</b> which takes you through <b>Salvation History</b>.
                    </p>
                    <button class="cs-support-us-button bg-cs-red-main">Sign up</button>
                </div>
            </div>
        </div>

        <!-- Mauro's Introduction -->
        <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark">
            <div class="w-full max-w-[1000px] my-5 flex flex-col gap-6  text-center items-center">
                <span class="tracking-widest uppercase sm:cs-fs-xs cs-fs-xs text-cs-red-main">watch</span>
                <h2 class="font-sans font-bold cs-fs-xl md:cs-fs-3xl sm:cs-fs-2xl cs-gradient-text">Mauro’s course introduction:</h2>
                <img src="/src/assets/bible-timeline/image-36.jpg" alt="Mauro's Introduction" class="w-full max-w-3xl h-auto rounded-xl shadow-cs-all-around">
                <div class="w-full text-center mt-10">
                    <button class="cs-support-us-button bg-cs-red-main">Register</button>
                </div>
            </div>
        </div>

        <!-- "Go into the Bible" Section -->
        <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper">
            <div class="relative w-full max-w-[1000px] my-10 flex flex-col gap-6">
                <h2 class="font-sans font-bold cs-fs-xl lg:cs-fs-3xl md:cs-fs-2xl text-cs-red-medium cs-gradient-text">Do you find the Bible <br>too big and complicated?</h2>
                <p class="cs-fs-xl w-[65%]">
                    There are <b>so many characters and stories,</b>
                    especially in the Old Testament!
                </p>
                <img src="/src/assets/bible-timeline/vector-14.svg" class="absolute right-2 -bottom-24 md:right-32 md:top-20 w-56 md:w-80">
            </div>
        </div>



        <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark">
            <div class="w-full max-w-[1000px] my-10 flex flex-col gap-6 items-center">
                <img src="/src/assets/bible-timeline/tag-cloud.png" alt="Bible Timeline" class="w-full max-w-4xl h-auto z-10">
            </div>
        </div>

        <!-- Course Details -->
        <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper">
            <div class=" relative w-full max-w-[1000px] my-10 flex flex-col gap-6">
                <h2 class="font-sans cs-fs-xl lg:cs-fs-3xl md:cs-fs-2xl text-cs-red-main text-right cs-gradient-text">
                    Many Catholics long to read<br/> the Bible, but
                    <span class="font-bold">don’t know<br/> where to start.</span>
                </h2>
                <p class="cs-fs-xl w-full text-right -mt-4">
                    So they often begin, and <b>then give up</b>.
                </p>
                <img src="/src/assets/bible-timeline/vector-17.svg" class=" -right-10 md:right-32 top-20 w-3/4 ml-10">
                <h2 class="font-sans cs-fs-xl lg:cs-fs-3xl md:cs-fs-2xl text-cs-red-main text-left cs-gradient-text">
                    What if we told you
                    <b>there is a<br/> definitive solution</b>
                    to this<br/> problem?
                </h2>
                <div class="bg-contain bg-[url(/src/assets/bible-timeline/trail.svg)] pt-[30%] md:pt-[36%] bg-no-repeat bg-[0rem_0rem] md:bg-[4rem]">
                    <p class="cs-fs-lg text-left -mt-4 w-[70%] md:w-[50%]">
                        The Bible Timeline methodology breaks the Bible into <b>12 colour-coded time periods</b> that are easy to understand and memorize.
                    </p>
                </div>
                <img src="/src/assets/bible-timeline/12-periods-only.jpg" class="w-full bg-cs-paper-shade py-8" alt="12 Periods Only"/>
                <div class="w-full relative h-20 md:h-28">
                    <img src="/src/assets/bible-timeline/hooked.svg" class="absolute right-28 md:right-72 w-36 md:w-48 ml-10" alt="Vector 17">
                </div>
                <div class="flex flex-row items-end">
                    <div class="w-1/4 md:w-1/3 flex justify-end">
                        <img src="/src/assets/bible-timeline/involved.svg" class="w-40 md:w-52 lg:w-60"
                             alt="Vector 17">
                    </div>
                    <h2 class="relative font-sans cs-fs-xl lg:cs-fs-3xl md:cs-fs-2xl text-cs-red-main text-right w-3/4 md:w-2/3 self-end cs-gradient-text mt-4">
                        During this course, presenter Mauro Iannicelli will walk you through <b>each of the
                            12 Periods.</b>
                    </h2>
                </div>
                <div class="w-full md:w-1/2 flex flex-col self-end">
                    <img src="/src/assets/bible-timeline/bt2-mauro-pointing-screen.jpg" alt="12 Periods Larger"/>
                    <p class="cs-fs-lg text-right mt-6">
                        With this approach, you will grasp <b>the Big Picture of the Bible</b> from start to finish, the Old and the New Testament... for life!
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-shade">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-[800px]">
                <div class="flex flex-col items-center space-x-4 bg-cs-paper pb-8">
                    <img src="/src/assets/bible-timeline/icons-06.jpg" class="max-w-72" alt="Vision & Strategy">
                    <h4 class="font-bold text-center text-cs-red-main cs-fs-3xl cs-gradient-text  -mt-4">Discover</h4>
                    <p class="p-2 text-center cs-fs-sm">
                        how the key people, places, and events in the Bible fit together.
                    </p>
                </div>
                <div class="flex flex-col items-center space-x-4 bg-cs-paper pb-8">
                    <img src="/src/assets/bible-timeline/icons-07.jpg" class="max-w-72" alt="Vision & Strategy">
                    <h4 class="font-bold text-center text-cs-red-main cs-fs-3xl cs-gradient-text  -mt-4">Gain</h4>
                    <p class="p-2 text-center cs-fs-sm">
                        a greater understanding for the Scripture readings you hear at mass.
                    </p>
                </div>
                <div class="flex flex-col items-center space-x-4 bg-cs-paper pb-8">
                    <img src="/src/assets/bible-timeline/icons-03.jpg" class="max-w-72" alt="Vision & Strategy">
                    <h4 class="font-bold text-center text-cs-red-main cs-fs-3xl cs-gradient-text  -mt-4">Understand</h4>
                    <p class="p-2 text-center cs-fs-sm">
                        how the events in the Old Testament are fulfilled in the New Testament.
                    </p>
                </div>
                <div class="flex flex-col items-center space-x-4 bg-cs-paper pb-8">
                    <img src="/src/assets/bible-timeline/icons-05.jpg" class="max-w-72" alt="Vision & Strategy">
                    <h4 class="font-bold text-center text-cs-red-main cs-fs-3xl cs-gradient-text -mt-4">Learn</h4>
                    <p class="p-2 text-center cs-fs-sm">
                        how God’s Word applies to your life today.
                    </p>
                </div>
            </div>
        </div>

        <!-- Mauro's Introduction -->
        <div class=" flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper">
            <div class="relative w-full max-w-[1000px] mt-48 mb-5 flex flex-col gap-6 text-center items-center">
                <img src="/src/assets/bible-timeline/vector-27.svg" class="absolute left-10 md:left-1/4 -top-64 w-72 md:w-96">
                <h2 class="relative font-sans font-bold cs-fs-xl md:cs-fs-3xl sm:cs-fs-2xl cs-gradient-text -mt-10 md:mt-4">We make the complex <br>simple.
                    <img src="/src/assets/bible-timeline/im-in.svg" class="absolute -right-4 w-40 md:w-48 top-36 md:top-20">
                </h2>
                <p class="cs-fs-lg w-full text-center">
                    Join us online. <b>Come and see!</b>
                </p>
                <div class="w-full text-center my-10">
                    <button class="cs-support-us-button bg-cs-red-main">Register</button>
                </div>
            </div>
        </div>

        <!-- Jeff's Endorsement -->
        <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark">
            <div class="w-full max-w-[1000px] my-10 flex flex-col gap-6  text-center items-center">
                <span class="tracking-widest uppercase sm:cs-fs-xs cs-fs-xs text-cs-red-main">endorsement</span>
                <h2 class="font-sans font-bold cs-fs-xl md:cs-fs-3xl sm:cs-fs-2xl cs-gradient-text">Jeff Cavins endorses
                    Mauro Iannicelli as Bible Timeline teacher</h2>
                <img src="/src/assets/bible-timeline/image-34.jpg" alt="Mauro's Introduction"
                     class="w-full max-w-2xl h-auto rounded-xl">
                <div class="mt-2 font-serif font-bold text-center md:mt-16 cs-fs-3xl">
                    <img src="/src/assets/endorsement-quote-red.svg" class="w-16 h-16 mx-auto " alt="Quote">
                </div>

                <div class="mt-5 mb-6 font-serif italic text-center cs-fs-xl text-cs-red-main max-w-2xl">Mauro has such a depth of
                    knowledge of the Bible and theology that it's an honour for me to give my endorsement to him as a
                    wonderful&nbsp;teacher.
                </div>

                <div class="font-serif text-center uppercase cs-fs-base text-cs-red-main">Jeff Cavins</div>

                <div class="w-full text-center mt-4">
                    <button class="cs-support-us-button bg-transparent text-cs-red-main border-cs-red-main border-2">MORE ENDORSEMENTS</button>
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
        <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper my-10">
        <div class="flex flex-col md:flex-row gap-4 md:gap-12 max-w-[1000px]">
            <div class="flex flex-col md:w-1/2 w-full gap-4">
                <!-- Box Testimonial -->
                <div class="flex flex-col items-center w-full cs-testimonials-box border-cs-red-dark">
                    <!-- Box Author -->
                    <div class="relative flex flex-col justify-center cs-testimonials-box-author bg-cs-red-dark pl-[20px]">
                        <div class="flex flex-row items-center justify-start gap-2 -mt-1">
                            <span class="font-bold text-white">Helen B.</span>
                        </div>
                        <p class="tracking-widest text-white uppercase cs-fs-2xs">Advent Sunday Gospels - Nov 2021</p>
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
                        <p class="tracking-widest text-white uppercase cs-fs-2xs">Advent Sunday Gospels - Nov 2021</p>
                    </div>
                    <!-- Box Post -->
                    <div class="flex flex-col gap-5 px-8 py-8">
                        <p>This course has been such a blessing from God in my life! Each and every session has been jam packed with in depth teachings that have taught me more than I could ever imagine!</p>
                    </div>
                </div>

            </div>
            <div class="flex flex-col md:w-1/2 w-full gap-4">
                <!-- Box Testimonial -->
                <div class="flex flex-col items-center w-full cs-testimonials-box border-cs-red-medium">
                    <!-- Box Author -->
                    <div class="relative flex flex-col justify-center cs-testimonials-box-author bg-cs-red-medium pl-[20px]">
                        <div class="flex flex-row items-center justify-start gap-2 -mt-1">
                            <span class="font-bold text-white">Anne B.</span>
                        </div>
                        <p class="mt-1 tracking-widest text-white uppercase cs-fs-2xs">Advent Sunday Gospels - Nov 2021</p>
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
                        <p class="mt-1 tracking-widest text-white uppercase cs-fs-2xs">Advent Sunday Gospels - Nov 2021</p>
                    </div>
                    <!-- Box Post -->
                    <div class="flex flex-col gap-5 px-8 py-8">
                        <p>Just SO surprisingly interesting and informative! Mauro's infectious enthusiasm and his analysis interspersed with interesting historical facts and (often surprising) connections within the Bible, lures and retains one's attention.</p>
                    </div>
                </div>
            </div>
        </div>
            <div class="w-full text-center mt-10">
                <button class="cs-support-us-button bg-transparent text-cs-red-main border-cs-red-main border-2">MORE TESTIMONIALS</button>
            </div>
        </div>

        <!-- Quote Jerome -->
        <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark  cs-bg-jerome-quote">
            <div class="w-full max-w-[1000px] my-14 flex flex-col gap-6  text-center items-center">
                <div class="mt-2 font-serif font-bold text-center md:mt-16 cs-fs-3xl">
                    <img src="/src/assets/endorsement-quote-red.svg" class="w-16 h-16 mx-auto " alt="Quote">
                </div>

                <div class="mb-6 font-serif italic text-center cs-fs-xl md:cs-fs-2xl text-cs-red-main max-w-2xl">You cannot make your way into the Holy Scriptures without having someone to go before you and show you the road.
                </div>

                <div class="font-serif text-center uppercase cs-fs-base text-cs-red-main">St. Jerome</div>

            </div>
        </div>

        <!-- Call to Action -->
        <div class="flex flex-col items-center w-full p-8 sm:p-16 bg-cs-red-main text-white">
            <div class="w-full max-w-[1000px] my-5 flex flex-col items-center gap-8 text-center">
                <h2 class="font-sans text-white cs-fs-2xl sm:cs-fs-4xl font-bold">This course is free</h2>
                <p class="cs-fs-xl md:cs-fs-2xl">for all individuals, parishes & dioceses.</p>
                <button class="bg-white text-cs-red-main uppercase font-bold py-3 px-8 rounded-xl cs-fs-base hover:bg-cs-paper transition-colors">
                        Register
                </button>
            </div>
        </div>

        <!-- Box Come & See -->
        <div class="flex flex-col items-center w-full p-8 sm:p-16 bg-cs-paper text-cs-red-main">
            <div class="w-full max-w-[1000px] my-10 flex flex-col items-center gap-8 text-center">
                <img src="/src/assets/bible-timeline/come-and-see-logo-no-text.png" class="w-1/2 md:w-1/4" alt="Come & See Logo">
                <img src="/src/assets/bible-timeline/come-and-see-text.svg" class="w-1/2 md:w-1/3" alt="Come & See Text">
                <p class="cs-fs-base md:cs-fs-lg italic font-serif mt-6">Serving Dioceses, Parishes & Individuals<br> with Teachings & Formation</p>
            </div>
        </div>
    </div>
</main>

<?php require_once 'components/footer.php'; ?>

</body>

</html>
