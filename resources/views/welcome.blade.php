@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
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

@endsection
