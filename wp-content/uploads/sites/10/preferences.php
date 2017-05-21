<?php

	include("config.php");
	
$skin = $_COOKIE[skin];
$image = $_COOKIE[image];
$news = $_COOKIE[news];
$maps = $_COOKIE[maps];
$email = $_COOKIE[email];
$rss = $_COOKIE[rss];
$link1name = $_COOKIE[link1name];
$link1url = $_COOKIE[link1url];
$link2name = $_COOKIE[link2name];
$link2url = $_COOKIE[link2url];
$link3name = $_COOKIE[link3name];
$link3url = $_COOKIE[link3url];
$link4name = $_COOKIE[link4name];
$link4url = $_COOKIE[link4url];
$l5n = $_COOKIE[l5n];
$l5u = $_COOKIE[l5u];
$l6n = $_COOKIE[l6n];
$l6u = $_COOKIE[l6u];
$l7n = $_COOKIE[l7n];
$l7u = $_COOKIE[l7u];
$l8n = $_COOKIE[l8n];
$l8u = $_COOKIE[l8u];
	
	// If not directed here for a new homepage, make the selection equal to cookie
	if (!$s && $_COOKIE[skin]) { $s = $_COOKIE[skin]; }
	// For checking selection as a public theme
	$tid = substr($s, 7, (strlen($s)-7) );
	// For checking the cookie as a public theme
	$ctid = substr($_COOKIE[skin], 7, (strlen($_COOKIE[skin])-7) );
	
	// If the user came here from a public theme and that selection was loaded, check if its an approved theme
	if (substr($s, 0, 7) == "public-") {
		$rs = mysql_query ("SELECT * FROM uthemes WHERE name = '$tid' ");
		$app = mysql_result($rs, 0, "approved");
	// If that doesn't give you a Yes, check the cookie to see if its an approved theme
	} else if (substr($_COOKIE[skin], 0, 7) == "public-") {
		$rs = mysql_query ("SELECT * FROM uthemes WHERE name = '$ctid' ");
		$app = mysql_result($rs, 0, "approved");
	}

	if ($s == "skepticality" && !$skin) { $rss = "http://skepticality.libsyn.com/rss/"; }
	$amazon = "https://amazon.com/exec/obidos/redirect?link_code=ur2&tag=tbmchicago-20&camp=1789&creative=9325";
?>






