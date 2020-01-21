<?php
require "convert.php";
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

    <title>RaDiO-AkTv</title>
	
    <link rel="stylesheet" href="css/leaflet.css" />
	<link rel="stylesheet" href="css/style.css"> 

    <script src="scripts/leaflet.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>

<body>


<h1><span id="gr">Ra</span>Akt</h1>


<div id="map" class="container-fluid"></div>

<script src="scripts/leaflet-heat.js"></script>
<script src="realberlin.json"></script>

<script>
var map = L.map('map').setView([52, 13], 6);
var tiles = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);


addressPoints = addressPoints.map(function (p) { return [p[0], p[1]]; });
var heat = L.heatLayer(addressPoints).addTo(map);
</script>

</body>
</html>