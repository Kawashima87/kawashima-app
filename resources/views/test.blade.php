こんにちは
@auth
    @for($i = 0; $i < 10; $i++)
        {{$i}},
    @endfor

    {{-- ログイン中のユーザー名を表示させる --}}
    {{ Auth::user()->name}}さん、こんにちは。

@foreach ($users as $user)
    <P>
    {{$user->name}}
    </P>
@endforeach
@endauth