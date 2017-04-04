<?php
/* Template name: Home */
?>
<?php get_header(); ?>
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
            <source src="<?php bloginfo('template_directory'); ?>/audio/zuvu_sukelem.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

        <section id=info class="info pure-g">
            <div class="map pure-u-1 pure-u-lg-1-2">
                <div id="map"></div>
            </div>
            <div class="location pure-u-1 pure-u-lg-1-2">
                <h2>Ceremonija</h2>
                <p><b>15:00</b> ​Raudondvario šv. Kūdikėlio Jėzaus Teresės bažnyčioje.<br>M. Valančiaus g. 24,
                    Raudondvaris, Kauno r.</p>
                <p class="coordinates">Koordinatės: 54.9354146, 23.783196</p>

                <h2>Šventė</h2>
                <p><b>19:00</b> Babtyno - Žemaitkiemio dvare.<br>Žemaitkiemio 10, Kauno r. Babtų sen.<br>Au​tostrados
                    122 kilometre nuo Vilniaus ir 188 nuo Klaipėdos yra ženklai, vedantys į dvarą.<br>Užkandžiai ir
                    gėrimai Jūsų lauks dvare iš karto po ceremonijos.</p>
                <p class="coordinates">Koordinatės: 55.066033, 23.79128</p>

                <h2>Nakvynė</h2>
                <p>Miegosime dvare.</p>
            </div>
            <a class="diamond-2" href="#participate"></a>
        </section>


        <?php get_template_part("elements/rsvp"); ?>
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
            styles: [{
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [{"color": "#6195a0"}]
            },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{"color": "#f2f2f2"}]
                }, {"featureType": "landscape", "elementType": "geometry.fill", "stylers": [{"color": "#ffffff"}]},
                {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]},
                {
                    "featureType": "poi.park",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#e6f3d6"}, {"visibility": "on"}]
                }, {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{"saturation": -100}, {"lightness": 45}, {"visibility": "simplified"}]
                },
                {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]},
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#f4d2c5"}, {"visibility": "simplified"}]
                },
                {"featureType": "road.highway", "elementType": "labels.text", "stylers": [{"color": "#4e4e4e"}]},
                {"featureType": "road.arterial", "elementType": "geometry.fill", "stylers": [{"color": "#f4f4f4"}]},
                {"featureType": "road.arterial", "elementType": "labels.text.fill", "stylers": [{"color": "#787878"}]},
                {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]},
                {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]},
                {"featureType": "water", "elementType": "all", "stylers": [{"color": "#eaf6f8"}, {"visibility": "on"}]},
                {"featureType": "water", "elementType": "geometry.fill", "stylers": [{"color": "#eaf6f8"}]}],

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
<?php get_footer(); ?>
