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
            <li>Digitalisation de la Sécurité de la Mine par Vision par Ordinateur basée sur l’IA</li>
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
                                <h1><B><span style="color: #566885;">Digitalisation de la Sécurité de la Mine par Vision par Ordinateur basée sur l’IA</span></B></h1>
                            </div>
                            <h1 class="p-3 pb-5" style="color: #566885;">
                                Prédiction des instabilités des terrains et prévention des chutes de blocs en mines souterraines par intelligence artificielle.
                            </h1>
                            <div class="entry-img p-5">
                                <img src="<?php echo url('/'); ?>/img/managemACTU.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="text-start">
                                <h1 class="p-3">Problématique</h1>
                                <h3 class="p-4">
                                    L’amélioration de la Sécurité des personnels dans la mine souterraine est un enjeu quotidien critique. En effet, une cause majeure d’accidents mortels dans la mine est la circulation d’engins miniers et de personnels sur des espaces communs. La mine est dotée de nombreux engins qui ne permettent pas aux équipes opérationnelles d’avoir à tout moment la visibilité nécessaire et la maîtrise des espaces de travail en termes de circulation (du fait du manque de visibilité ou de présence de poussières). Cela génère des accidents avec des risques importants sur la santé des personnels.
                                </h3>
                                <h1 class="p-3">Objectifs</h1>
                                <h3 class="p-4">
                                    Cette thèse utilisera différents types de capteurs et développera des algorithmes d’intelligence artificielle à base de machine learning et deep learning afin de prévenir les accidents entre engins miniers et opérateurs et ainsi améliorer la sécurité des personnels de la mine.
                                </h3>
                                <h1 class="p-3">Valeurs Ajoutées</h1>
                                <h3 class="p-4">
                                    <ul>
                                        <li>
                                            <b>Maximisation de la sécurité des personnels de la mine souterraine.</b>
                                        </li>
                                        <li>
                                            <b>Détection des engins (mouvement des engins, orientation, vitesse).</b>
                                        </li>
                                        <li>
                                            <b>Détection du personnel (Localisation, Identification, Classification des comportements du personnel).</b>
                                        </li>
                                        <li>
                                            <b>Détection des obstacles (rochers, matériels oubliés, etc.)</b>
                                        </li>
                                        <li>
                                            <b>Détection des accidents et des situations à risque.</b>
                                        </li>
                                        <li>
                                            <b>Lever des alertes en cas d’apparition de risques pour la sécurité liés aux chutes de blocs ou aux accidents d’engins.</b>
                                        </li>
                                        <li>
                                            <b>Système de prédiction des accidents basé sur l’historique des accidents en termes de temps.</b>
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
