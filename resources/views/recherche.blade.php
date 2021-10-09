<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Réalisations - Projet MIC</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    @include('components.css')

</head>

<body>

    @include('components.nav')

    <main class="pt-5" id="main">
        <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-lg-10 entries">
                        @if($actualites->count() == 0 && $productions->count() == 0)
                            <div class="row p-5">
                                <div class="card card-body" style="font-size: 24px">
                                    <div class="text-center m-5">
                                        Aucune actualité ou production n'est trouvée
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if($actualites->count() != 0)
                            <h2 class="pt-4 pb-4">Actualités trouvées :</h2>
                            @foreach($actualites as $actualite)
                                @php(Carbon\Carbon::setLocale('fr'))
                                <article class="entry">
                                    <div class="row">
                                        <img src="<?php echo url('/'); ?>/{{ $actualite->img  }}" alt="" class=" entry-img col-sm-10 col-md-5 h-auto img-fluid pb-0">
                                        <div class="col-sm-10 col-md-7">
                                            <h2 class="entry-title px-4 pb-0 mb-0">
                                                <a href="\actualites\{{$actualite->id}}">{{$actualite->titre}}</a>
                                            </h2>
                                            <p class="fs-6 px-4 pt-0 mt-0" style="color: #bbbbbb">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $actualite->created_at)->diffForHumans()}}</p>
                                            <div class="entry-content">
                                                <h4>
                                                    {{substr($actualite->resume,0,strpos($actualite->resume, ' ', 100))}}...
                                                </h4>
                                                <div class="entry-meta text-start pt-3">
                                                    <ul class="row">
                                                        <li class="d-flex align-items-center col-6"><i class="icofont-notepad"></i>{{$actualite->type == 'evenement' ? 'Événement' : 'Actualité'}}</li>
                                                        <li class="d-flex align-items-center col-6"><i class="icofont-wall-clock"></i><time datetime="{{$actualite->date}}">{{$actualite->date}}</time></li>
                                                    </ul>
                                                </div>
                                                <div class="read-more">
                                                    <a href="\actualites\{{$actualite->id}}">Lire la suite...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        @endif
                        @if($productions->count() != 0)
                            <h2 class="pt-4">Production scientifiques trouvé :</h2>
                            @foreach($productions as $production)
                                    <article class="entry">
                                        <div class="row m-5">
                                            <h2 class="entry-title">
                                                <a href="/productions/{{$production->id}}">{{$production->titre}}</a>
                                            </h2>
                                            <div class="entry-content">
                                                <p>{{substr($production->resume,0,strpos($production->resume, ' ', 180))}}...</p>
                                                <div class="read-more">
                                                    <a href="/productions/{{$production->id}}">Lire la suite...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('components.footer')

</body>

</html>
