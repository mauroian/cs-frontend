<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/input.css">
    <script type="module" src="/src/main.js"></script>
    <title>About Us</title>
</head>

<body class="flex flex-col min-h-screen">
    <?php require_once 'components/header.php'; ?>
    <main class="cs-main">
        <div class="cs-main-div">
            <!-- 'Title' container -->
            <div class="relative flex flex-col items-start justify-center w-full h-48 text-white md:h-80 cs-bg-about-us">
                <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full px-4 bg-white bg-opacity-30">
                    <div class="w-[1000px] -mb-28 sm:-mb-36 md:-mb-48">
                        <img src="/src/assets/lets-get-personal.png" class="md:w-[500px] sm:w-[400px] w-[300px] mr-auto" alt="Header">
                    </div>
                </div>
            </div>

            <!-- Content container -->
            <div class="flex flex-col items-center w-full mt-20">
                <div class="w-full max-w-4xl px-4 md:px-0">
                    <div class="relative hidden float-left m-8 md:block">
                        <img class="max-w-60 rounded-xl"
                            src="/src/assets/mauro-janet-standing.jpg" alt="Mauro and Janet">
                        <div class="absolute top-0 bottom-0 w-full cs-about-us-fade-img "></div>
                    </div>
                    <h2 class="mb-5 font-serif italic font-semibold cs-fs-2xl sm:cs-fs-3xl text-cs-red-main max-sm:text-right">
                        Hello! I’m Mauro Iannicelli and I am married to Janet.</h2>
                    <div class="flex flex-col clear-none gap-2">
                        <p>We are a Catholic couple in love with Jesus Christ and with one another.</p>
                        <p>
                            We help <b>Catholic parishes, groups & individuals in the tasks of formation and
                                evangelisation.</b></p>
                        <p>
                            We bring a wealth of experience to our ministry—Mauro spent four years training at the seminary in London before discerning his calling to Holy Marriage. Together, we draw a rich blend of knowledge, skills, and wisdom gained from our diverse careers and previous ministry work.
                        </p>
                        <div class="flex flex-col items-center justify-end w-full gap-3 my-10 sm:flex-row">
                            <a href="#meet-mauro" class="cs-about-us-meet bg-cs-red-main hover:bg-cs-red-dark ">Meet Mauro</a>
                            <a href="#meet-janet" class="cs-about-us-meet bg-cs-red-bright hover:bg-cs-red-main ">Meet Janet</a>
                        </div>
                    </div>

                    <div class="w-full py-10 pb-0 bg-white md:pb-10">
                        <div class="flex flex-col items-center w-full max-w-4xl px-4 m-auto md:px-6">
                            <p>We have called our ministry <b>“Come & See”</b>. These are the words Jesus spoke to Andrew and one of his companions (Jn 1:39) to invite them to follow him into discipleship!</p>
                            <img class="block object-cover object-top w-full m-8 mb-0 md:hidden max-w-60 md:mb-8 h-60" src="/src/assets/mauro-janet-standing-no-bg.png"
                                alt="Mauro and Janet">
                        </div>
                    </div>

                    <div class="flex flex-col flex-wrap items-center justify-center w-full h-96 sm:h-72 text-cs-red-dark cs-bg-about-us-rabbi">
                        <div class="w-full leading-tight max-w-[700px] text-center px-2 pb-3">
                            <div class="mt-2 font-serif font-bold text-center cs-fs-3xl">
                                <img src="/src/assets/about-us-quote-red.svg" class="w-10 h-10 mx-auto " alt="Quote">
                            </div>

                            <div class="mt-10 mb-6 font-serif italic font-bold text-center cs-fs-xl">“Rabbi, where are you staying?”<br> He said to them, “Come and see.”
                            </div>
                            <div class="font-serif text-center uppercase cs-fs-base">John 1:39</div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center w-full pb-20 mx-auto bg-cs-paper-shade">
                        <div class="relative w-full max-w-3xl px-4 py-10 md:px-0">
                            <img src="/src/assets/mauro-closeup.jpg" id="meet-mauro"
                                class="h-48 w-auto object-cover rounded-full absolute left-1/2 -translate-x-1/2 md:-translate-x-0  md:left-[5%] -top-8" alt="Mauro">
                            <div class="flex flex-col mb-10 md:flex-row md:mb-0">
                                <div class="w-full h-32 md:w-1/3"></div>
                                <div class="flex flex-col items-center gap-2 md:items-start">
                                    <h3 class="text-cs-red-main cs-fs-sm uppercase max-w-[700px] text-center">Mauro's
                                        Story</h3>
                                    <h3 class="text-cs-red-main cs-fs-lg font-semibold max-w-[700px] text-center">Mauro
                                        introduces himself...</h3>
                                </div>
                            </div>
                            <div class="cs-about-us-bio ">
                                <div class="flex flex-col gap-2">
                                    <p class="cs-fs-sm">
                                        I am an Italian from Rome. Despite being from the Holy City, I spent my twenties being quite far from the Church.
                                    </p>
                                    <p class="cs-fs-sm">
                                        About 20 years ago, the Lord in his unfathomable mercy chose to disclose to me that Pearl of Infinite Value, namely the relationship with Him.
                                    </p>
                                    <p class="cs-fs-sm">
                                        I moved to London for work in 2006 and after a <b>13 years career in IT as a Software Developer</b>, I decided to leave my then employer JP Morgan Investment Bank to serve the greatest of all masters - The Lord.
                                    </p>
                                    <p class="cs-fs-sm">
                                        Feeling great admiration and attraction for the Catholic Priesthood, I decided to test my calling. I spent four years as a <b>seminarian for the Diocese of Westminster</b>, but the Lord gradually revealed to me he had different plans for me.
                                    </p>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="cs-fs-sm">
                                        I left the seminary in 2016 and the Lord brought my future spouse into my life - <b>my precious Janet, whom I married in July 2019.</b>
                                    </p>
                                    <p class="cs-fs-sm">
                                        My passion is for all things Catholic! After spending many years studying and growing in my faith, the Lord gradually made clear that he had given me <b>a charism for teaching the faith.</b>
                                    </p>
                                    <p class="cs-fs-sm">
                                        I am passionate about implementing models of parish evangelisation & formation. Throughout the last 10 years, I have run courses (especially Bible studies) and given talks in various settings. I have left the IT industry and am now in <b>full time ministry of parish evangelisation and formation.</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center w-full pb-20 mx-auto bg-cs-paper-dark">
                        <div class="relative w-full max-w-3xl px-4 py-10 md:px-0">
                            <img src="/src/assets/janet-closeup.jpg" id="meet-janet"
                                class="h-48 w-auto object-cover rounded-full absolute left-1/2 -translate-x-1/2 md:-translate-x-0 md:left-[5%] -top-12" alt="Janet">
                            <div class="flex flex-col mb-10 md:flex-row md:mb-0">
                                <div class="w-full h-32 md:w-1/3"></div>
                                <div class="flex flex-col items-center gap-2 md:items-start">
                                    <h3 class="text-cs-red-bright cs-fs-sm uppercase max-w-[700px] text-center">Janet’s
                                        story</h3>
                                    <h3 class="text-cs-red-bright cs-fs-lg font-semibold max-w-[700px] text-center">Janet
                                        introduces himself...</h3>
                                </div>
                            </div>
                            <div class="cs-about-us-bio ">
                                <div class="flex flex-col gap-2">
                                    <p class="cs-fs-sm">
                                        I am a Catholic British Indian raised in London. Like Mauro, I fell away from the Church during my twenties but had a huge Sacramental Conversion through the Mission of Youth 2000.
                                    </p>
                                    <p class="cs-fs-sm">
                                        Since University, I have worked full-time in both Investment Banking Operations & now Finance. However, after my huge conversion I always knew that <b>my heart lies in ministry working for the Lord.</b>
                                    </p>
                                    <p class="cs-fs-sm">
                                        I served the Lord whilst being a <b>Trustee of Youth 2000 from 2009 - 2015</b>. My role also included fundraising for the mission which enabled me to run Black Tie fundraisers for over 150 guests - my passion was put into practice!
                                    </p>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="cs-fs-sm">
                                        It was also a way to move in my charisms of <b>Administration, Hospitality & Pastoring</b>.
                                    </p>
                                    <p class="cs-fs-sm">
                                        During my vocational discernment, I visited many lay & religious communities but I knew my calling was for marriage! After praying for my vocation for just over 20 years, the Lord honoured my prayer & brought Mauro into my life for the <b>Sacrament of Marriage in 2019</b> - he is certainly a Gift from the Lord & an answer to prayer.
                                    </p>
                                    <p class="cs-fs-sm">
                                        After much discernment, in January 2021 I joined Come & See Ministries to work alongside Mauro in <b>full-time lay ministry</b>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once 'components/footer.php'; ?>
</body>

</html>