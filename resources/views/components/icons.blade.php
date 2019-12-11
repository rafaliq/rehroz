<section class="section section--color">
  <div class="container">
    @if($data['title'])
      @include('partials.title', ['title' => $data['title'], 'subtitle' => $data['subtitle']])
    @endif
    <div class="icons">
      @foreach($data['icons'] as $item)
        <div class="icons__box">
          <img class="icons__img" src="{{ $item['icon']['url'] }}">
          <h3 class="text text--white icons__title">
            {{ $item['title'] }}
          </h3>
        </div>
      @endforeach
    </div>
  </div>
</section>