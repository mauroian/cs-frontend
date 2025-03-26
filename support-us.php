<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/input.css">
    <script type="module" src="/src/main.js"></script>
    <title>Support Us</title>
</head>

<body class="flex flex-col min-h-screen">
    <?php require_once 'components/header.php'; ?>
    <main class="cs-main">
        <div class="cs-main-div">

            <!-- 'Title' container -->
            <div class="relative flex flex-col items-center w-full text-cs-red-main bg-cs-paper-shade mb-24 md:mb-48">
                <video autoplay loop muted playsinline class="w-auto min-w-full">
                    <source src="/src/assets/videos/bg-video-support-us.mp4" type="video/mp4" />
                </video>
                <div class="absolute bottom-0 left-0 flex items-center justify-center w-full h-full px-4 bg-white bg-opacity-30">
                </div>
                <div class="w-full max-w-4xl absolute bottom-0 flex items-center mx-auto">
                    <div class="-mb-20 sm:-mb-24 md:-mb-36">
                        <img src="/src/assets/support-us-header.png" class="md:w-[700px] sm:w-[500px] w-[400px] mr-auto" alt="Header">
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center cs-personal-area-container sm:cs-fs-base cs-fs-base">

                <div class="flex flex-col justify-start gap-5 mt-8 mb-10 cs-hero-support text-cs-grey">

                    <p class="uppercase font-bold cs-fs-lg">We’d love to have YOU as our mission partner!</p>

                    <p>We are delighted to offer you our courses, LIVE, totally <b>FREE OF CHARGE!</b></p>

                    <p>However, my wife Janet and I would be so blessed <b>if you could help us financially by buying our Study Resources!</b></p>

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
                                <span class="inline-block font-sans font-normal">
                                    These notes cover the whole course, <b>from Period 1 to Period 12</b> and provide you with a convenient summary of Salvation History.<br><br>
                                    You can read from the <a class="underline" href="#">testimonials</a> how the students of past years found these course notes super useful!
                                </span>
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
                        $50
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
                                <span class="inline-block font-sans font-normal">
                                    Study at your own pace! You will be able to watch the recording of ANY course session whenever you want with <b>unlimited lifetime access!</b><br><br>
                                    <b>Please Note:</b> Due to Copyright issues, you agree not to share these videos with anyone else.
                                </span>
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
                                <span class="inline-block font-sans font-normal">
                                    As a Come & See Mission Partner, you are welcome to join our <b>Strategy Planning Zoom Calls</b>, where we will discuss and discern together the vision and the next steps of this ministry.<br><br>
                                    Moreover, as a Mission Partner, Janet and I will lift up your name in our prayers for the next 12 months - <b>we will honour this!</b>
                                </span>
                            </div>
                            <div class="cs-support-us-item">
                                <button class="cs-support-us-button">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs-support-us-box text-black">
                    <div class="bg-cs-paper-dark">
                        <div class="flex flex-col items-center py-6 cs-bible-accordion-content">
                            <h3 class="font-bold text-center text-cs-red-main cs-fs-xl max-w-96">Or donate any amount of your choice!
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
                <div class="mb-14 flex flex-col items-center">
                    <img src="/src/assets/payments-icons.png" class="h-16" alt="Payment Methods">
                    <p class="italic text-center"><b>PLEASE NOTE:</b> below, payments can be made by Credit/Debit Card. Alternatively, you can ask for our <a class="font-bold underline " href="#">Bank Details via email.</a></p>
                </div>

            </div>
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark">
                <div class="w-full max-w-[1000px] my-5 flex flex-col gap-3">
                    <span class="tracking-widest uppercase sm:cs-fs-xs cs-fs-xs text-cs-grey">pray before giving</span>
                    <h2 class=" cs-fs-xl sm:cs-fs-2xl text-cs-red-main font-bold">We invite you to pray before you decide what to give.</h2>
                    <span class="tracking-wide text-black sm:cs-fs-base cs-fs-base">We would absolutely love it if you took a decision based on prayer! We are doing a Bible study together, so - <b>involve God!</b></span>
                    <span class="tracking-wide sm:cs-fs-base cs-fs-base">So… may we suggest you do one thing?</span>
                    <div class="cs-support-us-steps">
                        <div class="cs-support-us-step">
                            <div class="flex flex-row gap-2 items-baseline">
                                <span class="text-white bg-cs-red-main border-cs-red-main border rounded-full w-8 px-2 font-serif font-bold cs-fs-2md flex-[0_0_2rem]">1</span>
                                <span class="font-normal cs-fs-base md:cs-fs-base text-left">Find a convenient moment to enter into a <b>time of prayer</b>.</span>
                            </div>
                            <div class="flex flex-row gap-2 items-baseline">
                                <span class="text-white bg-cs-red-main border-cs-red-main border rounded-full w-8 px-2 font-serif font-bold cs-fs-2md flex-[0_0_2rem]">2</span>
                                <span class="font-normal cs-fs-base md:cs-fs-base text-left">Ask the Lord to <b>put the figure into your heart</b> that He desires you to give.</span>
                            </div>
                            <div class="flex flex-row gap-2 items-baseline">
                                <span class="text-white bg-cs-red-main border-cs-red-main border rounded-full w-8 px-2 font-serif font-bold cs-fs-2md flex-[0_0_2rem]">3</span>
                                <span class="font-normal cs-fs-base md:cs-fs-base text-left">Then, <b>honour that prompting</b>— knowing that the Lord will bless you abundantly, as He is never outdone in generosity!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs-hero-support flex flex-col justify-center items-center my-16 max-w-[1000px] gap-2 text-center">
                <h3 class="mb-4 font-bold cs-fs-2xl sm:cs-fs-xl text-cs-red-main">Thank you very much for your generous support.</h3>
                <p class="font-bold text-cs-grey">Mauro & Janet Iannicelli</p>
                <p class="text-cs-grey">(Come & See Catholic Formation Ministries)</p>
            </div>
        </div>
    </main>
    <?php require_once 'components/footer.php'; ?>
</body>

</html>