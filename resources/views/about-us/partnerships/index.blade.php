<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leadership & Organization - Faculty of Pharmacy</title>
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
        <x-navbar />

        <div class="main-leadership flex flex-col pt-16">
            
            <div class="heroes h-[45vh] w-full gap-5 text-white bg-gradient-to-r from-[#275CAA] via-[#275CAA] to-[#2E9853] px-28 flex flex-col justify-center">
                <div class="header-top flex items-end gap-3">
                    <h1 class="text-5xl font-bold tracking-[-0.04em]">Partnerships</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#ffffff" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                    </svg>
                </div>
                <h1 class="w-[50%] text-justify leading-relaxed">
                    Information on national and international collaborations with academic institutions, industry partners, and government bodies to strengthen education, research, and community engagement.
                </h1>
            </div>

            <div class="content-area fade-in px-28 py-16 flex flex-col gap-16 bg-white">

    <!-- ================= Partnership Information ================= -->
    <div class="flex flex-col gap-6">
        <a href="#" target="_blank"
           class="w-full flex justify-between items-center text-left cursor-pointer group">
            
            <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">
                Partnership Information
            </h2>

            <svg xmlns="http://www.w3.org/2000/svg"
                 width="48"
                 height="48"
                 fill="#0b0a0a"
                 viewBox="0 0 256 256"
                 class="transition-transform duration-300 group-hover:translate-x-1 group-hover:-translate-y-1">
                <path d="M168,40h48a8,8,0,0,1,8,8v48a8,8,0,0,1-16,0V67.31L93.66,181.66a8,8,0,0,1-11.32-11.32L196.69,56H168a8,8,0,0,1,0-16Z"></path>
            </svg>
        </a>
    </div>


    <!-- ================= New Partnership Application Form ================= -->
    <div class="flex flex-col gap-6">
        <a href="#" target="_blank"
           class="w-full flex justify-between items-center text-left cursor-pointer group">
            
            <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">
                New Partnership Application Form
            </h2>

            <svg xmlns="http://www.w3.org/2000/svg"
                 width="48"
                 height="48"
                 fill="#0b0a0a"
                 viewBox="0 0 256 256"
                 class="transition-transform duration-300 group-hover:translate-x-1 group-hover:-translate-y-1">
                <path d="M168,40h48a8,8,0,0,1,8,8v48a8,8,0,0,1-16,0V67.31L93.66,181.66a8,8,0,0,1-11.32-11.32L196.69,56H168a8,8,0,0,1,0-16Z"></path>
            </svg>
        </a>
    </div>

</div>

            <x-footer />
        </div>
    </div>

</body>
</html>