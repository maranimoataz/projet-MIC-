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
            <li>Efficacité Energétique dans la Mine, Application de l’Intelligence Artificielle</li>
          </ol>
        </div>
      </div>
    </section>
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="pt-lg-0 col-sm-12 col-md-9">
                        <div class="info-box p-5">
                            <div class="section-title">
                                <h1><B><span style="color: #566885;">Efficacité Energétique dans la Mine, Application de l’Intelligence Artificielle</span></B></h1>
                            </div>
                            <h1 class="p-3 pb-5" style="color: #566885;">
                                Efficacité Energétique dans la Mine, Application de l’Intelligence Artificielle
                            </h1>
                            <div class="entry-img p-5">
                                <img src="<?php echo url('/'); ?>/img/realisations/these_7/1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="text-start">
                                <h1 class="p-3">Problématique</h1>
                                <h3 class="p-4">
                                    Les prix de l’énergie ne cessent d’augmenter à un rythme alarmant et l’intérêt pour la responsabilité environnementale des industriels n’a jamais été aussi élevé.
                                    L'industrie minière en particulier cherche donc des moyens d’économiser l’énergie, de réduire leurs émissions de carbone et surtout d’optimiser leur rentabilité.
                                    Bien que la gestion totale de l’énergie soit complexe, il faut bien chercher quelques solutions qui peuvent être adoptées pour rendre la mine plus éconergétique et moins coûteuse à exploiter.
                                </h3>
                                <div class="entry-img text-center pb-3">
                                    <img src="<?php echo url('/'); ?>/img/realisations/these_7/2.jpg" alt="" class="img-fluid align-self-center">
                                </div>
                                <h1 class="p-3">Objectifs</h1>
                                <h3 class="p-4">
                                    L’optimisation de la consommation énergétique de la mine, par le développement d’un digital twin basé sur l’intelligence artificielle pour la gestion de l’énergie sur un site minier pilote.
                                </h3>
                                <div class="entry-img text-center pb-3">
                                    <img src="<?php echo url('/'); ?>/img/realisations/these_7/3.jpg" alt="" class="img-fluid align-self-center">
                                </div>
                                <h1 class="p-3">Valeurs Ajoutées</h1>
                                <h3 class="p-4">
                                    <ul>
                                        <li>
                                            <b>Développer une plateforme pour la collecte des données, la visualisation du flux énergétique en temps réel, et la gestion des alertes dans le cas d'une anomalie.</b>
                                        </li>
                                        <li>
                                            <b>Optimiser la consommation énergétique des broyeurs, ventilateurs et pompes.</b>
                                        </li>
                                        <li>
                                            <b>Simulation des nouveaux scénarios : on se basent sur des paramètres d’énergie et de process.</b>
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
