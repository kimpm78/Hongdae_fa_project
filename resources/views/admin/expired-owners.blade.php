<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
<<<<<<< HEAD
            期限切れオーナー一覧
        </h2>
    </x-slot>

=======
            期限切れオーナーリスト
        </h2>
    </x-slot>
>>>>>>> main
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
<<<<<<< HEAD

                    <section class="text-gray-600 body-font">
                        <div class="container px-5 mx-auto">
                            <x-flash-message status="session('status')" />

=======
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 mx-auto">
                            <x-flash-message status="session('status')" />
>>>>>>> main
                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-left whitespace-no-wrap">
                                    <thead>
                                        <tr>
<<<<<<< HEAD
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">名前</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">期限が切れた日</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
=======
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">名前</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">期限が切れた日</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                        </tr>
>>>>>>> main
                                    </thead>
                                    <tbody>
                                        @foreach ($expiredOwners as $owner)
                                        <tr>
                                            <td class="px-4 py-3">{{ $owner->name }}</td>
                                            <td class="px-4 py-3">{{ $owner->email }}</td>
                                            <td class="px-4 py-3">{{ $owner->deleted_at->diffForHumans() }}</td>
<<<<<<< HEAD

                                            <form id="delete_{{$owner->id}}" method="post" action="{{ route('admin.expired-owners.destroy', ['owner' => $owner->id ] )}}">
                                                @csrf
                                                <td class="px-4 py-3">
                                                    <a href="#" data-id="{{ $owner->id }}" onclick="deletePost(this)" class="text-white bg-red-400 border-0 py-2 px-4 focus:outline-none hover:bg-red-500 rounded ">完全に削除</a>
                                                </td>
                                            </form>
=======
                                            <form id="delete_{{ $owner->id }}" method="post" action="{{ route('admin.expired-owners.destroy',[
                                                'owner' => $owner->id])}}">
                                                @csrf
                                                <td class="px-4 py-3">
                                                    <a href="#" data-id="{{ $owner->id}}" onclick="deletePost(this)" type="submit" class="text-white bg-red-400 border-0 py-2 px-4 focus:outline-none hover:bg-red-500 rounded text-lg">完全に削除</a>
                                            </form>
                                            </td>
>>>>>>> main
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
<<<<<<< HEAD

                    {{-- エロクアント
                @foreach ($e_all as $e_owner)
                  {{ $e_owner->name }}
                    {{ $e_owner->created_at->diffForHumans() }}
                    @endforeach
                    <br>
                    クエリビルダ
                    @foreach ($q_get as $q_owner)
                    {{ $q_owner->name }}
                    {{ Carbon\Carbon::parse($q_owner->created_at)->diffForHumans() }}
                    @endforeach --}}
=======
>>>>>>> main
                </div>
            </div>
        </div>
    </div>
    <script>
        function deletePost(e) {
            'use strict';
<<<<<<< HEAD
            if (confirm('本当に削除してもいいですか?')) {
=======
            if (confirm('本当に削除してもよろしいですか?')) {
>>>>>>> main
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
</x-app-layout>