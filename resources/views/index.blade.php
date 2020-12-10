@extends('layouts.app')

@section('content')
      <div class="home">

        <div class="flex-center position-ref full-height">
          <div>
            <div class="title m-b-md flex-title bubbles">

              <img class="comb imgsx"src="img/comb.png" alt="404">
                <a href="{{route('index')}}">L'APE CURIOSA</a>
                <img class="comb i" src="img/comb.png" alt="404">
            </div>

            <div class="links">
                <a href="{{route('chisiamo')}}">chi siamo</a>
                <a href="{{route('inostrimieli')}}">i nostri mieli</a>
                <a href="{{route('prodotti')}}">prodotti dell'alveare</a>
                <a href="{{route('attestati')}}">Attestati</a>
                <a href="{{route('contatti')}}">Contatti</a>
                <a href="{{route('info')}}">Info</a>
            </div>
          </div>
        </div>
      </div>

@endsection
