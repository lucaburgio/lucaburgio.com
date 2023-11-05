<?php 
$page = $_GET['p'];

include_once("conf.php");




?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Luca Burgio | Product Designer</title>
		<meta name="description" content="I’m Luca. Product Designer currently based in Milan. Designing pixel stories at Bending Spoons." />
		<meta name="author" content="Luca Burgio" />
		<link rel="shortcut icon" href="assets/favicon.png"> 
		<link rel="stylesheet" type="text/css" href="css/default.min.css?v=<?php echo $version; ?>" />
		<script src='js/jquery202.min.js'></script>
		<script async src="js/anime.min.js"></script>
	</head>
	<script async src="js/main.min.js?v=<?php echo $version; ?>	"></script>
	<body>
	<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			  ga('create', 'UA-33344001-6', 'auto');
			  ga('send', 'pageview');
			</script>

		<a href="./" class="logo-a">
			<?php include('assets/logo.svg'); ?>
			<div class="logo-panel"></div>
		</a>

		<a href="https://lucaburgio.com" class="back-to">
			<div class="t"><br><span></span></div>
			<div class="p">
				<div class="back-to-author"></div>
			</div>	
		</a>

		<div class="main">


		<!-- article body -->


		<?php
		
				
		// Create connection
		$conn = new mysqli($host, $sqlusername, $sqlpassword, $db_name);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT urltitle,title,date,shorthead FROM Articles WHERE live = 1 ORDER BY id DESC";
		//$sql = "SELECT urltitle FROM Articles WHERE id LIKE '1'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

			while ($row = $result->fetch_assoc()) {
				//$urltitle = $row['urltitle'];
				$title = $row['title'];
				$shorthead = $row['shorthead'];
				$date = $row['date'];
				$urltitle = $row['urltitle'];

				echo "
				<a class='grid-a' href='".$urltitle."'>
					<div class='grid'>
					 	<p class='date'>".$date."</p>
						<h2>".$title."</h2>
						<p>".$shorthead."</p>
					</div>
				</a>
				";
			}
		}
		else {
			echo "0 results";
		}
		// Perform query


		$conn->close();

		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		
		?>



	<!-- END article body -->
</div>

		<input type="text" id="myInput" style="width:1px;height:1px;position:absolute;bottom:0;opacity:0;">
	</body>

	
	
</html>