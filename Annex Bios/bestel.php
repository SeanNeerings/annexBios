<?php
//use composer packages
require __DIR__ . '/vendor/autoload.php';

//load jsonData
$rawJSONData = file_get_contents('data.json'); //https://annexbios.nickvz.nl/api/
$jsonData = json_decode($rawJSONData, true);

//instance mustache
$mustache = new Mustache_Engine(array('entity_flags' => ENT_QUOTES, 'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates')));
//load mustache template
$movieBlockTemplate = $mustache->loadTemplate('movieBlock');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nike Site</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="./assets/js/script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
  <div class="container">
    <div class="header">
      <div class="header_top">
        <img src="./assets/img/nike_logo.png">
        <ul>
          <li><a href="#" class="active">FILM AGENDA</a></li>
          <li><a href="#">ALLE VESTIGINGEN</a></li>
          <li><a href="#">CONTACT</a></li>
        </ul>
      </div>
      <div class="header_bottom">
        <ul>
          <li>
            <p>Koop Je Tickets</p>
          </li>
          <li><input type="text" placeholder="Search.."></li>
          <li><button>Bestel Ticket</button></li>
        </ul>
      </div>
    </div>
    <div class="main">
      <div class="main_content_three">
        <h2>TICKETS BESTELLEN</h2>
      </div>
      <div class="main_content_three">
        <button>film naam</button>
        <select name='options'>
          <option value="0">Datum</option>
          <option value="Actiefilm">1 Januari</option>
          <option value="Drama">2 Januari</option>
          <option value="Horrorfilm">3 Januari</option>
        </select>
        <select name='options'>
          <option value="0">tijdstip</option>
          <option value="Actiefilm">10:00</option>
          <option value="Drama">11:00</option>
          <option value="Horrorfilm">12:00</option>
        </select>
      </div>
      <div class="main_content_four">
        <h4>Stap 1 Kies Je Ticket</h4>
        <div class="tickets">
          <div class="tickets_left">
            TYPE
          </div>
          <div class="tickets_right">
            <p>PRIJS</p>
            <p>AANTAL</p>
          </div>
        </div>
        <div class="line"></div>
        <div class="tickets">
          <div class="tickets_left">
            Normaal
          </div>
          <div class="tickets_right">
            <p>€9.00</p>
            <p>
              <select name='options'>
                <option value="0">0</option>
                <option value="Actiefilm">10:00</option>
                <option value="Drama">11:00</option>
                <option value="Horrorfilm">12:00</option>
              </select>
            </p>
          </div>
        </div>
        <div class="tickets">
          <div class="tickets_left">
            Kind t/m 11 jaar
          </div>
          <div class="tickets_right">
            <p>€5.00</p>
            <p>
              <select name='options'>
                <option value="0">0</option>
                <option value="Actiefilm">10:00</option>
                <option value="Drama">11:00</option>
                <option value="Horrorfilm">12:00</option>
              </select>
            </p>
          </div>
        </div>
        <div class="tickets">
          <div class="tickets_left">
            65+
          </div>
          <div class="tickets_right">
            <p>€7.00</p>
            <p>
              <select name='options'>
                <option value="0">0</option>
                <option value="Actiefilm">10:00</option>
                <option value="Drama">11:00</option>
                <option value="Horrorfilm">12:00</option>
              </select>
            </p>
          </div>
        </div>
        <div class="line"></div>
        <div class="tickets">
          <div class="tickets_left">
            <p>VOUCHERCODE</p>
          </div>
          <div class="tickets_right">
            <p><input type="text" placeholder="Code"></p>
            <p><button>Toevoegen</button></p>
          </div>
        </div>
        <h4>Stap 2 Kies Je Stoel</h4>
        <div class="chairs">
          <img src="./assets/img/zaal_groen.png">
        </div>
        <h4>Stap 3 Controleer Je Bestelling</h4>
        <div class="film_info">
          <div class="film_info_flex">
            <div class="film_info_flex_img">
              <img src="./assets/img/Jurassic-World_-Fallen-Kingdom.jpg">
            </div>
            <div class="film_info_flex_div">
              <h5>
                Jurrasic World Fallen Kingdom<br>
                <div class="img2">
                  <img src="./assets/img/kijkwijzer-12.png">
                  <img src="./assets/img/kijkwijzer-eng.png">
                  <img src="./assets/img/kijkwijzer-geweld.png">
                </div>
                <div class="img2_text"><h6>Bioscoop: </h6><p> Hellevoetsluis (zaal 3)</p><br></div>
                <div class="img2_text"><h6>Wanneer: </h6><p> 11 juni 14:15</p><br></div>
                <div class="img2_text"><h6>Stoelen: </h6><p> Rij 2 stoel 7</p><br></div>
                <div class="img2_text"><h6>Tickets: </h6><p> 1 keer normaal</p><br></div>
                <div class="img2_text"><h6>Totaal 1 ticket: </h6><p>€9.00</p></div>
              </h5>
            </div>
          </div>
        </div>
        <h4>Stap 4 Vul Je Gegevens In</h4>
        <div class="gegevens">
          <input type="text" placeholder="Voornaam" class="gegevens_naam" name="Voornaam">
          <input type="text" placeholder="Achternaam" class="gegevens_naam" name="Achternaam">
          <input type="text" placeholder="Email" class="gegevens_naam2">
          <input type="text" placeholder="Wachtwoord" class="gegevens_naam2">
        </div>
        <h4>Stap 5 Kies Je Betaalwijze</h4>
        <ul>
          <li><input type="radio" id="check" name="check" checked><img src="./assets/img/ideal.png"></li>
          <li><input type="radio" id="check" name="check"><img src="./assets/img/paypal.png"></li>
          <li><input type="radio" id="check" name="check"><img src="./assets/img/ideal2.png"></li>
        </ul>
        <div class="checkbox_text">
          <input type="checkbox">
          <p>Ik Ga Akkoord Met de Algemene Voorwaarden.</p>
        </div>
      </div>
      <div class="main_content">
        <h3>AFREKENEN</h3>
      </div>
    </div>
    <div class="footer">
      <div class="footer_top">
        <div class="footer_top_one">
          <img src="./assets/img/nike_logo.png">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quia consectetur illum ullam, fugit natus.
          </p>
          <button>Lees Meer</button>
        </div>
        <div class="footer_top_two">
          <h4>Footertext</h4>
          <p>
            TEXTTEXT<br>TEXTTEXT<br>TEXTTEXT<br>TEXTTEXT
          </p>
        </div>
        <div class="footer_top_three">
          <h4>Footertext</h4>
          <p>
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-twitter"></ion-icon>
            <ion-icon name="logo-github"></ion-icon>
          </p>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="footer_nav">
          <ul>
            <li><a href="#">Voorwaarden </a></li>
            <li><a href="#">Privacy Beleid </a></li>
            <li><a href="#">Cookie Disclaimer</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>

</html>