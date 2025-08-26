こんにちは
@auth
    @for($i = 0; $i < 10; $i++)
        {{$i}},
    @endfor

    {{ Auth::user()->name}}さん、こんにちは。
@endauth