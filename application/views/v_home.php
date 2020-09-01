<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web GIS</title>
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<!-- Bootstrap -->
	<link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/BootSideMenu.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/leaflet/leaflet.css" rel="stylesheet">

	<style type="text/css">
		.user {
			padding: 5px;
			margin-bottom: 5px;
		}

		#mapid {
			height: 480px;
		}
	</style>
</head>

<body>

	<!--Test -->
	<div id="test">
		<h2>Menu</h2>
		<div class="list-group">
			<a href="#" class="list-group-item active">Home</a>
			<a href="login" class="list-group-item">Pengolahan Spasial</a>
		</div>


	</div>
	<!--/Test -->

	<!--Normale contenuto di pagina-->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Web GIS</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div id="mapid"></div>
			</div>
		</div>

	</div>
	<!--Normale contenuto di pagina-->

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/js/BootSideMenu.js"></script>
	<script src="<?= base_url() ?>assets/leaflet/leaflet.js"></script>

	<script type="text/javascript">
		$('#test').BootSideMenu({
			side: "left",
			autoClose: false
		});

		var map = L.map('mapid').setView([-6.595038, 106.816635], 13);

		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);

		$.getJSON("<?= base_url() ?>index.php/home/bangunan_json", function(data) {
			//$.each(data, function(i, field) {
			alert(data[i].bangunan_nama);
			var v_lat = data[i].bangunan_lat;
			var v_long = data[i].bangunan_long;
			L.marker([v_long, v_lat]).addTo(map)
				.bindPopup(data[1].bangunan_nama)
				.openPopup();
			L.marker([v_long, v_lat]).addTo(map)
				.bindPopup(data[1].bangunan_nama)
				.openPopup();

			// $("div").append(field + " ");
		});
	</script>
</body>

</html>