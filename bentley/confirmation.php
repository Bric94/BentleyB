<?php
    $store = urldecode($_GET['store']);
    $url = "https://berlin.bentleymotors.com/";
    switch ($store) {
        case 'Bentley Berlin':
            $url = "https://berlin.bentleymotors.com";
            break;
        case 'Bentley Frankfurt':
            $url = "http://frankfurt.bentleymotors.com";
            break;
        case 'Bentley Hamburg':
            $url = "https://hamburg.bentleymotors.com";
            break;
        case 'Bentley Hannover':
            $url = "https://hannover.bentleymotors.com";
            break;
        case 'Bentley Köln':
            $url = "https://koln.bentleymotors.com/";
            break;
        case 'Bentley Mannheim':
            $url = "https://mannheim.bentleymotors.com";
            break;
        case 'Bentley München':
            $url = "https://muenchen.bentleymotors.com";
            break;
        case 'Bentley Nürnberg':
            $url = "https://nuernberg.bentleymotors.com";
            break;
        case 'Bentley Singen':
            $url = "https://singen.bentleymotors.com";
            break;  
        case 'Bentley Stuttgart':
            $url = "https://stuttgart.bentleymotors.com";
            break;      
        default:
            $url = "https://berlin.bentleymotors.com/";
            break;
    }
?>

<!doctype html>
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
                <li><a href="/bentayga-s.html">BENTAYGA S</a></li>
                <li><a href="/flying-spurs-s.html">FLYING SPUR S</a></li>
                <li><a href="/continental-gt-s">CONTINENTAL GT S</a></li>
                <li><a href="/continental-gtc-s">CONTINENTAL GTC S</a></li>
            </ul>
        </nav>
    </header>

    <div class="confirmation-container">
        <h1>Bentley Motor Leasing</h1>
        <p>
            Vielen Dank, wir werden Sie zum gewünschten Zeitpunkt kontaktieren. 
        </p>
        <p>
            In der Zwischenzeit zögern Sie nicht, unsere Website für weitere Informationen zu besuchen.
        </p>
        <p>
            <a href="<?= $url ?>"><?= $url ?></a>
        </p>
        <iframe width="1120" height="630" src="https://www.youtube.com/embed/uz1JdvR2OfQ?autoplay=1&controls=0&loop=1&mute=1&showinfo=0" allow='autoplay' title="Bentley" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <footer>
        <ul>
        <li><a href="/legal-notice">Impressum</a></li>
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