<!DOCTYPE html>
	<html>
		<head>
      <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
      <meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>LirM</title>
			<meta name="description" content="Vestes">
      <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/base-min.css">
  		<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-min.css">
  		<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Wire+One&amp;subset=latin-ext" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&amp;subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>css/custom.css" type="text/css" media="all">

    </head>
    <body>

      <div class="container">

        <div class="inner-container">

          <section id="top" class="hero">
            <div class="headline">
              <h1>Liucija ir Mindaugas</h1>
              <!-- <p class="wedding">vestuves</p> -->
              <div class="ring-l"></div>
              <div class="ring-r"></div>
              <p class="date">2017 liepos 8</p>
            </div>
            <p class="invite">labai lauksime!</p>
            <a class="diamond" href="#info"></a>
          </section>

          <audio controls autoplay>
            <source src="audio/zuvu_sukelem.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
          </audio>

          <section id=info class="info pure-g">
            <div class="map pure-u-1 pure-u-lg-1-2">
      				<div id="map"></div>
      			</div>
            <div class="location pure-u-1 pure-u-lg-1-2">
              <h2>Ceremonija</h2>
              <p><b>15:00</b> ​Raudondvario šv. Kūdikėlio Jėzaus Teresės bažnyčioje.<br>M. Valančiaus g. 24, Raudondvaris, Kauno r.</p>
              <p class="coordinates">Koordinatės: 54.9354146, 23.783196</p>

              <h2>Šventė</h2>
              <p><b>19:00</b> Babtyno - Žemaitkiemio dvare.<br>Žemaitkiemio 10, Kauno r. Babtų sen.<br>Au​tostrados 122 kilometre nuo Vilniaus ir 188 nuo Klaipėdos yra ženklai, vedantys į dvarą.<br>Užkandžiai ir gėrimai Jūsų lauks dvare iš karto po ceremonijos.</p>
              <p class="coordinates">Koordinatės: 55.066033, 23.79128</p>

              <h2>Nakvynė</h2>
              <p>Miegosime dvare.</p>
            </div>
            <a class="diamond-2" href="#participate"></a>
          </section>

          <section class="bottom pure-g" id="participate">
            <div class="participation-form pure-u-1">
							<label for="text"><p>Ar dalyvausite?</p></label>
							<div class="input">
								<input type="text" name="fname" placeholder="Mano vardas, pavardė" class="names">
								<input type="submit" name"yes-submit" value="Taip" class="submit-button">
                <input type="submit" name"no-submit" value="Ne" class="submit-button">
							</div>
              <a class="up-home" href="#top"></a>
						</div>

          </section>

        </div>

      </div>

      <script>

      function babtynasMap() {
        var origin = {lat: 55.066033, lng: 23.79128};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: origin,
          scrollwheel: false,
          mapTypeControl: false,
          gestureHandling: 'cooperative',
          zoomControl: true,
          scaleControl: true,
          panControl: true,
          streetViewControl: false,
          zoomControlOptions: {
            position: google.maps.ControlPosition.RIGHT_TOP
          },
          styles:
            [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#6195a0"}]},
            {"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},
            {"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},
            {"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#e6f3d6"},{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45},{"visibility":"simplified"}]},
            {"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},
            {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#f4d2c5"},{"visibility":"simplified"}]},
            {"featureType":"road.highway","elementType":"labels.text","stylers":[{"color":"#4e4e4e"}]},
            {"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#f4f4f4"}]},
            {"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#787878"}]},
            {"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},
            {"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},
            {"featureType":"water","elementType":"all","stylers":[{"color":"#eaf6f8"},{"visibility":"on"}]},
            {"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#eaf6f8"}]}],

        });

        setMarkers(map);
      }

      // Data for the markers consisting of a name, a LatLng and a zIndex for the
      // order in which these markers should display on top of each other.
      var locations = [
        ["Dvaras", 55.066033, 23.79128, 2],
        ["Bažnyčia", 54.9354146, 23.783196, 1]
      ];

      function setMarkers(map) {
        // Adds markers to the map.

        for (var i = 0; i < locations.length; i++) {
          var location = locations[i];
          var marker = new google.maps.Marker({
            position: {lat: location[1], lng: location[2]},
            map: map,
            // icon: "images/mappointer.png"
            // shape: shape,
            title: location[0],
            zIndex: location[1]
          });
        }
			}
			</script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl0psEWIDe9K5JwcrXEtbJWi17VMCddPY&callback=babtynasMap"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <script src="scripts/scripts.js" type="text/javascript"></script>

    </body>
</html>
