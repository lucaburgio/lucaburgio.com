<?php
$search = $_GET['q'];
$promo = $_GET['promo'];

include_once("conf.php");
echo "
<!DOCTYPE html>
<html>
<head>
    <title>Iconoir | Icons Library</title>
    <meta name=\"description\" content=\"The Simple and Definitive hand-crafted SVG Icons Library.\">
    <link rel=\"dns-prefetch\" href=\"//fonts.googleapis.com\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    ";
    echo"<link rel='stylesheet' href='css/default.min.css?v=".$css."'></link>";
    echo"
    <meta name=viewport content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" />
    <link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'>
    <meta name='robots' content='index, follow'>

    <meta property=\"og:title\" content=\"Iconoir\" />
    <meta property=\"og:site_name\" content=\"Iconoir\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:url\" content=\"https://iconoir.com\" />
    <meta property=\"og:image\" content=\"https://iconoir.com/images/iconoir-brand.png\" />
    <meta property=\"og:description\" content=\"The Simple and Definitive hand-crafted SVG Icons Library.\" />
    <meta property=\"og:image:width\" content=\"1270\">
    <meta property=\"og:image:height\" content=\"760\">

    <meta name=\"twitter:title\" content=\"Iconoir\" />
    <meta name=\"twitter:domain\" content=\"iconoir.com\" />
    <meta name=\"twitter:url\" content=\"https://iconoir.com\" />
    <meta name=\"twitter:image\" content=\"https://iconoir.com/images/iconoir-brand.png\" />
    <meta name=\"twitter:image:secure_url\" content=\"https://iconoir.com/images/iconoir-brand.png\" />
    <meta name=\"twitter:image:alt\" content=\"The Simple and Definitive hand-crafted SVG Icons Library.\" />
    <meta name=\"twitter:description\" content=\"The Simple and Definitive hand-crafted SVG Icons Library.\" />
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    
    ";
    include_once("ga.php"); 

    
echo"

</head>
<body>

<script src=\"js/anime.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js\"></script>

$top_banner
<div class='banner'>Iconoir 4.1 is out! 117 new icons and Figma .fig!</div>


<!-- The Modal -->
<div id=\"myModal\" class=\"modal\">

  <!-- Modal content -->
  <div class=\"modal-content\">
    <span class=\"close\">&times;</span>
    
    <h1 class='' style='width: 100%!important;'>Licensing agreement</h1>
		<div class='left' style='width: 100%;'>
			
			<h2 class='mb20 mt40' style='font-size: 1em;letter-spacing: 0px;'>You can</h2>
			<span class='t1'>You can use or include the icons and their source code in any product and software, free, open source and commercial. You may modify or manipulate the Item. You may combine the Item with other works and make a derivative work from it. The resulting works are subject to the terms of this license. This is a 'multi-use' license, which means you may use an Item multiple times, in multiple projects.</span>
			<br>
			<h2 class='mb20 mt40' style='font-size: 1em;letter-spacing: 0px;'>Please do not</h2>
			<span class='t1'>Our only condition is that You cannot sell or re-distribute the icons as is on in any modified versions. Attribution is appreciated.</span>
			<br>
			<span class='t1'>This license can be terminated if you breach it. If that happens, you must stop making copies of or distributing the End Product until you remove the Item from it.</span>
<br><br>
<span style='font-size: 0.6em;opacity: 0.5;'>Last updated on May 23, 2018.</span>
        </div>
        
  </div>

</div>
";

//include_once("head.php");
echo"





<div class=\"topbar\">
<ul class='list'>
<li>
<a id='logo-top' href='/'>";
      include("images/logo-compact.svg");
      echo"</a>
</li>
<li>
<a class='mob voice' href='https://twitter.com/intent/tweet?text=Iconoir:%20The%20simple%20and%20definitive%20icons%20library%20by%20%40burgioluca%20https%3A%2F%2Ficonoir.com'>Share</a>
</li>
<li>
<a class='mob voice' style='cursor:pointer;' id=\"myBtn\">License</a>
</li>
<li>
<a href='".$gumroad_link."' class='mob voice accent' style='cursor:pointer;' id=\"myBtn\">Get the full pack</a>
</li>
<li>
<a href='https://twitter.com/burgioluca' onclick='ga(\"send\", \"event\", \"clicks\", \"twitter-made-by\");' class='mob voice' style='cursor:pointer;'>Made with &#9829; by <u>Luca</u></a>
</li>
</ul>

    <div class='wide div_c'>
      





