<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumni</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="wrapper-all w-full min-h-screen bg-[#F7FFFA] relative">
        <x-nav-prodi />
        
        <div class="main-calendar flex flex-col pt-20 md:pt-26">
            <x-hero-section title='Alumni'
                description='Leading the development of Pharmaceutical Science-Technology and Clinical-Community Pharmacy through innovative education and global collaboration.' />
            
            <div class="fade-in py-8 md:py-14 px-6 md:px-16 lg:px-28 flex flex-col gap-6 md:gap-10 bg-[#F7FFFA]">
                
                <div class="pui-pt w-full flex flex-col gap-4 md:gap-7">
                    <div class="pr-list flex flex-col gap-4 md:gap-5">
                        <x-link-card-small title="Alumnipedia"
                        href="https://google.com" />
                    </div>
                </div>

                <div class="pui-pt w-full flex flex-col gap-4 md:gap-7">
                    <div class="pr-list flex flex-col gap-4 md:gap-5">
                        <x-link-card-small title="Tracer Study"
                        href="https://google.com" />
                    </div>
                </div>

                <div class="pui-pt w-full flex flex-col gap-4 md:gap-7">
                    <div class="pr-list flex flex-col gap-4 md:gap-5">
                        <x-link-card title="Graduate User Satisfaction Survey Results"
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