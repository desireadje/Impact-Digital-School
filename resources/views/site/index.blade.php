@extends('site.header')

@section('content')

  <!--==========================
    Intro Section
  ============================-->


   <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h1>Rendre le digital accessible a tous tel est notre mission.</h1>
          <br>
            <div id="custom-search-input">
                <div class="input-group ">
                    <input type="text" class="form-control input-lg" placeholder="Que souhaitez-vous apprendre" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </span>
                </div>
             </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="{{asset('/site/img/intro-img.png')}}" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">  

    <!--==========================
      Services Section
    ============================-->
    <section class="section">
      <div class="container" id="cible">
        <div class="row">
          <div class="col-md-6 col-lg-5" data-wow-duration="1.4s">
            <div class="cible-unit">
              <img src="{{asset('/site/img/pourquoi.png')}}"width="350">
            </div>
          </div>

          <div class="col-md-6 col-lg-7" data-wow-duration="1.4s">
            <div class="cible">
              <img src="{{asset('/site/img/01.png')}}">
              <div class="cible-unit">
                <h1 class="title-eve cta-yellow"><span>Qui peut suivre nos formations</span></h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  <br><br>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-7" data-wow-duration="1.4s">
            <div class="cible">
              <img src="{{asset('/site/img/02.png')}}">
              <div class="cible-unit">
                <h1 class="title-eve cta-yellow"><span>Pourquoi suivre nos formations</span></h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  <br><br>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                </p>
              </div>
            </div>
          </div>

           <div class="col-md-6 col-lg-5" data-wow-duration="1.4s">
            <div class="cible-unit">
              <img src="{{asset('/site/img/qui-somme-nous.png')}}"width="350">
            </div>
          </div>
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h1 class="title-eve cta-red lg-title">Démarons cette <span>aventure</span> ensemble</h1>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
              eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <ul class="btn-nav lg-mt">
              <li><a href="" class="btn-lg-1">Participez</a></li>
              <li><a href="" class="btn-lg-2">En savoir + </a></li>
            </ul>
            
          </div>
          <div class="col-lg-5 lg-pt">
              <img class="img-responsive" src="{{asset('/site/img/web.jpg')}}">
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s">
            <a href="{{ route('detailCours') }}">
            <div class="boxer-cours">
              <img class="img-responsive img-cours" src="{{asset('/site/img/tesmonial.jpg')}}">
              <div class="cours">
                 <h5 class="title-boxer">Apprendre developpement web</h5>
                 <p class="description">40 heures de formation.</p>
                 <br>
                 <!--<a href="" class="btn-1">Participer</a>-->
              </div>
            
            </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s">
            <a href="">
            <div class="boxer-cours">
              <img class="img-responsive img-cours" src="{{asset('/site/img/tesmonial.jpg')}}">
              <div class="cours">
                 <h5 class="title-boxer">Demarer le frontent avec Vus.js</h5>
                 <p class="description">40 heures de formation.</p>
                 <br>
                 <!--<a href="" class="btn-1">Participer</a>-->
              </div>
            
            </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s">
            <a href="{{ route('detailCours') }}">
            <div class="boxer-cours">
              <img class="img-responsive img-cours" src="{{asset('/site/img/tesmonial.jpg')}}">
              <div class="cours">
                 <h5 class="title-boxer">Laravel dans toute sa plamdeur</h5>
                 <p class="description">40 heures de formation.</p>
                 <br>
                 <!--<a href="" class="btn-1">Participer</a>-->
              </div>
            
            </div>
            </a>
          </div>

          
        </div>

        <!--<div class="row">
          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s">
            <div class="boxer" href="#myModal" data-toggle="modal">
              <span>Workshop</span>
              <h5 class="title-boxer">Pouquoi appredre le php</h5>
              <p class="description"><img src="{{asset('/site/img/clock.png')}}"> août 26, 2019 - 07:00 PM</p>
              <p class="description"><img src="{{asset('/site/img/maps.png')}}"> Espace jokko-connect Valon</p>
              <hr>
              <div class="img-master"><img src="{{asset('/site/img/ekissi.png')}}"></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s">
            <div class="boxer" href="#myModal" data-toggle="modal" >
              <span>Workshop</span>
              <h5 class="title-boxer">Pouquoi appredre le php</h5>
              <p class="description"><img src="{{asset('/site/img/clock.png')}}"> août 26, 2019 - 07:00 PM</p>
              <p class="description"><img src="{{asset('/site/img/maps.png')}}"> Espace jokko-connect Valon</p>
              <hr>
              <div class="img-master"><img src="{{asset('/site/img/ekissi.png')}}"></div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 data-wow-duration="1.4s">
            <div class="boxer" href="#myModal" data-toggle="modal" >
              <span>Workshop</span>
              <h5 class="title-boxer">Pouquoi appredre le php</h5>
              <p class="description"><img src="{{asset('/site/img/clock.png')}}"> août 26, 2019 - 07:00 PM</p>
              <p class="description"><img src="{{asset('/site/img/maps.png')}}"> Espace jokko-connect Valon</p>
              <hr>
              <div class="img-master"><img src="{{asset('/site/img/ekissi.png')}}"></div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="module">
              <h3>Développement web et mobile</h3>
              <p>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              </p>
              <ul class="listview">
                <li><a href="">
                  <h4>Initiation au freamwork PHP Laravel</h4>
                  <small>Un programme avec des horraire flaicible (10 semaine)</small>
                </a></li>
                <li><a href="">
                  <h4>Introduction aux application mobile avec Flutter</h4>
                  <small>Un programme avec des horraire flaicible (10 semaine)</small>
                </a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="module">
              <h3>Design web et infographie</h3>
              <p>
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              </p>
              <ul class="listview">
                <li><a href="">
                  <h4>Web design UI/UX</h4>
                  <small>Un programme avec des horraire flaicible (10 semaine)</small>
                </a></li>
                <li><a href="">
                  <h4>Apprendre l'infographie </h4>
                  <small>Un programme avec des horraire flaicible (10 semaine)</small>
                </a></li>
              </ul>
            </div>
          </div>
        </div>-->

      </div>
    </section><!-- #services -->




    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="offset-lg-2 col-lg-8 text-center">
            <h2 class="cta-title">Renconter <span>nos Masters</span></h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>

        <div class="row">
        <div class="col-lg-12 padding-0">         
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <div class="box-carrousel">
                          <div class="row margin-0">
                            <div class="col-lg-5 message">
                               <div class="message-crl">
                                 <h1>Férié Ekissi</h1>
                                 <span>Développeur flustak</span>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                               </div>
                            </div>
                            <div class="col-lg-7 master">
                              <img class="img-responsive" src="{{asset('/site/img/tesmonial.jpg')}}">
                            </div>
                          </div>
                       </div>      
                    </div>
                    <div class="item carousel-item">
                        <div class="box-carrousel">
                          <div class="row margin-0">
                            <div class="col-lg-5 message">
                               <div class="message-crl">
                                 <h1>Yann KANGA</h1>
                                 <span>Développeur flustak</span>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                               </div>
                            </div>
                            <div class="col-lg-7 master">
                              <img class="img-responsive" src="{{asset('/site/img/tesmonial.jpg')}}">
                            </div>
                          </div>
                       </div>      
                    </div>
                </div>
                <!-- Carousel controls -->
               
                <ul class="list-inline direction">
                  <li><a class="arrow" href="#myCarousel" data-slide="prev"><i class="fas fa-angle-left"></i></a></li>
                  <li><a class="arrow" href="#myCarousel" data-slide="next"><i class="fas fa-angle-right"></i></a></li>
               </ul>
            </div>
        </div>
    </div>

      </div>
    </section><!-- #call-to-action -->
@endsection