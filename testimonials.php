<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/src/input.css" />
    <script type="module" src="/src/main.js" defer></script>
    <title>Come & See - Testimonials</title>
</head>

<body class="flex flex-col min-h-screen">

    <?php require_once 'header.php'; ?>

    <main class="flex-grow cs-main bg-cs-paper">
        <div class="flex flex-col items-center mb-32">
            <!-- 'Title' container -->
            <div class="relative flex flex-col items-end justify-center w-full h-48 sm:h-80 text-white bg-[url('/src/assets/testimonials-header.jpeg')] bg-top bg-cover">
                <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full px-4 bg-white bg-opacity-30">
                    <div class="w-[1000px] mt-16">
                        <img src="/src/assets/what-our-past-students.png" class="sm:w-[500px] w-[300px] ml-auto" />
                    </div>
                </div>
            </div>
            <!-- 'Testimonials' hero -->
            <div class="flex flex-col items-center w-full py-10 font-sans bg-cs-paper-shade cs-fs-base text-cs-red-main">
                <div class="max-w-[800px] w-full px-4"><span
                        class="pb-2 pl-1 tracking-widest uppercase cs-fs-3xs">Testimonials</span>
                    <p class="max-w-[550px] justify-self-start">We are so encouraged by the <b>1,252 testimonials</b> from
                        participants who have attended
                        Mauro’s
                        courses, from 2018 to now. Take a look below!</p>
                </div>
            </div>
            <div class="max-w-[800px] w-full px-4">
                <!-- Selettori -->
                <div class="flex flex-col items-center justify-start w-full gap-2 py-10 sm:flex-row">
                    <div class="relative max-sm:w-full">
                        <select id="country" required class="cs-testimonials-select">
                            <option value="">All Testimonials (1,252)</option>
                        </select>
                        <div class="absolute top-0 right-0 flex flex-row items-center justify-center pointer-events-none cs-testimonials-course-arrow">
                            <svg class="w-4 h-4" width="23" height="10" viewBox="0 0 23 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0365 8.90009C11.7091 9.10825 11.2909 9.10825 10.9635 8.90009L0.976737 2.5506C0.1323 2.01372 0.512612 0.706726 1.51327 0.706726L21.4867 0.706728C22.4874 0.706728 22.8677 2.01372 22.0233 2.55061L12.0365 8.90009Z"
                                    fill="#FEFBF7" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-full max-sm:flex-row">
                        <button class="cs-testimonials-show">Show</button>
                        <div class="mt-2 ml-auto">
                            <button class="cs-testimonial-viewport-toggle" onclick="toggleViewport(1)">
                                <svg viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 ">
                                    <path d="M1 10C1 5.02944 5.02944 1 10 1H45C49.9706 1 54 5.02944 54 10V45C54 49.9706 49.9706 54 45 54H10C5.02944 54 1 49.9706 1 45V10Z" fill="#86171E" stroke-width="2" />
                                    <path d="M30.9254 16.386H12.9924C11.8906 16.386 11 15.629 11 14.6928C11 13.7567 11.8906 13 12.9924 13H30.9254C32.0273 13 32.9182 13.7567 32.9182 14.6928C32.9182 15.629 32.0273 16.386 30.9254 16.386Z" fill="#FEFBF7" />
                                    <path d="M43.7883 16.386H30.9582C30.1698 16.386 29.5324 15.629 29.5324 14.6928C29.5324 13.7567 30.1698 13 30.9582 13H43.7883C44.5767 13 45.2138 13.7567 45.2138 14.6928C45.2138 15.629 44.5767 16.386 43.7883 16.386Z" fill="#FEFBF7" />
                                    <path d="M30.9254 24.6091H12.9924C11.8906 24.6091 11 23.8521 11 22.916C11 21.9798 11.8906 21.2231 12.9924 21.2231H30.9254C32.0273 21.2231 32.9182 21.9798 32.9182 22.916C32.9182 23.8521 32.0273 24.6091 30.9254 24.6091Z" fill="#FEFBF7" />
                                    <path d="M43.7883 24.6091H30.9582C30.1698 24.6091 29.5324 23.8521 29.5324 22.916C29.5324 21.9798 30.1698 21.2231 30.9582 21.2231H43.7883C44.5767 21.2231 45.2138 21.9798 45.2138 22.916C45.2138 23.8521 44.5767 24.6091 43.7883 24.6091Z" fill="#FEFBF7" />
                                    <path d="M30.9254 32.3485H12.9924C11.8906 32.3485 11 31.5915 11 30.6554C11 29.7192 11.8906 28.9625 12.9924 28.9625H30.9254C32.0273 28.9625 32.9182 29.7192 32.9182 30.6554C32.9182 31.5915 32.0273 32.3485 30.9254 32.3485Z" fill="#FEFBF7" />
                                    <path d="M43.7883 32.3485H30.9582C30.1698 32.3485 29.5324 31.5915 29.5324 30.6554C29.5324 29.7192 30.1698 28.9625 30.9582 28.9625H43.7883C44.5767 28.9625 45.2138 29.7192 45.2138 30.6554C45.2138 31.5915 44.5767 32.3485 43.7883 32.3485Z" fill="#FEFBF7" />
                                    <path d="M30.9254 32.3485H12.9924C11.8906 32.3485 11 31.5915 11 30.6554C11 29.7192 11.8906 28.9625 12.9924 28.9625H30.9254C32.0273 28.9625 32.9182 29.7192 32.9182 30.6554C32.9182 31.5915 32.0273 32.3485 30.9254 32.3485Z" fill="#FEFBF7" />
                                    <path d="M43.7883 32.3485H30.9582C30.1698 32.3485 29.5324 31.5915 29.5324 30.6554C29.5324 29.7192 30.1698 28.9625 30.9582 28.9625H43.7883C44.5767 28.9625 45.2138 29.7192 45.2138 30.6554C45.2138 31.5915 44.5767 32.3485 43.7883 32.3485Z" fill="#FEFBF7" />
                                    <path d="M30.9254 40.5715H12.9924C11.8906 40.5715 11 39.8145 11 38.8784C11 37.9422 11.8906 37.1855 12.9924 37.1855H30.9254C32.0273 37.1855 32.9182 37.9422 32.9182 38.8784C32.9182 39.8145 32.0273 40.5715 30.9254 40.5715Z" fill="#FEFBF7" />
                                    <path d="M43.7883 40.5715H30.9582C30.1698 40.5715 29.5324 39.8145 29.5324 38.8784C29.5324 37.9422 30.1698 37.1855 30.9582 37.1855H43.7883C44.5767 37.1855 45.2138 37.9422 45.2138 38.8784C45.2138 39.8145 44.5767 40.5715 43.7883 40.5715Z" fill="#FEFBF7" />
                                </svg>
                                <svg viewBox="0 0 55 55" fill="#black" xmlns="http://www.w3.org/2000/svg" class="hidden border rounded-lg h-9 w-9 fill-cs-red-main border-cs-red-main">
                                    <path d="M1 10C1 5.02944 5.02944 1 10 1H45C49.9706 1 54 5.02944 54 10V45C54 49.9706 49.9706 54 45 54H10C5.02944 54 1 49.9706 1 45V10Z" fill="#FEFBF7" stroke-width="2" />
                                    <path d="M30.9254 16.386H12.9924C11.8906 16.386 11 15.629 11 14.6928C11 13.7567 11.8906 13 12.9924 13H30.9254C32.0273 13 32.9182 13.7567 32.9182 14.6928C32.9182 15.629 32.0273 16.386 30.9254 16.386Z" fill="#currentColor" />
                                    <path d="M43.7883 16.386H30.9582C30.1698 16.386 29.5324 15.629 29.5324 14.6928C29.5324 13.7567 30.1698 13 30.9582 13H43.7883C44.5767 13 45.2138 13.7567 45.2138 14.6928C45.2138 15.629 44.5767 16.386 43.7883 16.386Z" fill="#currentColor" />
                                    <path d="M30.9254 24.6091H12.9924C11.8906 24.6091 11 23.8521 11 22.916C11 21.9798 11.8906 21.2231 12.9924 21.2231H30.9254C32.0273 21.2231 32.9182 21.9798 32.9182 22.916C32.9182 23.8521 32.0273 24.6091 30.9254 24.6091Z" fill="#currentColor" />
                                    <path d="M43.7883 24.6091H30.9582C30.1698 24.6091 29.5324 23.8521 29.5324 22.916C29.5324 21.9798 30.1698 21.2231 30.9582 21.2231H43.7883C44.5767 21.2231 45.2138 21.9798 45.2138 22.916C45.2138 23.8521 44.5767 24.6091 43.7883 24.6091Z" fill="#currentColor" />
                                    <path d="M30.9254 32.3485H12.9924C11.8906 32.3485 11 31.5915 11 30.6554C11 29.7192 11.8906 28.9625 12.9924 28.9625H30.9254C32.0273 28.9625 32.9182 29.7192 32.9182 30.6554C32.9182 31.5915 32.0273 32.3485 30.9254 32.3485Z" fill="#currentColor" />
                                    <path d="M43.7883 32.3485H30.9582C30.1698 32.3485 29.5324 31.5915 29.5324 30.6554C29.5324 29.7192 30.1698 28.9625 30.9582 28.9625H43.7883C44.5767 28.9625 45.2138 29.7192 45.2138 30.6554C45.2138 31.5915 44.5767 32.3485 43.7883 32.3485Z" fill="#currentColor" />
                                    <path d="M30.9254 32.3485H12.9924C11.8906 32.3485 11 31.5915 11 30.6554C11 29.7192 11.8906 28.9625 12.9924 28.9625H30.9254C32.0273 28.9625 32.9182 29.7192 32.9182 30.6554C32.9182 31.5915 32.0273 32.3485 30.9254 32.3485Z" fill="#currentColor" />
                                    <path d="M43.7883 32.3485H30.9582C30.1698 32.3485 29.5324 31.5915 29.5324 30.6554C29.5324 29.7192 30.1698 28.9625 30.9582 28.9625H43.7883C44.5767 28.9625 45.2138 29.7192 45.2138 30.6554C45.2138 31.5915 44.5767 32.3485 43.7883 32.3485Z" fill="#currentColor" />
                                    <path d="M30.9254 40.5715H12.9924C11.8906 40.5715 11 39.8145 11 38.8784C11 37.9422 11.8906 37.1855 12.9924 37.1855H30.9254C32.0273 37.1855 32.9182 37.9422 32.9182 38.8784C32.9182 39.8145 32.0273 40.5715 30.9254 40.5715Z" fill="#currentColor" />
                                    <path d="M43.7883 40.5715H30.9582C30.1698 40.5715 29.5324 39.8145 29.5324 38.8784C29.5324 37.9422 30.1698 37.1855 30.9582 37.1855H43.7883C44.5767 37.1855 45.2138 37.9422 45.2138 38.8784C45.2138 39.8145 44.5767 40.5715 43.7883 40.5715Z" fill="#currentColor" />
                                </svg>
                            </button>
                            <button class="cs-testimonial-viewport-toggle" onclick="toggleViewport(2)"><svg class="border rounded-lg w-9 h-9 fill-cs-red-main border-cs-red-main stroke-cs-paper " viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 10C1 5.02944 5.02944 1 10 1H45C49.9706 1 54 5.02944 54 10V45C54 49.9706 49.9706 54 45 54H10C5.02944 54 1 49.9706 1 45V10Z" fill="none" stroke="#currentColor" stroke-width="2" />
                                    <path d="M25.2557 16.6047H12.4255C11.6372 16.6047 11 15.7988 11 14.8022C11 13.8056 11.6372 13 12.4255 13H25.2557C26.044 13 26.6814 13.8056 26.6814 14.8022C26.6814 15.7988 26.044 16.6047 25.2557 16.6047Z" fill="#currentColor" />
                                    <path d="M25.2557 25.6162H12.4255C11.6372 25.6162 11 24.8107 11 23.814C11 22.8174 11.6372 22.0118 12.4255 22.0118H25.2557C26.044 22.0118 26.6814 22.8174 26.6814 23.814C26.6814 24.8107 26.044 25.6162 25.2557 25.6162Z" fill="#currentColor" />
                                    <path d="M25.2557 34.6285H12.4255C11.6372 34.6285 11 33.823 11 32.8263C11 31.8297 11.6372 31.0238 12.4255 31.0238H25.2557C26.044 31.0238 26.6814 31.8297 26.6814 32.8263C26.6814 33.823 26.044 34.6285 25.2557 34.6285Z" fill="#currentColor" />
                                    <path d="M25.2557 43.6404H12.4255C11.6372 43.6404 11 42.8345 11 41.8378C11 40.8412 11.6372 40.0356 12.4255 40.0356H25.2557C26.044 40.0356 26.6814 40.8412 26.6814 41.8378C26.6814 42.8345 26.044 43.6404 25.2557 43.6404Z" fill="#currentColor" />
                                    <path d="M43.7882 16.6047H30.958C30.1697 16.6047 29.5322 15.7988 29.5322 14.8022C29.5322 13.8056 30.1697 13 30.958 13H43.7882C44.5765 13 45.2137 13.8056 45.2137 14.8022C45.2137 15.7988 44.5765 16.6047 43.7882 16.6047Z" fill="#currentColor" />
                                    <path d="M43.7882 25.6162H30.958C30.1697 25.6162 29.5322 24.8107 29.5322 23.814C29.5322 22.8174 30.1697 22.0118 30.958 22.0118H43.7882C44.5765 22.0118 45.2137 22.8174 45.2137 23.814C45.2137 24.8107 44.5765 25.6162 43.7882 25.6162Z" fill="#currentColor" />
                                    <path d="M43.7882 34.6285H30.958C30.1697 34.6285 29.5322 33.823 29.5322 32.8263C29.5322 31.8297 30.1697 31.0238 30.958 31.0238H43.7882C44.5765 31.0238 45.2137 31.8297 45.2137 32.8263C45.2137 33.823 44.5765 34.6285 43.7882 34.6285Z" fill="#currentColor" />
                                    <path d="M43.7882 43.6404H30.958C30.1697 43.6404 29.5322 42.8345 29.5322 41.8378C29.5322 40.8412 30.1697 40.0356 30.958 40.0356H43.7882C44.5765 40.0356 45.2137 40.8412 45.2137 41.8378C45.2137 42.8345 44.5765 43.6404 43.7882 43.6404Z" fill="#currentColor" />
                                </svg>
                                <svg class="hidden w-9 h-9 fill-cs-paper" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 10C1 5.02944 5.02944 1 10 1H45C49.9706 1 54 5.02944 54 10V45C54 49.9706 49.9706 54 45 54H10C5.02944 54 1 49.9706 1 45V10Z" fill="#86171E" stroke="#86171E" />
                                    <path d="M25.2557 16.6047H12.4255C11.6372 16.6047 11 15.7988 11 14.8022C11 13.8056 11.6372 13 12.4255 13H25.2557C26.044 13 26.6814 13.8056 26.6814 14.8022C26.6814 15.7988 26.044 16.6047 25.2557 16.6047Z" fill="#currentColor" />
                                    <path d="M25.2557 25.6162H12.4255C11.6372 25.6162 11 24.8107 11 23.814C11 22.8174 11.6372 22.0118 12.4255 22.0118H25.2557C26.044 22.0118 26.6814 22.8174 26.6814 23.814C26.6814 24.8107 26.044 25.6162 25.2557 25.6162Z" fill="#currentColor" />
                                    <path d="M25.2557 34.6285H12.4255C11.6372 34.6285 11 33.823 11 32.8263C11 31.8297 11.6372 31.0238 12.4255 31.0238H25.2557C26.044 31.0238 26.6814 31.8297 26.6814 32.8263C26.6814 33.823 26.044 34.6285 25.2557 34.6285Z" fill="#currentColor" />
                                    <path d="M25.2557 43.6404H12.4255C11.6372 43.6404 11 42.8345 11 41.8378C11 40.8412 11.6372 40.0356 12.4255 40.0356H25.2557C26.044 40.0356 26.6814 40.8412 26.6814 41.8378C26.6814 42.8345 26.044 43.6404 25.2557 43.6404Z" fill="#currentColor" />
                                    <path d="M43.7882 16.6047H30.958C30.1697 16.6047 29.5322 15.7988 29.5322 14.8022C29.5322 13.8056 30.1697 13 30.958 13H43.7882C44.5765 13 45.2137 13.8056 45.2137 14.8022C45.2137 15.7988 44.5765 16.6047 43.7882 16.6047Z" fill="#currentColor" />
                                    <path d="M43.7882 25.6162H30.958C30.1697 25.6162 29.5322 24.8107 29.5322 23.814C29.5322 22.8174 30.1697 22.0118 30.958 22.0118H43.7882C44.5765 22.0118 45.2137 22.8174 45.2137 23.814C45.2137 24.8107 44.5765 25.6162 43.7882 25.6162Z" fill="#currentColor" />
                                    <path d="M43.7882 34.6285H30.958C30.1697 34.6285 29.5322 33.823 29.5322 32.8263C29.5322 31.8297 30.1697 31.0238 30.958 31.0238H43.7882C44.5765 31.0238 45.2137 31.8297 45.2137 32.8263C45.2137 33.823 44.5765 34.6285 43.7882 34.6285Z" fill="#currentColor" />
                                    <path d="M43.7882 43.6404H30.958C30.1697 43.6404 29.5322 42.8345 29.5322 41.8378C29.5322 40.8412 30.1697 40.0356 30.958 40.0356H43.7882C44.5765 40.0356 45.2137 40.8412 45.2137 41.8378C45.2137 42.8345 44.5765 43.6404 43.7882 43.6404Z" fill="#currentColor" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="grid grid-flow-row grid-cols-1 row-auto gap-5 cs-testimonials-viewport">
                    <!-- 'Testimonials' Box -->
                    <div class="flex flex-col items-center w-full mb-5 cs-testimonials-box border-cs-red-medium">
                        <!-- Box Autore -->
                        <div class="relative flex flex-col items-baseline justify-center cs-testimonials-box-author bg-cs-red-medium">
                            <div class="cs-testimonials-counter absolute -top-[16px] left-[25px] block border-cs-red-medium text-cs-red-medium"># 1,252</div>
                            <div class="text-white pl-[25px]"><span class="font-serif italic font-bold">Anne B.</span>
                                <p class="tracking-widest uppercase cs-fs-3xs">Advent Sunday Gospels - Nov 2021</p>
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
                    <div class="flex flex-col items-center w-full mb-5 cs-testimonials-box border-cs-red-main">
                        <!-- Box Autore -->
                        <div class="relative flex flex-col items-baseline justify-center cs-testimonials-box-author bg-cs-red-main">
                            <div class="cs-testimonials-counter absolute -top-[16px] left-[25px] block  border-cs-red-main text-cs-red-main"># 1,252</div>
                            <div class="text-white pl-[25px]"><span class="font-serif italic font-bold">Anita P.</span>
                                <p class="tracking-widest uppercase cs-fs-3xs">Advent Sunday Gospels - Nov 2021</p>
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
                    <div class="flex flex-col items-center w-full mb-5 cs-testimonials-box border-cs-red-dark">
                        <!-- Box Autore -->
                        <div class="relative flex flex-col items-baseline justify-center cs-testimonials-box-author bg-cs-red-dark">
                            <div class="cs-testimonials-counter absolute -top-[16px] left-[25px] block border-cs-red-dark text-cs-red-dark"># 1,252</div>
                            <div class="text-white pl-[25px]"><span class="font-serif italic font-bold">Helen B.</span>
                                <p class="tracking-widest uppercase cs-fs-3xs">Advent Sunday Gospels - Nov 2021</p>
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
                    <div class="flex flex-col items-center w-full mb-5 cs-testimonials-box border-cs-red-bright">
                        <!-- Box Autore -->
                        <div class="relative flex flex-col items-baseline justify-center cs-testimonials-box-author bg-cs-red-bright">
                            <div class="cs-testimonials-counter absolute -top-[16px] left-[25px] block h-28 border-cs-red-bright text-cs-red-bright"># 1,252</div>
                            <div class="text-white pl-[25px]"><span class="font-serif italic font-bold">Marie D.</span>
                                <p class="tracking-widest uppercase cs-fs-3xs">Advent Sunday Gospels - Nov 2021</p>
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

    <?php require_once 'footer.php'; ?>
</body>

</html>