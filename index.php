<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktek 1</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <style>
        .fullscreen {
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div id="petaku" class="fullscreen"></div>   
    
    <script>
        //mengatur generate map
        var hasilpeta = L.map('petaku').setView([-7.520267989872001, 112.23230114203787], 18);
        //mengatur datanya
        // L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {maxZoom: 19, attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(hasilpeta);
        L.tileLayer('http://{s}.google.com/vt?lyrs=s&x={x}&y={y}&z={z}',{maxZoom: 20,subdomains:['mt0','mt1','mt2','mt3']}).addTo(hasilpeta);
        var iconmarker = L.icon ({
            iconUrl : "google_my_maps.png",
            iconSize: [50, 50]
        });
        //membuat marker
        var unwaha = L.marker([-7.520267989872001, 112.23230114203787], {title: "Ini Unwaha", icon: iconmarker, draggable: true}).addTo(hasilpeta);
        unwaha.bindPopup("Kampus Unwaha adalah salah satu kampus swasta yang ada di Jombang");
        
        //langsung tulisan tanpa klik
        // unwaha.bindPopup("Kampus Unwaha adalah salah satu kampus swasta yang ada di Jombang").openPopup();

        // var circle = L.circle([-7.520267989872001, 112.23230114203787], {
        // color: 'red',
        // fillColor: '#f03',
        // fillOpacity: 0.5,
        // radius: 500
        // }).addTo(map);
    </script>
</body>
</html>
