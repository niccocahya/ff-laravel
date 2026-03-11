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
            <x-hero-section title='Publication and Intellectual Property Rights' description='Stay updated with key academic dates, lecture schedules, and important
                                events throughout the semester.' />
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