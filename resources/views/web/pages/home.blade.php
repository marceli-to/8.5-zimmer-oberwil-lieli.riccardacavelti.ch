@extends('web.layout.app')
@section('seo_title', strip_tags(str_replace('<br>',' – ', __('8.5-Zimmer-Duplex-Terrassenhaus in der steuergünstigsten Gemeinde des Kantons Aargau (Steuerfuss 48 %) 8966 Oberwil-Lieli'))))
@section('seo_description', strip_tags(__('<p>Grosses, lichtdurchflutetes Duplex-Terrassenhaus (Stockwerkeigentum), 400 m<sup>2</sup> Wohnfläche mit ganztägiger Besonnung, 179 m<sup>2</sup> Terrasse, grossem Eingangsbereich, 5 grosszügigen Schlafzimmern, 4 hochwertigen Badezimmern,  grossräumigem Wohn-Esszimmer, geschlossener Küche mit neuen Küchengeräten, Reduit, Fitnessraum mit eigenem Eingang (kann auch als Büro benutzt werden), grossem Mehrzweckraum mit Schallisolation, welcher sich als Partyraum, Heimkino, Spielzimmer oder als Gästezimmer eignet, 2 Doppelgaragen, 6 Aussenstellplätze</p>')))
@section('content')
<section class="content-intro">
  <div>
    <span class="claim">{{__('Objekt') }} RC2111.01</span>
    <article class="is-intro">
      <div class="intro__text">
        <div>
          <h1>{!! __('8.5-Zimmer-Duplex-Terrassenhaus in der steuergünstigsten Gemeinde des Kantons Aargau (Steuerfuss 48 %) 8966 Oberwil-Lieli') !!}</h1>
          {!! __('<p>Grosses, lichtdurchflutetes Duplex-Terrassenhaus (Stockwerkeigentum), 400 m<sup>2</sup> Wohnfläche mit ganztägiger Besonnung, 179 m<sup>2</sup> Terrasse, grossem Eingangsbereich, 5 grosszügigen Schlafzimmern, 4 hochwertigen Badezimmern,  grossräumigem Wohn-Esszimmer, geschlossener Küche mit neuen Küchengeräten, Reduit, Fitnessraum mit eigenem Eingang (kann auch als Büro benutzt werden), grossem Mehrzweckraum mit Schallisolation, welcher sich als Partyraum, Heimkino, Spielzimmer oder als Gästezimmer eignet, 2 Doppelgaragen, 6 Aussenstellplätze</p>') !!}
        </div>
      </div>
      <x-slideshow>
        <x-image isSlide="true" image="rc_oberwil-lieli-8.5-zimmer-01" width="1600" height="1067" alt="{{ __('8.5-Zimmer-Duplex-Terrassenhaus in der steuergünstigsten Gemeinde des Kantons Aargau (Steuerfuss 48 %) 8966 Oberwil-Lieli') }}" />
        <x-image isSlide="true" image="rc_oberwil-lieli-8.5-zimmer-02" width="1600" height="1067" alt="{{ __('8.5-Zimmer-Duplex-Terrassenhaus in der steuergünstigsten Gemeinde des Kantons Aargau (Steuerfuss 48 %) 8966 Oberwil-Lieli') }}" />
        <x-image isSlide="true" image="rc_oberwil-lieli-8.5-zimmer-03" width="1600" height="1067" alt="{{ __('8.5-Zimmer-Duplex-Terrassenhaus in der steuergünstigsten Gemeinde des Kantons Aargau (Steuerfuss 48 %) 8966 Oberwil-Lieli') }}" />
        <x-image isSlide="true" image="rc_oberwil-lieli-8.5-zimmer-04" width="1600" height="1067" alt="{{ __('8.5-Zimmer-Duplex-Terrassenhaus in der steuergünstigsten Gemeinde des Kantons Aargau (Steuerfuss 48 %) 8966 Oberwil-Lieli') }}" />
        <x-image isSlide="true" image="rc_oberwil-lieli-8.5-zimmer-05" width="1600" height="1067" alt="{{ __('8.5-Zimmer-Duplex-Terrassenhaus in der steuergünstigsten Gemeinde des Kantons Aargau (Steuerfuss 48 %) 8966 Oberwil-Lieli') }}" />
        <x-image isSlide="true" image="rc_oberwil-lieli-8.5-zimmer-06" width="1600" height="1067" alt="{{ __('8.5-Zimmer-Duplex-Terrassenhaus in der steuergünstigsten Gemeinde des Kantons Aargau (Steuerfuss 48 %) 8966 Oberwil-Lieli') }}" />
        <x-image isSlide="true" image="rc_oberwil-lieli-8.5-zimmer-07" width="1600" height="1067" alt="{{ __('8.5-Zimmer-Duplex-Terrassenhaus in der steuergünstigsten Gemeinde des Kantons Aargau (Steuerfuss 48 %) 8966 Oberwil-Lieli') }}" />
      </x-slideshow>
    </article>
  </div>
