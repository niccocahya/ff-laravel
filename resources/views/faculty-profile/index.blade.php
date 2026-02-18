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
            <div class="main px-28 py-10 flex flex-col gap-10 bg-[#F7FFFA]">
                <div class="sub-page flex gap-5">
                    <button
                        class="px-6 py-2 rounded-full bg-[#275CAA] text-white text-sm hover:bg-[#1d4f96] transition-all duration-200">
                        General Profile
                    </button>
                    <button
                        class="px-6 py-2 rounded-full border border-[#275CAA] text-[#275CAA] text-sm hover:bg-[#275CAA] hover:text-white transition-all duration-200">
                        History
                    </button>
                    <button
                        class="px-6 py-2 rounded-full border border-[#275CAA] text-[#275CAA] text-sm hover:bg-[#275CAA] hover:text-white transition-all duration-200">
                        Faculty Identity
                    </button>
                    <button
                        class="px-6 py-2 rounded-full border border-[#275CAA] text-[#275CAA] text-sm hover:bg-[#275CAA] hover:text-white transition-all duration-200">
                        Integrity Zone
                    </button>
                </div>
                <div class="vision-mission flex w-full gap-10">
                    <div class="vm-left w-[40%] gap-5 flex flex-col">
                        <h1 class="text-4xl font-medium text-left">Vision & Mission</h1>
                        <h1 class="text-justify">Driving global excellence in pharmaceutical science and clinical care,
                            grounded in innovation and moral integrity.</h1>
                    </div>
                    <div class="vm-right flex flex-col flex-1 gap-7 text-justify">
                        <div class="vision flex flex-col gap-5">
                            <button onclick=toggleAccordionVision()
                                class="vision-head flex justify-between items-center">
                                <h1 class="text-2xl">Vision</h1>
                                <svg class="vision-icon transform transition-all duration-100"
                                    xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#0a0000"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
                                    </path>
                                </svg>
                            </button>
                            <div class="vision-content hidden">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vel facilis quisquam
                                explicabo, dolorum ad doloribus quo mollitia et ea, minus expedita! Pariatur
                                consequuntur maxime mollitia enim numquam minus doloribus ipsum ut quaerat soluta
                                tempore, praesentium temporibus omnis rem eos laborum sequi quos nostrum modi velit
                                exercitationem ipsa. Officia mollitia temporibus facilis illo nam optio laudantium,
                                quibusdam, magni molestias perferendis similique accusantium libero nobis amet. Deserunt
                                ex id sequi aperiam vel totam, nemo rerum placeat neque temporibus? A, quibusdam.
                                Consequatur aliquid molestiae itaque magni odio veritatis laboriosam, harum provident
                                aut, in cumque totam est perspiciatis recusandae reiciendis deleniti asperiores
                                expedita!
                            </div>
                            <div class="w-full bg-black h-[1px] rounded-full"></div>
                        </div>
                        <div class="mission flex flex-col gap-5">
                            <button onclick=toggleAccordionMission()
                                class="mission-head flex justify-between items-center">
                                <h1 class="text-2xl">Mission</h1>
                                <svg class="mission-icon transform transition-all duration-100"
                                    xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#0a0000"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
                                    </path>
                                </svg>
                            </button>
                            <div class="mission-content hidden">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vel facilis quisquam
                                explicabo, dolorum ad doloribus quo mollitia et ea, minus expedita! Pariatur
                                consequuntur maxime mollitia enim numquam minus doloribus ipsum ut quaerat soluta
                                tempore, praesentium temporibus omnis rem eos laborum sequi quos nostrum modi velit
                                exercitationem ipsa. Officia mollitia temporibus facilis illo nam optio laudantium,
                                quibusdam, magni molestias perferendis similique accusantium libero nobis amet. Deserunt
                                ex id sequi aperiam vel totam, nemo rerum placeat neque temporibus? A, quibusdam.
                                Consequatur aliquid molestiae itaque magni odio veritatis laboriosam, harum provident
                                aut, in cumque totam est perspiciatis recusandae reiciendis deleniti asperiores
                                expedita!
                            </div>
                            <div class="w-full bg-black h-[0.5px] rounded-full"></div>
                        </div>
                        <div class="goals flex flex-col gap-5">
                            <button onclick=toggleAccordionGoals() class="goals-head flex justify-between items-center">
                                <h1 class="text-2xl">Goals</h1>
                                <svg class="goals-icon transform transition-all duration-100"
                                    xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#0a0000"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
                                    </path>
                                </svg>
                            </button>
                            <div class="goals-content hidden">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vel facilis quisquam
                                explicabo, dolorum ad doloribus quo mollitia et ea, minus expedita! Pariatur
                                consequuntur maxime mollitia enim numquam minus doloribus ipsum ut quaerat soluta
                                tempore, praesentium temporibus omnis rem eos laborum sequi quos nostrum modi velit
                                exercitationem ipsa. Officia mollitia temporibus facilis illo nam optio laudantium,
                                quibusdam, magni molestias perferendis similique accusantium libero nobis amet. Deserunt
                                ex id sequi aperiam vel totam, nemo rerum placeat neque temporibus? A, quibusdam.
                                Consequatur aliquid molestiae itaque magni odio veritatis laboriosam, harum provident
                                aut, in cumque totam est perspiciatis recusandae reiciendis deleniti asperiores
                                expedita!
                            </div>
                            <div class="w-full bg-black h-[1px] rounded-full"></div>
                        </div>
                        <div class="quality flex flex-col gap-5">
                            <button onclick=toggleAccordionQuality()
                                class="quality-head flex justify-between items-center">
                                <h1 class="text-2xl">Quality</h1>
                                <svg class="quality-icon transform transition-all duration-100"
                                    xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#0a0000"
                                    viewBox="0 0 256 256">
                                    <path
                                        d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z">
                                    </path>
                                </svg>
                            </button>
                            <div class="quality-content hidden">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vel facilis quisquam
                                explicabo, dolorum ad doloribus quo mollitia et ea, minus expedita! Pariatur
                                consequuntur maxime mollitia enim numquam minus doloribus ipsum ut quaerat soluta
                                tempore, praesentium temporibus omnis rem eos laborum sequi quos nostrum modi velit
                                exercitationem ipsa. Officia mollitia temporibus facilis illo nam optio laudantium,
                                quibusdam, magni molestias perferendis similique accusantium libero nobis amet. Deserunt
                                ex id sequi aperiam vel totam, nemo rerum placeat neque temporibus? A, quibusdam.
                                Consequatur aliquid molestiae itaque magni odio veritatis laboriosam, harum provident
                                aut, in cumque totam est perspiciatis recusandae reiciendis deleniti asperiores
                                expedita!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="quality-objects w-full flex flex-col gap-5">
                    <button onclick=toggleAccordionQO() class="qo-head flex items-center justify-between w-full gap-10">
                        <div class="qo-left w-[40%] gap-5 flex flex-col">
                            <h1 class="text-4xl font-medium text-left">Quality Objectives</h1>
                            <h1 class="text-justify">Defining Excellence through Data and Strategic Goals.</h1>
                        </div>
                        <div>
                            <svg class="qo-icon transform transition-all duration-100" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#0a0000" viewBox="0 0 256 256"><path d="M128,28A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,192a92,92,0,1,1,92-92A92.1,92.1,0,0,1,128,220Zm42.83-94.83a4,4,0,0,1,0,5.66l-32,32a4,4,0,0,1-5.66-5.66L158.34,132H88a4,4,0,0,1,0-8h70.34L133.17,98.83a4,4,0,0,1,5.66-5.66Z"></path></svg>
                        </div>
                    </button>
                    <div class="qo-img w-full hidden flex justify-center">
                        <img class="w-[90%]" src="{{ asset('images/image-117.png') }}" alt="Peneliti">
                    </div>
                </div>
            </div>
            <x-footer />
        </div>
    </div>
    <script>
        function toggleAccordionVision() {
            const visionContent = document.getElementsByClassName('vision-content')[0];
            const visionIcon = document.getElementsByClassName('vision-icon')[0];
            visionContent.classList.toggle('hidden');
            if (!visionContent.classList.contains('hidden')) {
                visionIcon.style.transform = "rotate(90deg)"
            } else {
                visionIcon.style.transform = "rotate(0deg)"
            }
        }
        function toggleAccordionMission() {
            const missionContent = document.getElementsByClassName('mission-content')[0];
            const missionIcon = document.getElementsByClassName('mission-icon')[0];
            missionContent.classList.toggle('hidden');
            if (!missionContent.classList.contains('hidden')) {
                missionIcon.style.transform = "rotate(90deg)"
            } else {
                missionIcon.style.transform = "rotate(0deg)"
            }
        }
        function toggleAccordionGoals() {
            const goalsContent = document.getElementsByClassName('goals-content')[0];
            const goalsIcon = document.getElementsByClassName('goals-icon')[0];
            goalsContent.classList.toggle('hidden');
            if (!goalsContent.classList.contains('hidden')) {
                goalsIcon.style.transform = "rotate(90deg)"
            } else {
                goalsIcon.style.transform = "rotate(0deg)"
            }
        }
        function toggleAccordionQuality() {
            const qualityContent = document.getElementsByClassName('quality-content')[0];
            const qualityIcon = document.getElementsByClassName('quality-icon')[0];
            qualityContent.classList.toggle('hidden');
            if (!qualityContent.classList.contains('hidden')) {
                qualityIcon.style.transform = "rotate(90deg)"
            } else {
                qualityIcon.style.transform = "rotate(0deg)"
            }
        }
        function toggleAccordionQO() {
            const qoContent = document.getElementsByClassName('qo-img')[0];
            const qoIcon = document.getElementsByClassName('qo-icon')[0];
            qoContent.classList.toggle('hidden');
            if (!qoContent.classList.contains('hidden')) {
                qoIcon.style.transform = "rotate(90deg)"
            } else {
                qoIcon.style.transform = "rotate(0deg)"
            }
        }

    </script>
</body>

</html>