<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script>(function(html){html.className=html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<title>Preferences | AwesomeStart.com</title>

<!-- All in One SEO Pack 2.3.2.3 by Michael Torbert of Semper Fi Web Design[325,368] -->
<meta name="description" itemprop="description" content="Set your AwesomeStart preferences. Choose which theme, links, and features you want on your startpage."/>

<link rel="canonical" href="https://awesomestart.com/preferences"/>
<!-- /all in one seo pack -->
<link rel="alternate" type="application/rss+xml" title="AwesomeStart.com &raquo; Feed" href="https://awesomestart.com/feed"/>
<link rel="alternate" type="application/rss+xml" title="AwesomeStart.com &raquo; Comments Feed" href="https://awesomestart.com/comments/feed"/>
<script type="text/javascript">window._wpemojiSettings={"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/awesomestart.watchbrightfalls.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.4.2"}};!function(a,b,c){function d(a){var c,d=b.createElement("canvas"),e=d.getContext&&d.getContext("2d"),f=String.fromCharCode;return e&&e.fillText?(e.textBaseline="top",e.font="600 32px Arial","flag"===a?(e.fillText(f(55356,56806,55356,56826),0,0),d.toDataURL().length>3e3):"diversity"===a?(e.fillText(f(55356,57221),0,0),c=e.getImageData(16,16,1,1).data.toString(),e.fillText(f(55356,57221,55356,57343),0,0),c!==e.getImageData(16,16,1,1).data.toString()):("simple"===a?e.fillText(f(55357,56835),0,0):e.fillText(f(55356,57135),0,0),0!==e.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag"),unicode8:d("unicode8"),diversity:d("diversity")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag&&c.supports.unicode8&&c.supports.diversity||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);</script>
<style type="text/css">img.wp-smiley,img.emoji{display:inline!important;border:none!important;box-shadow:none!important;height:1em!important;width:1em!important;margin:0 .07em!important;vertical-align:-.1em!important;background:none!important;padding:0!important}</style>
<link rel='stylesheet' id='twentysixteen-fonts-css' href='https://fonts.googleapis.com/css?family=Merriweather%3A400%2C700%2C900%2C400italic%2C700italic%2C900italic%7CMontserrat%3A400%2C700%7CInconsolata%3A400&#038;subset=latin%2Clatin-ext' type='text/css' media='all'/>
<link rel='stylesheet' id='genericons-css' href='https://awesomestart.com/wp-content/themes/twentysixteen/genericons/A.genericons.css,qver=3.4.1.pagespeed.cf.2MAV-JZkpg.css' type='text/css' media='all'/>
<link rel='stylesheet' id='twentysixteen-style-css' href='https://awesomestart.com/wp-content/themes/twentysixteen/A.style.css,qver=4.4.2.pagespeed.cf.C-FxxZzhZM.css' type='text/css' media='all'/>
<!--[if lt IE 10]>
	<link rel='stylesheet' id='twentysixteen-ie-css'  href='https://awesomestart.com/wp-content/themes/twentysixteen/css/ie.css?ver=20150930' type='text/css' media='all' />
	<![endif]-->
	<!--[if lt IE 9]>
		<link rel='stylesheet' id='twentysixteen-ie8-css'  href='https://awesomestart.com/wp-content/themes/twentysixteen/css/ie8.css?ver=20151230' type='text/css' media='all' />
		<![endif]-->
		<!--[if lt IE 8]>
			<link rel='stylesheet' id='twentysixteen-ie7-css'  href='https://awesomestart.com/wp-content/themes/twentysixteen/css/ie7.css?ver=20150930' type='text/css' media='all' />
			<![endif]-->
			<link rel='stylesheet' id='sccss_style-css' href='https://awesomestart.com/A.,qsccss=1,aver=4.4.2.pagespeed.cf.syfnnUjwTz.css' type='text/css' media='all'/>
			<!--[if lt IE 9]>
				<script type='text/javascript' src='https://awesomestart.com/wp-content/themes/twentysixteen/js/html5.js?ver=3.7.3'></script>
				<![endif]-->
				<script type='text/javascript' src='https://awesomestart.com/wp-includes/js/jquery/jquery.js,qver=1.11.3.pagespeed.jm.zixJPNMRNN.js'></script>
				<script type='text/javascript' src='https://awesomestart.com/wp-includes/js/jquery/jquery-migrate.min.js,qver=1.2.1.pagespeed.jm.mhpNjdU8Wl.js'></script>
				<link rel='https://api.w.org/' href='https://awesomestart.com/wp-json/'/>
				<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://awesomestart.com/xmlrpc.php?rsd"/>
				<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://awesomestart.com/wp-includes/wlwmanifest.xml"/>
				<meta name="generator" content="WordPress 4.4.2"/>
				<link rel='shortlink' href='https://awesomestart.com/?p=170'/>
				<link rel="alternate" type="application/json+oembed" href="https://awesomestart.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fawesomestart.watchbrightfalls.com%2Fpreferences"/>
				<link rel="alternate" type="text/xml+oembed" href="https://awesomestart.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fawesomestart.watchbrightfalls.com%2Fpreferences&#038;format=xml"/>
				<style type="text/css">.broken_link,a.broken_link{text-decoration:line-through}</style>


				<script language="JavaScript" type="text/JavaScript" src='/scripts/hide.js'></script>
				<script language="JavaScript" type="text/JavaScript" src='/scripts/js_hiddenfield.js'></script>
				<script language="JavaScript" type="text/JavaScript" src='/scripts/js_hiddenrss.js'></script>
				<script language="JavaScript" type="text/javascript" src='/scripts/js_hiddenlinks.js'></script>
				<script language="JavaScript" type="text/javascript" src='/scripts/js_hiddenlinks2.js'></script>
				<script language="JavaScript" type="text/javascript" src='/scripts/js_hiddenlinks3.js'></script>
				<script language="JavaScript" type="text/javascript" src='/scripts/js_hiddenlinks4.js'></script>
				<script language="JavaScript" type="text/javascript" src='/scripts/js_hiddenlinks5.js'></script>
				<script type="text/javascript" src="/scripts/preload.js"></script>
				<script type="text/javascript" language="JavaScript">
				<!--
				if (document.getElementById) {
				function skin_preview() {
				if (! document.getElementById) return false;
				var skin_preview = document.getElementById('skin_preview');
				var userthemediv = document.getElementById('userthemediv');
				var borderdiv = document.getElementById('borderdiv');

				var skin_list  = document.getElementById('SKIN');
				var skin_id = skin_list[skin_list.selectedIndex].value;
				if (skin_id == "") {
				skin_preview.style.display = "none";
				} else {
				skin_preview.style.display = "block";
				var skin_thumb_preview = document.getElementById('skin_thumb_preview');

				if (skin_id.charAt(6) == "-") {
				<?php
				if ($app == "Y") { echo "skin_id = \"/images/usergallery/\" + skin_id.substring(7) + \".gif\";"; }
				else { echo "skin_id = \"/images/usergallery/_public.gif\";"; }
				?>
				userthemediv.style.display = "block";
				borderdiv.style.border = "1px solid #373737";
				} else {
					skin_id = "/images/_" + skin_id + ".gif";
					userthemediv.style.display = "none";
					borderdiv.style.border = "1px solid #f2f1f1";
				}

				skin_thumb_preview.src = skin_id;
				}
				}
				}
				//--></script>
				<!-- <link href="/scripts/css.css" rel="stylesheet" type="text/css" /> -->
				<style type="text/css">




				/* Enter Your Custom CSS Here */html {
				  height: 100%;
				}

				body {
				  font-family: HelveticaNeue, "Helvetica Neue", Helvetica, Arial, sans-serif;
				  font-size: 11px;
				  font-weight: bold;
				  color: #777;
				  background: #2A2A2A;
				  background: -moz-linear-gradient(top, #000000 0%, #2a2a2a 35%); /* FF3.6-15 */
				  background: -webkit-linear-gradient(top, #000000 0%,#2a2a2a 35%); /* Chrome10-25,Safari5.1-6 */
				  background: linear-gradient(to bottom, #000000 0%,#2a2a2a 35%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#2a2a2a',GradientType=0 ); /* IE6-9 */
				  background-repeat: repeat-x;
				  background-attachment: fixed;
				  padding-bottom: 20px;
				}

				strong {
				  color: #000;
				}

				.entry-content textarea, code, kbd, tt, var, samp, pre {
				  line-height: 1em;
				  font-weight: 100;
				  font-family: monospace;
				}

				.entry-content textarea, code {
				  background: #FFF;
				  width: 100%;
				  border: 2px solid #bec7e4;
				  display: inline-block;
				  padding: 4px;
				  height: 50px;
				}

				.site-title, .entry-title, .entry-footer, .widget .widget-title, .main-navigation, .post-navigation, .post-navigation .post-title, button, input, select, textarea {
					font-family: inherit;
				}

				h1, h2, h3, h4, h5, .entry-content h1, .entry-content h2, .entry-content h3, .entry-content h4, .entry-content h5, .entry-title, .post-navigation .post-title, textarea {
				  font-size: 1em;
				  color: #000;
				}

				a:link, a:active, a:visited, .post-navigation a .post-title {
				  color: #66F;
				  text-decoration: underline;
				}
					
				a:hover, .entry-content a:hover, .entry-footer a:hover, .post-navigation a:hover .post-title {
				  color: #444;
				  text-decoration: underline;
				}

				.textwidget a, .entry-content a, .entry-content a:hover, .entry-footer a, .entry-footer a:hover {
				  box-shadow: none;
				}

				.site-main {
				  margin-bottom: 0px;
				}

				.site-inner {
				  border: 2px solid #000;
				  border-radius: 6px;
				  max-width: 774px;
				  background: #FFF;
				  margin: 22px auto;
				}

				.site {
				  background-color: inherit;
				  margin: 0px;
				}

				.site-info {
				  display: none;
				}

				.site-header {
				  padding: 0px;
				}

				.site-branding {
				  margin: 2.4em;
				}

				.site-header-menu {
				  width: 100%;
				  margin: 0px 0px 14px;
				}

				.widget input[type="search"].search-field {
				  margin-left: -7px;
				  width: 236px;
				  border-radius: 4px;
				}

				.widget button.search-submit {
				  margin: 7px 16px 6px 6px;
				  width: 33px;
				  height: 33px;
				}

				.main-navigation {
				  text-transform: uppercase;
				  font-weight: bold;
				  background: #000;
				  background: -moz-linear-gradient(top, #282828 20%, #000000 100%); /* FF3.6-15 */
				  background: -webkit-linear-gradient(top, #282828 20%,#000000 100%); /* Chrome10-25,Safari5.1-6 */
				  background: linear-gradient(to bottom, #282828 20%,#000000 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#282828', endColorstr='#000000',GradientType=0 ); /* IE6-9 */
				  margin: 0px;
				}

				.main-navigation a {
				  padding: 11px 0px 11px 12px;
				}

				.main-navigation a:link, .main-navigation a:active, .main-navigation a:visited {
				  color: #6a7cff;
				}

				.main-navigation a:hover {
				  color: #5cd753 !important;
				}

				.header-image a img {
				  opacity: 1 !important;
				  display: none;
				}

				@media screen and (min-width: 56.875em) {
				  .header-image, #search-2 {
					position: absolute;
					z-index: 1;
					top: 0;
				  }
				  .sidebar {
					margin-left: 69%;
					width: 31%;
				  }
				  .content-area {
					width: 67%;
				  }
				  .site-content{
					padding: 0px 14px;
				  }
				  .header-image a img {
					margin-left: 8px;
					display: block;
				  }
				  .site-main > article {
					margin-bottom: 2em;
				  }
				}

				.widget .widget-title, .post .entry-header h1, .post .entry-header h2, .entry-content h2, .post-navigation .meta-nav {
				  font-size: 1em;
				  text-transform: none;
				  margin: -8px -1px 0px;
				  letter-spacing: inherit;
				  line-height: 1em;
				}

				.widget-title, .entry-content h1, .entry-content h2, .entry-header h1, .entry-header h2 a  {
				  color: #FFF;
				  background: #6675b3;
				  border-bottom: 1px solid #555;
				  line-height: 1em;
				  padding: 6px 8px;
				}

				.post {
				  margin-top: 8px !important;
				  padding: 0px !important;
				}

				body:not(.search-results) article:not(.type-page) .entry-content {
				  float: inherit;
				  width: inherit;
				}

				.post .entry-content {
				  padding: 6px 10px 10px;
				}

				.page-header, .post-navigation, .post-navigation div + div {
				  border: none;
				}

				.nav-previous {
				  float: left;
				}

				.nav-next {
				  float: right;
				  text-align: right;
				}

				.page .entry-header {
				  display: none;
				}

				.entry-content h1, .entry-header h1 {
				  margin: 0px;
				}

				.entry-header h2 a, .entry-header h2 a:hover, .entry-content h2 a, .entry-content h2 a:hover {
				  color: #FFF;
				  display: block;
				  text-decoration: none;
				}

				.entry-footer {
				  font-size: 1em;
				  margin-left: 10px;
				}

				body:not(.search-results) article:not(.type-page) .entry-footer {
				  width: 100%;
				}

				.byline {
				  display: none !important;
				}

				body:not(.search-results) article:not(.sticky) .posted-on, body:not(.search-results) article:not(.type-page) .entry-footer .edit-link {
				  display: inline-block;
				}



				.widget > :last-child {
				  padding: 6px 8px;
				}

				.widget > :last-child, .entry-content p {
				  line-height: 1.2em;
				}

				.widget {
				  margin: 7px 0px 20px;
				}

				.widget:not(#search-2), .entry-content h1 , .entry-content h2, .widget .widget-title, .entry-header h1, .entry-header h2 a {
				  border: 1px solid #555;
				  border-top-left-radius: 8px;
				  border-top-right-radius: 8px;
				}

				.widget:not(#search-2), .post, .page .entry-content div {
				  border-bottom-left-radius: 8px;
				  border-bottom-right-radius: 8px;
				}

				.widget:not(#search-2) {
				  background: #f1f1f1;
				  padding: 0px;
				  font-size: inherit;
				}

				.widget li {
				  margin-left: 14px;
				  line-height: 2.6em;
				}

				.post, .page .entry-content div {
				  background: #f1f1f1;
				  border: 1px solid #666;
				}

				.post {
				  margin: -1px 0px 12px;
				  padding: 6px 10px 10px;
				}

				.page .entry-content div {
				  margin: -1px -1px 20px;
				  padding: 6px 10px 0px;
				}

				#search-2 {
				  border: none;
				}

				body:not(.custom-background-image):before, body:not(.custom-background-image):after {
				  content: none;
				}

				.validator {
				  border: 1px solid #000;
				  color: #FFF;
				  font-size: 6pt;
				  display: inline-block;
				  margin: 0px 6px 8px;
				}
				.w3c {
					border: 1px solid #FFF;
					background: #6675b3;
					padding: 2px 3px;
					display: inline-block;
				}
				.w3c-green {
					background: #77b572;
				}
				.badge-type {
					text-align: left;
					background: #707070;
					margin-left: -1px;
					border: 1px solid #FFF;
					padding: 2px 4px;
					width: 56px;
					display: inline-block;
				}
				.validator * {
				  letter-spacing: 0px !important;
				}


				.thumbs {
					background-image:		url("/images/thumbbackground.gif");
					background-repeat: 		no-repeat;
					vertical-align:			top;
				}

				.thumbs img {
				width:					156px;
				height:					108px;
				}

				.choose {
				color:					#000000;
					font-weight:			bold;
				}

				.top {
					vertical-align:			top;
				}

				.outline { background: #6275b8; }

					.red a:link, .red a:active, .red a:visited {
					color: 				#CC0000;
						font-weight: 		bold;
						text-decoration:	none;
					}

					.red a:hover {
					color: 				#CC0000;
						font-weight: 		bold;
						text-decoration:	none;
					}

					.fm input {
						font-size: 			9pt;
						font-weight: 		normal;
					border: 			2px solid #bec7e4;
						padding: 			2px 4px; }
					.fm select {
						font-size: 			9pt;
					border: 			2px solid #bec7e4;
						font-weight: 		normal; }
					div.fm {
						border-top: 		2px solid #6275b8;
						border-left: 		2px solid #6275b8;
					}
					.stn {
						float: left;
					width: 134px;
					padding: 2px;
					}

					.clear { overflow: hidden; width: 100%; }
					a.button {
					background: transparent url("/images/button1.gif") no-repeat scroll top right;
					display: block;
						float: left;
					font: normal 12px arial, sans-serif;
					height: 24px;
						margin-right: 2px;
						padding-right: 18px;
						text-decoration: none; }
					a.button span {
					color: #111;
					background: transparent url("/images/button2.gif") no-repeat;
					display: block;
						line-height: 14px;
					padding: 5px 0 5px 18px;
						font-weight: normal;}
					a.button:active {
						background-position: bottom right;
					color: #000000;
						outline: none; }
					a.button:active span {
						background-position: bottom left;
						padding: 6px 0 4px 18px; }

					div.usertheme {
					background: url("/images/usertheme.png") no-repeat;
					height: 106px;
					width: 154px;
					position: absolute;
						z-index: 3;
					display: none;
					cursor: auto;
					}
					div.border {
						margin-bottom: 1px;
					height: 106px;
					width: 154px;
					}
					div.image {
					position: absolute;
						z-index: 2;
					}
					</style>
					<!--[if IE 6]>
						<style type="text/css">
						html div.usertheme {
						background:	none;
						height:		106px;
						width:		154px;
						filter:		progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,
																					   sizingMethod=scale, src='https://awesomestart.com/images/usertheme.png');
						position: absolute;
							z-index: 3;
						}
				</style>
				<![endif]-->

</head>

<body class="page page-id-170 page-template-default" onload="skin_preview(); custom_boxes(); custom_boxes2(); hide_link(); hide_link2(); hide_link3(); hide_link4();">
<div id="page" class="site">
<div class="site-inner">
<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

<header id="masthead" class="site-header" role="banner">
<div class="site-header-main">
<div class="site-branding">
<p class="site-title"><a href="https://awesomestart.com/" rel="home">AwesomeStart.com</a></p>
<p class="site-description">1. Find a theme. 2. Customize it. 3. Make it home.</p>
</div><!-- .site-branding -->

<button id="menu-toggle" class="menu-toggle">Menu</button>

<div id="site-header-menu" class="site-header-menu">
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Menu">
<div class="menu-main-container"><ul id="menu-main" class="primary-menu"><li id="menu-item-191" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-191"><a href="https://awesomestart.com/gallery">Start Page Gallery</a></li>
<li id="menu-item-190" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-170 current_page_item menu-item-190"><a href="https://awesomestart.com/preferences">Preferences</a></li>
<li id="menu-item-189" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189"><a href="https://awesomestart.com/create">Create Theme</a></li>
<li id="menu-item-188" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-188"><a href="https://awesomestart.com/devlog">Developers Log</a></li>
<li id="menu-item-187" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-187"><a href="https://awesomestart.com/promote">Promote</a></li>
<li id="menu-item-186" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-186"><a href="https://awesomestart.com/staff">Staff Info</a></li>
<li id="menu-item-185" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-185"><a href="https://awesomestart.com/request">Request Theme</a></li>
<li id="menu-item-184" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184"><a href="https://awesomestart.com/faq">Help FAQ</a></li>
</ul></div>							</nav><!-- .main-navigation -->

</div><!-- .site-header-menu -->
</div><!-- .site-header-main -->

<div class="header-image">
<a href="https://awesomestart.com/" rel="home">
<script pagespeed_no_defer="">//<![CDATA[
(function(){var g=this,h=function(b,d){var a=b.split("."),c=g;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===d?c[e]?c=c[e]:c=c[e]={}:c[e]=d};var l=function(b){var d=b.length;if(0<d){for(var a=Array(d),c=0;c<d;c++)a[c]=b[c];return a}return[]};var m=function(b){var d=window;if(d.addEventListener)d.addEventListener("load",b,!1);else if(d.attachEvent)d.attachEvent("onload",b);else{var a=d.onload;d.onload=function(){b.call(this);a&&a.call(this)}}};var n,p=function(b,d,a,c,e){this.f=b;this.h=d;this.i=a;this.c=e;this.e={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.g=c;this.b={};this.a=[];this.d={}},q=function(b,d){var a,c,e=d.getAttribute("pagespeed_url_hash");if(a=e&&!(e in b.d))if(0>=d.offsetWidth&&0>=d.offsetHeight)a=!1;else{c=d.getBoundingClientRect();var f=document.body;a=c.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);c=c.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+c;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.e.height&&c<=b.e.width)}a&&(b.a.push(e),b.d[e]=!0)};p.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&q(this,b)};h("pagespeed.CriticalImages.checkImageForCriticality",function(b){n.checkImageForCriticality(b)});h("pagespeed.CriticalImages.checkCriticalImages",function(){r(n)});var r=function(b){b.b={};for(var d=["IMG","INPUT"],a=[],c=0;c<d.length;++c)a=a.concat(l(document.getElementsByTagName(d[c])));if(0!=a.length&&a[0].getBoundingClientRect){for(c=0;d=a[c];++c)q(b,d);a="oh="+b.i;b.c&&(a+="&n="+b.c);if(d=0!=b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),c=1;c<b.a.length;++c){var e=","+encodeURIComponent(b.a[c]);131072>=a.length+e.length&&(a+=e)}b.g&&(e="&rd="+encodeURIComponent(JSON.stringify(s())),131072>=a.length+e.length&&(a+=e),d=!0);t=a;if(d){c=b.f;b=b.h;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(k){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(u){}}f&&(f.open("POST",c+(-1==c.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}},s=function(){var b={},d=document.getElementsByTagName("IMG");if(0==d.length)return{};var a=d[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var c=0;a=d[c];++c){var e=a.getAttribute("pagespeed_url_hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].k&&a.height>=b[e].j)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b},t="";h("pagespeed.CriticalImages.getBeaconData",function(){return t});h("pagespeed.CriticalImages.Run",function(b,d,a,c,e,f){var k=new p(b,d,a,e,f);n=k;c&&m(function(){window.setTimeout(function(){r(k)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','https://awesomestart.com/preferences','Ez0F1MDYS1',true,false,'-c0WEYMUkJo');
//]]></script><img src="https://awesomestart.com/wp-content/uploads/sites/10/2016/03/467x73xmain.gif.pagespeed.ic.CrSfwUOZQE.png" srcset="" sizes="(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px" width="467" height="73" alt="AwesomeStart.com" pagespeed_url_hash="507048341" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
</a>
</div><!-- .header-image -->
</header><!-- .site-header -->

<div id="content" class="site-content">

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<article id="post-170" class="post-170 page type-page status-publish hentry">
<header class="entry-header">
<h1 class="entry-title">Preferences</h1>	</header><!-- .entry-header -->


<div class="entry-content">


		<h2><?php
		if ($rss || $ADV) {echo "Advanced Preferences";}
		else {echo "Preferences";}
		?></h2>

		<div>

		<strong>Select Preferences</strong><br /><br />
		<form method="post" action="set_prefs.php" name="prefForm">

		<div style="float: left; margin: 8px 0px 0px 2px; width: 326px; height: 22px;">Satisfied with your choices? Save your preferences!</div>
		<div style="float: left; margin-top: 2px;" class="dabut">
		<script type='text/javascript' language='JavaScript'>
		<!--
		document.write("<a class=\"button\" href=\"\" onclick=\"this.blur(); document.prefForm.submit(); return false;\"><span>Save Preferences</span></a>");
		//-->
		</script>
		<noscript><input type="image" src="http://awesomestart.com/images/button_save_preferences.gif"
		name="submit" value="Save Preferences" style="border:0px; padding:0px;" /></noscript>
		</div>
		<div style="clear: both;"> </div>

		<br />

		<div class="fm">

		<div class="stn">Select Theme</div>
		<div style="float: left; width: 185px;">

		<? if (!$s && $skin) { $s = $skin; } ?>
		<select onchange="skin_preview()" name="SKIN" id="SKIN">
		<option value="plain">-- STANDARD --</option>
		<option value="plainblack"
		<? $plainblack=$_GET['plainblack'];
		echo $plainblack; ?>>
		Plain Black</option>
		<option value="plain"
		<? $plain=$_GET['plain'];
		echo $plain; ?>>
		Plain White</option>
		<option value="plain"> </option>
		<option value="plain">-- MOVIES &amp; TV --</option>
		<?	$group = movie;	include ("_display.php"); ?>
		<option value="plain"> </option>
		<option value="plain">-- MUSIC --</option>
		<? $group = music; include ("_display.php"); ?>
		<option value="plain"> </option>
		<option value="plain">-- VIDEOGAMES --</option>
		<? $group = videogame; include ("_display.php"); ?>
		<option value="plain"> </option>
		<option value="plain">-- OTHER --</option>
		<? $group = other; include ("_display.php"); ?>
		<option value="create">Create</option>
		<?
		if (substr($s, 0, 7) == "public-") {
			echo "<option value=\"$s\" selected=\"selected\">Public</option>";
		} else if (substr($_COOKIE[skin], 0, 7) == "public-") {
			echo "<option value=\"$_COOKIE[skin]\">Public</option>";
		}
		?>
		</select>

		<br />

		<a href="http://awesomestart.com/gallery/">View the Gallery</a>

		</div>

		<div style="float: left; padding: 8px 0px; margin-right: -10px;">
		<script type='text/javascript' language='JavaScript'>
		<!--
		document.write("<div class=\"border\" id=\"borderdiv\"><div class=\"usertheme\" id=\"userthemediv\"></div><div class=\"image\"><div id=\"skin_preview\"><img src=\"http://awesomestart.com/images/blank.gif\" alt=\"\" id=\"skin_thumb_preview\"></div></div></div>");
		//-->
		</script>
		</div>

		<div style="clear: both;"> </div>

		</div>
		<div class="fm" style="height: 56px;">

		<div class="stn">Select Image Search</div>
		<div style="float: left; width: 185px;">
		<select name="IMAGE">
		<option value="http://www.google.com/imghp">
		Google</option>
		<option value="http://www.altavista.com/image/"
		<? if ($image == 'http://www.altavista.com/image/')
		{echo "selected=\"selected\"";} ?>>
		AltaVista</option>
		<option value="http://pictures.ask.com/"
		<? if ($image == 'http://pictures.ask.com/')
		{echo "selected=\"selected\"";} ?>>
		Ask.com</option>
		<option value="http://multimedia.lycos.com/"
		<? if ($image == 'http://multimedia.lycos.com/')
		{echo "selected=\"selected\"";} ?>>
		Lycos</option>
		<option value="http://search.msn.com/images/"
		<? if ($image == 'http://search.msn.com/images/')
		{echo "selected=\"selected\"";} ?>>
		MSN</option>
		<option value="http://www.picsearch.com/"
		<? if ($image == 'http://www.picsearch.com/')
		{echo "selected=\"selected\"";} ?>>
		PicSearch</option>
		</select>
		</div>
		<div style="clear: both;"> </div>

		</div>
		<div class="fm" style="height: 56px;">

		<div class="stn">Select News</div>
		<div style="float: left; width: 185px;">
		<select name="NEWS">
		<option value="http://news.google.com">
		Google</option>
		<option value="http://abcnews.go.com/"
		<? if ($news == 'http://abcnews.go.com/')
		{echo "selected=\"selected\"";} ?>>
		ABC</option>
		<option value="http://www.alternet.org/"
		<? if ($news == 'http://www.alternet.org/')
		{echo "selected=\"selected\"";} ?>>
		Alternet</option>
		<option value="http://news.bbc.co.uk/"
		<? if ($news == 'http://news.bbc.co.uk/')
		{echo "selected=\"selected\"";} ?>>
		BBC</option>
		<option value="http://www.cbsnews.com/"
		<? if ($news == 'http://www.cbsnews.com/')
		{echo "selected=\"selected\"";} ?>>
		CBS</option>
		<option value="http://www.cnn.com"
		<? if ($news == 'http://www.cnn.com')
		{echo "selected=\"selected\"";} ?>>
		CNN</option>
		<option value="http://www.economist.com"
		<? if ($news == 'http://www.economist.com')
		{echo "selected=\"selected\"";} ?>>
		The Economist</option>
		<option value="http://espn.go.com"
		<? if ($news == 'http://espn.go.com')
		{echo "selected=\"selected\"";} ?>>
		ESPN</option>
		<option value="http://www.foxnews.com/"
		<? if ($news == 'http://www.foxnews.com/')
		{echo "selected=\"selected\"";} ?>>
		FOX</option>
		<option value="http://www.msnbc.msn.com/"
		<? if ($news == 'http://www.msnbc.msn.com/')
		{echo "selected=\"selected\"";} ?>>
		MSNBC</option>
		<option value="http://news.com.com/"
		<? if ($news == 'http://news.com.com/')
		{echo "selected=\"selected\"";} ?>>
		News.com</option>
		<option value="http://www.nytimes.com/"
		<? if ($news == 'http://www.nytimes.com/')
		{echo "selected=\"selected\"";} ?>>
		New York Times</option>
		<option value="http://www.slashdot.org"
		<? if ($news == 'http://www.slashdot.org')
		{echo "selected=\"selected\"";} ?>>
		Slashdot</option>
		<option value="http://www.superherohype.com"
		<? if ($news == 'http://www.superherohype.com')
		{echo "selected=\"selected\"";} ?>>
		Super Hero Hype</option>
		<option value="http://www.usatoday.com/"
		<? if ($news == 'http://www.usatoday.com/')
		{echo "selected=\"selected\"";} ?>>
		USA Today</option>
		<option value="http://www.washingtonpost.com/"
		<? if ($news == 'http://www.washingtonpost.com/')
		{echo "selected=\"selected\"";} ?>>
		Washington Post</option>
		<option value="http://www.wired.com/"
		<? if ($news == 'http://www.wired.com/')
		{echo "selected=\"selected\"";} ?>>
		Wired</option>
		<option value="http://dailynews.yahoo.com/"
		<? if ($news == 'http://dailynews.yahoo.com/')
		{echo "selected=\"selected\"";} ?>>
		Yahoo</option>
		</select>
		</div>
		<div style="clear: both;"> </div>

		</div>
		<div class="fm" style="height: 56px;">

		<div class="stn">Select Maps</div>
		<div style="float: left; width: 185px;">
		<select name="MAPS">
		<option value="http://maps.google.com">Google</option>
		<option value="http://www.mapquest.com"
		<? if ($maps == 'http://www.mapquest.com')
		{echo "selected=\"selected\"";} ?>>
		Mapquest</option>
		</select>
		</div>
		<div style="clear: both;"> </div>

		</div>
		<div class="fm" style="height: 56px;">

		<div class="stn">Select Email</div>
		<div style="float: left;">
		<select onchange="custom_boxes()" name="EMAIL" id="EMAIL">
		<option value="http://www.gmail.com"
		<? if ($email == 'http://www.gmail.com')
		{echo "selected=\"selected\""; $n=1;} ?>>
		Gmail</option>
		<option value="http://www.aemail4u.com"
		<? if ($email == 'http://www.aemail4u.com')
		{echo "selected=\"selected\""; $n=1;} ?>>
		AEmail4U</option>
		<option value="http://webmail.aol.com/"
		<? if ($email == 'http://webmail.aol.com/')
		{echo "selected=\"selected\""; $n=1;} ?>>
		AOL</option>
		<option value="http://mymail.cableone.net"
		<? if ($email == 'http://mymail.cableone.net')
		{echo "selected=\"selected\""; $n=1;} ?>>
		CableOne</option>
		<option value="http://www.comcast.net/qry/goto?app=mail&amp;CM.src=top"
		<? if ($email == 'http://www.comcast.net/qry/goto?app=mail&CM.src=top')
		{echo "selected=\"selected\""; $n=1;} ?>>
		Comcast</option>
		<option value="http://www.hotmail.com"
		<? if ($email == 'http://www.hotmail.com')
		{echo "selected=\"selected\""; $n=1;} ?>>
		Hotmail</option>
		<option value="http://webmail.juno.com/"
		<? if ($email == 'http://webmail.juno.com/')
		{echo "selected=\"selected\""; $n=1;} ?>>
		Juno</option>
		<option value="http://www.mail.com"
		<? if ($email == 'http://www.mail.com')
		{echo "selected=\"selected\""; $n=1;} ?>>
		Mail.com</option>
		<option value="http://webmail.netzero.net/"
		<? if ($email == 'http://webmail.netzero.net/')
		{echo "selected=\"selected\""; $n=1;} ?>>
		NetZero</option>
		<option value="http://webmail.netscape.com/"
		<? if ($email == 'http://webmail.netscape.com/')
		{echo "selected=\"selected\""; $n=1;} ?>>
		Netscape</option>
		<option value="http://www.skim.com"
		<? if ($email == 'http://www.skim.com')
		{echo "selected=\"selected\""; $n=1;} ?>>
		Skim</option>
		<option value="http://netmail.verizon.net/"
		<? if ($email == 'http://netmail.verizon.net/')
		{echo "selected=\"selected\""; $n=1;} ?>>
		Verizon</option>
		<option value="http://mail.yahoo.com/"
		<? if ($email == 'http://mail.yahoo.com/')
		{echo "selected=\"selected\""; $n=1;} ?>>
		Yahoo</option>
		<option value=""
		<? if (substr($email, 0, 7) == 'http://' && $n != 1)
		{echo "selected=\"selected\"";} ?>>
		Other...</option>
		</select>
		</div>

		<div style="float: left; padding: 6px 0px 0px 6px;">Select "Other" to enter your own email URL.</div>
		<div style="clear: both;"> </div>

		<div id='custom_boxes' style="float: left; padding-left: 140px; display: none;">
		<input type='text' name="ALTEMAIL" id="ALTEMAIL" value="<?
		if (empty($email) || $email == "http://") { echo "http://"; }
		else { echo $email; } ?>" size="44" />
		</div>
		<div style="clear: both;"> </div>

		</div>
		<div id="mydiv" class="fm" style="height: 56px; display:<? if ($rss) {echo "block";} else {echo "none";} ?>;">

		<div class="stn">Select RSS Feed</div>
		<div style="float: left;">
		<select onchange="custom_boxes2()" name="RSS" id="RSS">
		<option value="NONE"
		<? if ($rss == '')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		None</option>
		<option value="http://feeds.feedburner.com/AskANinja"
		<? if ($rss == 'http://feeds.feedburner.com/AskANinja')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		Ask a Ninja Podcast</option>
		<option value="http://newsrss.bbc.co.uk/rss/newsonline_uk_edition/front_page/rss.xml"
		<? if ($rss == 'http://newsrss.bbc.co.uk/rss/newsonline_uk_edition/front_page/rss.xml')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		BBC News</option>
		<option value="http://rss.cnn.com/rss/cnn_topstories.rss"
		<? if ($rss == 'http://rss.cnn.com/rss/cnn_topstories.rss')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		CNN Top Stories</option>
		<option value="http://feeds.digg.com/digg/news/popular.rss"
		<? if ($rss == 'http://feeds.digg.com/digg/news/popular.rss')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		Digg Feed</option>
		<option value="http://feeds.feedburner.com/doublefeatureshow"
		<? if ($rss == 'http://feeds.feedburner.com/doublefeatureshow')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		Double Feature</option>
		<option value="http://feeds.engadget.com/weblogsinc/engadget"
		<? if ($rss == 'http://feeds.engadget.com/weblogsinc/engadget')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		Engadget</option>
		<option value="http://sports.espn.go.com/espn/rss/news"
		<? if ($rss == 'http://sports.espn.go.com/espn/rss/news')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		ESPN News</option>
		<option value="http://www.foxnews.com/xmlfeed/rss/0,4313,0,00.rss"
		<? if ($rss == 'http://www.foxnews.com/xmlfeed/rss/0,4313,0,00.rss')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		Fox News</option>
		<option value="http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml"
		<? if ($rss == 'http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		MSNBC News</option>
		<option value="http://news.com.com/2547-1_3-0-20.xml"
		<? if ($rss == 'http://news.com.com/2547-1_3-0-20.xml')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		News.com Feed</option>
		<option value="http://www.nytimes.com/services/xml/rss/nyt/HomePage.xml"
		<? if ($rss == 'http://www.nytimes.com/services/xml/rss/nyt/HomePage.xml')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		New York Times</option>
		<option value="http://skepticality.libsyn.com/rss/"
		<? if ($rss == 'http://skepticality.libsyn.com/rss/')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		Skepticality Podcast</option>
		<option value="http://rss.slashdot.org/Slashdot/slashdot"
		<? if ($rss == 'http://rss.slashdot.org/Slashdot/slashdot')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		Slashdot</option>
		<option value="http://www.snopes.com/info/whatsnew.rss"
		<? if ($rss == 'http://www.snopes.com/info/whatsnew.rss')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		Snopes Updates</option>
		<option value="http://rssfeeds.usatoday.com/usatoday-NewsTopStories"
		<? if ($rss == 'http://rssfeeds.usatoday.com/usatoday-NewsTopStories')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		USA Today</option>
		<option value="http://www.washingtonpost.com/wp-dyn/rss/linkset/2005/03/24/LI2005032400102.xml"
		<? if ($rss == 'http://www.washingtonpost.com/wp-dyn/rss/linkset/2005/03/24/LI2005032400102.xml')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		Washington Post</option>
		<option value="http://www.dictionary.com/wordoftheday/wotd.rss"
		<? if ($rss == 'http://www.dictionary.com/wordoftheday/wotd.rss')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		Word of the Day</option>
		<option value="http://rss.news.yahoo.com/rss/topstories"
		<? if ($rss == 'http://rss.news.yahoo.com/rss/topstories')
		{echo "selected=\"selected\""; $rssc = 1;} ?>>
		Yahoo News</option>
		<option value=""
		<? if (substr($rss, 0, 7) == 'http://' && $rssc != 1)
		{echo "selected=\"selected\"";} ?>>
		Other...</option>
		</select>
		</div>
		<div style="float: left; padding: 6px 0px 0px 6px;">Select "Other" for manual URL.</div>
			<div id='custom_boxes2' style="padding-left: 140px; display: none;">
			<input type='text' name="ALTRSS" id="ALTRSS" value="<?
			if (!isset($rss) || $rss == "http://") { echo "http://"; }
			else { echo $rss; } ?>" size="44" />
		</div>

		</div>
		<div class="fm" style="border-bottom: 2px solid #6275b8;">

		<div class="stn">Select Bottom Links</div>
		<div style="float: left; padding: 5px 2px;">Link 1&nbsp;&nbsp;&nbsp;
		<select onchange="hide_link()" name="R1" id="R1">
		<option value="DEFAULT">Default</option>
		<option value="" <? if ($link1url && $link1url != 'http://' ){echo "selected=\"selected\"";} ?> >Custom</option>
		</select>
		<div id='hide_link' style='display: none;'>
		<input type='text' class="ipt" name="LINK1NAME" id="LINK1NAME" value="<? echo $link1name; ?>" style="width: 135px;" maxlength="20" />
		<br />
		<input type='text' class="ipt" name="LINK1URL" id="LINK1URL" value="<?
		if (!isset($link1url) || $link1url == "http://") { echo "http://"; }
		else if ($link1url == $amazon) {echo "http://www.amazon.com";}
		else { echo $link1url; } ?>" style="width: 264px; margin-top: 0px;" />
		</div>
		</div>
		<div style="clear: both;"> </div>

		<div style="float: left; padding-left: 140px; padding-bottom: 4px;">Link 2&nbsp;&nbsp;&nbsp;
		<select onchange="hide_link2()" name="R2" id="R2">
		<option value="DEFAULT">Default</option>
		<option value="" <? if ($link2url && $link2url != 'http://' ){echo "selected=\"selected\"";} ?> >Custom</option>
		</select>
		<div id='hide_link2' style='display: none;'>
		<input type='text' class="ipt" name="LINK2NAME" id="LINK2NAME" value="<? echo $link2name; ?>" style="width: 135px;" maxlength="20" />
		<br />
		<input type='text' class="ipt" name="LINK2URL" id="LINK2URL" value="<?
		if (!isset($link2url) || $link2url == "http://") { echo "http://"; }
		else if ($link2url == $amazon) {echo "http://www.amazon.com";}
		else { echo $link2url; } ?>" style="width: 264px; margin-top: 0px;" />
		</div>
		</div>
		<div style="clear: both;"> </div>

		<div style="float: left; padding-left: 140px; padding-bottom: 4px;">Link 3&nbsp;&nbsp;&nbsp;
		<select onchange="hide_link3()" name="R3" id="R3">
		<option value="DEFAULT">Default</option>
		<option value="" <? if ($link3url && $link3url != 'http://' ){echo "selected=\"selected\"";} ?> >Custom</option>
		</select>
		<div id='hide_link3' style='display: none;'>
		<input type='text' name="LINK3NAME" id="LINK3NAME" value="<? echo $link3name; ?>" style="width: 135px;" maxlength="20" />
		<br />
		<input type='text' name="LINK3URL" id="LINK3URL" value="<?
		if (!isset($link3url) || $link3url == 'http://') { echo "\"http://\""; }
		else if ($link3url == $amazon) {echo "http://www.amazon.com";}
		else { echo $link3url; } ?>" style="width: 264px; margin-top: 0px;" />
		</div>
		</div>
		<div style="clear: both;"> </div>

		<div style="float: left; padding-left: 140px; padding-bottom: 4px;">Link 4&nbsp;&nbsp;&nbsp;
		<select onchange="hide_link4()" name="R4" id="R4">
		<option value="DEFAULT">Default</option>
		<option value="" <? if ($link4url && $link4url != 'http://' ){echo "selected=\"selected\"";} ?> >Custom</option>
		</select>
		<div id='hide_link4' style='display: none;'>
		<input type='text' name="LINK4NAME" id="LINK4NAME" value="<? echo $link4name; ?>" style="width: 135px;" maxlength="20" />
		<br />
		<input type='text' name="LINK4URL" id="LINK4URL" value="<?
		if (!isset($link4url) || $link4url == "http://") { echo "http://"; }
		else if ($link4url == $amazon) {echo "http://www.amazon.com";}
		else { echo $link4url; } ?>" style="width: 264px; margin-top: 0px;" />
		</div>
		</div>
		<div style="clear: both;"> </div>

		</div>
		<div id="xlinkdiv" class="fm" style="border-top: none; border-bottom: 2px solid #6275b8;
	display:<? if ($l5n || $l6n || $l7n || $l8n) {echo "block";} else {echo "none";} ?>;">

		<div style="width: 134px; padding: 2px;">Select Additional Links</div>
		<div style="padding:14px">
		Fill in the information for each extra link you would like to appear on your page.  To remove
			an extra link after you've added it, click the red <font color="CC0000">X</font> next to the box.
			</div>
			<div style="float: left; padding-left: 42px; width:150px;">Name</div>
			<div style="float: left;">URL</div>
			<div style="clear: both; height: 2px;"> </div>

			<div style="float: left; padding: 11px 4px 0px 6px;">Link 5</div>
			<div style="float: left; padding: 2px;">
			<input type='text' name="L5N" id="L5N" value="<? echo $l5n; ?>" style="width: 130px;" maxlength="20" />
			</div>
			<div style="float: left; padding: 2px 4px;">
			<input type='text' name="L5U" id="L5U" value="<?
			if (!isset($l5u) || $l5u == "http://") { echo "http://"; }
			else if ($l5u == $amazon) {echo "http://www.amazon.com";}
			else { echo $l5u; } ?>" style="width: 264px;" />
		</div>
		<div style="float: left; padding: 11px 2px 0px 4px;" class="red">
		<a href="" onclick="var l5nc = document.getElementById('L5N'); l5nc.value='';
		var l5nu = document.getElementById('L5U'); l5nu.value='http://'; return false;">X</a>
		</div>
		<div style="clear: both;"> </div>

		<div style="float: left; padding: 11px 4px 0px 6px;">Link 6</div>
		<div style="float: left; padding: 2px;">
		<input type='text' name="L6N" id="L6N" value="<? echo $l6n; ?>" style="width: 130px;" maxlength="20" />
		</div>
		<div style="float: left; padding: 2px 4px;">
		<input type='text' name="L6U" id="L6U" value="<?
		if (!isset($l6u) || $l6u == 'http://') { echo "http://"; }
		else if ($l6u == $amazon) {echo "http://www.amazon.com";}
		else { echo $l6u; } ?>" style="width: 264px;" />
		</div>
		<div style="float: left; padding: 11px 2px 0px 4px;" class="red">
		<a href="" onclick="var l6nc = document.getElementById('L6N'); l6nc.value='';
		var l6nu = document.getElementById('L6U'); l6nu.value='http://'; return false;">X</a>
		</div>
		<div style="clear: both;"> </div>

		<div style="float: left; padding: 11px 4px 0px 6px;">Link 7</div>
		<div style="float: left; padding: 2px;">
		<input type='text' name="L7N" id="L7N"  value="<? echo $l7n; ?>" style="width: 130px;" maxlength="20" />
		</div>
		<div style="float: left; padding: 2px 4px;">
		<input type='text' name="L7U" id="L7U" value="<?
		if (!isset($l7u) || $l7u == "http://") { echo "http://"; }
		else if ($l7u == $amazon) {echo "http://www.amazon.com";}
		else { echo $l7u; }	?>" style="width: 264px;" />
		</div>
		<div style="float: left; padding: 11px 2px 0px 4px;" class="red">
		<a href="" onclick="var l7nc = document.getElementById('L7N'); l7nc.value='';
		var l7nu = document.getElementById('L7U'); l7nu.value='http://'; return false;">X</a>
		</div>
		<div style="clear: both;"> </div>

		<div style="float: left; padding: 11px 4px 0px 6px;">Link 8</div>
		<div style="float: left; padding: 2px;">
		<input type='text' name="L8N" id="L8N"  value="<? echo $l8n; ?>" style="width: 130px;" maxlength="20" />
		</div>
		<div style="float: left; padding: 2px 4px;">
		<input type='text' name="L8U" id="L8U" value="<?
		if (!isset($l8u) || $l8u == "http://") { echo "http://"; }
		else if ($l8u == $amazon) {echo "http://www.amazon.com";}
		else { echo $l8u; } ?>" style="width: 264px;" />
		</div>
		<div style="float: left; padding: 11px 2px 0px 4px;" class="red">
		<a href="" onclick="var l8nc = document.getElementById('L8N'); l8nc.value='';
		var l8nu = document.getElementById('L8U'); l8nu.value='http://'; return false;">X</a>
		</div>

		<div style="clear: both; height: 4px;"> </div>

		</div>

		<br />

		<div style="float: left; margin: 10px 0px 6px 2px; width: 326px;">Satisfied with your choices? Save your preferences!</div>
		<div style="float: left; margin: 4px 0px 6px 0px;" class="dabut">
		<script type='text/javascript' language='JavaScript'>
		<!--
		document.write("<a class=\"button\" href=\"\" onclick=\"this.blur(); document.prefForm.submit(); return false;\"><span>Save Preferences</span></a>");
		//-->
		</script>
		<noscript><input type="image" src="http://awesomestart.com/images/button_save_preferences.gif"
		name="submit" value="Save Preferences" style="border:0px; padding:0px;" /></noscript>
		</div>
		<div style="clear: both;"> </div>

		</form>

		</div>


</div><!-- .entry-content -->


</article><!-- #post-## -->

</main><!-- .site-main -->


</div><!-- .content-area -->


<aside id="secondary" class="sidebar widget-area" role="complementary">
<section id="search-2" class="widget widget_search">
<form role="search" method="get" class="search-form" action="https://awesomestart.com/">
<label>
<span class="screen-reader-text">Search for:</span>
	<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:"/>
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text">Search</span></button>
	</form>
	</section><section id="text-2" class="widget widget_text"><h2 class="widget-title">Promote AwesomeStart</h2>			<div class="textwidget">We rely on word of mouth to help people find out about AwesomeStart. Help us by <a href=/promote>sharing the site</a> with your friends!</div>
	</section><section id="text-3" class="widget widget_text"><h2 class="widget-title">Request a Page</h2>			<div class="textwidget">Can't find your favorite band or movie? Go to the <a href=/request>request page</a> and let us know! And in the mean time, try one of our Standard Pages: <a href=/plain>White</a> | <a href=/plainblack>Black</a></div>
	</section><section id="text-4" class="widget widget_text"><h2 class="widget-title">Latest Themes</h2>			<div class="textwidget"><ul><li><a href=/wolfmother>Wolfmother</a></li>
	<li><a href=/hellokitty>Hello Kitty</a></li>
	<li><a href=/threedaysgrace>Three Days Grace</a></li>
	<li><a href=/ps3>Playstation 3</a></li>
	<li><a href=/xbox>Xbox</a></li>
	<li><a href=/opeth>Opeth</a></li>
	<li><a href=/billytalent>Billy Talent</a></li>
	<li><a href=/blade>Blade</a></li>
	<li><a href=/inflames>In Flames</a></li>
	<li><a href=/alltimelow>All Time Low</a></li></ul></div>
	</section>	</aside><!-- .sidebar .widget-area -->

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<nav class="main-navigation" role="navigation" aria-label="Footer Primary Menu">
	<div class="menu-main-container"><ul id="menu-main-1" class="primary-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-191"><a href="https://awesomestart.com/gallery">Start Page Gallery</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-170 current_page_item menu-item-190"><a href="https://awesomestart.com/preferences">Preferences</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189"><a href="https://awesomestart.com/create">Create Theme</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-188"><a href="https://awesomestart.com/devlog">Developers Log</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-187"><a href="https://awesomestart.com/promote">Promote</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-186"><a href="https://awesomestart.com/staff">Staff Info</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-185"><a href="https://awesomestart.com/request">Request Theme</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184"><a href="https://awesomestart.com/faq">Help FAQ</a></li>
	</ul></div>				</nav><!-- .main-navigation -->


	<div class="site-info">
	<span class="site-title"><a href="https://awesomestart.com/" rel="home">AwesomeStart.com</a></span>
	<a href="https://wordpress.org/">Proudly powered by WordPress</a>
	</div><!-- .site-info -->
	</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
	</div><!-- .site -->

	<div style="text-align:center;">
	<a href="http://validator.w3.org/check/referer" target="_blank" rel="nofollow"><div class="validator">
	<div class='w3c'>W3C</div><div class='badge-type'>XHTML 1.0</div>
	</div></a>

	<a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank" rel="nofollow"><div class="validator">
	<div class='w3c w3c-green'>W3C</div><div class='badge-type'>CSS 3.0</div>
	</div></a>

	<br/>

	<a href="https://doublefeature.fm" style="color: #777">Double Feature</a> |
	<a href="https://ericthirteen.com/" style="color: #777">Eric Thirteen</a> |
	<a href="https://tbmchicago.com/" style="color: #777">The Birthday Massacre</a>
	</div><script type='text/javascript'>//<![CDATA[
	(function(){var isWebkit=navigator.userAgent.toLowerCase().indexOf('webkit')>-1,isOpera=navigator.userAgent.toLowerCase().indexOf('opera')>-1,isIE=navigator.userAgent.toLowerCase().indexOf('msie')>-1;if((isWebkit||isOpera||isIE)&&document.getElementById&&window.addEventListener){window.addEventListener('hashchange',function(){var id=location.hash.substring(1),element;if(!(/^[A-z0-9_-]+$/.test(id))){return;}
																																																																													element=document.getElementById(id);if(element){if(!(/^(?:a|select|input|button|textarea)$/i.test(element.tagName))){element.tabIndex=-1;}
																																																																													element.focus();window.scrollBy(0,-53);}},false);}})();
//]]></script>
<script type='text/javascript'>//<![CDATA[
var screenReaderText={"expand":"expand child menu","collapse":"collapse child menu"};
//]]></script>
<script src="https://awesomestart.com/wp-content,_themes,_twentysixteen,_js,_functions.js,qver==20151204+wp-includes,_js,_wp-embed.min.js,qver==4.4.2.pagespeed.jc.hvcJjTTO_3.js"></script><script>eval(mod_pagespeed_xz1oXjyvbq);</script>
<script>eval(mod_pagespeed_Ctn30meeHV);</script>
</body>
</html>
