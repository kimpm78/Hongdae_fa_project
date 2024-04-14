<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- Alpine.js -->
<script src="//unpkg.com/alpinejs" defer></script>

<div class="w-full h-[650px] flex items-center justify-center">
    <div class="w-full max-w-[800px]">
        <div x-data="{ activeSlide: 1, slideCount: 3 }" class="overflow-hidden relative">
            <!-- Slider -->
            <!-- You can remove x-init if you dont want to autoplay -->
            <div class="whitespace-nowrap transition-transform duration-500  ease-in-out" :style="'transform: translateX(-' + (activeSlide - 1) * 100.5 + '%)'" x-init="setInterval(() => { activeSlide = activeSlide < slideCount ? activeSlide + 1 : 1 }, 5000)">
                <!-- Item 1 -->
                <div class="inline-block w-full max-h-[500px] hover:bg-opacity-5">
                    <img src="https://image-cdn.hypb.st/https%3A%2F%2Fkr.hypebeast.com%2Ffiles%2F2023%2F03%2Fseoul-fashion-week-street-snap-2023-fall-winter-ft2.jpg?w=960&cbr=1&q=90&fit=max" alt="slider01" />
                </div>
                <!-- Item 2 -->
                <div class="inline-block w-full max-h-[500px]">
                    <img src="https://www.fashiontv.com/assets/live-bg.jpg" alt="slider02" />
                </div>
                <!-- Item 3 -->
                <div class="inline-block w-full max-h-[500px]">
                    <img src="https://image-cdn.hypb.st/https%3A%2F%2Fkr.hypebeast.com%2Ffiles%2F2023%2F04%2Fworlds-first-ai-fashion-week-ft.jpg?w=960&cbr=1&q=90&fit=max" alt="slider03" />
                </div>
            </div>

            <!-- Prev/Next Arrows -->
            <div class="absolute inset-0 flex items-center justify-between px-2">
                <button @click="activeSlide = activeSlide > 1 ? activeSlide - 1 : slideCount" class="w-[30px] h-[30px] flex items-center bg-black/30 text-white p-2 rounded-full">
                    &#8592;
                </button>
                <button @click="activeSlide = activeSlide < slideCount ? activeSlide + 1 : 1" class="w-[30px] h-[30px] flex items-center bg-black/30 text-white p-2 rounded-full">
                    &#8594;
                </button>
            </div>

            <!-- Dots Navigation -->
            <div class="absolute bottom-0 left-0 right-0 flex justify-center space-x-2 p-4">
                <template x-for="slideIndex in slideCount" :key="slideIndex">
                    <button @click="activeSlide = slideIndex" class="h-2 w-2 rounded-full" :class="{'bg-orange-500': activeSlide === slideIndex, 'bg-white/50': activeSlide !== slideIndex}"></button>
                </template>
            </div>
        </div>
    </div>
</div>