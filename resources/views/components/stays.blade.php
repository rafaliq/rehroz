<section class="section">
  <div class="stays">
    <h2>
      <span class="pretitle">
        {{ $data['title'] }}
      </span>
      <span class="title title--after">
        {{ $data['subtitle'] }}
      </span>
    </h2>
    <div class="stays__content">
      <div class="stays__images">
        <div class="stays__images-columns">
          <div class="stays__images-left">
            <img class="stays__img" src="{{ $data['photo1']['url'] }}" alt="{{ $data['photo1']['title'] }}">
            <img class="stays__img" src="{{ $data['photo2']['url'] }}')" alt="{{ $data['photo1']['title'] }}">
          </div>
          <div class="stays__images-right">
            <img class="stays__img" src="{{ $data['photo3']['url'] }}" alt="{{ $data['photo1']['title'] }}">
          </div>
        </div>
      </div>
      <div class="stays__box">
        @foreach($data['stays'] as $item)
        <div class="stays__item @if ($item['pozycja'] == 'prawo') stays__item--rev @endif">
          <div class="stays__icon">
            <img src="{{ $item['icon']['url'] }}" alt="{{ $item['icon']['title'] }}" />
          </div>
          <div class="stays__desc">
            <h3 class="text stays__title">
              {{ $item['title'] }}
            </h3>
            <p class="text stays__text">
              {{ $item['desc'] }}
            </p>
            <a href="{{ $item['link']['url'] }}" class="link">
              Więcej &#8594;
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>