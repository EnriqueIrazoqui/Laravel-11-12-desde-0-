@extends('master')

@section('content')
  <h1>contact 2</h1>
    <h2>{{$name}}</h2>

    @if($name != "Andres")
    Tu nombre no es Andres
    @else
    <h2>Tu nombre no es Andres</h2>
    @endif

    <ul>
        @foreach([1,2,3,4,5] as $item)
            <li>{{$item}}</li>
        @endforeach

@endsection
