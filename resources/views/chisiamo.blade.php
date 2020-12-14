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






      <div class="contenuto">

          <div class="container content">
            <div class="row">
              <div class="col-xs-12 col-md-6 col-lg-6 blocco-flat flex-centre">
                <h2>Chi siamo</h2>
                <div class="intermezzo">
                  <hr>
                  <img class="imgintemezzo "src="img/apeintermezzo.png" alt="404">
                  <hr>
                </div>
                <p>Siamo una piccola azienda di produzione familiare che punta sulla qualità più che sulla quantità dei prodotti. Le nostre api vengono "accudite" solo con trattamenti naturali e anche l'estrazione del miele viene fatta in modo da rispettare il naturale decorso della vita di questi piccoli insetti.Le postazioni dei nostri alveari ci permettono di produrre diversi tipi di miele (Acacia, Castagno, Millefiori ecc..) e grazie al nomadismo anche alcuni pregiati mieli di montagna (Flora Alpina e Rododendro). Inoltre realizziamo, oltre al miele, altri prodotti legati alla vita dell'alveare come propoli e pappa reale.</p>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6 blocco-flat flex-centre">
                  <img class="imgesplicativa"src="img/IMG_20170703_182506.jpg" alt="">
                </div>
              </div>
            </div>

            <div class="container-fluid content">
              <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-3 blocco-flat flex-centre">
                  <img class="profilo"src="img/IMG_2028.jpg" alt="">
                </div>

                <div class="col-xs-12 col-md-6 col-lg-3 blocco-flat flex-sx">
                  <h2>Patrizia</h2>
                  <div class="intermezzo">
                    <hr>
                    <img class="imgintemezzo "src="img/apeintermezzo.png" alt="404">
                    <hr>
                  </div>
                  <p>Sono Patrizia Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div class="col-xs-12 col-md-6 col-lg-3 blocco-flat flex-dx">
                    <h2>Maurizio</h2>
                    <div class="intermezzo">
                      <hr>
                      <img class="imgintemezzo "src="img/apeintermezzo.png" alt="404">
                      <hr>
                    </div>
                    <p>Sono Maurizio Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                  <div class="col-xs-12 col-md-6 col-lg-3 blocco-flat flex-centre">
                    <img class="profilo"src="img/IMG_2250.jpg" alt="">
                  </div>
                </div>
              </div>

            <div class="container content">
              <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 blocco-flat flex-centre">
                  <img class="imgesplicativa"src="img/IMG_20180619_115705.jpg" alt="">
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6 blocco-flat flex-centre">
                  <h2>Chi siamo</h2>
                  <div class="intermezzo">
                    <hr>
                    <img class="imgintemezzo "src="img/apeintermezzo.png" alt="404">
                    <hr>
                  </div>
                  <p>Siamo una piccola azienda di produzione familiare che punta sulla qualità più che sulla quantità dei prodotti. Le nostre api vengono "accudite" solo con trattamenti naturali e anche l'estrazione del miele viene fatta in modo da rispettare il naturale decorso della vita di questi piccoli insetti.Le postazioni dei nostri alveari ci permettono di produrre diversi tipi di miele (Acacia, Castagno, Millefiori ecc..) e grazie al nomadismo anche alcuni pregiati mieli di montagna (Flora Alpina e Rododendro). Inoltre realizziamo, oltre al miele, altri prodotti legati alla vita dell'alveare come propoli e pappa reale.</p>
                  </div>
                </div>
              </div>

      </div>


@endsection
