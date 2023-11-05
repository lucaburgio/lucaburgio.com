<?php

function get_string_between($string, $start, $end){
	$string = " ".$string;
	$ini = strpos($string,$start);
	if ($ini == 0) return "";
	$ini += strlen($start);   
	$len = strpos($string,$end,$ini) - $ini;
	return substr($string,$ini,$len);
}


//Replace CTA

while(strpos($body,"<cta>")){
    //echo "CTA! / ";

$ctadiv = get_string_between($body, "<cta>", "</cta>");
$ctalink = get_string_between($ctadiv, "<url>", "</url>");
$ctatext = get_string_between($ctadiv, "<txt>", "</txt>");

$new_cta = "

<div class='cta'>
<a href='".$ctalink."'>
    <div class='copy'>".$ctatext."</div>
    <div class='icon svg-cont'>
        <svg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'>
            <path d='M1.83333 10H18.5M18.5 10L10.5 2M18.5 10L10.5 18' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/>
        </svg>
    </div>
    </a>
</div>

";

$body = str_replace("<cta>".$ctadiv."</cta>",$new_cta,$body);

}

//END --- Replace CTA







//Replace VISUAL

while(strpos($body,"<visual>")){
    //echo "VISUAL! / ";

$visualdiv = get_string_between($body, "<visual>", "</visual>");
$visuallink = get_string_between($visualdiv, "<url>", "</url>");
$visualtext = get_string_between($visualdiv, "<txt>", "</txt>");

$new_visual = "

<div class='visual'>
    <img src='".$visuallink."' alt='' class='visual-img'>
    <div>".$visualtext."</div>
</div>

";

$body = str_replace("<visual>".$visualdiv."</visual>",$new_visual,$body);

}

//END --- Replace CTA




//Replace FOLLOW COMPONENT

while(strpos($body,"<follow>")){
    //echo "VISUAL! / ";

$followdiv = get_string_between($body, "<follow>", "</follow>");

$new_follow = "

<div class='follow-cont'>
    <h2 style='text-align:center;'>Do you like this story?</h2>
    <p style='text-align:center;'>Follow me on Twitter to get updated when a new story is coming or if you simply want to get in touch with me.</p>
    <div class='follow-url-section'>
        <a target='_blank' href='https://twitter.com/burgioluca'>
            <div class='follow-tw'>
            <svg width='24' height='24' viewBox='0 0 24 24' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                <path d='M22 5.92213C21.2639 6.2483 20.4741 6.46951 19.6442 6.56827C20.4915 6.06085 21.1402 5.25602 21.4476 4.29994C20.6527 4.76984 19.7754 5.11105 18.8406 5.29602C18.092 4.49742 17.0271 4 15.8461 4C13.5803 4 11.7431 5.83716 11.7431 8.10174C11.7431 8.42292 11.7794 8.73661 11.8494 9.03658C8.44001 8.86533 5.41684 7.2319 3.39347 4.74984C3.03977 5.35474 2.83856 6.05958 2.83856 6.81197C2.83856 8.23546 3.56343 9.49148 4.66324 10.2263C3.99085 10.2038 3.35847 10.0189 2.80484 9.71142V9.76266C2.80484 11.7498 4.21958 13.4082 6.09546 13.7857C5.75177 13.8782 5.38935 13.9294 5.01442 13.9294C4.74948 13.9294 4.49327 13.9032 4.24206 13.8532C4.76445 15.4841 6.27919 16.6701 8.07387 16.7026C6.67037 17.8024 4.90069 18.4561 2.97856 18.4561C2.64739 18.4561 2.32118 18.4361 2 18.3998C3.81592 19.5659 5.97177 20.2457 8.28883 20.2457C15.8362 20.2457 19.9617 13.9944 19.9617 8.57292L19.9479 8.04177C20.754 7.46684 21.4513 6.74448 22 5.92213Z' fill='white'/>
            </svg>
            Follow</div>
        </a>
    </div>
</div>

";

$body = str_replace("<follow></follow>",$new_follow,$body);

}

//END --- Replace FOLLOW COMPONENT

?>