</section>
<section class="content">
  <div>
    <article>
      <div>
        <h2>{{ __('content.heading-location') }}</h2>
        {!! __('<p>In ländlicher Umgebung nur 14 km (17 Autominuten) von der Stadtgrenze Zürich, 30 km von Zug und 26 km vom Flughafen Zürich entfernt, liegt die idyllische Gemeinde Oberwil-Lieli. Eine Busstation vor dem Haus bringt sie mit einem Schnellbus ohne Halt in nur 20 Minuten nach Zürich Enge.</p><p>Am Ende einer Sackgasse, an ruhiger Lage, geniesst man traumhafte Sonnenuntergänge auf der grossen, begrünten Terrasse mit viel Privatsphäre.</p>In der Nähe finden sich zahlreiche Freizeitmöglichkeiten: Fussballplatz, Handball-, Basketballplatz, Skateranlage, Beach-Volleyball-Platz sowie grosser Kletterturm mit Rutsche.</p><p>Die Primarschule und der Kindergarten liegen nur 230 Meter entfernt, welche ohne Überquerung einer Strasse in wenigen Minuten zu Fuss erreichbar sind.</p><p>Das Lebensmittelgeschäft Volg sowie Biohöfe befinden sich in der näheren Umgebung.</p>') !!}
      </div>
      <a href="/assets/media/rc_oberwil-lieli.mp4" data-fancybox="video">
        <figure class="has-button">
          <img src="/assets/media/rc_oberwil-lieli-preview.jpg" width="1600" height="1067" alt="{{ __('content.heading-location') }}" loading="lazy">
        </figure>
      </a>
    </article>
    <article class="is-reverse is-plans">
      <div class="order-1 sm:order-2">
        <h1>{{ __('Raumprogramm') }}</h1>
        <table class="is-narrow">
          <tr>
            <td>{{ __('Entrée') }}</td>
            <td>19&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Wohnen/Essen') }}</td>
            <td>90&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Küche') }}</td>
            <td>20&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Master Bedroom/Ankleide') }}</td>
            <td>25&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Badezimmer/Badewanne/Dusche') }}</td>
            <td>13&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Schlafzimmer/Kinderzimmer') }}</td>
            <td>24&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Schlafzimmer/Kinderzimmer') }}</td>
            <td>15&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Badezimmer/Dusche') }}</td>
            <td>6&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Doppelgarage') }}</td>
            <td>41&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Doppelgarage') }}</td>
            <td>33&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
        </table>
      </div>
      <div class="order-2 sm:order-1">
        <figure>
          <h1>{{ __('Obergeschoss') }}</h1>
          <a href="/assets/media/rc_oberwil-lieli-8.5-grundriss-obergeschoss_{{ app()->getLocale() }}.jpg" data-fancybox="gallery">
            <img src="/assets/media/rc_oberwil-lieli-8.5-grundriss-obergeschoss_{{ app()->getLocale() }}.jpg" width="1216" height="1600" alt="{{ __('Obergeschoss') }}" loading="lazy">
          </a>
        </figure>
      </div>
    </article>

    <article class="is-plans">
      <div class="order-1 sm:order-2">
        <h1>{{ __('Raumprogramm') }}</h1>
        <table class="is-narrow">
          <tr>
            <td>{{ __('Wohnen/Essen') }}</td>
            <td>49&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Küche') }}</td>
            <td>20&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Master Bedroom') }}</td>
            <td>26&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Badezimmer/Bad/Dusche/Badewanne') }}</td>
            <td>12&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Schlafzimmer') }}</td>
            <td>21&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Schlafzimmer') }}</td>
            <td>20&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Badezimmer/Dusche') }}</td>
            <td>7&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Kinderzimmer/Büro') }}</td>
            <td>18&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Schlafzimmer') }}</td>
            <td>30&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Badezimmer/Dusche') }}</td>
            <td>6&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Dispo/Mehrzweckraum') }}</td>
            <td>42&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Fitness/Büro') }}</td>
            <td>35&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Badezimmer/Dusche') }}</td>
            <td>4&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Garten') }}</td>
            <td>185&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Sitzplatz') }}</td>
            <td>29&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Garage') }}</td>
            <td>36&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
                
        </table>
      </div>
      <div class="order-2 sm:order-1">
        <figure>
          <h1>{{ __('Erdgeschoss') }}</h1>
          <a href="/assets/media/rc_oberwil-lieli-8.5-grundriss-erdgeschoss_{{ app()->getLocale() }}.jpg" data-fancybox="gallery">
            <img src="/assets/media/rc_oberwil-lieli-8.5-grundriss-erdgeschoss_{{ app()->getLocale() }}.jpg" width="1216" height="1600" alt="{{ __('Erdgeschoss') }}" loading="lazy">
          </a>
        </figure>
      </div>
    </article>

    <article class="is-wide">
      <div>
        <h1>{{ __('content.heading-facts') }}</h1>
      </div>
      <div>
        <table>
          <tr>
            <td>{{ __('Wohnfläche') }}</td>
            <td>400&nbsp;{!! __('m<sup>2</sup>') !!}</td>
          </tr>
          <tr>
            <td>{{ __('Anzahl Zimmer') }}</td>
            <td>5</td>
          </tr>
          <tr>
            <td>{{ __('Nasszellen') }}</td>
            <td>4</td>
          </tr>
          <tr>
            <td>{{ __('Anzahl Etagen') }}</td>
            <td>2</td>
          </tr>
          <tr>
            <td>{{ __('Geschosse') }}</td>
            <td>{{ __('EG + OG') }}</td>
          </tr>
          <tr>
            <td>{{ __('Baujahr') }}</td>
            <td>2001</td>
          </tr>
          <tr>
            <td>{{ __('Letzte Renovation') }}</td>
            <td>2021/2022</td>
          </tr>
          <tr>
            <td>{{ __('Garagenplätze') }}</td>
            <td>4</td>
          </tr>
          <tr>
            <td>{{ __('Aussenstellplätze') }}</td>
            <td>6</td>
          </tr>
          <tr>
            <td>{{ __('Bezug') }}</td>
            <td>{{ __('nach Vereinbarung') }}</td>
          </tr>
          <tr>
            <td>{{ __('Kaufpreis') }}</td>
            <td>{{ __('3.6 Mio.') }}</td>
          </tr>
        </table>
      </div>
    </article>

    <article class="is-wide">
      <div>
        <h1>{{ __('content.contact') }}</h1>
        <p><strong>Riccarda Cavelti</strong><br><a href="tel:+41 79 613 00 09">+41 79 613 00 09</a><br><a href="mailto:rc@riccardacavelti.ch">rc@riccardacavelti.ch</a></p>
        <p><strong>Riccarda Cavelti GmbH</strong><br>Bahnhofstrasse 10<br>CH-8001 Zürich<br><br><strong><a href="https://www.riccardacavelti.ch" target="_blank">www.riccardacavelti.ch</a></strong></p>
        <p>
          <a href="https://www.instagram.com/riccarda_cavelti/" class="icon-instagram" rel="noopener" target="_blank" title="Instagram öffnen">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 25 25"><defs><radialGradient id="a" cx="13.87" cy="0.89" r="10.83" gradientTransform="matrix(1.07, 0, 0, -1.07, -4.77, 19.17)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffd776"/><stop offset="0.25" stop-color="#f3a554"/><stop offset="0.38" stop-color="#f15c3c"/><stop offset="0.61" stop-color="#d94867"/><stop offset="0.83" stop-color="#c32f87"/><stop offset="0.96" stop-color="#7d63a7"/><stop offset="1" stop-color="#5c6cb3"/></radialGradient><radialGradient id="b" cx="-909.08" cy="2720.73" r="31.33" gradientTransform="matrix(0.08, 0, 0, -0.08, 91.71, 226.71)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#5f6db3"/><stop offset="1" stop-color="#5c6cb3"/></radialGradient><linearGradient id="c" x1="5.06" y1="25.39" x2="19.94" y2="-0.39" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffd776"/><stop offset="0.25" stop-color="#f3a554"/><stop offset="0.38" stop-color="#f15c3c"/><stop offset="0.54" stop-color="#d94867"/><stop offset="0.7" stop-color="#c32f87"/><stop offset="0.91" stop-color="#7d63a7"/><stop offset="0.99" stop-color="#5c6cb3"/></linearGradient></defs><path d="M12.5,6.7a5.8,5.8,0,0,0-5.8,5.8,5.7,5.7,0,0,0,5.8,5.7,5.6,5.6,0,0,0,5.7-5.7A5.7,5.7,0,0,0,12.5,6.7Zm0,9.8a4,4,0,1,1,4-4A4,4,0,0,1,12.5,16.5Z" style="fill:url(#a)"/><circle cx="18.9" cy="6.1" r="1.3" style="fill:url(#b)"/><path d="M19,0H6A6,6,0,0,0,0,6V19a6,6,0,0,0,6,6H19a6,6,0,0,0,6-6V6A6,6,0,0,0,19,0Zm4,19a4,4,0,0,1-4,4H6a4,4,0,0,1-4-4V6A4,4,0,0,1,6,2H19a4,4,0,0,1,4,4Z" style="fill:url(#c)"/></svg>
          </a>
        </p>
        <p>
          <strong><a href="javascript:;" class="js-imprint-btn">{{ __('content.imprint') }}</a></strong>
        </p>
        <div class="imprint js-imprint" style="display:none">
          <p><strong>Copyright, 10 / 2021</strong><br>Riccarda Cavelti GmbH, Zürich</p>
          <p><strong>{{ __('content.design') }}</strong><br>WBG AG, Zürich</p>
          <p><strong>{{ __('content.photography') }}</strong><br>Marcel Renggli, Baden</p>
          <p><strong>{{ __('content.development') }}</strong><br><a href="https://marceli.to" target="_blank" rel="noopener" title="marceli.to">marceli.to</a>, Zürich</p>
        </div>
      </div>
    </article>
  </div>
</section>
@endsection