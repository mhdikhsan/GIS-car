<!doctype html>
<html>
  <head>
    <title>Hello OpenStreetMap</title>
    <link rel="stylesheet" href="openlayers/ol.css" type="text/css" />
    <script src="openlayers/ol-debug.js"></script>
  </head>
  <body>
    <div id="map" class="map"></div>
    <script>
        // Declare a Tile layer with an OSM source
        var osmLayer = new ol.layer.Tile({
          source: new ol.source.OSM()
        });
		var msLayer = new ol.layer.Image({
          source: new ol.source.ImageWMS({
				url: "http://localhost/mapserver/mapserv.exe?map=D:/htdocs/webgis2/sources/shp/24.map", 
				serverType: "mapserver", 
				params: {
					LAYERS: "BIDANG_HGU", 
					FORMAT: "image/png"
				}
			}), 
        });
        // Create latitude and longitude and convert them to default projection
        var birmingham = ol.proj.transform([101.447403, 0.533505], 'EPSG:4326', 'EPSG:3857');
        // Create a View, set it center and zoom level
        var view = new ol.View({
          center: birmingham,
          zoom: 10
        });
        // Instanciate a Map, set the object target to the map DOM id
        var map = new ol.Map({
          target: 'map'
        });
        // Add the created layer to the Map
        map.addLayer(osmLayer);
        map.addLayer(msLayer);
        // Set the view for the map
        map.setView(view);
    </script>
  </body>
</html>