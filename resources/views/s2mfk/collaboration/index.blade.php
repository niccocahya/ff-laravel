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
        <x-nav-prodi-s2mfk/>

        <div class="main-leadership flex flex-col pt-26">
            
           <x-hero-section title='Collaboration'
                description='Expanding our global reach through strategic partnerships in education, research, and innovation.' />

            <div class="content-area fade-in px-28 py-16 flex flex-col gap-16 bg-white">

                <div class="flex flex-col gap-4">
                    <h2 class="text-neutral-950 text-[40px] font-medium tracking-[-0.04em]">Place of Education</h2>
                    <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                        Education is conducted on the Airlangga University campus, including the Faculty of Pharmacy, the Faculty of Medicine, the Teaching Hospital of Dr. Soetomo Hospital, Surabaya, and the Unair Teaching Hospital.
                    </p>
                    <p class="text-justify text-neutral-700 text-lg font-normal leading-relaxed">
                        Educational and research facilities include various laboratories with modern instrumentation and library collections, available at the Faculty of Pharmacy, each Department, and the Pharmacy Unit at Dr. Soetomo Hospital. An e-library is available for access to the latest information on drugs and their therapies.
                    </p>
                </div>
            </div>

            <x-footer />
        </div>
    </div>

</body>
</html>