<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>um titulo</h1>
        <img src="/img/banner.jpg" alt="">
        @if(10>5)
            <p>A condicao é atendida</p>
        @endif

        <p>{{ $nome }}</p>

        @if($nome == "Pedro")
            <p>O nome é {{$nome}}</p>
        @elseif($nome == "Gabriel")
            <p>O nome é {{$nome}} e ele tem {{$idade}} anos</p>
        @else
            <p>O nome não é Pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}}</p>
        @endfor

        @foreach($nomes as $nome)
            <p>{{$nome}}</p>
        @endforeach
    </body>
</html>
