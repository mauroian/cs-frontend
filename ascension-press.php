<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/input.css">
    <script type="module" src="/src/main.js"></script>
    <title>Ascension Press</title>
</head>

<body class="flex flex-col min-h-screen">

    <?php require_once 'components/header.php'; ?>

    <main class="pb-0 cs-main">
        <div class="cs-main-div">
            <!-- 'Title' container -->
            <div class="flex flex-col flex-wrap items-center justify-center w-full text-white h-44 sm:h-44 md:h-60 cs-bg-ascension-press">
                <!--
                <div class="w-full leading-tight max-w-[1000px] text-center px-2 pb-3">
                    <h2 class="font-serif italic cs-fs-lg md:cs-fs-4xl sm:cs-fs-xl">The <b>resources</b> that have changed
                        the way &nbsp; <b>Catholics</b> read the <b>Bible.</b>
                    </h2>
                </div>
                -->
                <div class="w-full leading-tight max-w-[1000px] text-center px-2 pb-3">
                    <h2 class="font-serif italic cs-fs-xl md:cs-fs-3xl sm:cs-fs-xl">The <b>resources</b>&nbsp;that
                    </h2>
                    <h2 class="font-serif italic cs-fs-xl md:cs-fs-3xl sm:cs-fs-xl">have changed&nbsp;the way</b>
                    </h2>
                    <h2 class="font-serif italic cs-fs-xl md:cs-fs-3xl sm:cs-fs-xl"><b>Catholics</b> read the <b>Bible.</b>
                    </h2>
                </div>
            </div>

            <!-- Content container -->
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark">
                <div class="w-full max-w-[1000px] my-5 flex flex-col gap-4">
                    <span class="tracking-widest uppercase sm:cs-fs-xs cs-fs-xs text-cs-grey">our study recommendations</span>
                    <h2 class="font-serif italic cs-fs-xl sm:cs-fs-3xl text-cs-red-shade">Ascension Press
                        Resources</h2>
                    <span class="font-semibold tracking-wide text-cs-red-shade sm:cs-fs-xl cs-fs-base">Study tools recommended by Mauro during his courses.</span>
                </div>
            </div>

            <!-- Note section -->
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper">
                <div class="w-full max-w-[1000px] my-7 flex flex-col ">
                    <div class="cs-ascension-box-text">
                        <p class="font-sans ">Please Note: Purchasing the resources below is not required to
                            attend our courses.</p>
                        <p class="tracking-wide ">However, if you follow Mauro's <span
                                class="font-bold text-cs-blue-light">Bible Timeline Course</span>, we highly recommend
                            getting the <span class="font-bold text-cs-blue-light">Bible Timeline Chart</span>. It serves as
                            an
                            invaluable visual aid throughout the online course and will remain a lifelong companion to
                            enhance
                            your Bible reading.</p>
                        <p class="tracking-wide ">And for those of you who want to make a great spiritual
                            investment
                            for your life, we recommend buying also the book <span class="font-bold text-cs-blue-light">Walking With God: a journey through the Bible.</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bible Timeline Chart -->
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark">
                <div class="w-full max-w-[1000px] my-5 flex flex-col gap-6">
                    <span class="tracking-widest uppercase sm:cs-fs-xs cs-fs-xs text-cs-grey">visual aid</span>
                    <h2 class="font-serif italic font-bold cs-fs-xl sm:cs-fs-3xl text-cs-blue-main">The Bible Timeline
                        Chart</h2>
                    <span class="font-semibold tracking-wide text-cs-grey sm:cs-fs-xl cs-fs-base">By Jeff Cavins</span>
                    <img src="/src/assets/ascension-press/bt-chart.png" alt="Bible Timeline Chart"
                        class="md:min-h-[180px] w-auto object-contain">
                    <div class="cs-ascension-box-text">
                        <p class="tracking-wide ">This chart is invaluable! It's <span
                                class="font-semibold text-cs-blue-light">the cornerstone of the Bible
                                Timeline methodology</span>, packed with concise information to help you see the Big Picture
                            of the
                            Bible from start to finish.</p>
                        <p class="tracking-wide ">During the online sessions, Mauro teaches by displaying on the
                            screen parts of the Bible Timeline chart. While this may be sufficient to follow the teachings,
                            <span class="font-semibold text-cs-blue-light">it is highly recommend that that you buy this chart</span>.
                            It will help you to make the most out of
                            the course and when reading the Bible for the rest of your life!
                        </p>
                    </div>
                    <div class="flex flex-row items-center justify-start w-full gap-2 md:gap-8">
                        <a href="#how-to-order" class="cs-support-us-button bg-cs-red-medium">Buy</a>
                        <div class="cs-ascension-recommended">
                            <img src="/src/assets/ascension-recommended.svg" alt="Recommended" class="w-8 h-8 -m-[1px]">
                            highly&nbsp;recommended
                        </div>
                    </div>
                </div>
            </div>

            <!-- Walking with God -->
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper">
                <div class="w-full max-w-[1000px] my-10 flex flex-col gap-6">
                    <span class="tracking-widest uppercase sm:cs-fs-xs cs-fs-xs text-cs-blue-main">book</span>
                    <h2 class="font-serif italic font-bold cs-fs-xl sm:cs-fs-3xl text-cs-blue-main">Walking with God: A
                        Journey Through the Bible</h2>
                    <span class="font-semibold tracking-wide text-cs-grey sm:cs-fs-xl cs-fs-base">By Tim Gray & Jeff Cavins</span>
                    <div class="flex flex-row justify-evenly ">
                        <img src="/src/assets/ascension-press/wwg-front.jpg" alt="Walking with God Book Cover"
                            class="max-w-[43%] sm:max-w-[40%] md:max-w-[35%] md:w-auto h-auto flex-grow">
                        <img src="/src/assets/ascension-press/wwg-back.jpg" alt="Walking with God Book Pages"
                            class="max-w-[43%] sm:max-w-[40%] md:max-w-[35%] md:w-auto h-auto flex-grow">
                    </div>
                    <div class="cs-ascension-box-text">
                        <p class="tracking-wide ">This book is simply exceptional and has changed the lives of
                            many.
                            <span class="font-semibold text-cs-blue-light">It has 12 chapters, one for each of the 12 periods of the Bible Timeline chart.</span>
                            By simply reading this book you will cover the Biblical Narrative from start to finish.
                        </p>
                    </div>
                    <div class="flex flex-row items-center justify-start w-full gap-2 md:gap-8">
                        <a href="#how-to-order" class="cs-support-us-button bg-cs-red-medium">Buy</a>
                        <button class="cs-ascension-recommended">
                            <img src="/src/assets/ascension-recommended.svg" alt="Recommended" class="w-8 h-8 -m-[1px]">
                            highly recommended
                        </button>
                    </div>
                </div>
            </div>

            <!-- The Great Adventure Bible -->
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark">
                <div class="w-full max-w-[1000px] my-5 flex flex-col gap-6">
                    <span class="tracking-widest uppercase sm:cs-fs-xs cs-fs-xs text-cs-grey">bible</span>
                    <h2 class="font-serif italic font-bold cs-fs-xl sm:cs-fs-3xl text-cs-blue-main">The Great Adventure
                        Bible</h2>
                    <span class="font-semibold tracking-wide text-cs-grey sm:cs-fs-xl cs-fs-base">Ascension Press</span>
                    <div class="flex flex-row justify-evenly">
                        <img src="/src/assets/ascension-press/tga-bible-paperback.png" alt="Great Adventure Bible"
                            class="max-w-[43%] sm:max-w-[40%] md:max-w-[35%] md:w-auto h-auto flex-grow">
                        <img src="/src/assets/ascension-press/tga-bible-leather.png" alt="Great Adventure Bible Back"
                            class="max-w-[43%] sm:max-w-[40%] md:max-w-[35%] md:w-auto h-auto flex-grow">
                    </div>
                    <div class="cs-ascension-box-text">
                        <p>
                            This unique Bible features the Bible Timeline® methodology embedded throughout. <span
                                class="font-semibold text-cs-blue-light">Each page is color-coded according to the 12 periods of the Bible Timeline Chart,</span>
                            helping you instantly understand where you are in the story as you read.
                        </p>
                        <p>
                            It also includes summaries of all 12 biblical periods, along with concise descriptions of the 70
                            key events highlighted in the Bible Timeline Chart—many of which are explored in Mauro’s course.
                        </p>
                        <p>
                            It’s like having a clear, easy-to-follow summary of the entire Bible Timeline course right
                            within the Bible itself. As Jeff Cavins puts it: <span class="font-semibold text-cs-blue-light">"The Bible that teaches you how to read it."</span>
                        </p>
                        <p>
                            Available in leather-bound or paperback editions. Uses the Revised Standard Version – Second
                            Catholic Edition (RSV-2CE) translation.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-6 my-8 gap-y-8">
                        <img src="/src/assets/ascension-press/tga-bible-page-12-periods.png" alt="Bible Inside Page 1"
                            class="w-full h-auto">
                        <img src="/src/assets/ascension-press/tga-bible-open-pages.png" alt="Bible Inside Page 2"
                            class="w-full h-auto">
                        <img src="/src/assets/ascension-press/tga-bible-conquest.png" alt="Bible Inside Page 3"
                            class="w-full h-auto">
                        <img src="/src/assets/ascension-press/tga-bible-exodus.png" alt="Bible Inside Page 4"
                            class="w-full h-auto">
                        <img src="/src/assets/ascension-press/tga-bible-key-event-1.png" alt="Bible Inside Page 5"
                            class="w-full h-auto">
                        <img src="/src/assets/ascension-press/tga-bible-key-event-61.png" alt="Bible Inside Page 6"
                            class="w-full h-auto">
                    </div>
                    <div class="flex flex-col gap-6">
                        <p class="font-thin tracking-wide uppercase md:tracking-wider cs-fs-xs md:cs-fs-2sm text-cs-grey">
                            The version of the Biblical
                            text is the RSV-CE 2nd ed. (Revised Standard Version - Catholic Edition - 2nd Edition).</p>
                    </div>
                    <div class="flex flex-row items-center justify-start w-full gap-2 md:gap-8">
                        <a href="#how-to-order" class="cs-support-us-button bg-cs-red-medium">Buy</a>
                    </div>
                </div>
            </div>

            <!-- Bible Timeline Study Set Collection -->
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper">
                <div class="w-full max-w-[1000px] my-5 flex flex-col gap-6">
                    <span class="tracking-widest uppercase sm:cs-fs-xs cs-fs-xs text-cs-blue-main">12 DVD SET</span>
                    <h2 class="font-serif italic font-bold cs-fs-xl sm:cs-fs-3xl text-cs-blue-main">The Bible Timeline: the
                        Story of Salvation</h2>
                    <span class="font-semibold tracking-wide text-cs-grey sm:cs-fs-xl cs-fs-base">By Jeff Cavins</span>
                    <div class="cs-ascension-box ">
                        <div class="cs-ascension-box-text">
                            <p class="">This is the world-famous full version of Jeff Cavins'
                                Bible Timeline course. Offered by countless parishes worldwide, it is also suitable for
                                smaller Bible study groups or individuals who want to take their knowledge of the Bible to
                                the next level in the comfort of their homes.</p>
                            <p class="font-bold ">Includes:</p>
                            <ul class="uppercase list-none list-inside text-cs-grey">
                                <li>12 DVD Set</li>
                                <li>24 videos of 50 minutes each</li>
                                <li>presented by Jeff Cavins</li>
                            </ul>
                            <p>Study Set</p>
                            <ul class="uppercase list-none list-inside text-cs-grey">
                                <li>includes The Bible Timeline Chart and Bookmark</li>
                            </ul>
                        </div>
                        <img src="/src/assets/ascension-press/tga-dvd.png" alt="Bible Timeline Collection"
                            class="w-full max-w-[800px] h-auto">
                    </div>
                    <div class="flex flex-row items-center justify-start w-full gap-2 md:gap-8">
                        <a href="#how-to-order" class="cs-support-us-button bg-cs-red-medium">Buy</a>
                    </div>
                </div>
            </div>

            <!-- Unlocking the Mystery of the Bible -->
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark">
                <div class="w-full max-w-[1000px] my-5 flex flex-col gap-6">
                    <span class="tracking-widest uppercase sm:cs-fs-xs cs-fs-xs text-cs-blue-main">4 DVD SET</span>
                    <h2 class="font-serif italic font-bold cs-fs-xl sm:cs-fs-3xl text-cs-blue-main">Unlocking the Mystery of
                        the Bible</h2>
                    <span class="font-bold tracking-wide text-cs-grey sm:cs-fs-xl cs-fs-base">By Jeff Cavins</span>
                    <div class="cs-ascension-box ">
                        <div class="cs-ascension-box-text">
                            <p class="tracking-wide ">This is the world-famous condensed version of Jeff Cavins'
                                Bible Timeline course. Like it’s full-length counterpart, it’s offered by parishes but is
                                also
                                useful for study groups or private study. </p>
                            <p class="font-bold ">Includes:</p>
                            <ul class="uppercase list-none list-inside text-cs-grey">
                                <li>4 DVD Set</li>
                                <li>8 videos of 30 minutes each</li>
                                <li>presented by Jeff Cavins</li>
                            </ul>
                            <p>Workbook</p>
                            <ul class="uppercase list-none list-inside text-cs-grey">
                                <li>includes The Bible Timeline Chart and Bookmark</li>
                            </ul>
                        </div>
                        <img src="/src/assets/ascension-press/umb.png" alt="Unlocking the Mystery of the Bible"
                            class="w-full max-w-[800px] h-auto">
                    </div>
                    <div class="flex flex-row items-center justify-start w-full gap-2 md:gap-8">
                        <a href="#how-to-order" class="cs-support-us-button bg-cs-red-medium">Buy</a>
                    </div>
                </div>
            </div>

            <!-- A Biblical Walk through the Mass -->
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper">
                <div class="w-full max-w-[1000px] my-10 flex flex-col gap-2 md:gap-6">
                    <span class="tracking-widest uppercase sm:cs-fs-xs cs-fs-xs text-cs-blue-main">BOOK</span>
                    <h2 class="font-serif italic font-bold cs-fs-xl sm:cs-fs-3xl text-cs-blue-main">A Biblical Walk through
                        the Mass</h2>
                    <span class="font-bold tracking-wide text-cs-grey sm:cs-fs-xl cs-fs-base">By Edward Sri</span>

                    <div class="justify-between cs-ascension-box">
                        <div class="cs-ascension-box-text md:my-8 md:max-w-[50%]">
                            <p class="tracking-wide ">In A Biblical Walk Through the Mass by Edward Sri, discover
                                how the Mass is nothing short of amazing. Through it, we encounter God in the most intimate way
                                possible as we hear him speak to us in the Liturgy of the Word and as we receive him Body and
                                Blood, Soul and Divinity in the Holy Eucharist.
                            </p>
                        </div>
                        <img src="/src/assets/ascension-press/biblical-walk-mass-front.jpg"
                            alt="A Biblical Walk through the Mass" class="w-auto h-auto max-w-80 md:-mt-14">
                    </div>
                    <div class="flex flex-row items-center justify-start w-full gap-2 md:gap-8">
                        <a href="#how-to-order" class="cs-support-us-button bg-cs-red-medium">Buy</a>
                    </div>
                </div>
            </div>

            <!-- How to order -->
            <div id="how-to-order" class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark">
                <div class="w-full max-w-[1000px] my-10 flex flex-col gap-6">
                    <span class="tracking-widest text-center uppercase sm:cs-fs-xs cs-fs-xs text-cs-grey">buy</span>
                    <h2 class="font-serif italic text-center cs-fs-xl sm:cs-fs-3xl text-cs-red-shade">How to order these
                        Resources</h2>
                    <div class="cs-ascension-box-text">
                        <p class="font-bold cs-fs-base md:cs-fs-lg">If you are in the United Kingdom</p>
                        <p>Place your order directly through the Goodnews Books website (the official UK distributor for Ascension Press) at <a href="https://www.goodnewsbooks.co.uk">www.goodnewsbooks.co.uk</a></p>
                        <p>Alternatively, you contact them by email or phone:<br>
                            Email: <a href="mailto:orders@goodnewsbooks.co.uk">orders@goodnewsbooks.co.uk</a><br>
                            Phone: <a href="tel:+44158257111">+44 1582 571 011</a><br>
                        </p>
                        <p>Their shipping fees to the UK are £4.50.</p>

                        <p class="font-bold cs-fs-base md:cs-fs-lg">If you are in Ireland</p>
                        <p>
                            Place your order directly through St. Pauls Ireland (Ireland Distributors for Ascension Press)
                        </p>
                        <p><a href="https://www.stpauls.ie">www.stpauls.ie</a><br>
                            <a href="tel:+353016285933">+353 016285933</a><br>
                            <a href="mailto:online@stpauls.ie">online@stpauls.ie</a>
                        </p>

                        <p class="font-bold cs-fs-base md:cs-fs-lg">If you are in any other European country</p>

                        <p>Your best option is still to place your order directly through the Goodnews Books website (the official UK distributor for Ascension Press) at <a href="https://www.goodnewsbooks.co.uk">www.goodnewsbooks.co.uk</a></p>
                        <p>Alternatively, you contact them by email or phone:<br>
                            Email: <a href="mailto:orders@goodnewsbooks.co.uk">orders@goodnewsbooks.co.uk</a><br>
                            Phone: <a href="tel:+441582571011">+44 1582 571 011</a>
                        </p>
                        <p>Their shipping fees to Europe (outside of the UK) are £15.</p>

                        <p class="font-bold cs-fs-base md:cs-fs-lg">If you are in the U.S.</p>
                        <p>Place your order directly through Ascension Press (based in the U.S.) via their website ascensionpress.com</p>

                        <p class="font-bold cs-fs-base md:cs-fs-lg">If you are in Australia, Canada, China, New Zealand, Philippines, Malaysia, Singapore, India, South Africa</p>
                        <p>Place your order through your country’s Ascension Press distributor, which you can find on this page:</p>
                        <p><a href="https://ascensionpress.com/pages/international-resellers">https://ascensionpress.com/pages/international-resellers</a></p>

                        <p class="font-bold cs-fs-base md:cs-fs-lg">If you are in the rest of the world</p>
                        <p>You need to contact Ascension Press directly:</p>
                        <p>Phone: <a href="tel:+18003760520">+1 800 376 0520</a><br>
                            Email: <a href="mailto:support@ascensionpress.com">support@ascensionpress.com</a>
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once 'components/footer.php'; ?>
</body>

</html>