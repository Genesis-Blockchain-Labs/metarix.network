
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Grid coordinates - Leaflet</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		.leaflet-container {
			height: 600px;
			width: 100%;
			max-width: 100%;
			max-height: 100%;
		}
	</style>

	
</head>
<body>

<div id='map'></div>

<script type="text/javascript">

	var map = L.map('map', {
		center: [0, 0],
		zoom: 0
	});

	L.GridLayer.DebugCoords = L.GridLayer.extend({
		createTile: function (coords, done) {
			var tile = document.createElement('div');
			tile.innerHTML = [coords.x, coords.y, coords.z].join(', ');
			tile.style.outline = '1px solid red';

			setTimeout(function () {
				done(null, tile); // Syntax is 'done(error, tile)'
			}, 500 + Math.random() * 1500);

			return tile;
		}
	});
	
	L.gridLayer.debugCoords = function (opts) {
		return new L.GridLayer.DebugCoords(opts);
	};

	var debugCoordsGrid = L.gridLayer.debugCoords();
	map.addLayer(debugCoordsGrid);
	
</script>



</body>
</html>
