<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Productions scientifiques - Projet MIC</title>
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
                  <h2>Productions scientifiques</h2>

                  <ol>
                      <li><a href="/">Accueil</a></li>
                      <li>Productions scientifiques</li>
                  </ol>
              </div>
          </div>
      </section>

      <section class="blog container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
          <div class="row justify-content-around">
              <div class="col-sm-12 col-md-8 entries">
                  @if(isset($productions))
                      @if($productions->count() == 0)
                          <div class="card card-body" style="font-size: 24px">
                              <div class="text-center m-5">
                                  Aucune production n'est trouvée
                              </div>
                          </div>
                      @else
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
                  @endif
              </div>
              <div class="col-sm-12 col-md-4">
                  <div class="sidebar">
                      <h3 class="sidebar-title">Rechercher</h3>
                      <div class="sidebar-item search-form">
                          <form action="\productions" method="get">
                              <input type="text" name="q" placeholder="Rechercher une production" value="{{$search_text}}">
                              <button type="submit"><i class="icofont-search"></i></button>
                          </form>
                      </div>
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
          @if ($productions->hasPages())
              <div class="blog-pagination">
                  <ul class="pagination justify-content-center">
                      @if ($productions->onFirstPage())
                          <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">
                        <i class="icofont-rounded-left"></i>
                    </span>
                          </li>
                      @else
                          <li>
                              <a href="{{ $productions->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                                  <i class="icofont-rounded-left"></i>
                              </a>
                          </li>
                      @endif

                      <li class="active">
                          <a>
                              {{ $productions->currentPage() }}
                          </a>
                      </li>

                      @if ($productions->hasMorePages())
                          <li>
                              <a href="{{ $productions->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                                  <i class="icofont-rounded-right"></i>
                              </a>
                          </li>
                      @else
                          <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">
                        <i class="icofont-rounded-right"></i>
                    </span>
                          </li>
                      @endif
                  </ul>
              </div>
              @endif
          </div>

      </section>


  </main><!-- End #main -->

    @include('components.footer')

</body>

</html>
