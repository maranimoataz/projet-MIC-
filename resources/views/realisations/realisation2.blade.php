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
            <li>Digital Twin for Mine Value Chain Optimizations</li>
          </ol>
        </div>
      </div>
    </section>
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
            <div class="row">
                <div class="pt-lg-0 col-sm-12 col-md-9">
                    <div class="p-5 info-box">
                        <div class="section-title">
                            <h1><B><span style="color: #566885;">Digital Twin for Mine Value Chain Optimizations</span></B></h1>
                        </div>
                        <h1 class="p-3 pb-5" style="color: #566885;">
                            Couplant simulation et données, le jumeau numérique colle au plus près du système réel qu’il modélise. Le secteur minier l’utilise pour surveiller, maintenir et optimiser ses machines et ses produits et éventuellement améliorer les performances opérationnelles des unités de production minières.
                        </h1>
                        <div class="entry-img p-5">
                            <img src="<?php echo url('/'); ?>/img/realisations/these_2/1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-start">
                            <h1 class="p-3">Problématique</h1>
                            <h3 class="p-4">
                                Pour la première fois depuis de nombreuses décennies, l'innovation technologique a dépassé l'innovation des processus d'affaires en permettant simultanément d'obtenir une croissance des revenus et de réduire les coûts, ce qui va de pair avec les grands principes de la quatrième révolution industrielle, appelant à atteindre de nouveaux niveaux de valeur commerciale dans l'ensemble du réseau et à rechercher l'excellence numérique pour la cocréation de valeur dans toute la chaîne de valeur. Aujourd'hui, l'exploitation minière est bien plus une question d'eﬀiciency que d'expansion, et l'un des principaux catalyseurs de ce développement est la numérisation. Sous le titre "faire plus avec moins", les appareils connectés, la collecte de données, l'analyse et les machines autonomes promettent des gains d'eﬀiciency importants et une meilleure productivité à moindre coût.
                                Aujourd'hui, sur un site minier, on trouve un grand nombre d'équipements et de systèmes indépendants, et chacun de ces équipements, à travers les DCS (distributed control systems) et les PLC (programmable logic controller), dispose de ses propres informations et interfaces destinées aux opérateurs à des fins de supervision.
                                Les calculateurs (PLC, DCS) sont souvent déployés dans l'industrie minière pour le contrôle automatique et la supervision des unités industrielles et sont reliés à des capteurs et des actionneurs permettant de connaître et d'assurer le fonctionnement continu de la production dans des conditions optimales et stables. Les données captées par les instruments de mesure sont principalement utilisées par des ordinateurs pour la supervision (visualisation des quantités mesurées et de l'état des équipements) ou par des programmes de contrôle pour la gestion des unités. Toutes ces données sont rarement collectées et stockées pour être analysées à des fins de prédiction, d'optimisation et de prise de décision. Cette masse de données peut être exploitée dans le cadre d'une stratégie de transformation numérique par le développement de produits et de services numériques assurant une productivité accrue et une meilleure eﬀicacité opérationnelle des unités minières.
                            </h3>
                            <div class="entry-img text-center pb-3" >
                                <img src="<?php echo url('/'); ?>/img/realisations/these_2/2.jpg" alt="" class="img-fluid">
                            </div>
                            <h1 class="p-3">Objectifs</h1>
                            <h3 class="p-4">
                                Un Digital Twin peut être défini comme le modèle (réplique) numérique d’un objet réel. Il permet de superviser d’une manière dynamique les états et le fonctionnement  de l’objet réel (physique) auquel il est attaché. Ceci en se basant sur les données issues en temps réel de ce même objet réel permettant ainsi au jumeau numérique d’imiter et de guider l’objet réel qu’il modélise.
                                Le cycle de communication entre le Digital Twin et son objet réel qu’il imite (physique) met en évidence le profond potentiel du jumeau numérique : des milliers de capteurs prennent des mesures en continu qui sont transmises à une plateforme numérique qui, à son tour, effectue ses analyses et ses prédictions en temps quasi réel et propose éventuellement des optimisations nécessaires pour une performance optimal, de plus le Digital Twin renvoie des actions à l’objet réel (physique) en termes de raffinement et d'amélioration grâce à des actuateurs.
                            </h3>
                            <div class="entry-img text-center pb-3">
                                <img src="<?php echo url('/'); ?>/img/realisations/these_2/3.jpg" alt="" class="img-fluid">
                            </div>
                            <h1 class="p-3">Valeurs Ajoutées</h1>
                            <h3 class="p-4">
                                Le fait de disposer d'un jumeau numérique pour un bien présente de nombreuses valeurs et avantages :
                                <ul>
                                    <li>
                                        <span><b>Surveillance et contrôle à distance en temps réel :</b></span> La surveillance à distance implique généralement la visualisation des opérations à travers un écran ou des tableaux de bord présentant un modèle numérique. Par conséquent, le Digital Twin, par sa nature même, permet la simulation, la prédiction et l'optimisation afin d'améliorer l’efficacité et d’augmenter les performances du système en temps réel et permet également la commande à distance par le biais d'actionneurs utilisant des mécanismes de rétroaction.
                                    </li>
                                    <li>
                                        <span><b>Une plus grande efficacité des opérateurs :</b></span> grâce à des interfaces faciles à utiliser et à comprendre, les opérateurs et les ingénieurs sont plus enclins à surveiller les systèmes à distance, et les équipes peuvent mieux utiliser leur temps en améliorant les synergies et les collaborations, ce qui conduit à une plus grande productivité.
                                    </li>
                                    <li>
                                        <span><b>Maintenance prédictive et programmation :</b></span> Grâce aux données capturées par les capteurs et une analyse intelligente, les défauts du système peuvent être détectés bien à l'avance. En outre, au-delà de la vérification de la viabilité d'un composant, le Digital Twin permet de détecter les défauts du système bien à l'avance.
                                    </li>
                                    <li>
                                        <span><b>Un système d'aide à la décision plus efficace et mieux informé :</b></span> La disponibilité de données quantitatives et d'analyses avancées en temps réel permettra de prendre des décisions plus rapides et mieux informées. L'objectif principal du Digital Twin est de faciliter le processus de prise de décision et de permettre l'automatisation des décisions par la pré-simulation.
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
                        <h4>Pr. El Hassan ABDELWAHED</h4>
                            <span>Directeur de thèse</span>
                            <span>Professeur, Département informatique, laboratoire LISI, FSSM, UCA Marrakech</span>
                            <h4>Pr. Salah BAINA </h4>
                            <span>Professeur, Département informatique, ENSIAS</span>
                            <h4>Pr. Aimad QAZDAR </h4>
                            <span>Professeur, Département informatique, laboratoire LISI, FSSM, UCA Marrakech</span>
                            <h4>M. François BOURZEIX </h4>
                            <span>Manager, Département de recherche et dévelopement, MAScIR</span>
                            <h4>M. Mohammed KRAFI </h4>
                            <span>Manager, Ingénierie et exploitation d'usines de traitement métallurgique, Group Managem</span>
                            <h4>M. Abdellah BOULAAMAIL </h4>
                            <span>Manager, Ingénierie et exploitation d'usines de pilote, Reminex SA</span>
                            <h4>Ph.D Oussama HASIDI</h4>
                            <span>PhD student, Département informatique, laboratoire LISI, FSSM, UCA Marrakech</span>
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
