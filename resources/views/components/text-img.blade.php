<section class="section section--color text-img @if ($data['pozycja'] == 'prawo') text-img--rev @endif">
  <div class="container">
    <div class="row text-img__wrapper justify-content-center">
      <div class="col-12 col-md-6 text-img__image-wrapper wow">
        <img class="text-img__image" src="{{ $data['image']['url'] }}" alt="{{ $data['image']['alt'] }}">
      </div>
      <div class="col-12 col-md-6 text-img__content content-block py-0">
        <div>
          @if($data['header'] == 'tak')
          <h2>
            @if($data['subtitle']) 
              <span class="pretitle">
                {{ $data['subtitle'] }}
              </span>
            @endif  
            <span class="title">
              {{ $data['title'] }}
            </span>
          </h2>
          @endif
          <div class="text">
            {!! $data['content'] !!}
          </div>
        </div>
        @if ($data['button'] == "tak")
        <a href="{{ $data['link'] }}" class="button">więcej</a>
        @endif
      </div>
    </div>
  </div>
</section>