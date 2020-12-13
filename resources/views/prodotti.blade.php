@extends('layouts.app')

@section('content')
      <div class="nav-tools">
        <div class="flex-top">
          <div>
            <div class="title m-b-md flex-title bubbles">
              <img class="comb imgsx"src="img/comb.png" alt="404">
              <a href="{{route('index')}}">L'APE CURIOSA</a>
              <img class="comb " src="img/comb.png" alt="404">
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


      <div style="background-color: #e47a2e;color:#121212;padding:40px 0;position:relative;" class="content">
        <div class="row justify-content-center">
          <div class="col-xs-12 col-md-6 col-lg-4  flex-centre ">
            <h2 style="font-size: 2rem;font-weight: bold;">ALTRI PRODOTTI</h2>
          </div>
        </div>
      </div>



      <div class="contenuto">
        <div class="container content">
          <div class="row justify-content-center">
              @foreach ($products as $product)
              @if ($product-> available)
                <div class="col-xs-6 col-md-6 col-lg-4 product flex-centre ">
                  <div class="">
                    <img src="{{$product-> image}}" alt="">
                  </div>
                  <div class="">
                    <h3>{{$product-> title}}</h3>
                    <div class="prezzo-peso">
                      <p>{{$product-> weight}}</p>
                      <p>{{$product-> price}}$</p>
                    </div>

                  </div>

                </div>
              @endif
            @endforeach
          </div>
      </div>


@endsection
