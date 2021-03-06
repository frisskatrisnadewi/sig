<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peta Kabupaten di Bali</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/leaflet-kmz@latest/dist/leaflet-kmz.js"></script>
    <style>
        #mapid {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
        }
        
    </style>
</head>

<body>

    <div id="mapid"></div>
    <script>
        $(document).ready(function(){
            
            var popup = L.popup();
            var countId = 0;
            var map = L.map('mapid').setView([-8.655924, 115.216934], 13);
            L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
                        maxZoom: 20,
                        subdomains:['mt0','mt1','mt2','mt3']
                    }).addTo(map);

            var myIcon = L.icon({
                iconUrl: 'logo.png',
                iconSize: [70, 85],
                iconAnchor: [42, 90],
                popupAnchor: [-3, -76],
                shadowSize: [68, 95],
                shadowAnchor: [22, 94]
            });
            
            // Instantiate KMZ parser (async)
  var kmzParser = new L.KMZParser({
    onKMZLoaded: function(layer, name) {
      control.addOverlay(layer, name);
      layer.addTo(map);
    }, interactive: true, // Disable default "leaflet.js" mouse layer interactions.
       pointable: true,
  });
  // Add remote KMZ files as layers (NB if they are 3rd-party servers, they MUST have CORS enabled)
  kmzParser.load('warnabali.kmz');
  /*      kmzParser.load('regions.kmz');
        kmzParser.load('capitals.kmz', { interactive: true });
        kmzParser.load('globe.kmz', { ballon: false });
        kmzParser.load('multigeometry.kmz', { pointable: false });*//*
  kmzParser.load('https://raruto.github.io/leaflet-kmz/examples/capitals.kmz');
  kmzParser.load('https://raruto.github.io/leaflet-kmz/examples/globe.kmz');*/

  var control = L.control.layers(null, null, { collapsed:false }).addTo(map);

            
               
    });

        
    </script>


</body>

</html>