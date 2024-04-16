<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-3xl my-6">オーナーとのやりとりをオンラインで簡単に</h1>
                    <p class="text-lg my-6 leading-8">編集と新規登録が可能です。<br />
                        削除ボタンを押す時に通知ウィンドウが表示され、確認を押すと削除が可能です。<br />
                        完全削除をするには、有効期限切れのカテゴリで完全削除ボタンを押してください。</p>
                    <span class="text-sm text-gray-700 mt-6">Hongdae fashion</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>