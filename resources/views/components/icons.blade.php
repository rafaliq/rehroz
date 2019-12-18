<section class="section section--color">
  <div class="container">
    <div class="text--center">
      @if($data['title'])
        @include('partials.title', ['title' => $data['title'], 'subtitle' => $data['subtitle']])
      @endif
    </div>
    <div class="icons">
      @foreach($data['icons'] as $item)
        <a @if($item['link']) href="{{ $item['link']['url'] }}" @endif class="icons__box">
          <img class="icons__img" src="{{ $item['icon']['url'] }}">
          <h3 class="text text--white icons__title">
            {{ $item['title'] }}
          </h3>
        </a>
      @endforeach
    </div>
  </div>
</section>