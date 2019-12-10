@php
  $baner = $data['baner'];
@endphp

<section>
  <div class="main-carousel">
      @foreach ($baner as $ban)
        <div class="slider carousel-cell">
          <img class="slider_bg" src="{{ $ban['image']['url'] }}" alt="{{ $data['image']['alt'] }}">
          <div class="container">
            <div class="slider__content">
              <h1>
                <span class="pretitle pretitle--small">
                  Centrum Rehabilitacyjny
                </span>
                <span class="title text--white slider__title">
                  Odzyskaj balans
                  i harmonię
                </span>
              </h1>
              <p class="text slider__text">
                Di Cantina Valpolicella Negrar è la storia di uoini donne dediti alla Nullam dui dolor, sagittis ut nte eget Aliquam erat volutpat. o in eros.
              </p>
              <a class="button" href="#">
                Zarezerwuj pobyty
              </a>
            </div>
          </div>
        </div>
      @endforeach
  </div>
</section>