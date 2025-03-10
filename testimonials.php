<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/src/input.css"/>
    <script type="module" src="/src/main.js" defer></script>
    <title>Come & See - Testimonials</title>
</head>

<body class="flex flex-col min-h-screen">

<?php require_once 'header.php'; ?>

<main class="flex-grow cs-main bg-cs-paper">
    <div class="flex flex-col items-center mb-32">
        <!-- 'Title' container -->
        <div class="relative flex flex-col items-end justify-center w-full h-96 text-white bg-[url('/src/assets/testimonial-header.jpeg')] bg-center bg-cover bg-opacity-10">
            <div class="absolute top-0 left-0 w-full h-full bg-white bg-opacity-30"></div>
            <h2 class="z-10 font-serif italic cs-fs-4xl mr-12 bg-cs-red-main px-6 h-28">What our past students</h2>
            <h2 class="z-10 font-serif font-bold italic cs-fs-4xl mr-6 bg-cs-red-bright -mt-4 px-6 h-28">have to
                say</h2>
        </div>
        <!-- 'Testimonials' hero -->
        <div class="flex flex-col w-full py-10 bg-cs-paper-shade font-sans cs-fs-base text-cs-red-main items-center">
            <div class="max-w-[800px] w-full"><span
                        class="pb-2 pl-1 cs-fs-3xs uppercase tracking-widest">Testimonials</span>
                <p class="max-w-[550px] justify-self-start">We are so encouraged by the <b>1,252 testimonials</b> from
                    participants who have attended
                    Mauro’s
                    courses, from 2018 to now. Take a look below!</p></div>
        </div>
        <div class="max-w-[800px] w-full">
            <!-- Selettori -->
            <div class="flex flex-row w-full gap-3.5 py-10 items-center justify-start">
                <div class="relative">
                    <select id="country" required class="cs-testimonials-select">
                        <option value="">All Testimonials (1,252)</option>
                    </select>
                    <div class="absolute top-0 right-0 flex flex-row items-center justify-center pointer-events-none cs-testimonials-course-arrow">
                        <svg class="h-4 w-4" width="23" height="10" viewBox="0 0 23 10" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.0365 8.90009C11.7091 9.10825 11.2909 9.10825 10.9635 8.90009L0.976737 2.5506C0.1323 2.01372 0.512612 0.706726 1.51327 0.706726L21.4867 0.706728C22.4874 0.706728 22.8677 2.01372 22.0233 2.55061L12.0365 8.90009Z"
                                  fill="#FEFBF7"/>
                        </svg>
                    </div>
                </div>
                <button class="cs-testimonials-show">Show</button>
                <div class="ml-auto mt-2">
                    <button><img src="/src/assets/lista_unica.svg" class="h-9 w-9"></button>
                    <button><img src="/src/assets/lista_doppia.svg" class="h-9 w-9"></button>
                </div>
            </div>
            <!-- 'Testimonials' Box -->
            <div class="flex flex-col w-full items-center cs-testimonials-box mb-5 border-cs-red-medium">
                <!-- Box Autore -->
                <div class="relative flex flex-col items-baseline justify-center cs-testimonials-box-author bg-cs-red-medium">
                    <div class="cs-testimonials-counter absolute -top-[16px] left-[25px] block h-28 border-cs-red-medium text-cs-red-medium"># 1,252</div>
                    <div class="text-white pl-[25px]"><span class="italic font-serif font-bold">Anne B.</span>
                        <p class="cs-fs-3xs uppercase tracking-widest">Advent Sunday Gospels - Nov 2021</p>
                    </div>
                </div>
                <!-- Box Post -->
                <div class="cs-form-container p-[20px] cs-fs-2xs">
                    The depth Mauro goes to to open the Sunday Gospel is astounding. Mauro's teaching is 100% Catholic, and will bring something new to everyone, whatever their level of understanding of the Faith and their knowledge of the Scripture.

                    We met as a little group in the church hall, watched together and stayed all behind after the session to discuss the questions. This was the best way to exchange, share and grow together in the Holy Spirit. Only two of us could be at the hall for the last session, but we met the others on Zoom, and could still have our discussion group going.

                    Our bonds of friendship are strengthened, and I feel Mauro and Janet's mission to serve the Church is spot on.

                    Presenting the course online must have been a challenge, and I know you will both get better and better.

                    Thank you so much to you, Mauro and Janet, for stimulating my brain and my heart, and bringing me closer to God. All my prayers go to you.
                </div>
            </div>
            <div class="flex flex-col w-full items-center cs-testimonials-box mb-5 border-cs-red-main">
                <!-- Box Autore -->
                <div class="relative flex flex-col items-baseline justify-center cs-testimonials-box-author bg-cs-red-main">
                    <div class="cs-testimonials-counter absolute -top-[16px] left-[25px] block h-28 border-cs-red-main text-cs-red-main"># 1,252</div>
                    <div class="text-white pl-[25px]"><span class="italic font-serif font-bold">Anita P.</span>
                        <p class="cs-fs-3xs uppercase tracking-widest">Advent Sunday Gospels - Nov 2021</p>
                    </div>
                </div>
                <!-- Box Post -->
                <div class="cs-form-container p-[20px] cs-fs-2xs">
                    Just SO surprisingly interesting and informative! Mauro's infectious enthusiasm and his analysis
                    interspersed with interesting historical facts and (often surprising) connections within the
                    Bible, lures and retains one's attention.

                    These are such good courses and and what at first sight seems like a rather dry proposition
                    (reflecting on a bible reading for an hour) is fascinating.

                    Mauro always manages to enthuse his listeners/course participants! Even friends who had left the
                    faith, willingly tuned in each week - after attending the first session!
                </div>
            </div>
            <div class="flex flex-col w-full items-center cs-testimonials-box mb-5 border-cs-red-dark">
                <!-- Box Autore -->
                <div class="relative flex flex-col items-baseline justify-center cs-testimonials-box-author bg-cs-red-dark">
                    <div class="cs-testimonials-counter absolute -top-[16px] left-[25px] block h-28 border-cs-red-dark text-cs-red-dark"># 1,252</div>
                    <div class="text-white pl-[25px]"><span class="italic font-serif font-bold">Helen B.</span>
                        <p class="cs-fs-3xs uppercase tracking-widest">Advent Sunday Gospels - Nov 2021</p>
                    </div>
                </div>
                <!-- Box Post -->
                <div class="cs-form-container p-[20px] cs-fs-2xs">
                    I feel completely blessed by the Advent Bible Series (as I have by all the courses I have taken with comeandsee.org to be honest), it has brought the scripture to life for me and helped me to see things in a totally new way.

                    I love that the sessions are live and that I am taking part with others from all over the world at the same time - it gives me such a feeling of fellowship.

                    Mauro's teaching is inspired and has helped me draw closer to God and to grow in faith since my recent return to the Catholic Church after an absence of many years and I would recommend it to anyone at any stage on their journey of faith.

                    It was lovely to 'meet' Janet too - thank you for all you do behind the scenes and for your wonderful prayer. I am sure that the Holy Spirit is greatly at work through Mauro, Janet and comeandsee.org - what a blessing!
                </div>
            </div>
            <div class="flex flex-col w-full items-center cs-testimonials-box mb-5 border-cs-red-bright">
                <!-- Box Autore -->
                <div class="relative flex flex-col items-baseline justify-center cs-testimonials-box-author bg-cs-red-bright">
                    <div class="cs-testimonials-counter absolute -top-[16px] left-[25px] block h-28 border-cs-red-bright text-cs-red-bright"># 1,252</div>
                    <div class="text-white pl-[25px]"><span class="italic font-serif font-bold">Marie D.</span>
                        <p class="cs-fs-3xs uppercase tracking-widest">Advent Sunday Gospels - Nov 2021</p>
                    </div>
                </div>
                <!-- Box Post -->
                <div class="cs-form-container p-[20px] cs-fs-2xs">
                    This course has been such a blessing from God in my life! Each and every session has been jam packed with in depth teachings that have taught me more than I could ever imagine!

                    The study of the Bible passages is so so in depth and interesting and it is so evident how much love, care, prayer and time Mauro puts into each session! It has been the highlight of my week throughout advent!

                    It has made it even more exiting to go to Sunday mass having been able to know detailed information about the Gospels!

                    Each week I have been blessed with more and more teachings and it has really helped me grow in my spiritual life and in my knowledge and understanding of the Gospel!

                    It has been such a joy to participate Thank you so much God and Mauro and Janet for making this happen!
                </div>
            </div>
            <!-- Become a student -->
            <div class="cs-become-student p-12 text-white text-center"><span
                        class="cs-fs-3xs uppercase tracking-widest">Become a student</span>
                <p class="cs-become-student-font">Want the same</p>
                <p class="cs-become-student-font font-bold">life changing experience?</p>
                <p class="cs-fs-base my-5">Register <span class="uppercase">for free</span> for our next course intake:
                </p>
                <button class="cs-become-student-button">Sign up</button>
            </div>
        </div>
    </div>
</main>

<?php require_once 'footer.php'; ?>
</body>

</html>