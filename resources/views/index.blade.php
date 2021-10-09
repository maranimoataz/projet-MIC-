<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MIC PROJECT</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('components.css')
    <link href="<?php echo url('/'); ?>/css/flickity.min.css" rel="stylesheet">

    <style>
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .gallery-cell {
            width: 90%;
        }
    </style>

</head>

<body>

  <!-- ======= Navbar ======= -->

  @include('components.nav')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center zindex-dropdown">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
        <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
            <div class="gallery-cell text-center">
                <img src="<?php echo url('/'); ?>/img/mic.png" class="d-inline-block align-middle mr-2">
                <h2>Mine Intelligente Connectée</h2>
            </div>
            <div class="gallery-cell text-center">
                <img src="<?php echo url('/'); ?>/img/mic.png" class="d-inline-block align-middle mr-2">
                <h2>Mine Intelligente Connectée</h2>
            </div>
        </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= section Présentation du Projet ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-8">
                <div class="section-title">
                  <h1>Présentation du Projet</h1>
                </div>

                <div class="row p-4" data-aos="fade-up">
                  <div class="col-md-5">
                    <img src="<?php echo url('/'); ?>/img/industriemine.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-7">
                    <h2 class="pt-4 pb-4">L’industrie minière.</h2>
                    <p>
                     L’industrie minière est caractérisée par un environnement économique en permanence sous pression et très
                     contraignant (évolution imprévisible des prix des matières premières, épuisement des réserves minières, … etc.).
                     Afin d’atténuer en partie cette volatilité de l’écosystème, l’industrie minière est face à l’innovation.
                     La technologie évolue rapidement. L'intelligence artificielle, la réalité virtuelle et augmentée, l'Internet des
                     objets (IoT), le Big Data, l'analyse avancée, ...etc. ouvrent la voie à une évolution technologique plus poussée.
                     Ces technologies nouvelles et émergentes représentent une très large gamme d'équipements et de logiciels qui, une
                     fois connectés, peuvent amener un système à un tout autre niveau d'automatisation et d'intelligence, l’usage de
                     ces technologies pratiquement dans l'industrie a donné naissance à l’industrie 4.0.
                    </p>
                  </div>
                </div>

                <div class="row p-4" data-aos="fade-up">
                  <div class="col-md-5 order-1 order-md-2">
                    <img src="<?php echo url('/'); ?>/img/industrie4.jpeg" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-7 order-2 order-md-1">
                    <h2 class="pt-4 pb-4">Industrie 4.0</h2>
                    <p>
                     La transformation digitale de l’industrie (industrie 4.0) est basée sur l’usage de technologies digitales pour
                     l’élaboration de solutions innovantes pour le pilotage et la supervision des unités de production notamment dans l’industrie minière.
                    </p>
                  </div>
                </div>

                <div class="row p-4" data-aos="fade-up">
                  <div class="col-md-5">
                    <img src="<?php echo url('/'); ?>/img/partenariat.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-7">
                    <h2 class="pt-4 pb-4">Partenariats</h2>
                    <p>Dans ce sens, Managem, MASciR et les partenaires académiques : l’Ecole Nationale Supérieure des Mines de Rabat, l’ENSIAS
                    (Université M5 Rabat) et l’Université Cadi Ayyad de Marrakech lancent un projet de recherche intitulé « Mine Intelligente et
                    Connectée », dans le cadre de l’appel à projet Al Khawarizmi de la CNRST. Ce projet va donner lieu à des travaux de recherche
                    grâce à 7 réalisations innovantes basées sur l’intelligence artificielle au profit de l'industrie minière .</p>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <h3 class="sidebar-title">Rechercher</h3>
                    <div class="sidebar-item search-form">
                        <form action="\actualites" method="get">
                            <input type="text" name="q" placeholder="Rechercher une actualité">
                            <button type="submit"><i class="icofont-search"></i></button>
                        </form>
                    </div>
                    <h3 class="sidebar-title">Actualités récents</h3>
                    @if($recentActualites->count() == 0)
                        <p class="text-center">
                            Aucune récente actualité
                        </p>
                    @else
                        <div style="margin-left: 10px;">
                            <div class="splide__track sidebar-item recent-posts">
                                <ul class="splide__list">
                                    @foreach($recentActualites as $actualite)
                                        <div class="splide__slide p-2">
                                            <div class="post-item clearfix">
                                                <img src="<?php echo url('/'); ?>/{{ $actualite->img  }}" alt="" class="img-fluid pb-0 h-auto">
                                                <h4><a href="/evenements/{{$actualite->id}}">{{$actualite->titre}}</a></h4>
                                                <time datetime="{{$actualite->date}}">{{$actualite->date}}</time>
                                            </div>
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <h3 class="sidebar-title">Productions récents</h3>
                    @if($recentProduction->count() == 0)
                        <p class="text-center">
                            Aucune récente actualité
                        </p>
                    @else
                        @foreach($recentProduction as $production)
                            <div class="p-2">
                                <h4><a href="/productions/{{$production->id}}" style="color: #0d2735">{{$production->titre}}</a></h4>
                                <time style="font-size: x-small" datetime="{{substr($production->created_at, 0,10)}}">{{substr($production->created_at, 0,10)}}</time>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    </section>

  </main>

  <!-- ======= Footer ======= -->

  @include('components.footer')
  <script src="<?php echo url('/'); ?>/js/flickity.min.js"></script>


</body>

</html>
