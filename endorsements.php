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

            <!-- Page Header container -->
            <div class="relative flex flex-col items-end justify-center w-full h-64 text-white cs-bg-endorsements">
                <div class="absolute top-0 left-0 w-full h-full bg-white bg-opacity-50"></div>
            </div>

            <!-- NOTE: when copying endorsements, bear in mind that odd / even endorsements have a different structure and colors. So, use endorsememt number 1 as template for odd endorsements and use endorsement number 2 as template for even endorsements -->

            <!-- Endorsement Container -->
            <div class="w-full px-6 py-16 sm:px-10 bg-cs-paper-dark">

                <div class="flex flex-col items-center m-auto mt-5 mb-14 max-w-7xl">
                    <div class="mb-3 font-sans text-center uppercase cs-fs-sm text-cs-grey">ENDORSED BY JEFF CAVINS</div>
                    <div class="text-cs-red-main cs-fs-lg sm:cs-fs-xl font-semibold max-w-[700px] text-center">
                        Jeff Cavins endorses Mauro Iannicelli as Bible Timeline teacher for&nbsp;the&nbsp;UK.
                    </div>
                </div>
                <div class="flex flex-col m-auto xl:flex-row xl:max-w-7xl max-w-[700px]">
                    <div class="flex flex-col w-full xl:w-1/2">
                        <img src="/src/assets/endorsement-jeff-cavins.png" class="w-full rounded-3xl" alt="">
                        <div class="flex items-center justify-between w-full my-6 font-normal uppercase text-cs-grey cs-fs-sm">
                            [1 min. 09 secs.]
                            <button class="h-8 px-3 font-bold text-white uppercase cs-fs-xs md:cs-fs-sm min-w-[140px] md:min-w-[180px] rounded-3xl bg-cs-red-main" onclick="toggleRead(this, 1)">
                                <span>read full text</span>
                                <span class="hidden">close full text</span>
                            </button>
                        </div>
                        <div id="read-full-1" class="flex flex-col gap-4 px-6 py-6 overflow-y-hidden font-light text-left transition-all duration-300 ease-in-out max-h-0 text-cs-grey bg-cs-paper text-clip">
                            <p>Hey I want to say 'hi' to all my friends in the UK. You know, with the Great Adventure Bible Timeline I am always interested in finding people who can teach it and who can convey the beautiful mysteries of the Catholic faith by opening up Scripture.</p>
                            <p>In Mauro Iannicelli I have found such a friend and he has such a depth of knowledge of the Bible and theology that it's an honour for me to give my endorsement to him as a wonderful teacher.</p>
                            <p>I hope you will sign up and you'll go through the Bible timeline with my friend Mauro. He is going to open up the Bible in such a way that not only you will get to know God but you'll get to know yourself too and you will be introduced into the wonderful plan of sheer goodness that is laid out in the Bible.</p>
                            <p>So I really encourage you to sign up and when I come back in the UK sometime I'd like to hear all that you have gained as a result of studying with Mauro.</p>
                            <p>God bless you and may you have a wonderful, fruitful time in the Great Adventure, a journey through the Bible.</p>
                        </div>
                    </div>
                    <div class="flex flex-col w-full px-12 xl:w-1/2 text-cs-red-main">

                        <div class="mt-2 font-serif font-bold text-center xl:mt-16 cs-fs-3xl">
                            <img src="/src/assets/endorsement-quote-red.svg" class="w-10 h-10 mx-auto " alt="Quote">
                        </div>

                        <div class="mt-5 mb-6 font-serif italic font-bold text-center cs-fs-lg">Mauro has such a depth of knowledge of the Bible and theology that it's an honour for me to give my endorsement to him as a wonderful&nbsp;teacher.</div>

                        <div class="font-serif text-center uppercase cs-fs-base">Jeff Cavins</div>

                        <div class="font-serif italic text-center cs-fs-base">Creator of the Great Adventure Bible&nbsp;Timeline</div>

                    </div>
                </div>
            </div>

            <!-- Endorsement Container -->
            <div class="w-full px-6 py-16 sm:px-10 bg-cs-paper">
                <div class="flex flex-col items-center m-auto mt-5 mb-14 max-w-7xl">
                    <div class="mb-3 font-sans text-center uppercase cs-fs-sm text-cs-grey">ENDORSED BY fr ALEXANDER SHERBROOKE</div>
                    <div class="text-cs-blue-main cs-fs-xl font-semibold max-w-[700px] text-center">
                        Fr Alexander’s feedback about the two Bible Timeline Courses Mauro delivered in&nbsp;his&nbsp;parish.
                    </div>
                </div>
                <div class="flex flex-col-reverse m-auto xl:flex-row xl:max-w-7xl max-w-[700px]">

                    <div class="flex flex-col w-full px-12 tracking-wide xl:w-1/2 text-cs-blue-main">

                        <div class="mt-2 font-serif font-bold text-center xl:mt-16 cs-fs-3xl">
                            <img src="/src/assets/endorsement-quote-blue.svg" class="w-10 h-10 mx-auto " alt="Quote">
                        </div>

                        <div class="mt-5 mb-6 font-serif italic font-bold text-center cs-fs-lg">People who have done this course I know would very much encourage others to&nbsp;follow&nbsp;them.</div>

                        <div class="font-serif text-center uppercase cs-fs-base">FR Alexander Sherbrooke</div>

                        <div class="font-serif italic text-center cs-fs-base">Parish Priest, St Patrick’s, Soho, London</div>

                    </div>
                    <div class="flex flex-col w-full xl:w-1/2">
                        <img src="/src/assets/endorsement-fr-alexander.png" class="rounded-3xl" alt="">
                        <div class="flex items-center justify-between w-full my-6 font-normal uppercase text-cs-grey cs-fs-sm">
                            <button class="h-8 px-3 font-bold text-white uppercase cs-fs-xs md:cs-fs-sm min-w-[140px] md:min-w-[180px] rounded-3xl bg-cs-blue-main" onclick="toggleRead(this, 2)">
                                <span>read full text</span>
                                <span class="hidden">close full text</span>
                            </button>
                            [1 min. 48 secs.]
                        </div>
                        <div id="read-full-2" class="flex flex-col gap-4 px-6 py-6 overflow-y-hidden font-light text-left transition-all duration-300 ease-in-out max-h-0 text-cs-grey bg-cs-paper-dark">
                            <p>Hello. I'd like to introduce you to the Bible Timeline course, which is run by Mauro. In the last two years here in San Patrick's in Soho, we have run the Bible Timeline course twice. Each time it’s amazed me by the number of people who have come. There's been a least 100 people on each occasion.</p>
                            <p>Those who come do so with great enthusiasm. And they speak about how Mauro, through his very engaged teaching, really brings the Bible alive and helps people not only in their prayer on using the Bible for Lectio Divina, but also for the more foursome celebration of Holy Mass and being able to follow the reading. They have a great sense of the completeness of the Scriptures, of how to use the Scriptures and, most importantly, to grow in their faith.</p>
                            <p>Mauro has a very engaged way of teaching the scriptures, bringing it alive with humor with a certain lightness of touch but most importantly, a great enthusiasm. People who have done this course I know, would very much encourage others to follow them.</p>
                            <p>It's something that we can do at this time, perhaps when we're not able to attend in person and I know what Mauro is putting together will be a brilliant opportunity of finding a deeper relationship with the Lord, a deeper love of Jesus and, through that, a desire to evangelise and to share the Good News with us. God bless you.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Endorsement Container -->
            <div class="w-full px-6 py-16 sm:px-10 bg-cs-paper-dark">

                <div class="flex flex-col items-center m-auto mt-5 mb-14 max-w-7xl">
                    <div class="mb-3 font-sans text-center uppercase cs-fs-sm text-cs-grey">ENDORSED BY YOUTH 2000 UK</div>
                    <div class="text-cs-red-main cs-fs-xl font-semibold max-w-[700px] text-center">
                        Annabel Ward testifies on the Bible Timeline Course Mauro delivered online for&nbsp;Youth&nbsp;2000
                    </div>
                </div>
                <div class="flex flex-col m-auto xl:flex-row xl:max-w-7xl max-w-[700px]">
                    <div class="flex flex-col w-full xl:w-1/2">

                        <img src="/src/assets/endorsement-annabel-ward.png" class="rounded-3xl" alt="">
                        <div class="flex items-center justify-between w-full my-6 font-normal uppercase text-cs-grey cs-fs-sm">
                            [0 min. 24 secs.]
                            <button class="h-8 px-3 font-bold text-white uppercase cs-fs-xs md:cs-fs-sm min-w-[140px] md:min-w-[180px] rounded-3xl bg-cs-red-main" onclick="toggleRead(this, 3)">
                                <span>read full text</span>
                                <span class="hidden">close full text</span></button>
                        </div>
                        <div id="read-full-3" class="flex flex-col gap-4 px-6 py-6 overflow-y-hidden font-light text-left transition-all duration-300 ease-in-out max-h-0 text-cs-grey bg-cs-paper">
                            <p>Mauro ran a Bible Timeline Course on Zoom for Youth 2000 and it was amazing!</p>
                            <p>We had 130 participants who completed the seven sessions of the course and their feedback was excellent.</p>
                            <p>Many reported they now can see the Bible narrative as a whole; how the readings at Mass make more sense for them, and how they are now eager to go deeper in Scripture.</p>
                            <p>Thank you Mauro for your ministry!</p>
                        </div>
                    </div>
                    <div class="flex flex-col w-full px-12 xl:w-1/2 text-cs-red-main">

                        <div class="mt-2 font-serif font-bold text-center xl:mt-16 cs-fs-3xl">
                            <img src="/src/assets/endorsement-quote-red.svg" class="w-10 h-10 mx-auto " alt="Quote">
                        </div>

                        <div class="mt-5 mb-6 font-serif italic font-bold text-center cs-fs-lg">Mauro ran a Bible Timeline Course on Zoom for Youth 2000 and it&nbsp;was&nbsp;amazing!</div>

                        <div class="font-serif text-center uppercase cs-fs-base">annabel ward</div>

                        <div class="font-serif italic text-center cs-fs-base">former National Director of Youth&nbsp;2000&nbsp;UK</div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once 'footer.php'; ?>
</body>

</html>