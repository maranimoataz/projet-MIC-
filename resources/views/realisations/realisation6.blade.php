<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Réalisation - MIC</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    @include('components.css')

</head>

<body>

    @include('components.nav')

  <main class="pt-5" id="main">
    <section class="pt-5 breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Réalisations</h2>
          <ol>
            <li><a href="/">Accueil</a></li>
            <li><a href="/realisations">Réalisations</a></li>
            <li>Predictive maintenance</li>
          </ol>
        </div>
      </div>
    </section>
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="pt-lg-0 col-sm-12 col-md-9">
                        <div class="p-5 info-box">
                            <div class="section-title">
                                <h1><B><span style="color: #566885;">Predictive maintenance</span></B></h1>
                            </div>
                            <h1 class="p-3 pb-5" style="color: #566885;">
                                text
                            </h1>
                            <div class="text-start">
                                <div class="entry-img p-5">
                                    <img src="<?php echo url('/'); ?>/img/managemACTU.jpg" alt="" class="img-fluid">
                                </div>
                                <h1 class="p-3">Problématique</h1>
                                <h3 class="p-4">
                                    text
                                </h3>
                                <h1 class="p-3">Objectifs</h1>
                                <h3 class="p-4">
                                    text

                                </h3>
                                <h1 class="p-3">Valeurs Ajoutées</h1>
                                <h3 class="p-4">
                                    text
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 p-5">
                        <div class="member">
                            <h2 class="pb-5">Equipe</h2>
                            <div class="member-info">
                                <h4>personne 1</h4>
                                <span>rôle</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </main>

    @include('components.footer')

</body>

</html>
