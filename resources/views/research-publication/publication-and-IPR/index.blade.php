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
        <x-navbar />
        <div class="main-calendar flex flex-col pt-16">
            <div
                class="heroes h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
                <div class="header-top flex items-end gap-3">
                    <h1 class="text-5xl font-medium">Publication and Intellectual Property Rights</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 256 256">
                        <path
                            d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z">
                        </path>
                    </svg>
                </div>
                <h1 class="w-[50%] text-justify">Stay updated with key academic dates, lecture schedules, and important
                    events throughout the semester.</h1>
            </div>
            <div class="fade-in py-14 px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                <div class="pub-ipr w-full flex flex-col gap-7">
                    <div class="pub-ipr flex flex-col gap-5">
                        <x-link-card-small
                            title='Publications'
                            href="https://google.com" />
                        <x-link-card-small-last
                            title='Books, Patent, and Intellectual Property Rights'
                            href="https://google.com" />
                    </div>
                </div>
            </div>
            <x-footer />
        </div>
    </div>
    <script></script>
</body>

</html>