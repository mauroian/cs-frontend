<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/input.css">
    <script type="module" src="/src/main.js"></script>
    <title>Testimonials</title>
</head>

<body class="flex flex-col min-h-screen">

    <?php require_once 'components/header.php'; ?>

    <main class="cs-main">
        <div class="cs-main-div">

            <!-- 'Title' container -->
            <div class="relative flex flex-col items-end justify-center w-full h-48 text-white sm:h-80 cs-bg-testimonials">
                <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full px-4 bg-white bg-opacity-30">
                    <div class="w-[1000px] mt-16">
                        <img src="/src/assets/what-our-past-students.png" class="sm:w-[500px] w-[300px] ml-auto" alt="Header">
                    </div>
                </div>
            </div>

            <!-- 'Testimonials' hero -->
            <div class="flex flex-col items-center w-full py-10 font-sans bg-cs-paper-shade text-cs-red-main">
                <div class="max-w-[800px] w-full px-4">
                    <span class="pb-0 pl-0 tracking-widest uppercase cs-fs-xs">Testimonials</span>
                    <p class="max-w-[800px] mt-5 justify-self-start">We are so encouraged by the <b>1,252 testimonials</b> from participants who have attended Mauro’s courses, from 2018 to now. Take a look below!</p>
                </div>
            </div>

            <!-- Container of Search Engine and Testimonial Boxes Wrapper -->
            <div class="max-w-[800px] w-full px-4">

                <!-- Search engine -->
                <div class="flex flex-col items-center justify-start w-full gap-4 py-10 sm:flex-row">
                    <div class="relative max-sm:w-full">
                        <select id="country" required class="cs-testimonials-select">
                            <option value="">All Testimonials (1,252)</option>
                        </select>
                        <div class="absolute top-0 right-0 flex flex-row items-center justify-center pointer-events-none cs-testimonials-course-arrow">
                            <img src="/src/assets/select-arrow.svg" class="w-4 h-4" alt="Arrow">
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-full max-sm:flex-row">
                        <button class="cs-testimonials-show">Show</button>
                    </div>
                </div>
                <!-- End Search engine -->

                <!-- Boxes Testimonial Wrapper -->
                <div class="grid grid-flow-row grid-cols-1 row-auto gap-5">

                    <!-- Box Testimonial -->
                    <div class="flex flex-col items-center w-full cs-testimonials-box border-cs-red-medium">
                        <!-- Box Author -->
                        <div class="relative flex flex-col justify-center cs-testimonials-box-author bg-cs-red-medium pl-[20px]">
                            <div class="flex flex-row items-center justify-start gap-2 -mt-1">
                                <div class="cs-testimonials-counter text-cs-red-medium"># 1,252</div>
                                <span class="font-bold text-white">Anne B.</span>
                            </div>
                            <p class="mt-1 tracking-widest text-white uppercase cs-fs-2xs">Advent Sunday Gospels - Nov 2021</p>
                        </div>
                        <!-- Box Post -->
                        <div class="flex flex-col gap-5 px-8 py-8">
                            <p>The depth Mauro goes to to open the Sunday Gospel is astounding. Mauro's teaching is 100% Catholic, and will bring something new to everyone, whatever their level of understanding of the Faith and their knowledge of the Scripture.</p>

                            <p>We met as a little group in the church hall, watched together and stayed all behind after the session to discuss the questions. This was the best way to exchange, share and grow together in the Holy Spirit. Only two of us could be at the hall for the last session, but we met the others on Zoom, and could still have our discussion group going.</p>

                            <p>Our bonds of friendship are strengthened, and I feel Mauro and Janet's mission to serve the Church is spot on.</p>

                            <p>Presenting the course online must have been a challenge, and I know you will both get better and better.</p>

                            <p>Thank you so much to you, Mauro and Janet, for stimulating my brain and my heart, and bringing me closer to God. All my prayers go to you.</p>
                        </div>
                    </div>

                    <!-- Box Testimonial -->
                    <div class="flex flex-col items-center w-full cs-testimonials-box border-cs-red-main">
                        <!-- Box Author -->
                        <div class="relative flex flex-col justify-center cs-testimonials-box-author bg-cs-red-main pl-[20px]">
                            <div class="flex flex-row items-center justify-start gap-2 -mt-1">
                                <div class="cs-testimonials-counter border-cs-red-main text-cs-red-main"># 1,251</div>
                                <span class="font-bold text-white">Anita P.</span>
                            </div>
                            <p class="mt-1 tracking-widest text-white uppercase cs-fs-2xs">Advent Sunday Gospels - Nov 2021</p>
                        </div>
                        <!-- Box Post -->
                        <div class="flex flex-col gap-5 px-8 py-8">
                            <p>Just SO surprisingly interesting and informative! Mauro's infectious enthusiasm and his analysis interspersed with interesting historical facts and (often surprising) connections within the Bible, lures and retains one's attention.</p>

                            <p>These are such good courses and and what at first sight seems like a rather dry proposition (reflecting on a bible reading for an hour) is fascinating.</p>

                            <p>Mauro always manages to enthuse his listeners/course participants! Even friends who had left the faith, willingly tuned in each week - after attending the first session!</p>
                        </div>
                    </div>

                    <!-- Box Testimonial -->
                    <div class="flex flex-col items-center w-full cs-testimonials-box border-cs-red-dark">
                        <!-- Box Author -->
                        <div class="relative flex flex-col justify-center cs-testimonials-box-author bg-cs-red-dark pl-[20px]">
                            <div class="flex flex-row items-center justify-start gap-2 -mt-1">
                                <div class="cs-testimonials-counter border-cs-red-dark text-cs-red-dark"># 1,250</div>
                                <span class="font-bold text-white">Helen B.</span>
                            </div>
                            <p class="tracking-widest text-white uppercase cs-fs-2xs">Advent Sunday Gospels - Nov 2021</p>
                        </div>
                        <!-- Box Post -->
                        <div class="flex flex-col gap-5 px-8 py-8">
                            <p>I feel completely blessed by the Advent Bible Series (as I have by all the courses I have taken with comeandsee.org to be honest), it has brought the scripture to life for me and helped me to see things in a totally new way.</p>

                            <p>I love that the sessions are live and that I am taking part with others from all over the world at the same time - it gives me such a feeling of fellowship.</p>

                            <p>Mauro's teaching is inspired and has helped me draw closer to God and to grow in faith since my recent return to the Catholic Church after an absence of many years and I would recommend it to anyone at any stage on their journey of faith.</p>

                            <p>It was lovely to 'meet' Janet too - thank you for all you do behind the scenes and for your wonderful prayer. I am sure that the Holy Spirit is greatly at work through Mauro, Janet and comeandsee.org - what a blessing!</p>
                        </div>
                    </div>

                    <!-- Box Testimonial -->
                    <div class="flex flex-col items-center w-full cs-testimonials-box border-cs-red-bright">
                        <!-- Box Author -->
                        <div class="relative flex flex-col justify-center cs-testimonials-box-author bg-cs-red-bright pl-[20px]">
                            <div class="flex flex-row items-center justify-start gap-2 -mt-1">
                                <div class="cs-testimonials-counter border-cs-red-bright text-cs-red-bright"># 1,249</div>
                                <span class="font-bold text-white">Marie D.</span>
                            </div>
                            <p class="tracking-widest text-white uppercase cs-fs-2xs">Advent Sunday Gospels - Nov 2021</p>
                        </div>
                        <!-- Box Post -->
                        <div class="flex flex-col gap-5 px-8 py-8">
                            <p>This course has been such a blessing from God in my life! Each and every session has been jam packed with in depth teachings that have taught me more than I could ever imagine!</p>

                            <p>The study of the Bible passages is so so in depth and interesting and it is so evident how much love, care, prayer and time Mauro puts into each session! It has been the highlight of my week throughout advent!</p>

                            <p>It has made it even more exiting to go to Sunday mass having been able to know detailed information about the Gospels!</p>

                            <p>Each week I have been blessed with more and more teachings and it has really helped me grow in my spiritual life and in my knowledge and understanding of the Gospel!</p>

                            <p>It has been such a joy to participate Thank you so much God and Mauro and Janet for making this happen!</p>
                        </div>
                    </div>

                    <!-- Become a student -->
                    <div class="p-12 text-center text-white cs-become-student"><span
                            class="tracking-widest uppercase cs-fs-3xs">Become a student</span>
                        <p class="cs-become-student-font">Want the same</p>
                        <p class="font-bold cs-become-student-font">life changing experience?</p>
                        <p class="my-5 cs-fs-base">Register <span class="uppercase">for free</span> for our next course intake:
                        </p>
                        <button class="cs-become-student-button">Sign up</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php require_once 'components/footer.php'; ?>
</body>

</html>