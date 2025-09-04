<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            TODOリスト
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div style="text-align: center">
                        <form action="{{route('todo.store')}}" method="POST">
                            @csrf
                            <input type="text" name="title" placeholder="title..." value="{{old('title')}}">
                            @for ($i = 0; $i < 3; $i++)
                                <select name="tag" id="tag">
                                    <option value="tag">#sample</option>
                                </select>
                            @endfor
                            <x-primary-button>
                                <input type="submit" value="作成">
                            </x-primary-button>
                        </form>
                        <form action="">
                            <div style="clear: left; margin-top:10px;">
                                <input style="width: 48%" type="text" name="keyword" placeholder="keyword...">
                                <x-primary-button>
                                    <input type="submit" value="検索">
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                            
                    <div>
                        {{-- @foreach ($tasks as $task)
                            <p>{{$task->title}}</p>
                        @endforeach --}}
                        <table style="margin: auto; width:55%">
                            <tr style="display: none;">
                                <th style="text-align: center">完了</th>
                                <th style="text-align: center">タイトル</th>
                                <th style="text-align: center">タグ</th>
                                <th style="text-align: center">ピン</th>
                                <th style="text-align: center">編集</th>
                                <th style="text-align: center">削除</th>
                            </tr>
                            @for ($i = 0; $i < 10; $i++)
                                <tr style="border-bottom: 1px solid #d1d1d1;height: 50px;">
                                    <td style="text-align: center; width:5px"><a href="#">〇</a></td>
                                    <td style="text-align: center; width:100px">title...</td>
                                    <td style="text-align: center; width:100px">tag...</td>
                                    <td style="text-align: center; width:5px">☆</td>
                                    <td style="text-align: center; width:40px">編集</td>
                                    <td style="text-align: center; width:40px"><a href="#">削除</a></td>
                                </tr>
                            @endfor
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
