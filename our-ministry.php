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
            <div class="relative flex flex-col flex-wrap items-center justify-center w-full text-white  bg-cs-red-main md:bg-transparent md:bg-[url(/src/assets/our-ministry-header.png)] bg-cover bg-center">
                <div class="relative z-10 w-full max-w-[1100px] text-center py-8 md:py-12 px-6">
                    <div class="w-full md:w-1/2 text-center md:text-left">
                        <div class="px-3 mt-3 font-serif italic font-bold cs-bt-fs-extralarge">
                            <h1>Our Mission</h1>
                        </div>
                        <div class="mt-3 mb-5 font-sans tracking-widest cs-bt-one-story-fs">
                            Our mission is to serve <b>individuals and groups across parishes and dioceses</b> by
                            nurturing their spiritual growth in the Catholic faith and building community—leading them
                            into a deeper relationship with Jesus Christ.
                        </div>
                        <button class="cs-support-us-button rounded-md bg-transparent border-white ">
                            Support US
                        </button>
                    </div>
                    <div class="w-full md:w-1/2">

                    </div>
                </div>
            </div>

            <!-- Testimonial Section -->
            <div class="relative flex flex-col flex-wrap items-center justify-center w-full text-cs-red-main min-h-[300px] md:min-h-[700px]">
                <div class="relative z-10 w-full max-w-[900px] text-center py-8 md:py-12 px-6 flex flex-col gap-7 items-center justify-center">
                        <div class="font-serif italic font-bold cs-bt-fs-extralarge">
                            How We Do it?
                        </div>
                        <div class="font-sans tracking-widest cs-bt-one-story-fs text-left">
                            We joyfully provide <b>free, live-streamed, high quality Catholic formation</b> designed to be life-changing—<b>offering engaging courses and Bible studies</b> that enrich the mind and stir the heart.
                        </div>
                        <div class="font-sans tracking-widest cs-bt-one-story-fs text-left">
                        Don’t just take our word for it — discover <b>over 1,200 student testimonials</b> sharing how their faith has been renewed and deepened through our ministry!
                        </div>
                        <button class="cs-support-us-button self-center mt-4 rounded-md bg-transparent text-cs-red-main border-cs-red-main ">
                            Testimonials
                        </button>
                </div>
            </div>


            <!-- Intercessor Section -->
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark text-cs-red-dark">
                <div class="w-full max-w-[1000px] my-10 flex flex-col gap-6  text-center items-center">
                    <span class="tracking-widest uppercase cs-bt-uppercase-prompt-fs text-cs-red-main">our intercessor</span>
                    <img src="/src/assets/intercessor-st-john.png"
                         class="w-56 aspect-square object-cover rounded-full" alt="St John">
                    <div class="max-w-2xl font-serif font-bold italic cs-bt-fs-large">St John Marie Vianney</div>
                    <div class="font-serif text-center uppercase cs-fs-base font-semibold">patron of Parish Priest</div>
                    <div class="max-w-2xl mt-5 mb-6 font-sans text-left cs-fs-base text-cs-grey">
                        We have a deep love for <b>parishes and parish life!</b> For this reason, one of our principal intercessors — second only to Our Blessed Lady and St Joseph — is <b>Saint John Marie Vianney</b> (the Curé of Ars), the patron saint of parish priests in the Catholic Church.
                    </div>
                </div>
            </div>

            <!-- Our Logo -->
            <div class="relative bg-cs-paper-shade flex flex-col flex-wrap items-center justify-center w-full text-cs-gray min-h-[300px] md:min-h-[700px]">
                <div class="relative z-10 w-full max-w-[900px] text-center py-8 md:py-12 px-6 flex flex-col gap-7 items-center justify-center">
                    <div class="font-serif italic font-bold cs-bt-fs-extralarge text-cs-red-main ">
                        Our Logo
                    </div>
                    <div class="font-sans cs-bt-one-story-fs text-center">
                        Each element in our logo reflects a core aspect of our mission and teachings.
                    </div>
                    <div class="flex flex-col md:flex-row gap-12 items-center mt-3">
                        <div class="w-full flex justify-center">
                            <img src="/src/assets/our-flame-full.svg" class="w-full" alt="Come & See Logo">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Our Approach Section -->
            <div class="flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper-dark text-cs-red-dark">
                <div class="w-full max-w-[1000px] my-10 flex flex-col gap-6  text-center items-center">
                    <div class="font-serif italic font-bold cs-bt-fs-extralarge text-cs-red-medium ">
                        Our Courses
                    </div>
                    <div class="flex flex-col" id="our-courses">
                        <!-- Course Cards Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-1 gap-8 mt-8 w-full">
                            <!-- Bible Timeline Course Card -->
                            <div class="w-full cs-ministry-container">
                                <div class="w-full cs-ministry-header ">
                                    The Bible Timeline Course
                                </div>
                                <div class="cs-ministry-content-container flex flex-col">
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
                                        <div class="flex items-center flex-row cs-ministry-button-container">
                                            <button class="cs-ministry-button bg-cs-paper-dark text-cs-red-main">Learn More</button>
                                            <button class="cs-ministry-button">Sign Up</button>
                                        </div>
                                </div>
                            </div>
                            <div class="w-full cs-ministry-container">
                                <div class="w-full cs-ministry-header ">
                                    Advent & Lenten Sunday Gospel Bible Studies
                                </div>
                                <div class="cs-ministry-content-container flex flex-col">
                                    <div class="cs-ministry-item">
                                        <div class="flex flex-col gap-3 font-sans font-normal text-left">
                                            <p>
                                                Weekly Bible studies during the Advent and Lenten seasons to break-open the upcoming Sunday Gospels.
                                            </p>
                                            <p>
                                                Each session offers an insightful exploration of the readings, helping you enter more deeply into the Word of God before you hear it proclaimed at Mass.                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center flex-row cs-ministry-button-container">
                                        <button class="cs-ministry-button bg-cs-paper-dark text-cs-red-main">Learn More</button>
                                        <button class="cs-ministry-button">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full cs-ministry-container">
                                <div class="w-full cs-ministry-header ">
                                    Biblical Journey through Mass
                                </div>
                                <div class="cs-ministry-content-container flex flex-col">
                                    <div class="cs-ministry-item">
                                        <div class="flex flex-col gap-3 font-sans font-normal text-left">
                                            <p>
                                                Uncover the rich biblical foundations of the Mass—every prayer, gesture, and ritual. This course reveals how Scripture saturates the liturgy and invites us to encounter Christ more deeply at every Mass.                                            </p>
                                            <p>
                                                As you explore the connections between the Bible and the liturgy, you’ll gain a renewed understanding and love for the Eucharist, transforming the way you pray and participate at Mass.                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center flex-row cs-ministry-button-container">
                                        <button class="cs-ministry-button bg-cs-paper-dark text-cs-red-main">Learn More</button>
                                        <button class="cs-ministry-button">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full cs-ministry-container">
                                <div class="w-full cs-ministry-header ">
                                    Growing in the Life of Prayer: Insights from the Spiritual Masters
                                </div>
                                <div class="cs-ministry-content-container flex flex-col">
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
                                    <div class="flex items-center flex-row cs-ministry-button-container">
                                        <button class="cs-ministry-button bg-cs-paper-dark text-cs-red-main">Learn More</button>
                                        <button class="cs-ministry-button">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full cs-ministry-container">
                                <div class="w-full cs-ministry-header ">
                                    Purgatory, Heaven, and Hell Through the Visions and Revelations of the Mystic Saints
                                </div>
                                <div class="cs-ministry-content-container flex flex-col">
                                    <div class="cs-ministry-item">
                                        <div class="flex flex-col gap-3 font-sans font-normal text-left">
                                            <p>
                                                Explore the Catholic teachings on Purgatory, Heaven, and Hell through the extraordinary visions and revelations of the mystic saints.                                            </p>
                                            <p>
                                                This course sheds light on these mysteries of the afterlife, deepening your understanding of eternal destiny and God’s mercy.                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center flex-row cs-ministry-button-container">
                                        <button class="cs-ministry-button bg-cs-paper-dark text-cs-red-main">Learn More</button>
                                        <button class="cs-ministry-button">Sign Up</button>
                                    </div>
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
