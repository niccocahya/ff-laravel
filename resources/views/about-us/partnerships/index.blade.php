<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Partnerships - Faculty of Pharmacy</title>
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

            <x-hero-section title='Partnerships'
                description='Information on national and international collaborations with academic institutions, industry partners, and government bodies to strengthen education, research, and community engagement.' />

            <div class="content-area fade-in px-4 sm:px-8 md:px-16 lg:px-28 py-10 sm:py-12 lg:py-16 flex flex-col gap-10 sm:gap-12 lg:gap-16 bg-white">

                <!-- ================= Partnership Information ================= -->
                <div class="flex flex-col gap-4 sm:gap-6">
                    <x-link-card title="Partnership Information">
                        <div class="flex justify-center w-full">
                        </div>
                    </x-link-card>
                </div>

                <div class="flex flex-col gap-4 sm:gap-6">
                    <x-link-card title="New Partnership Application Form">
                        <div class="flex justify-center w-full">
                        </div>
                    </x-link-card>
                </div>

            </div>

            <x-footer />
        </div>
    </div>

</body>
</html>