<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About - Bachelor of Pharmacy</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Lato', sans-serif; }

        .fade-in {
            animation: fadeIn 0.4s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(5px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="wrapper-all w-full min-h-screen bg-[#F7FFFA] relative">
        <x-nav-prodi-s2mfk />

        <div class="main-leadership flex flex-col pt-26">

            <x-hero-section title='Collaboration'
                description='Expanding our global reach through strategic partnerships in education, research, and innovation.' />

            <div class="content-area fade-in px-4 sm:px-8 md:px-16 lg:px-28 py-12 md:py-16 flex flex-col gap-16 bg-white">

                <div class="flex flex-col gap-8">
                    <h2 class="text-neutral-950 text-3xl sm:text-4xl md:text-[40px] font-medium tracking-[-0.04em]">
                        Place of Education
                    </h2>

                    @php
                        $logos = [
                            'images/logo-unair.png',
                            'images/logo-placeholder-2.png',
                            'images/logo-placeholder-3.png',
                            'images/logo-placeholder-4.png',
                            'images/logo-placeholder-5.png',
                            'images/logo-placeholder-6.png',
                            'images/logo-placeholder-7.png',
                            'images/logo-placeholder-8.png',
                        ];
                    @endphp

                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5 md:gap-6">
                        @foreach ($logos as $logo)
                        <div class="bg-[#F7FFFA] border border-gray-100 rounded-xl p-5 md:p-6 flex items-center justify-center shadow-sm hover:shadow-md transition-all duration-300">
                            <img
                                src="{{ asset($logo) }}"
                                alt="Partner Logo"
                                class="w-full max-w-[140px] h-[70px] object-contain"
                                onerror="this.src='https://placehold.co/220x110?text=Logo'">
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

            <x-footer />
        </div>
    </div>

</body>
</html>