<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/input.css">
    <script type="module" src="/src/main.js"></script>
    <title>Our Ministry - Come & See</title>
</head>

<body class="flex flex-col min-h-screen">
    <?php require_once 'components/header.php'; ?>
    <main class="cs-main">
        <div class="cs-main-div">
            <!-- Hero Section -->
            <div class="relative flex flex-col flex-wrap items-center justify-center w-full text-cs-red-main md:text-white  bg-cs-paper-shade bg-[url(/src/assets/our-ministry/screen-background-1.png)] md:bg-cover md:bg-center bg-top bg-[length:118%] bg-no-repeat">
                <div class="relative z-10 w-full max-w-[1100px] text-center py-8 md:py-12 px-6 flex flex-col-reverse md:flex-row">
                    <div class="w-full text-center md:w-1/2 md:text-left md:items-start items-center justify-center flex flex-col mt-10 md:mt-0">
                        <img src="/src/assets/our-ministry/our-mission.svg" class="max-w-72 sm:max-w-96 mt-3 mb-6">
                        <div class="my-5 font-sans tracking-widest cs-bt-one-story-fs">
                            Our mission is to serve <b>individuals and groups across parishes and dioceses</b> by
                            nurturing their spiritual growth in the Catholic faith and building community—leading them
                            into a deeper relationship with Jesus Christ.
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 flex items-center justify-center">
                        <div class="items-center justify-center w-5/6 relative hidden">
                            <img src="/src/assets/our-ministry/screen-1.png"
                                class="hidden md:block w-full h-full object-cover">
                            <video class="absolute top-8 w-[78%] left-[11%]">
                                <source src="/src/assets/videos/our-ministry.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="hidden md:flex items-center justify-center w-5/6 relative">
                            <img src="/src/assets/our-ministry/screen-2.png"
                                 class="hidden md:block w-full h-full object-cover">
                            <video class="absolute top-[2%] w-[96%] left-[2%]">
                                <source src="/src/assets/videos/our-ministry.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="flex md:hidden items-center justify-center w-full relative">
                            <img src="/src/assets/our-ministry/screen-2.png"
                                 class=" w-full h-full object-cover">
                            <video class="absolute top-[2%] w-[96%] left-[2%]">
                                <source src="/src/assets/videos/our-ministry.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial Section -->
            <div class="relative flex flex-col flex-wrap items-center justify-center w-full text-cs-red-dark min-h-[300px] md:min-h-[700px]">
                <div class="relative z-10 w-full max-w-[900px] text-center py-8 md:py-12 px-6 flex flex-col gap-7 items-center justify-center">
                    <img src="/src/assets/our-ministry/our-approach.svg" class="max-w-72 sm:max-w-96 mb-6">
                    <div class="font-sans tracking-widest text-left cs-bt-one-story-fs">
                        We joyfully provide <b>free, live-streamed, high quality Catholic formation</b> designed to be life-changing—<b>offering engaging courses and Bible studies</b> that enrich the mind and stir the heart.
                    </div>
                    <div class="font-sans tracking-widest text-left cs-bt-one-story-fs">
                        Don’t just take our word for it — discover <b>over 1,200 student testimonials</b> sharing how their faith has been renewed and deepened through our ministry!
                    </div>
                    <button class="self-center mt-4 bg-transparent rounded-md cs-support-us-button text-cs-red-main border-cs-red-main ">
                        Testimonials
                    </button>
                </div>
            </div>


            <!-- Intercessor Section -->
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark text-cs-red-dark">
                <div class="w-full max-w-[1000px] my-10 flex flex-col gap-6  text-center items-center">
                    <img src="/src/assets/our-ministry/our-intercessors.svg" class="max-w-72 sm:max-w-96 mb-6">
                    <img src="/src/assets/our-ministry/intercessor-st-john.png"
                        class="object-cover w-56 rounded-full aspect-square" alt="St John Marie Vianney">
                    <div class="max-w-2xl font-serif italic font-bold cs-bt-fs-large ">St John Marie Vianney</div>
                    <div class="font-serif font-semibold text-center uppercase cs-fs-base">patron of Parish Priest</div>
                    <div class="max-w-2xl mt-5 mb-6 font-sans text-left cs-fs-base text-cs-grey">
                        We have a deep love for <b>parishes and parish life!</b> For this reason, one of our principal intercessors — second only to Our Blessed Lady and St Joseph — is <b>Saint John Marie Vianney</b> (the Curé of Ars), the patron saint of parish priests in the Catholic Church.
                    </div>
                </div>
            </div>

            <!-- Our Logo -->
            <div class="relative bg-cs-paper-shade flex flex-col flex-wrap items-center justify-center w-full text-cs-gray min-h-[300px] md:min-h-[700px]">
                <div class="relative z-10 w-full max-w-[900px] text-center py-8 md:py-12 px-6 flex flex-col gap-7 items-center justify-center">
                     <img src="/src/assets/our-ministry/our-logo.svg" class="max-w-72 sm:max-w-96 mb-6">
                    <div class="font-sans text-center cs-bt-one-story-fs">
                        Each element in our logo reflects a core aspect of our mission and teachings.
                    </div>
                    <div class="flex flex-col items-center gap-12 mt-3 md:flex-row">
                        <div class="relative flex justify-center w-full md:pb-32">
                            <img src="/src/assets/our-logo-flame.svg" class="w-full" alt="Come & See Logo">
                            <div class="hidden md:block">
                                <div class="absolute left-[-160px] w-[350px] top-[140px] text-cs-grey text-left">The
                                    people highlight our dedication to fostering an authentic Christian community.
                                    Through our courses and events, we intentionally cultivate spaces where lasting
                                    bonds of friendship and spiritual support can flourish.
                                </div>
                                <div class="absolute left-[-100px] w-[380px] top-[420px] text-cs-grey text-left">The
                                    bible symbolizes our commitment to nurturing the faith of our students through deep
                                    engagement with the Word of God.
                                </div>
                                <div class="absolute right-[-165px] w-[350px] top-[360px] text-cs-grey text-left">
                                    These represent the central place of the Eucharist and Eucharistic Adoration in the
                                    Christian life, which we proclaim and celebrate.
                                </div>
                                <div class="absolute right-[-160px] w-[350px] top-[40px] text-cs-grey text-left">The
                                    flame signifies our desire to be continually renewed and empowered by the Holy
                                    Spirit, drawing ever closer to His presence.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-6 my-8 md:hidden">
                        <div class="flex flex-col items-start justify-start">
                            <div class="w-full font-semibold text-left uppercase text-cs-red-dark">the people</div>
                            <div class="text-left text-cs-grey">The people highlight our dedication to fostering an authentic Christian community. Through our courses and events, we intentionally cultivate spaces where lasting bonds of friendship and spiritual support can flourish.</div>
                        </div>
                        <div class="flex flex-col items-start justify-start">
                            <div class="w-full font-semibold text-left uppercase text-cs-red-dark">The Bible</div>
                            <div class="text-left text-cs-grey">The bible symbolizes our commitment to nurturing the faith of our students through deep engagement with the Word of God.</div>
                        </div>
                        <div class="flex flex-col items-start justify-start">
                            <div class="w-full font-semibold text-left uppercase text-cs-red-dark">The Host and Chalice</div>
                            <div class="text-left text-cs-grey">These represent the central place of the Eucharist and Eucharistic Adoration in the Christian life, which we proclaim and celebrate.</div>
                        </div>
                        <div class="flex flex-col items-start justify-start">
                            <div class="w-full font-semibold text-left uppercase text-cs-red-dark">The Flame</div>
                            <div class="text-left text-cs-grey">The flame signifies our desire to be continually renewed and empowered by the Holy Spirit, drawing ever closer to His presence.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Our Approach Section -->
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark text-cs-red-dark">
                <div class="w-full max-w-[1000px] my-10 flex flex-col gap-6  text-center items-center">
                    <img src="/src/assets/our-ministry/our-courses.svg" class="max-w-72 sm:max-w-96 mb-6">
                    <div class="flex flex-col" id="our-courses">
                        <!-- Course Cards Grid -->
                        <div class="grid w-full grid-cols-1 gap-8 mt-8 md:grid-cols-1">
                            <!-- Bible Timeline Course Card -->
                            <div class="w-full cs-ministry-container">
                                <div class="w-full cs-ministry-header ">
                                    The Bible Timeline Course
                                </div>
                                <div class="flex flex-col cs-ministry-content-container">
                                    <div class="cs-ministry-item">
                                        <div class="flex flex-col gap-3 font-sans font-normal text-left">
                                            <p>
                                                This is our flagship course—a dynamic exploration of the Bible using the acclaimed Bible Timeline methodology developed by Jeff Cavins.
                                            </p>
                                            <p>
                                                Over 8 sessions, you'll discover the Big Picture of Salvation History, from Genesis to Revelation. You'll understand how the Old and New Testaments connect, giving you a clear and lasting grasp of the entire biblical narrative—for life.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-center cs-ministry-button-container">
                                        <button class="cs-ministry-button bg-cs-paper-dark text-cs-red-main">Learn More</button>
                                        <button class="cs-ministry-button">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full cs-ministry-container">
                                <div class="w-full cs-ministry-header ">
                                    Advent & Lenten Sunday Gospel Bible Studies
                                </div>
                                <div class="flex flex-col cs-ministry-content-container">
                                    <div class="cs-ministry-item">
                                        <div class="flex flex-col gap-3 font-sans font-normal text-left">
                                            <p>
                                                Weekly Bible studies during the Advent and Lenten seasons to break-open the upcoming Sunday Gospels.
                                            </p>
                                            <p>
                                                Each session offers an insightful exploration of the readings, helping you enter more deeply into the Word of God before you hear it proclaimed at Mass. </p>
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-center cs-ministry-button-container">
                                        <button class="cs-ministry-button bg-cs-paper-dark text-cs-red-main">Learn More</button>
                                        <button class="cs-ministry-button">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full cs-ministry-container">
                                <div class="w-full cs-ministry-header ">
                                    Biblical Journey through Mass
                                </div>
                                <div class="flex flex-col cs-ministry-content-container">
                                    <div class="cs-ministry-item">
                                        <div class="flex flex-col gap-3 font-sans font-normal text-left">
                                            <p>
                                                Uncover the rich biblical foundations of the Mass—every prayer, gesture, and ritual. This course reveals how Scripture saturates the liturgy and invites us to encounter Christ more deeply at every Mass. </p>
                                            <p>
                                                As you explore the connections between the Bible and the liturgy, you’ll gain a renewed understanding and love for the Eucharist, transforming the way you pray and participate at Mass. </p>
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-center cs-ministry-button-container">
                                        <button class="cs-ministry-button bg-cs-paper-dark text-cs-red-main">Learn More</button>
                                        <button class="cs-ministry-button">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full cs-ministry-container">
                                <div class="w-full cs-ministry-header ">
                                    Growing in the Life of Prayer: Insights from the Spiritual Masters
                                </div>
                                <div class="flex flex-col cs-ministry-content-container">
                                    <div class="cs-ministry-item">
                                        <div class="flex flex-col gap-3 font-sans font-normal text-left">
                                            <p>
                                                Explore the rich tradition of Catholic prayer through the wisdom of the great spiritual masters. This course offers practical guidance and deep spiritual insights to help you grow in personal prayer and intimacy with God.
                                            </p>
                                            <p>
                                                Drawn from the teachings of saints and mystics, each session will inspire you to deepen your daily prayer life and respond more fully to God’s invitation to holiness.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-center cs-ministry-button-container">
                                        <button class="cs-ministry-button bg-cs-paper-dark text-cs-red-main">Learn More</button>
                                        <button class="cs-ministry-button">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full cs-ministry-container">
                                <div class="w-full cs-ministry-header ">
                                    Purgatory, Heaven, and Hell Through the Visions and Revelations of the Mystic Saints
                                </div>
                                <div class="flex flex-col cs-ministry-content-container">
                                    <div class="cs-ministry-item">
                                        <div class="flex flex-col gap-3 font-sans font-normal text-left">
                                            <p>
                                                Explore the Catholic teachings on Purgatory, Heaven, and Hell through the extraordinary visions and revelations of the mystic saints. </p>
                                            <p>
                                                This course sheds light on these mysteries of the afterlife, deepening your understanding of eternal destiny and God’s mercy. </p>
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-center cs-ministry-button-container">
                                        <button class="cs-ministry-button bg-cs-paper-dark text-cs-red-main">Learn More</button>
                                        <button class="cs-ministry-button">Sign Up</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center w-full pb-20 mx-auto bg-cs-paper-shade">
                <div class="flex flex-col items-center w-full max-w-3xl gap-8 py-10">
                    <img src="/src/assets/our-ministry/our-strengths.svg" class="max-w-72 sm:max-w-96 mb-6">
                    <div class="cs-ministry-grid">
                        <div class="cs-ministry-grid-item">
                            <img src="/src/assets/our-ministry/vision.svg" class="cs-ministry-grid-item-icon" alt="Vision & Strategy">
                            <h4 class="font-serif font-bold text-center text-cs-red-main cs-fs-lg">Vision & Strategy</h4>
                            <p class="p-2 text-center cs-fs-sm">
                                Discerning God's will and setting your priorities accordingly is perhaps the most important aspect of effectively running an evangelisation ministry.
                            </p>
                        </div>
                        <div class="cs-ministry-grid-item">
                            <img src="/src/assets/our-ministry/teach.svg" class="cs-ministry-grid-item-icon" alt="Content Creation">
                            <div class="font-serif font-bold text-center text-cs-red-main cs-fs-lg">Content Creation</div>
                            <p class="p-2 text-center cs-fs-sm">
                                We are passionate about seeing people grow in their faith in Jesus Christ, so we strive to create high-quality courses and events that nourish both the hearts and minds of our guests.
                            </p>
                        </div>
                        <div class="cs-ministry-grid-item">
                            <img src="/src/assets/our-ministry/microphone.svg" class="cs-ministry-grid-item-icon" alt="Teaching & Delivery">
                            <h4 class="font-serif font-bold text-center text-cs-red-main cs-fs-lg">Teaching & Delivery</h4>
                            <p class="p-2 text-center cs-fs-sm">
                                A high-quality course must be matched by high-quality delivery. The message should not only inform, but also transform.
                            </p>
                        </div>
                        <div class="cs-ministry-grid-item">
                            <img src="/src/assets/our-ministry/checklist.svg" class="cs-ministry-grid-item-icon" alt="Administration">
                            <h4 class="font-serif font-bold text-center text-cs-red-main cs-fs-lg">Administration</h4>
                            <p class="p-2 text-center cs-fs-sm">
                                Administration is a gift of the Holy Spirit—one that calls for keen attention to detail, skill with numbers, swift execution, innate kindness, and a graceful sense of diplomacy.
                            </p>
                        </div>
                        <div class="cs-ministry-grid-item">
                            <img src="/src/assets/our-ministry/pray.svg" class="cs-ministry-grid-item-icon" alt="Prayer">
                            <div class="font-serif font-bold text-center text-cs-red-main cs-fs-lg">Prayer</div>
                            <p class="p-2 text-center cs-fs-sm">
                                "Work as if everything depends on you, but pray as if everything depends on God." We recognize that holiness—and every effort in evangelization—ultimately relies on God's grace, with prayer as the primary channel through which that grace is received.
                            </p>
                        </div>
                        <div class="cs-ministry-grid-item">
                            <img src="/src/assets/our-ministry/search.svg" class="cs-ministry-grid-item-icon" alt="Review, Guidance & Advice">
                            <h4 class="font-serif font-bold text-center text-cs-red-main cs-fs-lg">Review, Guidance &&nbsp;Advice
                            </h4>
                            <p class="p-2 text-center cs-fs-sm">
                                Every team member requires sounding boards—individuals with wisdom and experience who can review and offer guidance on created materials, as well as provide advice on decisions regarding the direction of the ministry.
                            </p>
                        </div>
                        <div class="cs-ministry-grid-item">
                            <img src="/src/assets/our-ministry/it.svg" class="cs-ministry-grid-item-icon" alt="IT Infrastructure">
                            <h4 class="font-serif font-bold text-center text-cs-red-main cs-fs-lg">IT Infrastructure</h4>
                            <p class="p-2 text-center cs-fs-sm">
                                This encompasses IT networking solutions, databases, productivity and collaboration tools, programming languages, web development, and more.
                            </p>
                        </div>
                        <div class="cs-ministry-grid-item">
                            <img src="/src/assets/our-ministry/video-camera.svg" class="cs-ministry-grid-item-icon" alt="Live Streaming & Video Production">
                            <h4 class="font-serif font-bold text-center text-cs-red-main cs-fs-lg">Live Streaming &&nbsp;Video&nbsp;Production
                            </h4>
                            <p class="p-2 text-center cs-fs-sm">
                                As a core element of our ministry, this requires proficiency in live streaming software to broadcast teaching sessions online, as well as expertise in video editing to create engaging and impactful content.
                            </p>
                        </div>
                        <div class="cs-ministry-grid-item">
                            <img src="/src/assets/our-ministry/relations.svg" class="cs-ministry-grid-item-icon" alt="Public Relations & Networking">
                            <h4 class="font-serif font-bold text-center text-cs-red-main cs-fs-lg">Public Relations &&nbsp;Networking</h4>
                            <p class="p-2 text-center cs-fs-sm">
                                The social aspect plays a vital role in our evangelization ministry. We are passionate about organizing events that bring people together, with the dual purpose of building each other up for God's Kingdom and fostering genuine Christian fellowship and friendship.
                            </p>
                        </div>
                        <div class="justify-center cs-ministry-grid-item bg-cs-paper-shade">
                            <div class="font-serif italic font-bold text-cs-red-main cs-fs-3xl">Get involved!</div>
                            <p class="text-center cs-fs-sm"><b>Join us</b><br>
                                for life-changing courses that will transform your journey.</p>
                            <button class="self-center cs-support-us-button bg-cs-red-medium">sign up</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <?php require_once 'components/footer.php'; ?>
</body>

</html>