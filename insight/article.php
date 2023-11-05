<?php 
$page = $_GET['p'];

include_once("conf.php");

// Create connection
$conn = new mysqli($host, $sqlusername, $sqlpassword, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT urltitle,title,date,body,shorthead FROM Articles WHERE urltitle LIKE '$page'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
		$urlTitle = $row['urltitle'];
		$title = $row['title'];
		$shorthead = $row['shorthead'];
		$body = $row['body'];
		$date = $row['date'];
		
		$sharableTitle = str_replace(" ","%20",$title);
		$articleURL = "https://".$_SERVER[HTTP_HOST].$_SERVER['REQUEST_URI'];
		$twitterShare = "https://twitter.com/intent/tweet?text=".$sharableTitle.", by @burgioluca ".$articleURL;
		$metaDataImage = "https://".$_SERVER[HTTP_HOST]."/".$directory."/assets/visuals/".$urlTitle."-00.png";
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


include('logic.php');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php echo "
			<title>".$title."</title>
			<link rel=\"canonical\" href=\"".$articleURL."\" />
			<meta property=\"og:url\" content=\"".$articleURL."\"/>
			<meta property=\"og:type\" content=\"article\"/>
			<meta property=\"article:author\" content=\"Luca Burgio\"/>
			<meta property=\"og:image\" content=\"".$metaDataImage."\"/>
			<meta property=\"og:image:secure_url\" content=\"".$metaDataImage."\"/>
			<meta property=\"og:title\" content=\"".$title."\"/>
			<meta property=\"og:description\" content=\"".$shorthead."\"/>
			<meta property=\"fb:app_id\" content=\"645507802700722\"/>
			<meta name=\"description\" content=\"".$shorthead."\">
			<meta name=\"twitter:card\" content=\"summary_large_image\">
			<meta name=\"twitter:site\" content=\"@burgioluca\">
			<meta name=\"twitter:creator\" content=\"@burgioluca\">
			<meta name=\"twitter:description\" content=\"".$shorthead."\">
			<meta name=\"twitter:title\" content=\"".$title."\">
			<meta name=\"twitter:image:src\" content=\"".$metaDataImage."\">
			<meta name=\"twitter:domain\" content=\"".$articleURL."\">
		"; ?>

		<meta name="author" content="Luca Burgio" />
		<link rel="shortcut icon" href="assets/favicon.png"> 
		<link rel="stylesheet" type="text/css" href="css/default.min.css?v=<?php echo $version; ?>" />
		<script src='js/jquery202.min.js'></script>
		<script async src="js/anime.min.js"></script>
		<script async src="js/main.min.js?v=<?php echo $version; ?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	</head>
	
	<body>
	<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			  ga('create', 'UA-33344001-6', 'auto');
			  ga('send', 'pageview');
			</script>
		<div class="main">
			<h1 class='title'><?php echo $title; ?></h1>
			<div class="author">
				<div class="picture"></div>
				<a href="https://lucaburgio.com" class="name">Luca Burgio</a>
				<span class="date">, <?php echo $date; ?></span>
			</div>

			
			<!-- article body -->

				<?php print $body; ?>

			<!-- END article body -->


			<div class="label-footer">Like this article? Spread the word.</div>
	
			<div class="article-footer">
				
				<a target="_blank" href="<?php echo $twitterShare; ?>">
					<div class="share twitter">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path d="M22 5.92213C21.2639 6.2483 20.4741 6.46951 19.6442 6.56827C20.4915 6.06085 21.1402 5.25602 21.4476 4.29994C20.6527 4.76984 19.7754 5.11105 18.8406 5.29602C18.092 4.49742 17.0271 4 15.8461 4C13.5803 4 11.7431 5.83716 11.7431 8.10174C11.7431 8.42292 11.7794 8.73661 11.8494 9.03658C8.44001 8.86533 5.41684 7.2319 3.39347 4.74984C3.03977 5.35474 2.83856 6.05958 2.83856 6.81197C2.83856 8.23546 3.56343 9.49148 4.66324 10.2263C3.99085 10.2038 3.35847 10.0189 2.80484 9.71142V9.76266C2.80484 11.7498 4.21958 13.4082 6.09546 13.7857C5.75177 13.8782 5.38935 13.9294 5.01442 13.9294C4.74948 13.9294 4.49327 13.9032 4.24206 13.8532C4.76445 15.4841 6.27919 16.6701 8.07387 16.7026C6.67037 17.8024 4.90069 18.4561 2.97856 18.4561C2.64739 18.4561 2.32118 18.4361 2 18.3998C3.81592 19.5659 5.97177 20.2457 8.28883 20.2457C15.8362 20.2457 19.9617 13.9944 19.9617 8.57292L19.9479 8.04177C20.754 7.46684 21.4513 6.74448 22 5.92213Z" fill="white"/>
						</svg>
					</div>
				</a>

				<a onclick="window.open(this.href, 'window','left=200,top=40,width=500,height=700,toolbar=1,resizable=0'); return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $articleURL; ?>">
					<div class="share fb">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6.375 3H17.625C19.4893 3 21 4.51071 21 6.375V17.625C21 19.4893 19.4893 21 17.625 21H6.375C4.51071 21 3 19.4893 3 17.625V6.375C3 4.51071 4.51071 3 6.375 3ZM15.375 14.7694H17.1249L17.625 12.4333H15.375V10.875C15.2567 10.2141 15.4431 9.74229 16.3753 9.83614H17.625V7.5C17.4129 7.56557 16.6864 7.5 15.8751 7.5C14.0777 7.5 12.8704 8.61857 12.8756 10.6153V12.4333H10.875V14.7694H12.8756V21H15.375V14.7694Z" fill="white"/>
						</svg>
					</div>
				</a>

				<a class="mob" onclick="window.open(this.href, 'window','left=200,top=40,width=600,height=700,toolbar=1,resizable=0'); return false;" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $articleURL; ?>">
					<div class="share linkedin">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19.668 3H4.3335C3.59699 3 3 3.57976 3 4.29073V19.713C3 20.4218 3.59699 21 4.3335 21H19.6673C20.4045 21 21 20.4218 21 19.713V4.29073C21 3.57976 20.4044 3 19.668 3ZM8.45848 18.0667H5.73976V9.94199H8.45852V18.0667H8.45848ZM7.09724 8.83349H7.07924C6.16649 8.83349 5.57623 8.20499 5.57623 7.42798C5.57623 6.62921 6.18449 6.02247 7.11448 6.02247C8.04523 6.02247 8.61749 6.62921 8.63473 7.42798C8.63548 8.20499 8.04598 8.83349 7.09724 8.83349ZM18.2602 18.0667H15.5467V13.7212C15.5467 12.6293 15.1478 11.8785 14.1638 11.8785C13.4085 11.8785 12.9668 12.384 12.7725 12.8745C12.7013 13.041 12.6825 13.2847 12.6825 13.5293V18.0667H9.96224C9.96224 18.0667 9.99672 10.7024 9.96224 9.94195H12.6825V11.0939C13.0395 10.5412 13.686 9.74997 15.1297 9.74997C16.9207 9.74997 18.2602 10.9117 18.2602 13.4077V18.0667ZM12.666 11.1202C12.6682 11.112 12.672 11.1038 12.6817 11.0948V11.1202H12.666Z" fill="white"/>
						</svg>
					</div>
				</a>

				<a onclick="copyUrl()" style="cursor:pointer;">
					<div class="share">
						<img src="assets/link.svg">
					</div>
				</a>

			</div>
			
			<div class="author-footer">
				<div class="picture">
					<div class="pic"></div>
				</div>
				<div class="copy">
					<div class="q">
						<a href="https://lucaburgio.com" class="name">Luca Burgio</a>
						<span class="date">on <?php echo $date; ?></span>
					</div>
					<div class="z">
						<span class="descr">Senior Product Designer at Bending Spoons. Former Product & Android Lead Designer at Musixmatch. Creator of Particular and The Last Dowel.</span>
					</div>
				</div>
			</div>
			
			<h2 style="text-align:center;">Get updated on the next story.</h2>
			<p style="text-align:center;">Follow me on Twitter to get updated when a new story is coming or if you simply want to get in touch with me.</p>
			<div style="display:flex;justify-content: center;"><a target="_blank" href="https://twitter.com/burgioluca"><div class="follow-tw"><?php include('assets/twitter.svg'); ?>Follow</div></a></div>

		</div>

		<!--<a href="./" class="back-a">
			<div class="back svg-cont hue-bg01">
				<?php //include('assets/arrow.svg'); ?>
			</div>
		</a>-->

		
		

		<a href="./" class="logo-a">
			<?php include('assets/logo.svg'); ?>
			<div class="logo-panel"></div>
		</a>

		<a href="<?php echo $twitterShare; ?>" class="tw-a">
			<div class="tw-share svg-cont hue-bg01">
				<?php include('assets/twitter.svg'); ?>
			</div>
		</a>


		<div class="copy-url svg-cont hue-bg01 mob" onclick="copyUrl()">
			<?php include('assets/link.svg'); ?>
		</div>
		<div class="copyurl-label mob">Get Link</div>

		<!--<div class="thanks svg-cont" onclick="thankYou()">
			<?php //include('assets/thanks.svg'); ?>
		</div>
		<div class="thanks-counter">0</div>-->
		<input type="text" id="myInput" style="width:1px;height:1px;position:absolute;bottom:0;opacity:0;">
	</body>

	<script>
		
		var scene = document.getElementById('scene');	
		var parallaxInstance = new Parallax(scene);

	</script>

		
	<script async>
		window.twttr = (function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0],
			t = window.twttr || {};
			if (d.getElementById(id)) return t;
			js = d.createElement(s);
			js.id = id;
			js.src = "https://platform.twitter.com/widgets.js";
			fjs.parentNode.insertBefore(js, fjs);

			t._e = [];
			t.ready = function(f) {
				t._e.push(f);
			};

			return t;
			}(document, "script", "twitter-wjs"));
	</script>
	
</html>