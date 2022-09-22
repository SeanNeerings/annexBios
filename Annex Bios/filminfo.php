<?php
// //use composer packages
// require __DIR__ . '/vendor/autoload.php';

// //load jsonData
// $rawJSONData = file_get_contents('data.json'); //https://annexbios.nickvz.nl/api/
// $jsonData = json_decode($rawJSONData, true);
// $id = $_GET['id'];
// die(var_dump($jsonData->filmData[0]));
// $film = array_search($id, array_column($jsonData[0], 'film_id'));
// die (var_dump(array_search($id, array_column($jsonData[0], 'film_id'))));
// print_r ($film);
// //instance mustache
// $mustache = new Mustache_Engine(array('entity_flags' => ENT_QUOTES, 'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates')));
// //load mustache template
// $movieInfoBlockTemplate = $mustache->loadTemplate('movieinfoBlock');
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
    <?php
    //render mustache template and insert data from jsonData
    // echo $movieInfoBlockTemplate->render($jsonData[""]["filmdata"]);
    ?>
    <div class="main">
      <div class="main_content_one">
        <div class="filmtitle">
          <h1>
            film title
          </h1>
        </div>
        <div class="blackbar">
        </div>
        <div class="flex-container">
          <div class="filmfoto">

          </div>
          <div class="filminfo">

          </div>
        </div>
        <div class="koopjetickets">
          <a href="./bestel.php"><button>
              <h1>KOOP JE TICKETS</h1>
            </button></a>
        </div>
        <div class="trailer"></div>
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