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
            <li>Prédiction des instabilités des terrains et prévention des chutes de blocs en mines souterraines par intelligence artificielle</li>
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
                                  <h1><B><span style="color: #566885;">Prédiction des instabilités des terrains et prévention des chutes de blocs en mines souterraines par intelligence artificielle</span></B></h1>
                              </div>
                              <h1 class="p-3 pb-5" style="color: #566885;">
                                  Prédiction des instabilités des terrains et prévention des chutes de blocs en mines souterraines par intelligence artificielle.
                              </h1>
                              <div class="entry-img p-5">
                                  <img src="<?php echo url('/'); ?>/img/realisations/these_3/1.jpg" alt="" class="img-fluid h-auto">
                              </div>
                              <div class="text-start">
                                  <h1 class="p-3">Problématique</h1>
                                  <h3 class="p-4">
                                      L’excavation des ouvrages dans le milieu souterrain, dont celle des mines particulièrement, présente plusieurs risques relatifs à la stabilité des massifs rocheux.  En effet, ceci peut générer différentes instabilités souterraines comme les chutes de blocs rocheux ou les déformations excessives des parois des cavités. Une prédiction adéquate de ces phénomènes est ainsi primordiale pour anticiper tout accident pouvant générer des pertes humaines ou matérielles lors de l’exécution des travaux dans les mines souterraines.
                                  </h3>
                                  <div class="entry-img text-center pb-3">
                                      <img src="<?php echo url('/'); ?>/img/realisations/these_4/2.jpg" alt="" class="img-fluid h-auto">
                                  </div>
                                  <h1 class="p-3">Objectifs</h1>
                                  <h3 class="p-4">
                                      <ul>
                                          <li>
                                              <b>Étudier et analyser les différents risques d’instabilités rocheuses en milieu souterrain.</b>
                                          </li>
                                          <li>
                                              <b> Élaborer des modèles de prédiction des instabilités rocheuses.</b>
                                          </li>
                                          <li>
                                              <b>Mettre en place un système de monitoring pour la prévention des instabilités rocheuses dans les mines souterraines.</b>
                                          </li>
                                      </ul>
                                  </h3>
                                  <div class="entry-img text-center pb-3">
                                      <img src="<?php echo url('/'); ?>/img/realisations/these_4/3.jpg" alt="" class="img-fluid h-auto">
                                  </div>
                                  <h1 class="p-3">Valeurs Ajoutées</h1>
                                  <h3 class="p-4">
                                      Maximisation de la sécurité du personnel et des équipements présents dans les mines souterraines à travers:
                                      <ul>
                                          <li>
                                              <b>Un monitoring en temps réel des massifs rocheux.</b>
                                          </li>
                                          <li>
                                              <b>Une prédiction des instabilités rocheuses éventuelles à travers différents types d’indices initiaux.</b>
                                          </li>
                                          <li>
                                              <b>Un système d’aide à la décision anticipée pour une meilleure prévention en cas de risque détecté.</b>
                                          </li>
                                      </ul>
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
