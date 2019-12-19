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
                  {{ $ban['pretitle'] }}
                </span>
                <span class="title text--white slider__title">
                  {{ $ban['title'] }}
                </span>
              </h1>
              <p class="text slider__text">
                {{ $ban['desc'] }}
              </p>
              <a class="button" href="{{ $ban['link']['url'] }}">
                {{ $ban['link']['title'] }}
              </a>
            </div>
          </div>
        </div>
      @endforeach
  </div>
</section>