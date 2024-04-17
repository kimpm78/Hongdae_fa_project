<x-guest-layout>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a href="/" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0 ml-3 text-xl">
                <img class="flex h-10" src="{{ asset("images/Hongdae_logo.png")}}" alt="Hongdae logo">
            </a>
            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400 flex flex-wrap items-center text-base justify-center">
                <a href="{{ route('user.men') }}" class="mr-5 hover:text-gray-900">MAN</a>
                <a href="#women" class="mr-5 hover:text-gray-900">WOMEN</a>
                <a href="#kb" class="mr-5 hover:text-gray-900">KIDS・BABY</a>
            </nav>
            @if (Route::has('user.login'))
            <nav>
                @auth('users')
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 no-underline">ダッシュボード</a>
                @else
                <a href="{{ route('user.login') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded mt-4 md:mt-0 text-sm text-gray-700 no-underline">
                    ログイン
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                @if (Route::has('user.register'))
                <a href="{{ route('user.register') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded mt-4 md:mt-0 text-sm text-gray-700 no-underline">会員登録</a>
                @endif
                @endauth
            </nav>
            @endif
        </div>
    </header>
</x-guest-layout>