</div>
</div>
";

echo "
<div class='main mt100 wide title_intro'>


<div style='display: flex;justify-content: center;color:#1E5AF6;'>
<svg class='playWithLines2' style='padding: 26px;' width=\"100\" height=\"100\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
        <path class='roll1' d=\"M5 19C7.20914 19 9 17.2091 9 15C9 12.7909 7.20914 11 5 11C2.79086 11 1 12.7909 1 15C1 17.2091 2.79086 19 5 19Z\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
        <path class='roll1' d=\"M5 15L8.5 7.5M8.5 7.5L12 14L15 14M8.5 7.5C8.16667 6.5 7 4.5 5 4.5M8.5 7.5L14.5 7.5M19 15L15 7.5L14.5 7.5M14.5 7.5L16.5 4.5M16.5 4.5L14 4.5M16.5 4.5L18.5 4.5\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
        <path class='roll1' d=\"M19 19C21.2091 19 23 17.2091 23 15C23 12.7909 21.2091 11 19 11C16.7909 11 15 12.7909 15 15C15 17.2091 16.7909 19 19 19Z\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>

        <path class='roll2' stroke-dasharray='69px' style='stroke-dashoffset:69px;' d='M7 10.625H14.2C14.2 10.625 14.2 10.625 14.2 10.625C14.2 10.625 17 10.625 17 13.625C17 17 14.2 17 14.2 17H13.4M7 10.625L10.5 14M7 10.625L10.5 7' stroke='currentColor' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
<path class='roll2' stroke-dasharray='69.1247px' style='stroke-dashoffset:69.1247px;' d='M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23Z' stroke='currentColor' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>

<path class='roll3' stroke-dasharray='36.0466px' style='stroke-dashoffset:36.0466px' d='M21.1683 8C19.6252 4.46819 16.1011 2 12.0004 2C6.81508 2 2.55153 5.94668 2.0498 11M21.1683 8H17.0004M21.1683 8H21.4004C21.7318 8 22.0004 7.73137 22.0004 7.4V3' stroke='currentColor' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
<path class='roll3' stroke-dasharray='36.0466px' style='stroke-dashoffset:36.0466px' d='M2.88146 16C4.42458 19.5318 7.94874 22 12.0494 22C17.2347 22 21.4983 18.0533 22 13M2.88146 16H7.04938M2.88146 16H2.64938C2.318 16 2.04938 16.2686 2.04938 16.6V21' stroke='currentColor' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
        
<path class='roll4' stroke-dasharray='30.2841px' style='stroke-dashoffset:30.2841px' d='M4 13V19C4 20.1046 4.89543 21 6 21H18C19.1046 21 20 20.1046 20 19V13' stroke='currentColor' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
<path class='roll4' stroke-dasharray='21.8995px' style='stroke-dashoffset:21.8995px' d='M12 3L12 15M12 15L8.5 11.5M12 15L15.5 11.5' stroke='currentColor' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/>
</svg>
        

</div>
    <h1 class='front_title mb20'>A Simple and<br>Definitive Icons Library</h1>
    <div class='copy m024'>Iconoir is an evolving collection of ".$total_icons." SVG Icons fully editable and customizable. Available in SVG and Figma.</div>
    <div class='mt40' style='width:100%;text-align:center;'>
    <a href='".$gumroad_link."' id='fullpack' class='btn'>Full Pack (".$total_icons." Icons) → $15</a>
    <div class='h1 big_title' style='margin-top: 18px;font-size: 14px;line-height: 1.4;'>✓ Free updates forever. ✓ Fully customizable. ✓ Includes .svg and .fig.</div>
    </div>
    
</div>
";

echo "

</div>

