@extend('welcome')

@section('content')
<x-app-layout>
    <section class="container mx-auto text-gray-600 body-font">
        <div class="grid grid-rows-3 container mx-auto px-5 py-24">
            <div class="flex flex-wrap w-full mb-2">
                <div class="lg:w-1/2 mb-6 lg:mb-0 row-auto">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">日本国内ランキング</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/250x250" alt="content">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">LIKE THE MOST</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Likemost Ring Star Overfit Sweatshirt Black</h2>
                        <p class="leading-relaxed text-base text-red-600">¥2,915</p>
                        <p>★4.8</p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/250x250" alt="content">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">ユニセック</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">ウォッシュドスウェT</h2>
                        <p class="leading-relaxed text-base">¥1,990</p>
                        <p>★3.5</p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/250x250" alt="content">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">MEN</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">スウェT(5分袖) Peanuts 2</h2>
                        <p class="leading-relaxed text-base">¥1,990</p>
                        <p>★4.2</p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/250x250" alt="content">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">MEN</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">スウェT(5分袖) Peanuts 5</h2>
                        <p class="leading-relaxed text-base">¥1,990</p>
                        <p>★4.7</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
@endsection