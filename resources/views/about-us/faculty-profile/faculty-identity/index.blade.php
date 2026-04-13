<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
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
        <x-navbar />
        <div class="main-faculty-profile flex flex-col pt-16">
            <x-hero-section title='Faculty Profile'
                description='An overview of the faculty’s vision, mission, history, and commitment in advancing education, research, and community service in the field of pharmacy to support public health development.' />

            <x-pagination-faculty-profile active="identity" />

            <div class="main-identity fade-in pb-14 w-full px-6 md:px-14 lg:px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                <div class="logo w-full flex flex-col gap-4 md:gap-5 mt-4 md:mt-0">
                    <h2 class="logo-head text-3xl md:text-4xl font-medium w-full mb-2 text-gray-800">Logo</h2>
                    <div class="logo-1 flex flex-col text-justify w-full items-center gap-6 md:gap-8">

                        <div class="img-hist w-full flex justify-center">
                            <img src="{{ asset('images/identity-img.png') }}"
                                class="w-full max-w-2xl object-contain rounded-xl" alt="Logo Identity">
                        </div>

                        <div class="w-full text-gray-700 text-sm md:text-base leading-relaxed flex flex-col gap-4">
                            <p>
                                The emblem of Universitas Airlangga is Garuda Mukti with Lord Vishnu as its rider. Lord
                                Vishnu symbolizes King Airlangga himself, representing his wisdom, strength, and noble
                                character.
                            </p>
                            <p>
                                The emblem of Universitas Airlangga depicts Garuda Mukti carrying a jar, surrounded by
                                an
                                outer circle in the form of a golden chain. The reason the emblem does not directly
                                portray
                                King Airlangga, but instead features Garuda Mukti, his mount, is rooted in the
                                university’s
                                early history. At the time of the establishment of Universitas Airlangga, the first
                                rector
                                discovered a royal seal of King Airlangga at the Arca Building in Jakarta. The seal
                                depicted
                                Garuda, the mount of Lord Vishnu (King Airlangga), carrying a jar containing Amerta
                                water,
                                which is believed to grant immortality. Therefore, Garuda Mukti was chosen as the emblem
                                of
                                Universitas Airlangga, symbolizing an eternal source of knowledge.
                            </p>
                            <p>
                                The outer golden chain circle represents the students of Universitas Airlangga, who are
                                expected to become an unbroken chain contributing to the enduring glory of the alma
                                mater,
                                the nation, and humanity. The yellow and blue colors originate from the inauguration
                                ceremony of Universitas Airlangga, during which a statue of Lord Vishnu was unveiled,
                                covered by a yellow and blue cloth. Indonesia’s first President, the late Ir. Soekarno,
                                who
                                officially inaugurated the university, instructed that the statue be preserved.
                                Consequently, the colors of the covering cloth were adopted as the official colors of
                                Universitas Airlangga. Yellow symbolizes greatness, while blue represents chivalry and
                                depth
                                of spirit.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <x-footer />
        </div>
    </div>
    <script></script>
</body>

</html>