<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Partenaires - Projet MIC</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


    @include('components.css')
    <link href="<?php echo url('/'); ?>/css/flickity.min.css" rel="stylesheet">

    <style>
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .galery-img{
            height: 30%;
            overflow: hidden;
        }

        .gallery-cell {
            width: 33%;
        }
    </style>
</head>

<body>

    @include('components.nav')

    <main class="pt-5" id="main">

    <!-- ======= Blog Section ======= -->
        <section class="pt-5 breadcrumbs">
          <div class="container">
              <div class="d-flex justify-content-between align-items-center">
                  <h2>Partenaires</h2>
                  <ol>
                      <li><a href="/">Accueil</a></li>
                      <li>Partenaires</li>
                  </ol>
              </div>
          </div>
        </section>

        <!-- ======= Blog Section ======= -->
        <section>

          <div class="container col-sm-12 col-md-10" data-aos="zoom-in">
              <div class="row" data-aos="fade-up">
                  <h1 class="pb-5">Partnership</h1>
                  <h3>
                  <p> Le leader de l’industrie métallurgique en Afrique Managem, avec sa filiale d’expert en recherche et développement Reminex, en collaboration avec la fondation incubatrice de la digitalisation au Maroc MASciR,  et les grands partenaires académiques, Université Cadi Ayyad, l’Ecole Nationale Supérieure des Mines de Rabat et l’ENSIAS (Université M5 Rabat) lancent pour la première fois au maroc, un projet de recherche et développement intitulé « Mine Intelligente et Connectée », dans le cadre de l’appel à projet Al Khawarizmi par la CNRST.</p> 
                  <p> Ce projet va donner lieu à des travaux de recherche grâce à 7 réalisations industrielles innovantes basées sur l’intelligence artificielle au profit de l'industrie minière. </p>
                  </h3>
              </div>
              <div class="align-content-center p-5">
                  <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                      <div class="gallery-cell text-center">
                          <a href="/partenaires/managem">
                              <img src="<?php echo url('/'); ?>/img/partenaires/managem.png" class="galery-img w-75">
                          </a>
                      </div>
                      <div class="gallery-cell text-center">
                          <a href="/partenaires/mascir">
                              <img src="<?php echo url('/'); ?>/img/partenaires/mascir.png" class="galery-img w-75">
                          </a>
                      </div>
                      <div class="gallery-cell text-center">
                          <a href="/partenaires/cnrst">
                              <img src="<?php echo url('/'); ?>/img/partenaires/cnrst.png" class="galery-img w-75">
                          </a>
                      </div>
                      <div class="gallery-cell text-center">
                          <a href="/partenaires/uca">
                              <img src="<?php echo url('/'); ?>/img/partenaires/uca.png" class="galery-img w-75">
                          </a>
                      </div>
                      <div class="gallery-cell text-center">
                          <a href="/partenaires/ensmr">
                              <img src="<?php echo url('/'); ?>/img/partenaires/ensmr.png" class="galery-img w-75">
                          </a>
                      </div>
                      <div class="gallery-cell text-center">
                          <a href="/partenaires/ensias">
                              <img src="<?php echo url('/'); ?>/img/partenaires/ensias.png" class="galery-img w-75">
                          </a>
                      </div>
                  </div>
              </div>
          </div>
        </section>
    </main>

    @include('components.footer')

    <script src="<?php echo url('/'); ?>/js/flickity.min.js"></script>


</body>

</html>
