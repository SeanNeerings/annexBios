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
  <title>annexBios </title>
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
          <li><p>Koop Je Tickets</p></li>
          <li><input type="text" placeholder="Search.."></li>
          <li><button>Bestel Ticket</button></li>
        </ul>
      </div>
    </div>
    <div class="main">
      <div class="main_content_one">
        <div class="container">
          <div class="annexbios">
            <h1> WELKOM BIJ ANNEXBIOS 3</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Delectus veritatis facilis maxime asperiores dolore.<br> Quam itaque soluta ab ex non illum pariatur! Quia?</p>
            <button>BEKIJK DE DRAAIENDE FILMS</button>
          </div>
          <div class="black"></div>
          <div class="map_bar">
           <div class="map"> 
           <a href="https://www.google.nl/maps/place/Rijksstraatweg+42,+3454+JC+Utrecht/@52.0820195,5.0531215,17z/data=!3m1!4b1!4m5!3m4!1s0x47c665600a203a4b:0x50deab8a2f8797c8!8m2!3d52.0820195!4d5.0553102" target="_blank"> <img src="./assets/img/mapa.png"> </a>
              <div class="greenblock">
                <div class="location"> <ion-icon name="location"></ion-icon></div>
                  <p class="locatie">Rijksstraatweg 42 <br> 3223 KA Hellevoetsluis</p>
                <div class="phone"><ion-icon name="call"></ion-icon></div> 
                  <p class="locatie2">020-12345678</p>
                <p class="bereikbaarheid">BEREIKBAARHEID <br>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo dis<br> 
            </div>
         </div>

           <div class="bar"> <img src="./assets/img/map.png" >  </div>
        </div>

      </div>
      </div>  
      <div class="main_content_two">
        <div class="main">
          <h3>FILM AGENDA</h3>
          <div class="main_filter">
            <button>
              <ion-icon name="menu-outline"></ion-icon>
            </button>
            <ul>
              <li><input type="radio" id="check" name="check" checked>FILMS</li>
              <li><input type="radio" id="check" name="check">DEZE WEEK</li>
              <li><input type="radio" id="check" name="check">VANDAAG</li>
              <li><input type="radio" id="check" name="check">
                <select name='options'>
                  <option value="0">CATEGORIE</option>
                  <option value="Actiefilm">Actiefilm</option>
                  <option value="Drama">Drama</option>
                  <option value="Horrorfilm">Horrorfilm</option>
                  <option value="Komedie">Komedie</option>
                  <option value="Romantiek">Romantiek</option>
                  <option value="Thriller">Thriller</option>
                  <option value="Animatiefilm">Animatiefilm</option>
                </select>
              </li>
            </ul>
          </div>
          <div class="main_content_one">
            <div class="main_grid">
              <?php
              for ($i = 0; $i < count($jsonData["filmdata"]); $i++) {
                //render mustache template and insert data from jsonData
                echo $movieBlockTemplate->render($jsonData["filmdata"][$i]);
              }
              ?>
            </div>
          </div>
        </div>
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