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
            <x-hero-section title='Research Group' description='Stay updated with key academic dates, lecture schedules, and important
                    events throughout the semester.' />
            <div class="fade-in py-14 px-28 flex flex-col gap-10 bg-[#F7FFFA]">
                <div class="pui-pt w-full flex flex-col gap-7">
                    <h1 class="text-4xl font-medium">
                        Pusat Unggulan Ilmu Pengetahuan dan Teknologi Perguruan Tinggi (PUI-PT)
                    </h1>
                    <div class="pr-list flex flex-col gap-5">
                        <x-link-card-small-last
                            title='PUI-PT Kesehatan Kulit dan Teknologi Kosmetik "(Skin and Cosmetic Technology (SCT) Centre of Excellent)"'
                            href="https://google.com" />
                    </div>
                </div>
                <div class="pr w-full flex flex-col gap-7">
                    <h1 class="text-4xl font-medium">
                        Pusat Riset
                    </h1>
                    <div class="pr-list flex flex-col gap-5">
                        <x-link-card-small-last
                            title='Pusat Riset Etnomedisin dan Pengembangan Obat Tradisional (Ethnomedicine and Indonesian Traditional Medicine Development ( E-ITMed ))'
                            href="https://google.com" />
                    </div>
                </div>
                <div class="rg w-full flex flex-col gap-7">
                    <h1 class="text-4xl font-medium">
                        Research Group
                    </h1>
                    <div class="rg-list flex flex-col gap-5">
                        <x-link-card-small
                            title='Biomaterial And Translational Research Group'
                            href="https://google.com" />
                        <x-link-card-small
                            title='Biomedical Pharmacy Research Group'
                            href="https://google.com" />
                        <x-link-card-small
                            title='Clinical Pharmacy Research Group'
                            href="https://google.com" />
                        <x-link-card-small
                            title='Drug Development Research Group'
                            href="https://google.com" />
                        <x-link-card-small
                            title='Innovative Pharmacy Practice and Integrated Outcomes Research Group (INACORE)'
                            href="https://google.com" />
                        <x-link-card-small
                            title='Pharmaceutical Analysis Development Research Group'
                            href="https://google.com" />
                        <x-link-card-small-last
                            title='Pharmaceutics and Delivery Systems for Drugs, Cosmetics and Nanomedicine Research Group (Pharm-DCN)'
                            href="https://google.com" />
                    </div>
                </div>
                <div class="roadmap-research w-full flex flex-col gap-7">
                    <h1 class="text-4xl font-medium">
                        Roadmap and Past Research
                    </h1>
                    <div class="roadmap-research-list flex flex-col gap-5">
                        <x-link-card-small
                            title='Research Roadmap (2020 - 2025)'
                            href="https://google.com" />
                        <x-link-card-small-last
                            title='Faculty’s Research (2020 - 2024)'
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