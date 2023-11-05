<?php

include_once("conf.php");
echo "
<!DOCTYPE html>
<html>
<head>
    <title>Holo Series | Luca Burgio</title>
    <meta name=\"description\" content=\"Holo series is a visual exploration and playground by Luca Burgio.\">
    <link rel=\"dns-prefetch\" href=\"//fonts.googleapis.com\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    ";
    echo"<link rel='stylesheet' href='css/default.min.css?v=".$css."'></link>";
    echo"
    <meta name=viewport content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" />
    <link rel='shortcut icon' href='../images/favicon2.png' type='image/x-icon'>
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

    
echo"

</head>
<body style='height:3000px;'>


<video style='position:absolute;z-index:-999;' width='100%' height='100%' autoplay loop>
  <source src='images/holo.mp4' type='video/mp4' />
  Your browser does not support the video tag.
</video>

<script src=\"js/anime.min.js\"></script>
<div class='fixed-title'>
    <svg class='interact2' width='344' height='10' viewBox='0 0 344 10' fill='none' xmlns='http://www.w3.org/2000/svg'>
    <path class='holo2' stroke='white' d='M1 0V5M1 10V5M1 5H7M7 5V0M7 5V10' stroke='black' stroke-width='1.8'/>
    <path class='holo2' stroke='white' d='M80 0V9H86' stroke='black' stroke-width='1.8'/>
    <path class='holo2' stroke='white' d='M199 9H193V5M199 1H193V5M193 5H198.5' stroke='black' stroke-width='1.8'/>
    <path class='holo2' stroke='white' d='M231 10V5M231 5V1C231 1 233 1 234.5 1C237 1 237 4.99995 234.5 4.99995C232 4.99995 234 5 234 5M231 5H234M234 5C234.976 6.95262 236.5 9 236.5 10' stroke='black' stroke-width='1.8'/>
    <path class='holo2' stroke='white' d='M307 9H301V5M307 1H301V5M301 5H306.5' stroke='black' stroke-width='1.8'/>
    <path class='holo2' stroke='white' d='M268.5 0V10' stroke='black' stroke-width='1.8'/>
    <path class='holo2' stroke='white' d='M47.5 5C47.5 7.20914 45.433 9 43.5 9C41.567 9 39.5 7.20914 39.5 5C39.5 2.79086 41.567 1 43.5 1C45.433 1 47.5 2.79086 47.5 5Z' stroke='black' stroke-width='1.8'/>
    <path class='holo2' stroke='white' d='M123.5 5C123.5 7.20914 121.433 9 119.5 9C117.567 9 115.5 7.20914 115.5 5C115.5 2.79086 117.567 1 119.5 1C121.433 1 123.5 2.79086 123.5 5Z' stroke='black' stroke-width='1.8'/>
    <path class='holo2' stroke='white' d='M160.912 3C160.912 2 160.048 1 158.5 1C156.5 1 156 2 156 3C156 4.5 158.5 5 158.5 5C158.5 5 161 5.5 161 7C161 8 160.5 9 158.5 9C156.5 9 156 8 156 7' stroke='black' stroke-width='1.8'/>
    <path class='holo2' stroke='white' d='M342.912 3C342.912 2 342.048 1 340.5 1C338.5 1 338 2 338 3C338 4.5 340.5 5 340.5 5C340.5 5 343 5.5 343 7C343 8 342.5 9 340.5 9C338.5 9 338 8 338 7' stroke='black' stroke-width='1.8'/>
</svg>
    </div>

<div class='main'>
    <div class='main-head'>
    
        <div class='title'>
            <svg class='interact' stroke='red' width='400' height='16' viewBox='0 0 344 10' fill='none' xmlns='http://www.w3.org/2000/svg'>
                <path class='holo1' stroke='white' d='M1 0V5M1 10V5M1 5H7M7 5V0M7 5V10' stroke='black' stroke-width='1.8'/>
                <path class='holo1' stroke='white' d='M80 0V9H86' stroke='black' stroke-width='1.8'/>
                <path class='holo1' stroke='white' d='M199 9H193V5M199 1H193V5M193 5H198.5' stroke='black' stroke-width='1.8'/>
                <path class='holo1' stroke='white' d='M231 10V5M231 5V1C231 1 233 1 234.5 1C237 1 237 4.99995 234.5 4.99995C232 4.99995 234 5 234 5M231 5H234M234 5C234.976 6.95262 236.5 9 236.5 10' stroke='black' stroke-width='1.8'/>
                <path class='holo1' stroke='white' d='M307 9H301V5M307 1H301V5M301 5H306.5' stroke='black' stroke-width='1.8'/>
                <path class='holo1' stroke='white' d='M268.5 0V10' stroke='black' stroke-width='1.8'/>
                <path class='holo1' stroke='white' d='M47.5 5C47.5 7.20914 45.433 9 43.5 9C41.567 9 39.5 7.20914 39.5 5C39.5 2.79086 41.567 1 43.5 1C45.433 1 47.5 2.79086 47.5 5Z' stroke='black' stroke-width='1.8'/>
                <path class='holo1' stroke='white' d='M123.5 5C123.5 7.20914 121.433 9 119.5 9C117.567 9 115.5 7.20914 115.5 5C115.5 2.79086 117.567 1 119.5 1C121.433 1 123.5 2.79086 123.5 5Z' stroke='black' stroke-width='1.8'/>
                <path class='holo1' stroke='white' d='M160.912 3C160.912 2 160.048 1 158.5 1C156.5 1 156 2 156 3C156 4.5 158.5 5 158.5 5C158.5 5 161 5.5 161 7C161 8 160.5 9 158.5 9C156.5 9 156 8 156 7' stroke='black' stroke-width='1.8'/>
                <path class='holo1' stroke='white' d='M342.912 3C342.912 2 342.048 1 340.5 1C338.5 1 338 2 338 3C338 4.5 340.5 5 340.5 5C340.5 5 343 5.5 343 7C343 8 342.5 9 340.5 9C338.5 9 338 8 338 7' stroke='black' stroke-width='1.8'/>
            </svg>
        </div>
    </div>
</div>
<script src=\"js/main.js\"></script>
<script>
console.log('screen is ' + screen.height);
//document.getElementById('main-head').style.height = '2000px';
console.log('scroll is ' + $(this).scrollTop());
</script>

</body>
";

?>