<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizzeria Amanda </title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="tabs.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5bd8ffc29f.js" crossorigin="anonymous"></script>
</head>
<body>

  <main>
    <section id="landing-page">
      <div class="nav-slider">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>

      <!-- <img src='bird.png'> <br> -->
      <header class="title-background">
        <h2 class="title"> PIZZERIA AMANDA <br> Töreboda </h2>
      </header>
      <!-- <img src='bird.png'> <br> -->
    </section>
    <section class="nav-slider-section">
      <button class="close-nav-slider"> X </button>
      <section class="nav-links-container">
        <ul>
          <!-- <li> <a class="nav-links" href='order.php' target="_blank"> Beställ online </a></li> -->
          <li> <a class="nav-links" href=#menu> Se vår meny </a></li> <!-- här ska order.php vara-->
          <li> <a class="nav-links" href=#open> Öppettider </a></li>
        </ul>
      </section>
    </section>

    <section id="menu">
      <h2 class="menu-title"> Meny </h2>
      <section class="tabs-contanier">
        <section class="tabs">  <!-- flikarna i sig -->
          <button class="tabHeader active-tab" data-tab="1">Pizza</button> <!-- data tab för att se active class, vilken länk de har klickat på-->
          <button class="tabHeader" data-tab="2">Kebab</button>
          <button class="tabHeader" data-tab="3">Kyckling</button>
          <button class="tabHeader" data-tab="4">Sallad</button>
          <button class="tabHeader" data-tab="5">Lunchpaket</button>
        </section>

        <section id="tabSection-1" class="tabSection show-tab">
          <?php
          echo "<ol class='pizza'>";
          echo "<h3>I samtliga pizzor ingår tomatsås och ost <br/> </h3>";
          echo "<h3>Familjepizza <b>190:-</b> </h3>";
          ?>
          </h3><li><p>MARGARETA <b class='priser'>85:- </b> </p> Ost </li>
          <li><p>CICILIA <b class='priser'>85:- </b> </p> Champinjoner </li>
          <li><p>VESUVIUS <b class='priser'>85:- </b> </p> Skinka </li>
          <li><p>CALZONE <b class='priser'>85:- </b> </p> Inbakad skinka </li>

          <br/><h3>Familjepizza <b>210:-</b>
          </h3><li><p>CAPRICCIOSA <b class='priser'>90:- </b> </p> Skinka, champinjoner </li>
          <li><p>HAWAII <b class='priser'>90:- </b> </p> Skinka, ananas </li>
          <li><p>PRIMA <b class='priser'>90:- </b> </p> Skinka, banan </li>
          <li><p>MAFFIA <b class='priser'>90:- </b> </p> Fläskfilé, skinka, champinjoner </li>
          <li><p>CIAO CIAO <b class='priser'>90:- </b> </p> Inbakad. Kebabkött, lök, champinjoner, färsk vitlök </li>
          <li><p>BOLOGNESE <b class='priser'>90:- </b> </p> Köttfärssås </li>
          <li><p>PALERMO <b class='priser'>90:- </b> </p> Köttfärssås, champinjoner, </li>
          <li><p>DISCO <b class='priser'>90:- </b> </p> Köttfärssås, skinka, räkor </li>
          <li><p>BELLA <b class='priser'>90:- </b> </p> Köttfärssås, skinka, champinjoner </li>
          <li><p>AMIGO <b class='priser'>90:- </b> </p> Köttfärssås, champinjoner, paprika </li>
          <li><p>LA MAFFIA <b class='priser'>90:- </b> </p> Bacon, ägg, lök, cayennepeppar </li>
          <li><p>MADONNA <b class='priser'>90:- </b> </p> Bacon, lök, salami, cayennepeppar </li>
          <li><p>AFRICANA <b class='priser'>90:- </b> </p> Ananas, banan </li>
          <li><p>VEGETABILISK PIZZA <b class='priser'>90:- </b> </p> Lök, paprika, kronärtskocka, ananas </li>
          <li><p>CAPRI <b class='priser'>90:- </b> </p> Räkor, skinka </li>
          <li><p>MARINARA <b class='priser'>90:- </b> </p> Räkor, musslor </li>
          <li><p>CAMPINO <b class='priser'>90:- </b> </p> Räkor, skinka, ananas </li>
          <li><p>FRUTTI DEL MARE <b class='priser'>90:- </b> </p> Räkor, musslor, tonfisk </li>
          <li><p>BAMBINO <b class='priser'>90:- </b> </p> Tonfisk, skinka, ananas </li>
          <li><p>TOMASO <b class='priser'>90:- </b> </p> Räkor, tonfisk, skinka </li>
          <li><p>JAMAICA <b class='priser'>90:- </b> </p> Räkor, skinka, champinjoner </li>

          <br/><h3>Familjepizza <b>230:-</b> </h3>
          <h3>Mexicanska pizzor (starka pizzor, nr 27-29)</h3>
          <li><p>MAMA MIA <b class='priser'>95:- </b> </p> Räkor, musslor, skinka, champinjoner, paprika </li>
          <li><p>MEXICANA <b class='priser'>95:- </b> </p> Stekt köttfärs, taco kryddmix, färsk vitlök, tacosås, green chili </li>
          <li><p>AZTEKA <b class='priser'>95:- </b> </p> Skinka, taco kryddmix, tacosås, jalapeno </li>
          <li><p>ACAPULCO <b class='priser'>95:- </b> </p> Oxfilé, taco kryddmix, färsk vitlök, lök, champinjoner, tacosås, jalapeno </li>
          <li><p>AMANDA <b class='priser'>95:- </b> </p> Oxfilé, köttfärs, gorgonzola, tabasco </li>
          <li><p>DUBBEL CIAO CIAO <b class='priser'>105:- </b> </p> Kebabkött, champinjoner, lök, färsk vitlök </li>
          <li><p>NAPOLI <b class='priser'>95:- </b> </p> Kebabkött, bearnaisesås, skivad tomat, sparris </li>
          <li><p>LABBÅS <b class='priser'>95:- </b> </p> Fläskfilé, räkor, bacon, champinjoner </li>
          <li><p>SUSSI <b class='priser'>95:- </b> </p> Fläskfilé, skinka, ägg, champinjoner, lök, cayennepeppar </li>
          <li><p>QUATTRO PESCI <b class='priser'>95:- </b> </p> Räkor, musslor, krabbstick, tonfisk </li>
          <li><p>SABINA <b class='priser'>95:- </b> </p> Fläskfilé, skinka, champinjoner, lök, bearnaisesås </li>
          <li><p>QUATTRO STAGIONI <b class='priser'>95:- </b> </p> Räkor, skinka, musslor, champinjoner, kronärtskocka </li>
          <li><p>KEBABPIZZA <b class='priser'>95:- </b> </p> Kebabkött, lök, champinjoner, kebabsås </li>
          <li><p>GORGONZOLA <b class='priser'>95:- </b> </p> Oxfilé, gorgonzola, champinjoner </li>
          <li><p>KYCKLINGPIZZA <b class='priser'>95:- </b> </p> Kyckling, champinjoner, paprika, färsk vitlök </li>

          <br/><h3>SPECIALPIZZOR</h3>
          <h3>Familjepizza <b>250:-</b> </h3>
          <li><p>TOBBES SPECIAL <b class='priser'>105:- </b> </p> Lök, kebabkött, isbergssallad, tomat gurka, pepperoni, kebabsås </li>
          <li><p>PER SPECIAL <b class='priser'>110:- </b> </p> Skinka, lök, cayennepeppar, kebabkött, strips, kebabsås </li>
          <li><p>TAXI <b class='priser'>105:- </b> </p> Fläskfilé, bacon, champinjoner, räkor, lök, cayennepeppar, kebabkött, kebabsås </li>
          <li><p>SOL <b class='priser'>105:- </b> </p> Skinka, champinjoner, räkor, musslor, ananas, sparris, kebabkött </li>
          <li><p>JAMAICA SPECIAL <b class='priser'>105:- </b> </p> Skinka, räkor, champinjoner, oxfilé, kebabkött, kebabsås </li>
          <li><p>TÖREBODA SPECIAL <b class='priser'>105:- </b> </p> Lök, champinjoner, kebabkött, strips, kebabsås </li>
          <li><p>SIMON SPECIAL <b class='priser'>105:- </b> </p> Skinka, stekt köttfärs, räkor, fläskfilé, tacokryddmix, vitlök </li>
          <li><p>TITANIC (halvt inbakad) <b class='priser'>105:- </b> </p> Skinka, lök, champinjoner, kebabkött, bearnaisesås </li>
          <li><p>A la GOTTIS <b class='priser'>105:- </b> </p> Ananas, banan, kyckling, jordnötter, curry </li>
          <li><p>NAPOLITANA <b class='priser'>105:- </b> </p> Skinka, gorgonzola, salami, oliver, paprika </li>
          <li><p>BLACK AND WHITE <b class='priser'>105:- </b> </p> Oxfilé, fläskfilé, champinjoner, lök, skivad tomat, bearnaisesås </li>
          <li><p>JANSSONS SPECIAL <b class='priser'>105:- </b> </p> Oxfilé, gorgonzola, sparris, skivad tomat, champinjoner, bearnaisesås </li>
          <li><p>PRINSESSA <b class='priser'>105:- </b> </p> Vitost, ananas, bacon, paprika </li>
          <li><p>VANESSA <b class='priser'>105:- </b> </p> Vitost, salami, oliver, lök, majs </li>
          <?php

          echo "</ol>";
          ?>
        </section>

        <section id="tabSection-2" class="tabSection hide-tab">
          <?php
          echo "<ol class='pizza'>";
          ?>
          <li><p>KEBAB I BRÖD <b class='priser'>90:- </b> </p> Kebabkött, tomat, gurka, sallad, peperoni, kebabsås </li>
          <li><p>KEBABTALLRIK <b class='priser'>95:- </b> </p> Kebabkött, pommes, strips, tomat, gurka, sallad, peperoni, kebabsås </li>
          <li><p>KEBABRULLE <b class='priser'>95:- </b> </p> Tunnbröd, isbergssallad, tomat, gurka, lök, kebabkött, kebabsås </li>
          <li><p>MEGARULLE <b class='priser'>100:- </b> </p> Tunnbröd, isbergssallad, tomat, gurka, lök, kebabkött, strips, kebabsås </li>

          <?php
          echo "</ol>";
          ?>

        </section>

        <section id="tabSection-3" class="tabSection hide-tab">
          <?php
          echo "<ol class='pizza'>";
          ?>
          <li><p>KYCKLING I BRÖD <b class='priser'>90:- </b> </p> Tomat, gurka, sallad, aioli eller kebabsås </li>
          <li><p>KYCKLINGTALLRIK <b class='priser'>100:- </b> </p> Pommes strips, tomat, gurka, sallad, aioli eller kebabsås </li>
          <li><p>KYCKLINGRULLE <b class='priser'>100:- </b> </p> Tunnbröd, isbergssallad, tomat, gurka, lök, kyckling, kebabsås </li>

          <?php
          echo "</ol>";
          ?>

        </section>

        <section id="tabSection-4" class="tabSection hide-tab">
          <?php
          echo "<ol class='pizza'>";
          echo "<h3>I samtliga sallader ingår isbergssallad, röd paprika, purjolök, gurka, tomat, majs </h3>";
          ?>
          <li><p>RÄKSALLAD <b class='priser'>90:- </b> </p> Räkor, champinjoner, ägg, sparris </li>
          <li><p>AMERIKANSK SALLAD <b class='priser'>90:- </b> </p> Skinka, ost, ananas </li>
          <li><p>GREKISK SALLAD <b class='priser'>90:- </b> </p> Vitost, champinjoner, lök, oliver, tomat </li>
          <li><p>ITALIENSK SALLAD <b class='priser'>90:- </b> </p> Skinka, salami, ost, tomat </li>
          <li><p>CHEFS SALLAD <b class='priser'>90:- </b> </p> Champinjoner, ost, skinka, bacon </li>
          <li><p>KYCKLINGSALLAD <b class='priser'>90:- </b> </p> Kyckling, bacon, champinjoner </li>
          <li><p>VEGETABILISK TALLRIK <b class='priser'>85:- </b> </p> Champinjoner, lök, oliver, sparris, ananas </li>
          <li><p>TONFISKSALLAD <b class='priser'>90:- </b> </p> Tonfisk, champinjoner, ägg </li>
          <li><p>KEBABSALLAD <b class='priser'>90:- </b> </p> Lök, champinjoner, kebabkött, kebabsås </li>

          <?
          echo "</ol>";
          ?>

        </section>

        <section id="tabSection-5" class="tabSection hide-tab">
          <ol class='lunch'>
            <h3> Lunchpaket 90:- vardagar kl 11-14 </h3>
            <p> Följande gäller för lunchpaket: </p>
            <li> Pizzor nr 1-40, ej nr 31 </li>
            <li> Kebab i bröd, Kebabtallrik </li>
            <li> Kyckling i bröd </li>
            <li> Sallader </li>
            <p> Sallad, dricka & kaffe ingår </p>
          </ol>


        </section>

      </section>
    </section>

    <!--  FOOTER -->
    <section id="restaurant-info">
      <section class ="info-container">
        <section class="address-content">
          <h2 class="restaurant-info-title"><i class="fas fa-map-marker-alt"></i>Adress </h2>
          <p class="address"> Kyrkogatan 15</p>
          <p class="address"> Töreboda, Sverige </p>
          <p class="address"> <i class="fas fa-phone"></i> Ring & beställ: <a href="tel:+46050612033"> 0506 - 120 33</a> </p>
        </section>

        <section id='open' class="business-hours">
          <h2 class="restaurant-info-title"><i class="fas fa-clock"></i> Öppettider </h2>
          <p class="hours"> Måndag-Torsdag: 11-21 </p>
          <p class="hours"> Fredag-Lördag: 11-22 </p>
          <p class="hours"> Söndag: 12-21 </p>

        </section>

        <section class="contact-content"> <!-- sociala medier -->
          <h2 class="restaurant-info-title"> <i class="fas fa-users"></i> Följ oss </h2>
          <p class="media"> <a href='https://www.facebook.com/PizzeriaAmandaToreboda/' target='_blank'> <i class='fab fa-facebook'></i> Facebook </a></p>
        </section>

      </section>

    </section>

    <a id='top' class="gotop" href="#landing-page"> <i class="fas fa-angle-double-up fa-3x"></i> </a>

    <script>

    window.onscroll = function() {scrollFunction()};

    function scrollFunction(){
      var goTop = document.getElementById('top');
      console.log(600<window.scrollY);

      if(600<window.scrollY){
        goTop.style.display = "block";
      }
      else{
        goTop.style.display = "none";
      }
    }


    </script>

  </main>
  <script src="main.js"></script>
  <script src="tabs.js"> </script>

</body>
</html>
