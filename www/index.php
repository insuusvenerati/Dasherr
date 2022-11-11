<!doctype html>
<html lang="en">

  <?php include 'include/samplesettings.php';?>

  <head>
	<title>Dashboard</title>

	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />	
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="include/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link rel="icon" href="res/favicon.svg" sizes="32x32" type="image/png">
	<link href="include/custom.css" rel="stylesheet">
	
	<script src="include/bootstrap.bundle.min.js"></script>
	<script src="include/jquery.min.js"></script>
	
	<script src="include/theming.js"></script>
	<script src="include/worker.js"></script>
	
  </head>
  <body>
	<!-- Window Contents -->
	<div class="container col-lg-12 col-xl-10" style="display:none">

	<a href="editor.php" class="iconButton float-end"><i class="fa-solid fa-wrench"></i></a>
		
		<!-- Dashboard Contents -->
		<div class="row">
			<h2 id="pageTitle"></h2>
			<hr>
		</div>
		
		
		<!-- Widgets here -->
		<div id="tilesWidgets" class="row">
			<div class="row-cols-3 row-cols-sm-4 row-cols-md-6 row-cols-lg-10 row-cols-xl-12 gy-3 mb-5">
				<div class="widget text-end">
					<div class="row">
						<span class="col-2"><i class="fa fa-temperature-low"></i></span>
						<span class="col-7" id="cpuTemp"></span>
					</div>
					<div class="row">
						<span class="col-2"><i class="fa fa-microchip"></i></span>
						<span class="col-7" id="cpuPrct"></span>
					</div>
					<div class="row">
						<span class="col-2"><i class="fa fa-memory"></i></span>
						<span class="col-7" id="memPrct"></span>
					</div>
				</div>
			</div>
		</div>
	
		
		<!-- Section/Tiles get added here -->
		<div id="tilesServices" class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 gy-5">
		</div>
			
		<!-- End Dashboard Contents -->
	</div>


	<!-- End Window Contents -->
  </body>
</html>