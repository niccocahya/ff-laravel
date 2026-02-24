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
            <div
                class="heroes h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
                <div class="header-top flex items-end gap-3">
                    <h1 class="text-5xl font-medium">Faculty Profile</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 256 256">
                        <path
                            d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z">
                        </path>
                    </svg>
                </div>
                <h1 class="w-[50%] text-justify">An overview of the faculty’s vision, mission, history, and commitment
                    in advancing education, research, and community
                    service in the field of pharmacy to support public health development.</h1>
            </div>
            <x-pagination-faculty-profile active="identity" />
            <div class="main-identity fade-in pb-14 w-full px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                <div class="logo w-full flex flex-col gap-5">
                    <h1 class="logo-head text-4xl font-medium w-full mb-2">Logo</h1>
                    <div class="logo-1 flex flex-col text-justify w-full items-center gap-5">
                        <div class="img-hist w-full flex justify-center">
                            <img src="{{ asset('images/identity-img.png') }}" alt="">
                        </div>
                        <h1 class="w-full">
                            The emblem of Universitas Airlangga is Garuda Mukti with Lord Vishnu as its rider. Lord
                            Vishnu symbolizes King Airlangga himself, representing his wisdom, strength, and noble
                            character.
                            <br><br>
                            The emblem of Universitas Airlangga depicts Garuda Mukti carrying a jar, surrounded by an
                            outer circle in the form of a golden chain. The reason the emblem does not directly portray
                            King Airlangga, but instead features Garuda Mukti, his mount, is rooted in the university’s
                            early history. At the time of the establishment of Universitas Airlangga, the first rector
                            discovered a royal seal of King Airlangga at the Arca Building in Jakarta. The seal depicted
                            Garuda, the mount of Lord Vishnu (King Airlangga), carrying a jar containing Amerta water,
                            which is believed to grant immortality. Therefore, Garuda Mukti was chosen as the emblem of
                            Universitas Airlangga, symbolizing an eternal source of knowledge.
                            <br><br>
                            The outer golden chain circle represents the students of Universitas Airlangga, who are
                            expected to become an unbroken chain contributing to the enduring glory of the alma mater,
                            the nation, and humanity. The yellow and blue colors originate from the inauguration
                            ceremony of Universitas Airlangga, during which a statue of Lord Vishnu was unveiled,
                            covered by a yellow and blue cloth. Indonesia’s first President, the late Ir. Soekarno, who
                            officially inaugurated the university, instructed that the statue be preserved.
                            Consequently, the colors of the covering cloth were adopted as the official colors of
                            Universitas Airlangga. Yellow symbolizes greatness, while blue represents chivalry and depth
                            of spirit.
                        </h1>
                    </div>
                </div>
            </div>
            <x-footer />
        </div>
    </div>
    <script>
        
    </script>
</body>

</html>