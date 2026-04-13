<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Education - Competency</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .fade-in { animation: fadeIn 0.4s ease-in-out; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body>
    <div class="wrapper-all w-full min-h-screen bg-[#F7FFFA] relative font-sans">
        <x-nav-prodi />
        
        <div class="main-calendar flex flex-col pt-20 md:pt-26">
            
            <x-hero-section 
                title="Education" 
                description="Leading the development of Pharmaceutical Science-Technology and Clinical-Community Pharmacy through innovative education and global collaboration." 
            />

            <div class="fade-in py-8 md:py-14 px-6 md:px-16 lg:px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                
                <x-pagination-s2mif-education active="competency" />

                <div class="w-full min-h-[40vh] flex flex-col pt-2">
                    </div>

            </div>
            
            <x-footer />
        </div>
    </div>
</body>

</html>