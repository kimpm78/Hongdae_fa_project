<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 my-4 leading-8">
            パスワードを忘れですか？<br>お客様のメールアドレスをお知らせいただければ、新しいメールアドレスを選択できるパスワードリセットリンクをメールアロですでお送りします。
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('admin.password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="p-2 w-full flex justify-around mt-4 font-bold text-[10px]">
                <button type="button" onclick="location.href='<?= route('admin.owners.index') ?>'" class="bg-gray-200 border-0 py-2 px-8 focus:outline-none hover:bg-gray-400 rounded text-lg">戻る</button>
                <x-button>
                    パスワードリセットする
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>