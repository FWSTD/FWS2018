<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles.css"/>
		<script src="scripts.js"></script>
		<title>My Collection</title>
	</head>
	
	<body>
		<!-- Top Icon Navigation Bar -->
		<div class="icon-bar">
			<a class="active" href="#"><i class="fa fa-home"></i></a> 
			<a href="#"><i class="fa fa-search"></i></a> 
			<a href="cf.php"><i class="fa fa-envelope"></i></a> 
			<a href="https://en.wikipedia.org/wiki/Woodblock_printing_in_Japan"><i class="fa fa-globe"></i></a>
		</div>

		<center>
		<h1><em>My Japanese WoodBlock Printing Collection</em></h1>
		
		<!-- Picture Gallery & Arrows -->
		<div class="align">
			<img src="resources/previous_arrow.png"onclick="previous()"/>
			<img id="img" src="resources/img1.jpg"/>
			<img src="resources/next_arrow.png"onclick="next()"/>
		</div>
		</center>
	</body>
</html>