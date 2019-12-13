{{-- @if(get_field('show_map'))

<section>
  {!! do_shortcode('[google_map_easy id="1"]') !!}
</section>

@endif --}}

<section class="section section--bg">
  <div class="container">
    <div class="contact">
      <div class="contact__content">
        <div>
          <h3>
            <span class="pretitle">
              Kontakt
            </span>
            <span class="title">
              Zarezerwuj pobyt
            </span>
          </h3>
          <div class="text contact__text">
            Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
          </div>
        </div>
        <form class="form">
          <div class="form-group">
            <input type="text" class="form-control form__input" id="name" placeholder="Imię i Nazwisko">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="email" class="form-control form__input" id="phone" placeholder="Telefon kontaktowy">
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control form__input" id="email" placeholder="Adres e-mail">
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control form__input" id="exampleFormControlTextarea1" rows="6" placeholder="Wiadomość"></textarea>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="checbox">
              <label class="form-check-label text text--small" for="checkbox">
                Zapoznałem się z Polityką prywatności serwisu [www] oraz wyrażam zgodę na przetwarzanie przez [Nazwa firmy], z siedzibą w Mrągowie, udostępnionych przeze mnie danych osobowych na zasadach opisanych w Polityce prywatności dostępnej w Serwisie. Oświadczam, że są mi znane cele przetwarzania danych oraz moje uprawnienia. Niniejsza zgoda może być wycofana w dowolnym czasie poprzez kontakt z Administratorem pod adresem [EMAIL], bez wpływu na zgodność z prawem przetwarzania, którego dokonano na podstawie zgody przed jej cofnięciem. Więcej informacji dotyczących przetwarzania danych osobowych - Obowiązek Informacyjny.
              </label>
            </div>
          </div>
          <button type="submit" class="button form__button">
            Wyślij
          </button>
        </form>
      </div>
      <div class="contact__map">
        {!! do_shortcode('[google_map_easy id="1"]') !!}
        <div class="text text--white contact__box ">
          <h3 class="contact__box-title">
            Adres
          </h3>
          <span class="contact__box-text">
            {!!  get_option_field("address") !!}
          </span>
          <span class="contact__box-text">
            {{  get_option_field("phone") }}<br>
          </span>
          <span class="contact__box-text">  
            {{  get_option_field("email") }}<br>
          </span>
        </div>
      </div>
    </div> 
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="footer__row">
      <div class="footer__copyright text text--white">
        {{ get_option_field("copyright") }}
      </div>
      <div class="footer__logo">
        <a href="http://iqconnect.pl">
          <img src="{{ get_option_field('iqlogo')['url'] }}" alt="{{ get_option_field('iqlogo')['alt'] }}">
        </a>
      </div>
    </div>
  </div>
</footer>