<div class='cards-container'>
<div class='cards-bg'></div>
<div class='card'>
  <div class='icon' style='background-image:url(../images/card-icon-1.png);'></div>
  <div class='title'>Free updates.<br>Forever.</div>
  <div class='body'>You buy the pack now. You will receive free new icons and updates forever. No fees, no extras, just free forever.</div>
</div>

<div class='card'>
  <div class='icon' style='background-image:url(../images/card-icon-2.png);'></div>
  <div class='title'>Fully <br>customizable.</div>
  <div class='body'>Iconoir set is fully vectorial. You can customized everything of these shiny icons.</div>
</div>

<div class='card'>
  <div class='icon' style='background-image:url(../images/card-icon-3.png);'></div>
  <div class='title'>Includes SVG and <br>Figma.</div>
  <div class='body'>The pack includes SVG vectorial icons and a Figma source .fig. Coming updates will introduce new formats.</div>
</div>
</div>


<div class='app-s-top-ct mt80'>
        <input id='icn_trg' style='width:100%;' class='search' autocomplete='off' type='text' name='q' placeholder='Search Icons'>
        <a onclick='clearSearch()' id='clearme' class='btn small highlighted' style='display:none;float: right;margin-left: 6px;cursor:pointer;'>✖</a>
    </div>

";

echo "

<div class='wide main grid mt40' style='display:flex;flex-wrap: wrap;'>

<div id='noresult' style='width:100%;height:200px;display:none;text-align:center;margin-top:30px;'>
<div class='h1 big_title' style='margin-top: 18px;font-size: 17px;line-height: 1.4;margin-bottom:40px;'>No icons for this keyword! But you can <a style='font-size: 17px;text-decoration:underline;' href='https://github.com/IconoirIcons/iconoir/issues'><b>request</b></a> a missing icon.</div>
</div>
";

// Create connection
$conn = new mysqli($host, $sqlusername, $sqlpassword, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name,cat,date,category FROM Icons WHERE cat LIKE 'Regular' ORDER BY category, id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $tags = $row['tags'];
        $url = $row['name'];
        $category = $row['category'];
        $cat = $row['cat'];
        $date = $row['date'];

        if ($last_category != $category) {
          if ($last_category != ""){echo "</div>";}
            echo "
            <div class='cat-section' style='width:100%;'>
                <div class='catta'>
                    <div class='mb10 mt40' style='width:100%;height:2px;background:#F8F8F8;float:left;'></div>
                    <div class='mb40' style='font-family: DM Sans, sans-serif;font-size:18px;font-weight:800;color:#000;width:100%;height:20px;float:left;'>".$category."</div>
                </div>
                
            ";
            $last_category = $category;
        }

        //https://i1.wp.com/iconoir.com/icns_preview/Bold/

        echo "
            <a class='m_tile ct_trg' href='".$gumroad_link."'>
                <div class='icon_preview list' style=''>
                <img src='../icns_preview/".$url.".png?v=4.0' loading='lazy' alt='' width='24' height='24' style='padding: 35%;'>
                    ".$new_entry."
                    <span style='display:none;'>".$tags."</span>
                </div>
                <span style='opacity:0;position:absolute;width:0;'>".$url."</span>
        ";

        if (strpos($url, '@') !== false) {
            $url = substr($url, 0, strpos($url, '@'));
        }

        echo "
            <div class='icon_name'>".$url."</div>
            </a>
        ";
    }
    echo "</div>";
}
else {
    echo "0 results";
}
$conn->close();

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}




include_once("footer.php");

echo"

<script src=\"js/main.min.js?v=".$css."\"></script>
<script async src=\"js/icon-parallax.min.js?v=".$css."\"></script>

<script async type=\"text/javascript\" >


var animateStrokeWidth = anime({
  targets: '.dio',
  strokeWidth: '1',
  autoplay: false
});

//document.querySelector('.play-strokeWidth').onclick = animateStrokeWidth.restart;

</script>

<script async type=\"text/javascript\" >

</script>




