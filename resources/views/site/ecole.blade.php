@extends('site.header')

@section('content')

  <!--==========================
    Intro Section
  ============================-->
  <style>
      .seconde{
          padding:70px 0px;
          margin-top:70px;
      }
      .text{
          color:#fff;
          font-weight:bold;
      }
      .titre h1{
        font-weight:bolder!important;
      }
      .titre img{
          border-radius: 8px;
          margin-bottom: 20px;
      }
      .content{
          padding-left: 60px;
      }
      .content p{
          font-size: 16px;
      }
      .content h4{
          font-size: 28px;
          font-weight:bolder!important;

      }
  </style>


   <section class="">
    <div class="container">
      <div class="row">
         
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">  

    <section id="services" class="section-bg">
      <div class="container">
        <br>
        <div class="row">
          <div class="col-md-6 col-lg-6 titre data-wow-duration="1.4s">
              <h1 class="cta-red">Une formation unique qui positionne 
                  <span>l'apprenent</span>au coeur du programme.</h1>
          </div>
          <div class="col-md-6 col-lg-6 data-wow-duration="1.4s">
            <p>
               Depuis 5 ans, nous avons constamment fait évoluer notre programme en prenant en considération 
               les besoins de nos élèves lorsqu'ils apprennent à coder. Nos professeurs, formés en interne, 
               sont présents pendant tout la durée de la formation et s'adaptent à la vitesse de chaque 
               élève. Grâce à cet accompagnement, Le Wagon est classé première formation Développeur 
               Web ("coding bootcamp") dans le monde sur les plateformes de référence (Switchup, Coursereport) 
               depuis plusieurs années.
            </p>
          </div>
        </div>
        <hr>
        <br>
        <div class="row">
          <div class="col-md-6 col-lg-6 titre data-wow-duration="1.4s">
              <img src="{{asset('/site/img/profil.jpg')}}" class="img-responsive" width="550">
              <p class="text-center">Une formation unique qui positionne 
                  <span>l'apprenent</span>au coeur du programme.</p>
          </div>
          <div class="col-md-6 col-lg-6 content data-wow-duration="1.4s">
            <h4>Une pedagogie qui nous indentifie</h4>
            <p>
                Après la formation, c'est le début d'une nouvelle vie. Nos alumni ont un accès à 
                notre plateforme éducative à vie et bénéficient des mises à jour de vidéos 
                et tutoriels sur les derniers outils et les meilleures pratiques du développement 
                web. Mais plus important encore, nos alumni appartiennent à une communauté et un 
                réseau international pour s'entraider et partager des opportunités sur notre slack 
                et nos plateformes.
            </p>
            <h4>L'edutiant au coeur de nos thematique</h4>
            <p>
                Le Wagon vous apprend à coder des produits web. Pendant la formation, nos élèves 
                apprennent à construire des applications web fonctionnelles et esthétiques, 
                de la base de données au navigateur. Ils apprennent également à travailler 
                au sein d'une équipe de développeurs et à adopter les process utilisés par 
                les startups. Les élèves de la formation Développeur Web du Wagon apprennent 
                à créer des produits, mais aussi à réfléchir et résoudre des problèmes comme 
                des développeurs.
            </p>
          </div>
        </div>
        <hr>
        <br>
        <div class="row">
           <div class="col-md-6 col-lg-3 data-wow-duration="1.4s">
              <div class="boxer-cours">
                   <img class="img-responsive img-cours" src="{{asset('/site/img/formateur.jpg')}}">
                   <div class="cours"><h5 class="title-boxer">Ekissi eric</h5></div>
              </div>
           </div>
           <div class="col-md-6 col-lg-3 data-wow-duration="1.4s">
              <div class="boxer-cours">
                   <img class="img-responsive img-cours" src="{{asset('/site/img/formateur.jpg')}}">
                   <div class="cours"><h5 class="title-boxer">Ekissi eric</h5></div>
              </div>
           </div>
           <div class="col-md-6 col-lg-3 data-wow-duration="1.4s">
              <div class="boxer-cours">
                   <img class="img-responsive img-cours" src="{{asset('/site/img/formateur.jpg')}}">
                   <div class="cours"><h5 class="title-boxer">Ekissi eric</h5></div>
              </div>
           </div>
           <div class="col-md-6 col-lg-3 data-wow-duration="1.4s">
              <div class="boxer-cours">
                   <img class="img-responsive img-cours" src="{{asset('/site/img/formateur.jpg')}}">
                   <div class="cours"><h5 class="title-boxer">Ekissi eric</h5></div>
              </div>
           </div>
        </div>
      </div>
    </section><!-- #services -->




    <!--==========================
      Call To Action Section
    ============================-->

@endsection