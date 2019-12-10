@php
  $baner = $data['baner'];
@endphp

<section>
  <div class="main-carousel">
      @foreach ($baner as $ban)
        <div class="slider carousel-cell">
          <img class="slider_bg" src="{{ $ban['image']['url'] }}" alt="{{ $data['image']['alt'] }}">
        </div>
      @endforeach
  </div>
</section>