<script src=\"https://gumroad.com/js/gumroad.js\"></script>
<script async type=\"text/javascript\" >

  $(document).ready(function(){

      $(\"#fullpack\").click(function(){
        ga('send', 'event', 'clicks', 'full-pack');
      });

      $(\"#demopack\").click(function(){
        ga('send', 'event', 'clicks', 'demo-pack');
      });

      $(\"#fullpack-header\").click(function(){
        ga('send', 'event', 'clicks', 'full-pack-head');
      });

  });

</script>




<script async type=\"text/javascript\" >

  function clearSearch(){
    $( '#icn_trg' ).val('');
    $('#icn_trg').trigger(jQuery.Event('keyup', { keycode: 13 }));
  }
</script>
<script async type=\"text/javascript\" >

    var timerSearch;
    var iconsResult = 0;

    
    $(document).ready(function(){

        $('#icn_trg').keyup(function(){

            var value = $( this ).val();


            clearTimeout(timerSearch);
            timerSearch = setTimeout(function(){ ga('send', 'event', 'search', value); }, 2000);

            if(value.length > 0) {

                $(\".catta\").each(function(){
                    /* $(this).fadeOut(0); */
                    $( '#clearme' ).css('display', 'inline');
                });
            }
            else {

                $(\".catta\").each(function(){
                    /* $(this).show(); */
                    $( '#clearme' ).css('display', 'none');
                    iconsResult = 0;
                });
            }

            // Retrieve the input field text and reset the count to zero
            var icon = $(this).val(), count = 0;

            iconsResult = 0;

            // Loop through the comment list
            $(\".ct_trg\").each(function(){

                // If the list item does not contain the text phrase fade it out
                if ($(this).text().search(new RegExp(icon, \"i\")) < 0) {

                    $(this).fadeOut(0);
                    // Show the list item if the phrase matches and increase the count by 1
                }
                else {

                  $(this).show();
                  iconsResult++;
                }
            });

            //console.log(iconsResult);
            if (iconsResult == 0){
              $( '#noresult' ).css('display', 'block');
            }
            else{
              $( '#noresult' ).css('display', 'none');
            }
        });
    });
</script>
<script>
// Get the modal
var modal = document.getElementById(\"myModal\");

// Get the button that opens the modal
var btn = document.getElementById(\"myBtn\");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName(\"close\")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = \"block\";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = \"none\";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = \"none\";
  }
}
</script>

<script async type=\"text/javascript\" >

  $(document).ready(function(){

    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene);


  });

</script>
<script async type=\"text/javascript\" >

    var timerSearch;
    var iconsResult = 0;

    
    $(document).ready(function(){

        $('#icn_trg').keyup(function(){

            var value = $( this ).val();


            clearTimeout(timerSearch);
            timerSearch = setTimeout(function(){ ga('send', 'event', 'search', value); }, 2000);

            

            if(value.length > 0) {

                $(\".catta\").each(function(){
                  /*$(this).fadeOut(0);*/
                    $( '#clearme' ).css('display', 'flex');
                });

                
            }
            else {

                $(\".catta\").each(function(){
                    /*$(this).show();*/
                    $( '#clearme' ).css('display', 'none');
                    iconsResult = 0;
                });
            }

            // Retrieve the input field text and reset the count to zero
            var icon = $(this).val(), count = 0;

            iconsResult = 0;

            // Loop through the comment list
            $(\".ct_trg\").each(function(){

                // If the list item does not contain the text phrase fade it out
                if ($(this).text().search(new RegExp(icon, \"i\")) < 0) {

                    $(this).fadeOut(0);
                    // Show the list item if the phrase matches and increase the count by 1
                }
                else {

                  $(this).show();
                  iconsResult++;

                  
                }
            });

            //console.log(iconsResult);
            if (iconsResult == 0){
              $( '#noresult' ).css('display', 'block');
            }
            else{
              $( '#noresult' ).css('display', 'none');
            }

            $(\".cat-section\").each(function(){
              if($(this).height() < 120) {
                console.log($(this).height());
                $(this).fadeOut(0);
              }
              else{
                $(this).show();
              }
            });
        });
    });
</script>
</body>
</html>
";
