@extends('layouts.app')

@section('content')
      <div class="nav-tools">
        <div class="flex-top">
          <div>
            <div class="title m-b-md flex-title bubbles">
              <img class="comb imgsx"src="../img/comb.png" alt="404">
              <a href="{{route('index')}}">L'APE CURIOSA</a>
              <img class="comb " src="../img/comb.png" alt="404">
          </div>
        </div>
        </div>


        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" ></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="nav-item">
                <li class="nav-item active">
                    <div class="links-nav">
                        <a class="nav-link" href="{{route('chisiamo')}}">chi siamo</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <div class="links-nav">
                        <a class="nav-link" href="{{route('inostrimieli')}}">i nostri mieli</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <div class="links-nav">
                        <a class="nav-link" href="{{route('prodotti')}}">prodotti dell'alveare</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <div class="links-nav">
                        <a class="nav-link" href="{{route('attestati')}}">Attestati</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <div class="links-nav">
                        <a class="nav-link" href="{{route('contatti')}}">Contatti</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <div class="links-nav">
                        <a class="nav-link" href="{{route('info')}}">Info</a>
                    </div>
                </li>
            </ul>

          </div>
          </nav>
        </div>
      </div>

      <div style="background-color: #e47a2e;color:#121212;padding:15px 0;position:relative;" class="content">

      </div>


      <div style="background-color: #121212;color:#e47a2e;padding:40px;" class="content">
        <div class="container ">
          <div class="row show-prodotto">
            <h2 style="font-size: 2rem;font-weight: bold;padding-bottom:20px;">{{$samedata -> title}}</h2>
            <div class="row">
            <div class="col-xs-12">
            <img style="width: 100%;"src="..\{{$samedata-> image}}" alt="">
            </div>
            </div>
            <h3 style="font-size: 1.5rem;padding:20px;">Descrizione:</h3>
            <p style="font-size: 1rem;padding-bottom:20px;"> {{$samedata -> description}}</p>
            <div class="row" >
              @foreach ($honey as $key)
                <div class="col-xs-12 col-md-6 col-lg-4" style="margin: 20px 0">
                  <div class="prezzi">
                    <p>{{$key->weight}}</p>
                    <h3>{{$key->price}} €</h3>
                  </div>
                </div>
              @endforeach

            </div>
          </div>
      </div>


      </div>





@endsection
