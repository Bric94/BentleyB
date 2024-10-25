<?php
  if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    $store ="";
    if (isset($_POST['store_choosed'])&& !empty($_POST['store_choosed'])) {
      $store = $_POST['store_choosed'];
    }
    header("Location: confirmation.php/?store=" . $store);
    exit();
  }
?><!doctype html>
<html lang="de-DE">
<head>
  <meta charset="utf-8">
  <title>Bentley Motor Leasing</title>
  <meta name="robots" content="noindex,nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="/style.css">
</head>
<body>
  <div class="headline">
    <h2>Lass uns mit Bentley fahren.</h2>
  </div>

  <header>
    <div class="logo-container">
      <img src="/images/logo.jpg" class="logo"  alt="logo-bentley" />
    </div>
    <nav>
      <ul>
        <li><a href="/continental-gt-s.html">CONTINENTAL GT S</a></li>
        <li><a href="/continental-gtc-s.html">CONTINENTAL GTC S</a></li>
        <li><a href="/flying-spur-s.html">FLYING SPUR S</a></li>
        <li><a href="/bentayga-s.html">BENTAYGA S</a></li>
      </ul>
    </nav>
  </header>

  <div class="landing-container">
    <div class="container-left">
      <form id="form" action="/" method="POST">
        <div class="step-left-container">
          <h1>Bentley Motors Leasing</h1>
          <div class="step-1">
            <p>
              Bitte füllen Sie dieses Formular aus, um telefonisch kontaktiert zu werden und weitere Informationen zu Leasingangeboten zu erhalten.
            </p>
            <label for="select-cars-model">
            Wählen Sie das Fahrzeug aus, das Sie interessiert :
            </label>
            <select id="select-cars-model" name="car_model">
              <option value="CONTINENTAL GT S">CONTINENTAL GT S</option>
              <option value="CONTINENTAL GTC S">CONTINENTAL GTC S</option>
              <option value="FLYING SPUR S">FLYING SPUR S</option>
              <option value="BENTAYGA S">BENTAYGA S</option>
            </select><br/>
            <div class="mobile-select-car">
              <div class="swiper-slide car1">
                <img src="/images/gtc_s_241.jpg" />
                <div class="photo-description">Bentayga S (V8) NEFZ-Fahrzyklus: Kraftstoffverbrauch, l/100km - Kombiniert 12,0. CO₂-Emissionen kombiniert - 272 g/km. <a href="https://www.dat.de/leitfaden/LeitfadenCO2.pdf" target="_blank" tabindex="0">DAT-Hinweis</a></div>
              </div>
              <div class="swiper-slide car2">
                <img src="/images/fs_s1.jpg" />
                <div class="photo-description">Flying Spur S modellreihe NEFZ-Fahrzyklus: Kraftstoffverbrauch, l/100km - Kombiniert 3,2-11,6. Stromverbrauch kombiniert - 245,4 Wh/km. CO₂-Emissionen kombiniert - 73-270 g/km.<a href="https://www.dat.de/leitfaden/LeitfadenCO2.pdf" target="_blank" tabindex="0">DAT-Hinweis</a></div>
              </div>
              <div class="swiper-slide car3">
                <img src="/images/gt_s1.jpg" />
                <div class="photo-description">
                    Continental GT S (V8) NEFZ-Fahrzyklus: Kraftstoffverbrauch, l/100km - Kombiniert 11,3. CO₂-Emissionen kombiniert - 263 g/km. <a href="https://www.dat.de/leitfaden/LeitfadenCO2.pdf" target="_blank" tabindex="0">DAT-Hinweis</a>
                </div>
              </div>
              <div class="swiper-slide car4">
                <img src="/images/bentayga_s1.jpg" />
                <div class="photo-description">
                    Continental GTC S (V8) NEFZ-Fahrzyklus: Kraftstoffverbrauch, l/100km - Kombiniert 11,7. CO₂-Emissionen kombiniert - 266 g/km. <a href="https://www.dat.de/leitfaden/LeitfadenCO2.pdf" target="_blank" tabindex="0">DAT-Hinweis</a>
                </div>
             </div>
            </div>
            <label for="gender" id="gender-label">Anrede : </label>
            <select id="gender" name="gender">
              <option value="Herr">Herr</option>
              <option value="Frau">Frau</option>
            </select>
            <input type="text" id="firstname" name="firstname" placeholder="Vorname" maxlength="150">
            <div class="error error-firstname"></div>
            <input type="text" id="lastname" name="lastname" placeholder="Nachname"  maxlength="150">
            <div class="error error-lastname"></div>
            <input type="text" id="phone" name="phone" placeholder="Telefonnummer"  maxlength="30">
            <div class="error error-phone"></div>
            <input type="text" id="email" name="email" placeholder="E-Mail-Adresse"  maxlength="255">
            <div class="error error-email"></div>
          </div>
          <div class="step-2">
            <label for="select-cars-model">
            Von welchem Autohaus möchten Sie kontaktiert werden?
            </label>
            <select id="select-store" name="store_choosed">
              <option value="Bentley Berlin">Bentley Berlin</option>
              <option value="Bentley Frankfurt">Bentley Frankfurt</option>
              <option value="Bentley Hamburg">Bentley Hamburg</option>
              <option value="Bentley Hannover">Bentley Hannover</option>
              <option value="Bentley Köln">Bentley Köln</option>
              <option value="Bentley Mannheim">Bentley Mannheim</option>
              <option value="Bentley München">Bentley München</option>
              <option value="Bentley Nürnberg">Bentley Nürnberg</option>
              <option value="Bentley Singen">Bentley Singen</option>
              <option value="Bentley Stuttgart">Bentley Stuttgart</option>
            </select><br/><br/>    
            <label for="when-buy">
              Wann beabsichtigen Sie, Ihren Bentley zu kaufen?
            </label><br/>
            <select id="when-buy" name="when_buy">
              <option value="Innerhalb der nächsten 6 Monate">Innerhalb der nächsten 6 Monate.</option>
              <option value="Innerhalb von 6 bis 10 Monaten">Innerhalb von 6 bis 10 Monaten.</option>
              <option value="Nach 10 Monaten">Nach 10 Monaten.</option>
            </select><br/>
            <label class="margin-t20">Welches Fahrzeug besitzen Sie derzeit:</label>
            <input type="text" class="current-car" name="current_car">
          </div>
          <div class="step-3">
            <h3>Bitte geben Sie das Datum und die Uhrzeit an, zu der Sie zurückgerufen werden möchten :</h3>
            <div class="calendarpicker-container">
              <label for="date">Datum</label>
              <input id="calendarpicker" type="text" data-role="calendarpicker" data-locale="de-DE" data-dialog-mode="true"  data-input-format="%d/%m/%y" value="30/06/2023">
            </div>
            <div class="timepicker-container">
              <label for="time">Stunde</label>
              <input class="timepicker" name="time" data-locale="de-DE" data-role="timepicker" data-seconds="false" >
            </div>
            <label class="label-accept">
              <input id="accept" type="checkbox" name="accept"/>
              <span>Ich stimme zu, dass Bentley Motors mich kontaktiert und Informationen zu Leasingangeboten erhält.</span>
            </label>
          </div>
        </div>
        <div class="prev-next">
          <button class="prev-btn">Précédant</button>
          <button class="next-btn">Zurück</button>
          <button id="send-form" type="submit" name="submit" value="submit">meine Anfrage senden</button>
        </div>
      </form>
    </div>
    <div class="container-right">
      <!-- Slider main container -->
      <div class="swiper step-1">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <img src="/images/gt_s1.jpg" />
            <div class="photo-description">
								Continental GT S (V8) NEFZ-Fahrzyklus: Kraftstoffverbrauch, l/100km - Kombiniert 11,3. CO₂-Emissionen kombiniert - 263 g/km. <a href="https://www.dat.de/leitfaden/LeitfadenCO2.pdf" target="_blank" tabindex="0">DAT-Hinweis</a>
						</div>
          </div>
          <div class="swiper-slide">
            <img src="/images/bentayga_s1.jpg" />
            <div class="photo-description">
								Continental GTC S (V8) NEFZ-Fahrzyklus: Kraftstoffverbrauch, l/100km - Kombiniert 11,7. CO₂-Emissionen kombiniert - 266 g/km. <a href="https://www.dat.de/leitfaden/LeitfadenCO2.pdf" target="_blank" tabindex="0">DAT-Hinweis</a>
						</div>
          </div>
          <div class="swiper-slide">
            <img src="/images/fs_s1.jpg" />
            <div class="photo-description">Flying Spur S modellreihe NEFZ-Fahrzyklus: Kraftstoffverbrauch, l/100km - Kombiniert 3,2-11,6. Stromverbrauch kombiniert - 245,4 Wh/km. CO₂-Emissionen kombiniert - 73-270 g/km.<a href="https://www.dat.de/leitfaden/LeitfadenCO2.pdf" target="_blank" tabindex="0">DAT-Hinweis</a></div>
          </div>
          <div class="swiper-slide">
            <img src="/images/gtc_s_241.jpg" />
            <div class="photo-description">Bentayga S (V8) NEFZ-Fahrzyklus: Kraftstoffverbrauch, l/100km - Kombiniert 12,0. CO₂-Emissionen kombiniert - 272 g/km. <a href="https://www.dat.de/leitfaden/LeitfadenCO2.pdf" target="_blank" tabindex="0">DAT-Hinweis</a></div>
          </div>
        </div>
      </div>
      <div class="step-2">
        <div id="mapContainer"></div>
      </div>
      <div class="swiper2 step-3">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <img src="/images/gtc_s_241.jpg" />
            <div class="photo-description">Bentayga S (V8) NEFZ-Fahrzyklus: Kraftstoffverbrauch, l/100km - Kombiniert 12,0. CO₂-Emissionen kombiniert - 272 g/km. <a href="https://www.dat.de/leitfaden/LeitfadenCO2.pdf" target="_blank" tabindex="0">DAT-Hinweis</a></div>
          </div>
          <div class="swiper-slide">
            <img src="/images/fs_s1.jpg" />
            <div class="photo-description">Flying Spur S modellreihe NEFZ-Fahrzyklus: Kraftstoffverbrauch, l/100km - Kombiniert 3,2-11,6. Stromverbrauch kombiniert - 245,4 Wh/km. CO₂-Emissionen kombiniert - 73-270 g/km.<a href="https://www.dat.de/leitfaden/LeitfadenCO2.pdf" target="_blank" tabindex="0">DAT-Hinweis</a></div>
          </div>
          <div class="swiper-slide">
            <img src="/images/gt_s1.jpg" />
            <div class="photo-description">
								Continental GT S (V8) NEFZ-Fahrzyklus: Kraftstoffverbrauch, l/100km - Kombiniert 11,3. CO₂-Emissionen kombiniert - 263 g/km. <a href="https://www.dat.de/leitfaden/LeitfadenCO2.pdf" target="_blank" tabindex="0">DAT-Hinweis</a>
						</div>
          </div>
          <div class="swiper-slide">
            <img src="/images/bentayga_s1.jpg" />
            <div class="photo-description">
								Continental GTC S (V8) NEFZ-Fahrzyklus: Kraftstoffverbrauch, l/100km - Kombiniert 11,7. CO₂-Emissionen kombiniert - 266 g/km. <a href="https://www.dat.de/leitfaden/LeitfadenCO2.pdf" target="_blank" tabindex="0">DAT-Hinweis</a>
						</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="btn-infos-technique down-arrow" href="#info"><img src="images/down-arrow.svg" /></a>
  <section id="info">
    <div class="row size-20">
      Sie möchten Bentley fahren und dabei ein hohes Maß an Planungssicherheit und
      finanzieller Flexibilität genießen? Unsere Leasingangebote bieten Ihnen die Möglichkeit,
      sich Ihren Traum vom Bentley zu erfüllen – ohne dabei Ihre finanzielle Flexibilität für 
      weitere Träume einzuschränken.
    </div>
    <div class="row">
      <div class="column2">
        <span class="check">&#10003;</span> Wenn Sie interessiert sind, füllen Sie bitte Ihre Daten aus und einer unserer Markenberater wird Sie anrufen, um Ihre Anfrage zu besprechen.
      </div>
      <div class="column2">
        <span class="check">&#10003;</span> Bitte stellen Sie sicher, dass die von Ihnen angegebenen Informationen korrekt und vollständig sind, da dies andernfalls bedeuten könnte, dass wir Ihre Anfrage nicht bearbeiten können.
      </div>
    </div>
    <div class="row">
      <div class="column3">
        <span class="check"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#335b4c" height="30px" width="30px" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
          <g id="XMLID_504_">
            <path id="XMLID_505_" d="M65,330h200c8.284,0,15-6.716,15-15V145c0-8.284-6.716-15-15-15h-15V85c0-46.869-38.131-85-85-85   S80,38.131,80,85v45H65c-8.284,0-15,6.716-15,15v170C50,323.284,56.716,330,65,330z M207.481,219.356l-42.5,42.5   c-2.929,2.929-6.768,4.394-10.606,4.394s-7.678-1.465-10.606-4.394l-21.25-21.25c-5.858-5.858-5.858-15.354,0-21.213   c5.857-5.858,15.355-5.858,21.213,0l10.644,10.643l31.894-31.893c5.857-5.858,15.355-5.858,21.213,0   C213.34,204.002,213.34,213.498,207.481,219.356z M110,85c0-30.327,24.673-55,55-55s55,24.673,55,55v45H110V85z"/>
          </g>
          </svg></span>
          <b>Planungssicherheit:</b><br/> Eine monatlich gleichbleibende Rate, die wir individuell an Ihre Anforderungen anpassen, sorgt für hohe Transparenz und bessere Planbarkeit.
      </div>
      <div class="column3">
        <span class="check"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#335b4c" height="30px" width="30px" version="1.1" id="Capa_1" viewBox="0 0 488.201 488.201" xml:space="preserve">
        <g>
          <g>
            <path d="M265.2,350.251H33.6c-5.3,0-9.6-4.3-9.6-9.6v-182.6h408.5v24c0,6.6,5.4,12,12,12s12-5.4,12-12v-86.5    c0-18.5-15.1-33.6-33.6-33.6H33.6c-18.6,0-33.6,15.1-33.6,33.6v245.1c0,18.5,15.1,33.6,33.6,33.6h231.7c6.6,0,12-5.4,12-12    S271.9,350.251,265.2,350.251z M33.6,85.951h389.3c5.3,0,9.6,4.3,9.6,9.6v38.5H23.9v-38.5C23.9,90.251,28.3,85.951,33.6,85.951z"/>
            <path d="M240.2,247.151c0-6.6-5.4-12-12-12H84c-6.6,0-12,5.4-12,12s5.4,12,12,12h144.2C234.9,259.151,240.2,253.751,240.2,247.151    z"/>
            <path d="M84,278.151c-6.6,0-12,5.4-12,12s5.4,12,12,12h57.7c6.6,0,12-5.4,12-12s-5.4-12-12-12H84z"/>
            <path d="M82.6,215.651h144.2c6.6,0,12-5.4,12-12s-5.4-12-12-12H82.6c-6.6,0-12,5.4-12,12S75.9,215.651,82.6,215.651z"/>
            <path d="M476.3,298.251h-17.6v-28c0-34.7-28.3-63-63-63s-63,28.3-63,63v28h-17.6c-6.6,0-12,5.4-12,12v104c0,6.6,5.4,12,12,12    h161.1c6.6,0,12-5.4,12-12v-104C488.3,303.551,482.9,298.251,476.3,298.251z M356.7,270.151c0-21.5,17.5-39,39-39s39,17.5,39,39    v28h-78V270.151z M464.3,402.151H327.1v-80h137.1v80H464.3z"/>
          </g>
        </g>
        </svg></span>
        <b>Steuervorteile:</b><br/> Als gewerblicher Leasingnehmer können Sie oftmals steuerliche Vorteile in Anspruch nehmen.
      </div>
      <div class="column3">
        <span class="check">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="30px" width="30px" version="1.1" id="Capa_1" viewBox="0 0 26 26" xml:space="preserve">
          <g>
            <path style="fill:#335b4c;" d="M19,24.968v1H7v-1c0-0.551,0.449-1,1-1h2.013c0.053-1.248,0.863-2.29,1.987-2.689V9.554   c-0.527-0.333-0.88-0.917-0.88-1.587H12h2h0.88c0,0.67-0.353,1.254-0.88,1.587v11.724c1.124,0.399,1.934,1.441,1.987,2.689H18   C18.551,23.968,19,24.417,19,24.968z M26,15.967c-0.733,2.064-2.685,3.553-5,3.553s-4.267-1.49-5-3.553h1.154l3.378-8.953   c0.146-0.39,0.789-0.39,0.936,0l3.378,8.953H26z M23.777,15.967L21,8.608l-2.777,7.36H23.777z M5,5.978   c0.453,0,0.822-0.303,0.95-0.714c0.331-0.126,0.67-0.296,1.018-0.472C7.733,4.406,8.6,3.967,9.5,3.967   c0.864,0,1.404,0.399,1.713,0.739c-0.012,0.086-0.026,0.172-0.026,0.261c0,1.001,0.812,1.813,1.813,1.813s1.813-0.812,1.813-1.813   c0-0.089-0.014-0.174-0.026-0.26c0.308-0.339,0.848-0.74,1.713-0.74c0.9,0,1.767,0.438,2.531,0.824   c0.349,0.176,0.688,0.346,1.019,0.472c0.128,0.411,0.497,0.714,0.95,0.714c0.558,0,1.01-0.452,1.01-1.01s-0.452-1.01-1.01-1.01   c-0.288,0-0.545,0.124-0.729,0.318c-0.247-0.104-0.514-0.237-0.789-0.376c-0.864-0.437-1.843-0.932-2.982-0.932   c-0.996,0-1.69,0.379-2.161,0.787c-0.211-0.233-0.481-0.407-0.788-0.506c0.373-0.2,0.635-0.581,0.635-1.032   C14.186,1.561,13,0.032,13,0.032s-1.186,1.529-1.186,2.184c0,0.452,0.262,0.832,0.635,1.032c-0.307,0.098-0.577,0.273-0.788,0.506   C11.19,3.346,10.496,2.967,9.5,2.967c-1.139,0-2.119,0.495-2.983,0.932C6.242,4.039,5.976,4.172,5.729,4.275   C5.545,4.082,5.288,3.957,5,3.957c-0.558,0-1.01,0.452-1.01,1.01S4.442,5.978,5,5.978z M5,19.521c-2.315,0-4.267-1.49-5-3.553   h1.154l3.378-8.953c0.146-0.39,0.789-0.39,0.936,0l3.378,8.953H10C9.267,18.031,7.315,19.521,5,19.521z M7.777,15.967L5,8.608   l-2.777,7.36H7.777z"/>
          </g>
          </svg></span>
        <b>Finanzielle Flexibilität</b>:<br/> Sie zahlen lediglich für die Nutzung Ihres Fahrzeugs, was Ihnen höchste finanzielle Flexibilität gewährt
      </div>
    </div>
  </section>
  <footer>
    <ul class="legal-notice">
      <li><a href="/legal-notice.html">Impressum</a></li>
    </ul>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<script src="https://cdn.korzh.com/metroui/v4.5.1/js/metro.min.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
  <script src="main.js"></script>
</body>
</html>