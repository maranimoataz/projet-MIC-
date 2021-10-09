<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Productions scientifiques - MIC</title>
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
                <h2>Productions</h2>
                <ol>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/productions">Productions scientifiques</a></li>
                    <li>{{ $production->titre }}</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container col-sm-12 col-md-8">
            <div class="row">
                <div class="info-box pt-lg-0">
                    <div class="section-title pt-5">
                        <h1><B><span style="color: #566885;">{{ $production->titre }}</span></B></h1>
                    </div>
                    <div class="text-start p-5">
                        <h3>Resumé</h3>
                        <p class="pt-5">
                            {{$production->resume}}
                        </p>
                        <h5 class="pt-3 text-end">
                            <a href="{{$production->lien}}">Consulter l'article</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


  </main>

    @include('components.footer')

</body>

</html>
