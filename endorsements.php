<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/input.css">
    <script type="module" src="/src/main.js"></script>
    <title>Endorsements</title>
</head>

<body class="flex flex-col min-h-screen">

    <?php require_once 'header.php'; ?>

    <main class="cs-main">
        <div class="cs-main-div">
            <!-- 'Title' container -->
            <div class="relative flex flex-col items-end justify-center w-full h-64 text-white cs-bg-endorsements">
                <div class="absolute top-0 left-0 w-full h-full bg-white bg-opacity-50"></div>
            </div>

            <!-- Content container -->
            <div class="w-full px-6 py-16 max-w-7xl sm:px-10 ">
                <div class="flex flex-col items-center mt-5 mb-14">
                    <div class="mb-3 font-sans text-center uppercase cs-fs-sm text-cs-grey">ENDORSED BY JEFF CAVINS</div>
                    <div class="text-cs-red-main cs-fs-xl font-semibold max-w-[700px] text-center">
                        Jeff Cavins endorses Mauro Iannicelli as Bible Timeline teacher for the UK.
                    </div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="flex flex-col w-full md:w-1/2">
                        <img src="/src/assets/endorsement-jeff-cavins.png" class="w-full rounded-3xl" alt="">
                        <div class="flex items-center justify-between w-full my-6 font-normal uppercase text-cs-grey cs-fs-sm">
                            [1 min. 09 secs.]
                            <button class="flex items-center justify-center h-8 px-3 font-bold text-white uppercase rounded-3xl bg-cs-red-main" onclick="toggleRead(this, 1)">
                                <span>read full text</span>
                                <span class="hidden">close full text</span>
                            </button>
                        </div>
                        <div id="read-full-1" class="px-6 overflow-y-hidden font-serif font-light text-left transition-all duration-300 ease-in-out max-h-0 text-cs-grey cs-fs-lg bg-cs-paper-shade text-clip">
                            Hey, I want to say “hi!” to all my friends in the UK. You know, with the Great Adventure Bible Timeline I am always interested in finding people who can teach it and who can convey the beautiful mysteries of the Catholic faith by opening up Scripture.
                            In Mauro Iannicelli I have found such a friend and he has such a depth of knowledge of the Bible and theology that it's an honour for me to give my [...]
                        </div>
                    </div>
                    <div class="flex flex-col w-full px-12 md:w-1/2 text-cs-red-main">

                        <div class="mt-2 font-serif font-bold text-center cs-fs-3xl">
                            <img src="/src/assets/endorsement-quote-red.svg" class="w-10 h-10 mx-auto " alt="Quote">
                        </div>

                        <div class="mt-10 mb-6 font-serif italic font-bold text-center cs-fs-lg">Mauro has such a depth of knowledge of the Bible and theology that it's an honour for me to give my endorsement to him as a wonderful teacher.</div>

                        <div class="font-serif text-center uppercase cs-fs-base">Jeff Cavins</div>

                        <div class="font-serif italic text-center cs-fs-base">Creator of the Great Adventure Bible Timeline</div>

                    </div>
                </div>
            </div>
            <div class="w-full px-6 py-16 max-w-7xl sm:px-10 bg-cs-paper-shade">
                <div class="flex flex-col items-center mt-5 mb-14">
                    <div class="mb-3 font-sans text-center uppercase cs-fs-sm text-cs-grey">ENDORSED BY fr ALEXANDER SHERBROOKE</div>
                    <div class="text-cs-blue-main cs-fs-xl font-semibold max-w-[700px] text-center">
                        Fr Alexander’s feedback about the two Bible Timeline Courses Mauro delivered in his parish.
                    </div>
                </div>
                <div class="flex flex-col-reverse md:flex-row">
                    <div class="flex flex-col w-full px-12 tracking-wide md:w-1/2 text-cs-blue-main">

                        <div class="mt-2 font-serif font-bold text-center cs-fs-3xl">
                            <img src="/src/assets/endorsement-quote-blue.svg" class="w-10 h-10 mx-auto " alt="Quote">
                        </div>

                        <div class="mt-10 mb-6 font-serif italic font-bold text-center cs-fs-lg">People who have done this course I know would very much encourage others to follow them.</div>

                        <div class="font-serif text-center uppercase cs-fs-base">FR Alexander Sherbrooke</div>

                        <div class="font-serif italic text-center cs-fs-base">Parish Priest, St Patrick’s, Soho, London</div>

                    </div>
                    <div class="flex flex-col w-full md:w-1/2">
                        <img src="/src/assets/endorsement-fr-alexander.png" class="rounded-3xl" alt="">
                        <div class="flex items-center justify-between w-full my-6 font-normal uppercase text-cs-grey cs-fs-sm">
                            <button class="flex items-center justify-center h-8 px-3 font-bold text-white uppercase rounded-3xl bg-cs-blue-main" onclick="toggleRead(this, 2)">
                                <span>read full text</span>
                                <span class="hidden">close full text</span>
                            </button>
                            [1 min. 09 secs.]
                        </div>
                        <div id="read-full-2" class="px-6 overflow-y-hidden font-serif font-light text-left transition-all duration-300 ease-in-out max-h-0 text-cs-grey cs-fs-lg bg-cs-paper-dark">
                            Hello. I'd like to introduce you to the Bible Timeline course, which is run by Mauro. In the last two years here in San Patrick’s in Soho, we have run the Bible Timeline course twice. Each time it’s amazed me by the number of people who have come. There's been a least 100 people on each occasion.

                            Those who come do so with great enthusiasm. And...
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-6 py-16 max-w-7xl sm:px-10 sm:py-8">
                <div class="flex flex-col items-center mt-5 mb-14">
                    <div class="mb-3 font-sans text-center uppercase cs-fs-sm text-cs-grey">ENDORSED BY YOUTH 2000 UK</div>
                    <div class="text-cs-red-main cs-fs-xl font-semibold max-w-[700px] text-center">
                        Annabel Ward testifies on the Bible Timeline Course Mauro delivered online for Youth 2000
                    </div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="flex flex-col w-full md:w-1/2">
                        <img src="/src/assets/endorsement-annabel-ward.png" class="rounded-3xl" alt="">
                        <div class="flex items-center justify-between w-full my-6 font-normal uppercase text-cs-grey cs-fs-sm">
                            [0 min. 24 secs.]
                            <button class="flex items-center justify-center h-8 px-3 font-bold text-white uppercase rounded-3xl bg-cs-red-main" onclick="toggleRead(this, 3)">
                                <span>read full text</span>
                                <span class="hidden">close full text</span></button>
                        </div>
                        <div id="read-full-3" class="px-6 overflow-y-hidden font-serif font-light text-left transition-all duration-300 ease-in-out max-h-0 text-cs-grey cs-fs-lg bg-cs-paper-shade">
                            Mauro ran a Bible Timeline Course on Zoom for Youth 2000 and it was amazing!
                            We had 130 participants who completed the seven sessions of the course and their feedback was excellent.
                            Many reported they now can see the Bible narrative[...]
                        </div>
                    </div>
                    <div class="flex flex-col w-full px-12 tracking-wide md:w-1/2 text-cs-red-main">

                        <div class="mt-2 font-serif font-bold text-center cs-fs-3xl">
                            <img src="/src/assets/endorsement-quote-red.svg" class="w-10 h-10 mx-auto " alt="Quote">
                        </div>

                        <div class="mt-10 mb-6 font-serif italic font-bold text-center cs-fs-lg">Mauro ran a Bible Timeline Course on Zoom for Youth 2000 and it was amazing!</div>

                        <div class="font-serif text-center uppercase cs-fs-base">annabel ward</div>

                        <div class="font-serif italic text-center cs-fs-base">former National Director of Youth 2000 UK</div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once 'footer.php'; ?>
</body>

</html>