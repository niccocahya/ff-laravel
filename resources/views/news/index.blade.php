<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="wrapper-all w-full min-h-screen bg-[#F7FFFA] relative">
        <nav class="w-full h-16 bg-[#275CAA] flex flex-row p-3 px-20 justify-between fixed z-50">
            <img src="{{ asset('images/logo-ff.png') }}" alt="logo-ff">
            <div class="nav-right flex items-center gap-4">
                <div class="lang flex text-xs gap-1 items-center text-[#F7FFFA]">
                    <a href="#" class="font-semibold hover:underline underline-offset-2 ">EN</a>
                    <h1>|</h1>
                    <a href="#" class="hover:underline underline-offset-2">ID</a>
                </div>
                <button
                    class="px-8 bg-[#F7FFFA] border border-transparent hover:border-[#F7FFFA] hover:text-[#F7FFFA] transition-all duration-200 hover:bg-[#275CAA] text-[#275CAA] rounded-lg font-semibold p-1.5">Apply
                    Now</button>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-menu-icon lucide-menu">
                    <path d="M4 5h16" />
                    <path d="M4 12h16" />
                    <path d="M4 19h16" />
                </svg>
            </div>
        </nav>
        <div class="main-news flex flex-col w-full gap-16 py-16 px-28">
            <div class="news-main pt-14 flex w-full">
                <a href="{{ url()->previous() }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="#000000" viewBox="0 0 256 256">
                        <path
                            d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm44-92a4,4,0,0,1-4,4H97.66l25.17,25.17a4,4,0,0,1-5.66,5.66l-32-32a4,4,0,0,1,0-5.66l32-32a4,4,0,0,1,5.66,5.66L97.66,124H168A4,4,0,0,1,172,128Z">
                        </path>
                    </svg>
                </a>
                <div class="news-right flex flex-col mx-auto w-[65%] items-center gap-10">
                    <div class="header flex flex-col gap-2">
                        <h1 class="text-3xl font-semibold">[Ini AGAK LAEN! MENYALA FARMASIKU!] Visit the FF UNAIR Booth
                            at AEE
                            2026</h1>
                        <div class="news-detail flex gap-5 items-center w-full">
                            <div class="author flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#275caa"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M230.93,220a8,8,0,0,1-6.93,4H32a8,8,0,0,1-6.92-12c15.23-26.33,38.7-45.21,66.09-54.16a72,72,0,1,1,73.66,0c27.39,8.95,50.86,27.83,66.09,54.16A8,8,0,0,1,230.93,220Z">
                                    </path>
                                </svg>
                                <h1 class="text-sm font-light">Fakultas Farmasi Universitas Airlangga</h1>
                            </div>
                            <div class="time flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#275caa"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm56,112H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48a8,8,0,0,1,0,16Z">
                                    </path>
                                </svg>
                                <h1 class="text-sm font-light">19 January 2026</h1>
                            </div>
                        </div>
                    </div>
                    <div class="img w-[60%] flex flex-col gap-2 items-center">
                        <div class="img-wrapper aspect-square overflow-hidden w-full">
                            <img src="{{ asset('images/news-img.png') }}" class="w-full h-full object-cover bg-center bg-cover rounded-xl"
                                alt="event-1">
                        </div>
                        <h1 class="text-xs font-medium">Poster AGAK LAEN! MENYALA FARMASIKU!</h1>
                    </div>
                    <h1 class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae autem
                        rem eveniet rerum quaerat atque quisquam pariatur, ducimus minima voluptatum aut doloribus porro
                        fugiat beatae laborum aliquid amet recusandae itaque unde distinctio. Impedit, mollitia error?
                        Minus possimus error architecto a dolorem distinctio dolore incidunt soluta adipisci aspernatur,
                        voluptatibus ad. Porro eligendi consequuntur qui at, omnis officiis et, eius tempore nam
                        similique repellat excepturi illo voluptatibus dolores, accusamus quibusdam ut. Exercitationem,
                        eius! Voluptatem obcaecati mollitia tenetur deleniti sapiente atque ad repellat, tempora
                        exercitationem possimus voluptatum accusamus doloribus omnis amet ipsam dolore? Dolorum
                        asperiores tempore magnam voluptatem atque velit id deserunt excepturi debitis a illo, ratione
                        saepe necessitatibus sequi ipsum eaque iure quaerat earum ex fugit modi, quae facilis. Sapiente
                        quos excepturi dolore? Iste cupiditate porro, ut neque numquam laboriosam omnis accusantium
                        veritatis, praesentium corporis quod temporibus velit repellendus aliquam beatae deleniti
                        exercitationem magni distinctio eaque et sint? Officiis quidem deserunt iusto, molestias,
                        voluptatum nobis repudiandae eos atque dolor inventore dolorum recusandae libero iure optio
                        laborum molestiae similique enim pariatur sunt eum possimus fugiat ut! Similique ipsam, numquam
                        adipisci voluptatum cupiditate omnis veniam iure excepturi tenetur voluptate deleniti libero eos
                        ad impedit inventore laudantium officiis nihil nulla porro quas totam cum aperiam. Voluptas,
                        perferendis molestiae nesciunt necessitatibus dolores veritatis sapiente enim reprehenderit
                        laudantium, ex expedita praesentium? Odio, laudantium ex? Quisquam, quo! Ipsam quidem enim
                        temporibus, voluptatibus ad deserunt velit, cupiditate laudantium eius exercitationem alias
                        distinctio! Mollitia quasi saepe doloremque nostrum labore. Sit est consequatur culpa
                        praesentium, veritatis commodi, dicta impedit in ad repellat ipsam reiciendis blanditiis quaerat
                        illum dolor quasi veniam similique perspiciatis sed iure. Reprehenderit, aut iste similique
                        accusantium doloremque modi ipsam aliquam sunt dolore magnam expedita, tenetur itaque. Possimus
                        unde beatae impedit dolores optio, incidunt ducimus, suscipit voluptates similique voluptatibus
                        facilis repellat temporibus delectus quae, totam expedita aliquid neque dolorem.
                    </h1>
                    <div class="other-news w-full flex flex-col gap-3">
                        <h1 class="text-xl font-semibold">Other News</h1>
                        <div class="other-news-lists flex grid-cols-4 w-full h-72 gap-2">
                            <div class="other-news-1 col-span-1 w-full gap-2 h-full flex flex-col justify-between">
                                <div class="img-wrapper w-full aspect-square rounded-xl overflow-hidden">
                                    <img src="{{ asset('images/news-img.png') }}" alt="" class="w-full h-full">
                                </div>
                                <h1 class="text-xs font-light">05/01/2026</h1>
                                <h1 class="text-justify">[Ini AGAK LAEN! MENYALA FARMASIKU!] Visit the FF UNAIR Booth at
                                    AEE 2026</h1>
                            </div>
                            <div class="other-news-1 col-span-1 w-full gap-2 h-full flex flex-col justify-between">
                                <div class="img-wrapper w-full aspect-square rounded-xl overflow-hidden">
                                    <img src="{{ asset('images/news-img.png') }}" alt="" class="w-full h-full">
                                </div>
                                <h1 class="text-xs font-light">05/01/2026</h1>
                                <h1 class="text-justify">[Ini AGAK LAEN! MENYALA FARMASIKU!] Visit the FF UNAIR Booth at
                                    AEE 2026</h1>
                            </div>
                            <div class="other-news-1 col-span-1 w-full gap-2 h-full flex flex-col justify-between">
                                <div class="img-wrapper w-full aspect-square rounded-xl overflow-hidden">
                                    <img src="{{ asset('images/news-img.png') }}" alt="" class="w-full h-full">
                                </div>
                                <h1 class="text-xs font-light">05/01/2026</h1>
                                <h1 class="text-justify">[Ini AGAK LAEN! MENYALA FARMASIKU!] Visit the FF UNAIR Booth at
                                    AEE 2026</h1>
                            </div>
                            <div class="other-news-1 col-span-1 w-full gap-2 h-full flex flex-col justify-between">
                                <div class="img-wrapper w-full aspect-square rounded-xl overflow-hidden">
                                    <img src="{{ asset('images/news-img.png') }}" alt="" class="w-full h-full">
                                </div>
                                <h1 class="text-xs font-light">05/01/2026</h1>
                                <h1 class="text-justify">[Ini AGAK LAEN! MENYALA FARMASIKU!] Visit the FF UNAIR Booth at
                                    AEE 2026</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer
            class="w-full px-28 py-24 flex flex-col bg-[#275CAA] text-[#F7FFFA] hover:text-[#F7FFFA] transition-all duration-200 gap-32">
            <div
                class="footer-start flex grid-cols-3 w-full justify-between text-sm text-[#F7FFFA] hover:text-[#F7FFFA] transition-all duration-200">
                <div class="col-span-1 w-[25%]">
                    <img src="{{ asset('images/logo-ff-footer.png') }}" class="w-full" alt="logo-ff-footer">
                </div>
                <div class="col-span-1 w-[25%] flex flex-col gap-7">
                    <div class="location flex gap-3 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-map-pin-icon lucide-map-pin">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <h1 class="w-fit">Gedung Nanizar Zaman Joenoes, Kampus C Universitas Airlangga Jl. Mulyorejo,
                            Surabaya 60115</h1>
                    </div>
                    <div class="location flex gap-3 text-[#F7FFFA] hover:text-[#F7FFFA] transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-mail-icon lucide-mail">
                            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7" />
                            <rect x="2" y="4" width="20" height="16" rx="2" />
                        </svg>
                        <h1>info@ff.unair.ac.id</h1>
                    </div>
                    <div class="location flex gap-3 text-[#F7FFFA] hover:text-[#F7FFFA] transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-smartphone-icon lucide-smartphone">
                            <rect width="14" height="20" x="5" y="2" rx="2" ry="2" />
                            <path d="M12 18h.01" />
                        </svg>
                        <div class="num-right flex flex-col gap-2">
                            <h1>+62-31-5937824</h1>
                            <h1>+62-31-5957288</h1>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-[25%] flex flex-col gap-3">
                    <h1 class="font-medium text-2xl mb-2">Quick Links</h1>
                    <h1 class="text-sm">Accreditation</h1>
                    <h1 class="text-sm">Academic Calendar</h1>
                    <h1 class="text-sm">Zona Integritas</h1>
                    <h1 class="text-sm">PPID</h1>
                </div>
            </div>
            <div class="footer-end flex justify-between">
                <h1 class="text-xs">© 2025 Fakultas Farmasi Universitas Airlangga. All Rights Reserved.</h1>
                <div class="flex gap-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-instagram-icon lucide-instagram">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-x-icon lucide-x">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-youtube-icon lucide-youtube">
                        <path
                            d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
                        <path d="m10 15 5-3-5-3z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-facebook-icon lucide-facebook">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                    </svg>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>