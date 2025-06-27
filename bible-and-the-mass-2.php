<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/input.css">
    <script type="module" src="/src/main.js"></script>
    <title>Bible and The Mass - Come & See</title>
</head>

<body class="flex flex-col min-h-screen">
    <?php require_once 'components/header.php'; ?>
    <main class="cs-main">
        <div class="cs-main-div">
            <!-- Hero Section -->
            <!-- Hero Section -->
            <div class="relative flex flex-col flex-wrap items-center justify-center w-full text-white min-h-[200px] md:min-h-[500px]">
                <div class="absolute inset-0 z-0">
                    <img src="/src/assets/bible-and-the-mass/priest-elevation.jpg" alt="Header Background" class="object-cover w-full h-full opacity-15">
                </div>
                <div class="relative z-10 w-full max-w-[1100px] text-center py-8 md:py-12 px-6">
                    <div class="-mt-0 tracking-widest uppercase cs-bt-uppercase-prompt-fs text-cs-red-main">Come & See Presents</div>
                    <div class="px-3 mt-5 font-sans font-bold cs-bt-fs-video-title cs-gradient-text">
                        <h1>Biblical Journey through the Mass</h1>
                    </div>
                    <div class="mt-3 font-sans font-bold tracking-widest uppercase cs-bt-fs-large text-cs-red-main">unlock the mass</div>
                    <div class="relative flex-col items-center justify-center hidden gap-0 mt-24 mb-14 bg-transparent rounded-lg md:flex sm:flex-row flex-wrap"
                         id="timeline-desktop">
                        <!-- Immagini dei periodi -->
                        <img src="/src/assets/bible-and-the-mass/bmc-introductory-rites.svg" alt="Period 1"
                             class="object-contain w-[16%] timeline-period-img" data-index="0">
                        <img src="src/assets/bible-and-the-mass/bmc-liturgy-of-the-word.svg" alt="Period 2"
                             class="object-contain w-[25.5%] timeline-period-img" data-index="1">
                        <img src="src/assets/bible-and-the-mass/bmc-offertory.svg" alt="Period 3"
                             class="object-contain w-[14.5%] timeline-period-img" data-index="2">
                        <img src="/src/assets/bible-and-the-mass/eucharistic-prayer.svg" alt="Period 4"
                             class="object-contain w-[14.5%] timeline-period-img" data-index="3">
                        <img src="/src/assets/bible-and-the-mass/communion-rite.svg" alt="Period 5"
                             class="object-contain w-[14.5%] timeline-period-img" data-index="4">
                        <img src="/src/assets/bible-and-the-mass/concluding-rites.svg" alt="Period 6"
                             class="object-contain w-[14.5%] timeline-period-img" data-index="5">
                        <!-- Card tooltip nascosta di default -->
                        <div id="timeline-tooltip-card"
                             class="absolute left-0 z-20 hidden transition-all duration-300 rounded-lg top-full cs-timeline-tooltip-card">
                            <div class="relative flex flex-col items-center w-full border border-gray-800 rounded-lg group">
                                <div id="timeline-tooltip-header"
                                     class="flex flex-row items-center justify-between w-full cs-tooltip-header">
                                    <button id="timeline-tooltip-prev"
                                            class="flex items-center justify-center transition cs-tooltip-navigation disabled:opacity-0">
                                        <svg width="13" height="25" viewBox="0 0 13 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 24L1 12.5L12 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        prev
                                    </button>
                                    <div class="cs-tooltip-period" id="timeline-tooltip-period">1</div>
                                    <button id="timeline-tooltip-next"
                                            class="flex items-center justify-center transition cs-tooltip-navigation disabled:opacity-0">
                                        next
                                        <svg width="13" height="25" viewBox="0 0 13 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1L12 12.5L1 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
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
                </div>
            </div>

            <!-- Course Outline Section -->
            <div class="flex flex-col items-center w-full bg-cs-paper">
                <div class="w-full max-w-[1000px] flex flex-col text-center gap-16 py-20 px-6">
                    <div>
                        <div class="-mt-0 tracking-widest uppercase cs-bt-uppercase-prompt-fs text-cs-red-main">Register Today</div>
                        <div class="mt-4 font-sans cs-bt-fs-medium cs-gradient-text font-bold">Understand Holy Mass<br>
                            with our brand new free course</div>
                    </div>
                    <div class="flex flex-col items-center gap-6 md:flex-row md:gap-10">
                        <div class="flex flex-col items-center text-center p-6 bg-cs-paper-shade rounded-xl shadow-cs-all-around min-w-[30%] max-w-[400px]">
                            <img src="/src/assets/bible-timeline/free-course.svg" alt="Comprehensive" class="w-48 h-24 mb-4">
                            <div class="mt-4 cs-bt-fs-base text-cs-grey">This course is free for everyone—for <b>individuals, parishes & dioceses.</b></div>
                        </div>
                        <div class="flex flex-col items-center text-center p-6 bg-cs-paper-shade rounded-xl gap-4 shadow-cs-all-around min-w-[30%] max-w-[400px]">
                            <img src="/src/assets/bible-timeline/live-streamed.svg" alt="Simple" class="w-48 h-24 mb-4">
                            <img src="/src/assets/sample_avatar.png" id="meet-mauro"
                                 class="object-cover w-auto h-40 rounded-full ring-4 ring-cs-red-main" alt="Mauro">
                            <div class="mt-4 cs-bt-fs-base text-cs-grey">Delivered by presenter <b>Mauro Iannicelli</b> through live-streamed, interactive sessions.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Storyboard Section -->
            <div class="flex flex-col items-center w-full px-5 sm:px-10 bg-cs-paper-shade">
                <div class="relative w-full max-w-[1000px] flex flex-col items-start justify-center gap-6 pb-32">

                    <div class="mt-16 font-sans text-left cs-bt-fs-video-title text-cs-red-medium cs-gradient-text">
                        Do you find yourself simply <b>going through the motions</b> at Holy Mass?
                    </div>
                    <div class="mt-4 font-sans text-left cs-fs-lg text-cs-grey md:w-4/6">
                        There are <b>so many parts</b>, so much sitting, standing and kneeling - it can be hard to keep up!
                        You might be wrestling a baby,  dealing with aches and pains from all the ups and downs,
                        or struggling to calm your mind after a busy week.
                        In all this it can be hard to tune into the <b>wonder and mystery of mass</b>. But we can help!
                    </div>
                    <img src="/src/assets/bible-and-the-mass/vector-bible-mass--im-in.svg" class="absolute z-10 w-20 -bottom-36 left-1/2 text-center sm:w-20 md:w-28">
                </div>
            </div>

            <div class="relative flex flex-col items-center w-full p-5 sm:p-10 bg-cs-paper">
                <div class="absolute inset-0 z-0 opacity-10">
                    <img src="/src/assets/bible-and-the-mass/chalice-host.jpg" alt="Header Background" class="object-cover w-full h-full">
                </div>
                <div class="w-full z-10 max-w-[1000px] my-14 flex flex-col gap-6  text-left items-start justify-center">
                     <div class="flex flex-row items-start justify-start w-full gap-6">
                        <img src="/src/assets/bible-and-the-mass/mass-bible.jpg" alt="Bible and The Mass Logo" class="">
                        <img src="/src/assets/bible-and-the-mass/mass-chalice.jpg" alt="Bible and The Mass Logo" class="">
                    </div>

                    <div class="mt-3 font-sans cs-bt-fs-video-title cs-gradient-text">
                        Join our course to <b>uncover the Biblical Foundations of the Mass.</b>
                    </div>
                    <div class="mt-4 font-sans text-left cs-fs-lg text-cs-grey md:w-4/6">
                        In our course, we reveal how every part of the Catholic Mass is deeply rooted in Scripture, drawing from both the Old and New Testaments to illuminate the prayers, gestures, and rituals we celebrate.
                    </div>
                    <button class="mt-4 cs-support-us-button self-start bg-cs-red-medium">Sign up</button>

                </div>
            </div>

            <!-- Explore the Mass Section -->
            <div class="flex flex-col items-center w-full px-5 sm:px-10 bg-cs-paper-shade">
                <div class="relative w-full max-w-[1000px] flex flex-col items-start justify-center gap-6 pb-32">
                    <img src="/src/assets/bible-and-the-mass/bible-mass-booklet.png" alt="Mass Structure" class="mt-24">
                    <div class="mt-12 font-sans text-left cs-bt-fs-video-title text-cs-red-medium cs-gradient-text">
                        Explore the <b>structure and meaning of the Mass.</b>
                    </div>
                    <div class="mt-4 font-sans text-left cs-fs-lg text-cs-grey md:w-4/6">
                        We break down the Mass into its main sections—Introductory Rites, Liturgy of the Word, Liturgy of the Eucharist, and Concluding Rites—explaining the purpose and scriptural background of each.
                    </div>
                </div>
            </div>

            <!-- Key Elements Section -->
            <div class="flex flex-col items-center w-full px-6 py-5 sm:py-20 sm:px-6 bg-cs-paper-dark">
                <span class="tracking-widest uppercase cs-bt-uppercase-prompt-fs text-cs-red-main">what you will learn</span>
                <div class="my-6 max-w-full font-sans font-bold cs-bt-fs-large cs-gradient-text">In ‘Biblical Journey through the Mass,’
                    you will:</div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-[800px] mt-10">

                    <div class="flex flex-col items-center cs-benefit-box bg-cs-paper">
                        <img src="/src/assets/bible-and-the-mass/bible-typology.svg" class="cs-bm-benefit-icon" alt="Discover">
                        <div class="font-bold text-center text-cs-red-main cs-bm-fs-benefit ">Unveil Biblical Typology and Jewish Roots in the Mass.</div>
                        <div class="px-6 text-center cs-bt-fs-base">
                            Explore how the Mass fulfils Old Testament ‘types’, and discover its connections to ancient Jewish feasts and rituals.
                        </div>
                    </div>
                    <div class="flex flex-col items-center cs-benefit-box bg-cs-paper">
                        <img src="/src/assets/bible-and-the-mass/real-presence.svg" class="cs-bm-benefit-icon" alt="Gain">
                        <div class="font-bold text-center text-cs-red-main cs-bm-fs-benefit ">Understand the Mystery of the Eucharist: Real Presence and Transubstantiation</div>
                        <div class="px-6 text-center cs-bt-fs-base">
                            Delve into the Church’s teachings on the Eucharist, clarifying what is meant by Christ’s Real Presence and the doctrine of Transubstantiation.
                        </div>
                    </div>
                    <div class="flex flex-col items-center cs-benefit-box bg-cs-paper">
                        <img src="/src/assets/bible-and-the-mass/host-reception.svg" class="cs-bm-benefit-icon" alt="Understand">
                        <div class="font-bold text-center text-cs-red-main cs-bm-fs-benefit ">Learn about Fruitful Reception of the Eucharist: God’s Grace and Our Inner Disposition</div>
                        <div class="px-6 text-center cs-bt-fs-base">
                            Discover how actual and sanctifying grace, along with our interior disposition, shape the spiritual fruits we receive from Holy Communion.
                        </div>
                    </div>
                    <div class="flex flex-col items-center cs-benefit-box bg-cs-paper">
                        <img src="/src/assets/bible-and-the-mass/state-of-grace.svg" class="cs-bm-benefit-icon" alt="Learn">
                        <div class="font-bold text-center text-cs-red-main cs-bm-fs-benefit ">Understand what is the 'State of Grace' and how to avoid sacrilegious Holy Communions</div>
                        <div class="px-6 text-center cs-bt-fs-base">
                            Examine what it means to be in a state of grace, why it matters for receiving the Eucharist, and how to avoid unworthy or sacrilegious Communion.                        </div>
                    </div>
                    <div class="flex flex-col items-center cs-benefit-box bg-cs-paper">
                        <img src="/src/assets/bible-and-the-mass/epiclesis.svg" class="cs-bm-benefit-icon" alt="Understand">
                        <div class="font-bold text-center text-cs-red-main cs-bm-fs-benefit ">Unveil the Power of the Epiclesis and Anamnesis in the Eucharistic Prayers</div>
                        <div class="px-6 text-center cs-bt-fs-base">
                            Gain insight into these central moments of the Eucharistic Prayer, where the Holy Spirit is invoked and Christ’s saving work is made present.                        </div>
                    </div>
                    <div class="flex flex-col items-center cs-benefit-box bg-cs-paper">
                        <img src="/src/assets/bible-and-the-mass/hear-mass-readings.svg" class="cs-bm-benefit-icon" alt="Learn">
                        <div class="font-bold text-center text-cs-red-main cs-bm-fs-benefit ">Deepen Your Experience of Mass Readings</div>
                        <div class="px-6 text-center cs-bt-fs-base">
                            With a richer understanding of the Mass, you’ll gain greater insight into the Scripture readings and learn to apply their message to your daily life.
                        </div>
                    </div>
                    <div class="flex flex-col items-center cs-benefit-box bg-cs-paper">
                        <img src="/src/assets/bible-and-the-mass/kneeler.svg" class="cs-bm-benefit-icon" alt="Understand">
                        <div class="font-bold text-center text-cs-red-main cs-bm-fs-benefit ">Be equipped for active and mindful participation in the Liturgy</div>
                        <div class="px-6 text-center cs-bt-fs-base">
                            This course encourages you to move beyond routine, inviting you to participate in the liturgy with greater understanding, reverence, and engagement.
                        </div>
                    </div>
                    <div class="flex flex-col items-center cs-benefit-box bg-cs-paper">
                        <img src="/src/assets/bible-and-the-mass/course-experience.svg" class="cs-bm-benefit-icon" alt="Learn">
                        <div class="font-bold text-center text-cs-red-main cs-bm-fs-benefit ">Experience a Course that is Accessible, Insightful, and Transformative</div>
                        <div class="px-6 text-center cs-bt-fs-base">
                            Whether you’re new to the faith or a lifelong Catholic, our course is easy to follow and rich in insight, helping you deepen your love for the Eucharist and renew your experience of the Mass.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Biblical Themes Section -->
            <div class="flex flex-col items-center w-full py-12 px-6 bg-cs-red-main text-white">
                <div class="w-full max-w-[1000px]">
                    <h2 class="font-serif italic font-bold text-center cs-bt-fs-large mb-12">
                        Biblical Themes Explored
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Real Presence -->
                        <div class="flex flex-row items-center gap-6 bg-cs-red-dark p-6 rounded-xl">
                            <img src="/src/assets/bible-and-the-mass/real-presence.svg" alt="Real Presence" class="h-16 w-16">
                            <div>
                                <h3 class="font-serif font-bold cs-fs-lg mb-2">Real Presence</h3>
                                <p class="cs-fs-base">
                                    Explore how Scripture teaches Christ's true presence in the Eucharist.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Biblical Typology -->
                        <div class="flex flex-row items-center gap-6 bg-cs-red-dark p-6 rounded-xl">
                            <img src="/src/assets/bible-and-the-mass/bible-typology.svg" alt="Biblical Typology" class="h-16 w-16">
                            <div>
                                <h3 class="font-serif font-bold cs-fs-lg mb-2">Biblical Typology</h3>
                                <p class="cs-fs-base">
                                    Discover how Old Testament events prefigure the Mass and Eucharist.
                                </p>
                            </div>
                        </div>
                        
                        <!-- State of Grace -->
                        <div class="flex flex-row items-center gap-6 bg-cs-red-dark p-6 rounded-xl">
                            <img src="/src/assets/bible-and-the-mass/state-of-grace.svg" alt="State of Grace" class="h-16 w-16">
                            <div>
                                <h3 class="font-serif font-bold cs-fs-lg mb-2">State of Grace</h3>
                                <p class="cs-fs-base">
                                    Understand the biblical basis for proper preparation to receive communion.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Hear Mass Readings -->
                        <div class="flex flex-row items-center gap-6 bg-cs-red-dark p-6 rounded-xl">
                            <img src="/src/assets/bible-and-the-mass/hear-mass-readings.svg" alt="Hearing Mass Readings" class="h-16 w-16">
                            <div>
                                <h3 class="font-serif font-bold cs-fs-lg mb-2">Hearing Mass Readings</h3>
                                <p class="cs-fs-base">
                                    Learn to listen more deeply to Scripture proclaimed in the liturgy.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Course Materials Section -->
            <div class="flex flex-col items-center w-full py-12 px-6 bg-cs-paper">
                <div class="w-full max-w-[1000px]">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="w-full md:w-1/2">
                            <h2 class="font-serif italic font-bold text-cs-red-main cs-bt-fs-large mb-6">
                                Course Materials
                            </h2>
                            <p class="cs-fs-base text-cs-grey mb-4">
                                All participants will receive our exclusive course booklet containing:
                            </p>
                            <ul class="list-disc pl-6 cs-fs-base text-cs-grey mb-6">
                                <li>Session outlines and key concepts</li>
                                <li>Scripture references for each part of the Mass</li>
                                <li>Reflection questions for deeper understanding</li>
                                <li>Prayer resources to enhance Mass participation</li>
                                <li>Visual guides to Mass elements and their biblical connections</li>
                            </ul>
                            <p class="cs-fs-base text-cs-grey mb-4">
                                Digital materials are included with registration, and printed copies are available upon request.
                            </p>
                            <button class="mt-4 bg-cs-red-main text-white rounded-xl px-6 py-2 font-bold uppercase cs-fs-sm tracking-wider">
                                Preview Sample
                            </button>
                        </div>
                        <div class="w-full md:w-1/2 flex justify-center">
                            <img src="/src/assets/bible-and-the-mass/bible-mass-booklet.png" alt="Course Booklet" class="w-full max-w-[400px] rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Instructor Section -->
            <div class="flex flex-col items-center w-full py-12 px-6 bg-cs-paper-shade">
                <div class="w-full max-w-[1000px]">
                    <div class="flex flex-col md:flex-row gap-8 items-center">
                        <div class="w-full md:w-1/3 flex justify-center">
                            <img src="/src/assets/bible-and-the-mass/mauro-closeup-2.png" alt="Mauro Iannicelli" class="w-full max-w-[300px] rounded-full shadow-lg">
                        </div>
                        <div class="w-full md:w-2/3">
                            <h2 class="font-serif italic font-bold text-cs-red-main cs-bt-fs-large mb-6">
                                Meet Your Instructor
                            </h2>
                            <h3 class="font-serif font-bold text-cs-red-dark cs-fs-xl mb-4">
                                Mauro Iannicelli
                            </h3>
                            <p class="cs-fs-base text-cs-grey mb-4">
                                Mauro Iannicelli is the founder of Come & See Catholic Ministries and has been teaching Bible studies for over 20 years. A graduate of the Pontifical University of the Holy Cross in Rome, Mauro combines academic rigor with pastoral sensitivity and a gift for making complex subjects accessible to all.
                            </p>
                            <p class="cs-fs-base text-cs-grey mb-4">
                                His passion for helping Catholics discover the richness of their faith through Scripture has inspired thousands to deepen their relationship with Christ and the Church.
                            </p>
                            <button class="mt-4 bg-cs-red-main text-white rounded-xl px-6 py-2 font-bold uppercase cs-fs-sm tracking-wider">
                                More About Mauro
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Call to Action Section -->
            <div class="flex flex-col items-center w-full py-16 px-6 bg-cs-red-main text-white">
                <div class="w-full max-w-[800px] text-center">
                    <h2 class="font-serif italic font-bold cs-bt-fs-large mb-6">
                        Ready to Journey Through the Mass?
                    </h2>
                    <p class="cs-fs-lg mb-8 max-w-[600px] mx-auto">
                        Join us for this transformative course and discover how the Bible and the Mass illuminate each other.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="bg-white text-cs-red-main rounded-xl px-8 py-3 font-bold uppercase cs-fs-base tracking-wider">
                            Sign Up Now
                        </button>
                        <button class="bg-transparent border-white border rounded-xl px-8 py-3 font-bold uppercase cs-fs-base tracking-wider">
                            Join Waiting List
                        </button>
                    </div>
                    <p class="cs-fs-base mt-8 max-w-[600px] mx-auto">
                        Have questions? <a href="#" class="underline font-bold">Contact us</a> for more information about upcoming course dates, pricing, or group registration.
                    </p>
                </div>
            </div>

        </div>
    </main>
    <?php require_once 'components/footer.php'; ?>
</body>

</html>
