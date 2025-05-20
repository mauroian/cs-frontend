<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/input.css">
    <script type="module" src="/src/main.js"></script>
    <title>Support Us3</title>
</head>

<body class="flex flex-col min-h-screen">
    <?php require_once 'components/header.php'; ?>
    <main class="cs-main">
        <div class="cs-main-div">


            <!-- 'Title' container (1) -->
            <!--
            <div class="flex flex-col items-center w-full py-10 sm:py-14 bg-cs-paper-shade">
                <div class="w-full max-w-[800px] px-8">
                    <span class="tracking-widest uppercase">Give to our ministry</span>
                    <h1 class="font-serif italic font-semibold text-left sm:cs-fs-3xl cs-fs-2xl text-cs-red-main">Support Mauro and Janet's ministry.</h1>
                </div>
            </div>
            -->


            <!-- 'Title' container (2) -->
            <!--
            <div class="flex flex-col items-center w-full py-10 text-white sm:py-14 bg-cs-paper-shade">
                <div class="flex items-center mx-auto">
                    <div>
                        <img src="/src/assets/support-us-header.png" class="md:w-[600px] sm:w-[500px] w-[400px] px-4" alt="Header">
                    </div>
                </div>
            </div>
            -->

            <!-- 'Title' container (3)  (WITH VIDEO)-->
            <div class="relative flex flex-col items-center max-w-[800px] mb-24 text-cs-red-main bg-cs-paper-shade md:mb-48">
                <video autoplay loop muted playsinline class="w-auto min-w-full">
                    <source src="/src/assets/videos/bg-video-support-us.mp4" type="video/mp4" />
                </video>
                <div class="absolute bottom-0 left-0 flex items-center justify-center w-full h-full px-4 bg-white bg-opacity-30">
                </div>
                <div class="absolute bottom-0 flex items-center w-full max-w-4xl mx-auto">
                    <div class="mx-10 -mb-20 sm:-mb-24 md:-mb-36">
                        <img src="/src/assets/support-us-header.png" class="md:w-[700px] sm:w-[500px] w-[400px] mr-auto" alt="Header">
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center cs-personal-area-container sm:cs-fs-base cs-fs-base">

                <div class="flex flex-col justify-start gap-2 mt-8 text-cs-grey">

                    <p class="font-bold uppercase cs-fs-lg">We'd love to have YOU as our mission partner!</p>

                    <p>We are delighted to offer you our courses, LIVE, totally <b>FREE OF CHARGE!</b></p>

                    <p>However, my wife Janet and I would be so blessed <b>if you could help us financially by buying our Study Resources.</b></p>
                </div>

                <div class="w-full mt-16 mb-10">
                    <h3 class="font-bold cs-fs-xl sm:cs-fs-2xl text-cs-red-main">Bible Study Resource Bundles</h3>
                </div>

                <div class="cs-support-us-box bg-cs-bronze">
                    <button type="button"
                        class="flex items-center justify-between w-full text-white cs-support-us-accordion-header ">
                        <span class="bg-cs-bronze-dark cs-support-us-tag">
                            Bronze Bundle
                        </span>
                        £10
                    </button>
                    <div class="bg-cs-paper-dark">
                        <div class="flex flex-col py-6 cs-bible-accordion-content">
                            <div class="cs-support-us-item">
                                <a href="#" class="flex flex-row items-center gap-4">
                                    <img src="/src/assets/support-bronze-badge.png" class="inline-block w-16 h-16 mr-2" alt="Bronze">
                                    <span class="flex flex-col font-bold cs-fs-lg">
                                        Bible Timeline Course Notes
                                        <span class="cs-support-us-chip cs-fs-sm ">
                                            written by Mauro Iannicelli
                                        </span>
                                    </span>
                                </a>

                            </div>
                            <div class="cs-support-us-item">
                                <div class="cs-support-us-paragraphs-block">
                                    <p>
                                        These notes cover the whole course, <b>from Period 1 to Period 12</b> and provide you with a convenient summary of Salvation History.
                                    </p>
                                    <p>
                                        You can read from the <a class="underline" href="#">testimonials</a> how the students of past years found these course notes super useful!
                                        font-sans font-normal
                                    </p>
                                </div>
                            </div>
                            <div class="cs-support-us-item">
                                <button class="cs-support-us-button">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs-support-us-box bg-cs-silver ">
                    <button type="button"
                        class="flex items-center justify-between w-full text-black cs-support-us-accordion-header">
                        <span class="bg-cs-silver-light cs-support-us-tag">
                            Silver Bundle
                        </span>
                        £50
                    </button>
                    <div class="bg-cs-paper-dark">
                        <div class="flex flex-col py-6 cs-bible-accordion-content">
                            <div class="cs-support-us-item">
                                <a href="#" class="flex flex-row items-center gap-4">
                                    <img src="/src/assets/support-silver-badge.png" class="inline-block w-16 h-16 mr-2" alt="Bronze">
                                    <span class="flex flex-col font-bold cs-fs-lg">
                                        Bible Timeline Course Notes
                                        <span class="cs-support-us-chip cs-fs-sm ">
                                            written by Mauro Iannicelli
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="cs-support-us-item">
                                <a href="#" class="flex flex-row items-center gap-4">
                                    <img src="/src/assets/support-silver-badge.png" class="inline-block w-16 h-16 mr-2" alt="Bronze">
                                    <span class="flex flex-col font-bold cs-fs-lg">
                                        Video Recordings of ALL the Course Sessions
                                        <span class="cs-support-us-chip cs-fs-sm ">
                                            with LIFETIME access!
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="cs-support-us-item">
                                <div class="cs-support-us-paragraphs-block">
                                    <p>
                                        Study at your own pace! You will be able to watch the recording of ANY course session whenever you want with <b>unlimited lifetime access!</b>
                                    </p>
                                    <p>
                                        <b>Please Note:</b> Due to Copyright issues, you agree not to share these videos with anyone else.
                                    </p>
                                </div>
                            </div>
                            <div class="cs-support-us-item">
                                <button class="cs-support-us-button">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs-support-us-box bg-cs-gold ">
                    <button type="button"
                        class="flex items-center justify-between w-full text-white cs-support-us-accordion-header ">
                        <span class="bg-cs-gold-light cs-support-us-tag">
                            Gold Bundle
                        </span>
                        £100
                    </button>
                    <div class="bg-cs-paper-dark">
                        <div class="flex flex-col py-6 cs-bible-accordion-content">
                            <div class="cs-support-us-item">
                                <a href="#" class="flex flex-row items-center gap-4">
                                    <img src="/src/assets/support-gold-badge.png" class="inline-block w-16 h-16 mr-2" alt="Bronze">
                                    <span class="flex flex-col font-bold cs-fs-lg">
                                        Bible Timeline Course Notes
                                        <span class="cs-support-us-chip cs-fs-sm ">
                                            written by Mauro Iannicelli
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="cs-support-us-item">
                                <a href="#" class="flex flex-row items-center gap-4">
                                    <img src="/src/assets/support-gold-badge.png" class="inline-block w-16 h-16 mr-2" alt="Bronze">
                                    <span class="flex flex-col font-bold cs-fs-lg">
                                        Video Recordings of ALL the Course Sessions
                                        <span class="cs-support-us-chip cs-fs-sm ">
                                            with LIFETIME access!
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="cs-support-us-item">
                                <a href="#" class="flex flex-row items-center gap-4">
                                    <img src="/src/assets/support-gold-badge.png" class="inline-block w-16 h-16 mr-2" alt="Bronze">
                                    <span class="flex flex-col font-bold cs-fs-lg">
                                        Membership to our “Come and See Mission Partners” group for next 12 months
                                    </span>
                                </a>
                            </div>
                            <div class="cs-support-us-item">
                                <a href="#" class="flex flex-row items-center gap-4">
                                    <img src="/src/assets/support-gold-badge.png" class="inline-block w-16 h-16 mr-2" alt="Bronze">
                                    <span class="flex flex-col font-bold cs-fs-lg">
                                        Be included in our Come and See Monthly Mass offering for next 12 months
                                    </span>
                                </a>
                            </div>
                            <div class="cs-support-us-item">
                                <div class="cs-support-us-paragraphs-block">
                                    <p>
                                        As a Come & See Mission Partner, you are welcome to join our <b>Strategy Planning Zoom Calls</b>, where we will discuss and discern together the vision and the next steps of this ministry.
                                    </p>
                                    <p>
                                        Moreover, as a Mission Partner, Janet and I will lift up your name in our prayers for the next 12 months - <b>we will honour this!</b>
                                    </p>
                                </div>
                            </div>
                            <div class="cs-support-us-item">
                                <button class="cs-support-us-button">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-black cs-support-us-box">
                    <div class="bg-cs-paper-dark">
                        <div class="flex flex-col items-center py-10 cs-bible-accordion-content">
                            <h3 class="font-bold text-center text-cs-red-main cs-fs-xl max-w-96">Or donate any amount of&nbsp;your&nbsp;choice!
                            </h3>
                            <div class="justify-center inline-block mt-3 font-sans font-normal text-center cs-support-us-item">
                                Please Note: if you donate more than £10, £50 or £100 respectively, you will of course be <b>automatically entitled</b> to the resources as stated for the amounts above.
                            </div>
                            <div class="justify-center inline-block font-sans font-normal text-center cs-support-us-item">
                                You can also choose to set up a monthly donation if you wish!
                            </div>
                            <div class="justify-center cs-support-us-item">
                                <button class="cs-support-us-button">Donate</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center mb-14">
                    <img src="/src/assets/payments-icons.png" class="h-16" alt="Payment Methods">
                    <p class="italic text-center"><b>PLEASE NOTE:</b> below, payments can be made by Credit/Debit Card. Alternatively, you can ask for our <a class="font-bold underline " href="#">Bank Details via email.</a></p>
                </div>

            </div>
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark">
                <div class="w-full max-w-[1000px] my-5 flex flex-col gap-3">
                    <span class="tracking-widest uppercase sm:cs-fs-xs cs-fs-xs text-cs-grey">pray before giving</span>
                    <h2 class="font-bold cs-fs-xl sm:cs-fs-2xl text-cs-red-main">We invite you to pray before you decide what to give.</h2>
                    <span class="tracking-wide text-black sm:cs-fs-base cs-fs-base">We would absolutely love it if you took a decision based on prayer! We are doing a Bible study together, so - <b>involve God!</b></span>
                    <span class="tracking-wide sm:cs-fs-base cs-fs-base">So… may we suggest you do one thing?</span>
                    <div class="cs-support-us-steps">
                        <div class="cs-support-us-step">
                            <div class="flex flex-row items-baseline gap-2">
                                <span class="text-white bg-cs-red-main border-cs-red-main border rounded-full w-8 px-2 font-serif font-bold cs-fs-2md flex-[0_0_2rem]">1</span>
                                <span class="font-normal text-left cs-fs-base md:cs-fs-base">Find a convenient moment to enter into a <b>time of prayer</b>.</span>
                            </div>
                            <div class="flex flex-row items-baseline gap-2">
                                <span class="text-white bg-cs-red-main border-cs-red-main border rounded-full w-8 px-2 font-serif font-bold cs-fs-2md flex-[0_0_2rem]">2</span>
                                <span class="font-normal text-left cs-fs-base md:cs-fs-base">Ask the Lord to <b>put the figure into your heart</b> that He desires you to give.</span>
                            </div>
                            <div class="flex flex-row items-baseline gap-2">
                                <span class="text-white bg-cs-red-main border-cs-red-main border rounded-full w-8 px-2 font-serif font-bold cs-fs-2md flex-[0_0_2rem]">3</span>
                                <span class="font-normal text-left cs-fs-base md:cs-fs-base">Then, <b>honour that prompting</b>— knowing that the Lord will bless you abundantly, as He is never outdone in generosity!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs-hero-support flex flex-col justify-center items-center my-16 px-4 max-w-[1000px] gap-2 text-center">
                <h3 class="mb-4 font-bold cs-fs-2xl sm:cs-fs-xl text-cs-red-main">Thank you very much for your generous support.</h3>
                <p class="font-bold text-cs-grey">Mauro & Janet Iannicelli</p>
                <p class="text-cs-grey">(Come & See Catholic Formation Ministries)</p>
            </div>
        </div>
    </main>
    <?php require_once 'components/footer.php'; ?>
</body>

</html>