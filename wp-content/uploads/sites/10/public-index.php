<?php
	
	$uL[1]['n_d'] = 'Change Links!';
	$uL[1]['u_d'] = '/preferences';

	$uL[2]['n_d'] = 'Main Gallery';
	$uL[2]['u_d'] = '/gallery';

	$uL[3]['n_d'] = 'Developer\'s Log';
	$uL[3]['u_d'] = '/devlog';

	$uL[4]['n_d'] = 'Gallery Design';
	$uL[4]['u_d'] = '/design';

	// Generate form for search
	function makeForm($urlPart,$method='post',$topper=true) {
		$return = "<form name='f' action='https://$urlPart' method='$method' id='searchBox'";
		if ($topper) { $return .= ' target="_top"'; }
		$return .= '>';
		return $return;
	}

	function grabCookie($key) {
		return isset($_COOKIE[$key]) ? $_COOKIE[$key] : NULL;
	}

	// Lowercase the URL. Remove URLs that are only 'http(s)://'
	function seeBlank($key) {
		$pos = strpos($key , ':');
		$key = !$pos ? "http://".strtolower($key) : strtolower($key);
		return ($key!='http://' && $key!='https://') ? $key : '';
	}

	// Create rollovers for share menu
	function rollMaker($link,$name,$roll,$extraPad = FALSE) {

        $imageName = strtolower($name);
		$roll = "roll$roll";

		$return ="<div class='roll'";

		if ($extraPad) { $return .= " style='padding:0px 2px 2px 2px;'"; }

        $return .="><a href='$link' onmouseover=\"document.$roll.src='/images/s_".$imageName."2.png'\" onmouseout=\"document.$roll.src='/images/s_$imageName.png'\" target='_blank'><img src='/images/s_$imageName.png' name='$roll' alt='$name'></a></div>";

		return $return;
	}

	function ddLister($ltr,$n) {
        global $st;
		$return = "<li><a href='?st=$ltr'>";
        $return .= $st==$ltr ? "&gt; $n &lt;" : "$n";
        $return .="</a></li>";
        return $return;
	}

	function bottomLinker($n,$u,$n_d,$u_d) {
		global $title;
		$affiliate = "10ln87";
		$tString = strtolower(str_replace("'","",str_replace(" ", "-", "$title")));
        if (empty($n)) {
			switch ($n_d) {
				case 1:
					$n = "Amazon Items";
					$urlSafe = strtolower(str_replace(" ", "%20", "$title"));
					$u = "https://amazon.com/s/tag=tbmchicago-20&amp;keywords=".$urlSafe;
					break;
				case 2:
					$n = "Listen Now";
					$u = "https://geo.itunes.apple.com/us/artist/".$tString."/id".$u_d."?mt=1&at=".$affiliate;
					break;
				case 3:
					$n = "Watch Now";
					$u = "https://geo.itunes.apple.com/us/tv-season/".$tString."/id".$u_d."?mt=4&at=".$affiliate;
					break;
				case 4:
					$n = "Watch Now";
					$u = "https://geo.itunes.apple.com/us/movie/".$tString."/id".$u_d."?mt=6&at=".$affiliate;
					break;
				case 5:
					$n = "Watch Now";
					$u = "https://geo.itunes.apple.com/us/movie-collection/".$tString."/id".$u_d."?mt=6&at=".$affiliate;
					break;
				case 6:
					$n = "Wikipedia Entry";
					$u = "https://wikipedia.org/wiki/".$u_d;
					break;
				case 7:
					$n = "IMDB Entry";
					$u = "http://imdb.com/title/tt$u_d";
					break;
				default:
					$n = $n_d;
					break;
			}
		}
        if (empty($u)) { $u = $u_d; }
        return "<a href='$u'>$n</a>";
	}

	// Set on individual theme page
	if (!isset($ext)) { $ext="jpg"; }

	// Get the url
	$thisurl = substr($_SERVER['REQUEST_URI'],1);
	if (stripos($thisurl, "?")) {
		$thisurl = substr($thisurl, 0, (stripos($thisurl, "?")));
	}

	// Set the title if the individual page hasn't
	if (!isset($title)){ $title = ucfirst($thisurl); }

	// Using an alternate search type
	$st = isset($_GET['st']) ? $_GET['st'] : NULL;

	$image = grabCookie('image');
	$news = grabCookie('news');
	$maps = grabCookie('maps');
	$email = grabCookie('email');
	$rss = grabCookie('rss');
	$uL[1]['n'] = grabCookie('link1name');
	$uL[1]['u'] = grabCookie('link1url');
	$uL[2]['n'] = grabCookie('link2name');
	$uL[2]['u'] = grabCookie('link2url');
	$uL[3]['n'] = grabCookie('link3name');
	$uL[3]['u']= grabCookie('link3url');
	$uL[4]['n'] = grabCookie('link4name');
	$uL[4]['u'] = grabCookie('link4url');
	$l5n = grabCookie('l5n');
	$l5u = grabCookie('l5u');
	$l6n = grabCookie('l6n');
	$l6u = grabCookie('l6u');
	$l7n = grabCookie('l7n');
	$l7u = grabCookie('l7u');
	$l8n = grabCookie('l8n');
	$l8u = grabCookie('l8u');

	// Who's using the page?
	$ip = $_SERVER['REMOTE_ADDR'];
	$uagent = strtoupper($_SERVER['HTTP_USER_AGENT']);
	$blink = ereg('MSIE ([0-9].[0-9]{1,2})',$uagent) ? FALSE : TRUE;
	$searchbot = stristr($uagent,'SEARCHBOT') ? TRUE : FALSE;

	$thisurl = "$id";

	foreach($result as $row) {
		$title = $row['title'];
		$tags = $row['tags'];
		$c_bg = $row['bg'];
		$c_bgc = $row['bgc'];
		$c_fc = $row['fc'];
		$c_lc = $row['lc'];
		$c_hc = $row['hc'];
		$c_ha = $row['ha'];
		$c_va = $row['va'];
		$c_sbb = $row['sbb'];
		$c_sbc = $row['sbc'];
		$c_mbb = $row['mbb'];
		$c_mbs = $row['mbs'];
		$app = $row['approved'];
	}

	$app = ($app=='approved') ? TRUE : FALSE;

	if (empty($c_sbb)) { $c_sbb = NULL; }
	if (empty($c_sbc)) { $c_sbc = NULL; }
	if (empty($c_mbb)) { $c_mbb = NULL; }
	if (empty($c_mbs)) { $c_mbs = NULL; }

	$altborder = ($c_sbb && $c_sbb) ? $c_sbb : $c_fc;
	$altbg = ($c_sbc && $c_sbc) ? $c_sbc : $c_bgc;

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <title><?php echo $title; ?> Start Page</title>
		<meta name="description" content="The perfect homepage for <?php echo $title; ?> fans. A <?php echo $title; ?> startpage with your own links and a private search engine.">
		<meta name="keywords" content="<?php echo $thisurl.", ".$title; ?>, search, startpage, start page, homepage,  home page, privacy, private search engine, duck duck go, customizable">
		<link rel="image_src" href="https://awesomestart.com/images/_<?php echo $thisurl; ?>.gif">
		<?php if ($app) { echo "<link rel='image_src' href='https://awesomestart.com/images/usergallery/$id.gif'>"; } ?>
		<script>
			function hideDiv() {
				if (document.getElementById) { // DOM3 = IE5, NS6
					document.getElementById('hideshow').style.visibility = 'hidden';
				} else {
					if (document.layers) { // Netscape 4
						document.hideshow.visibility = 'hidden';
					} else { // IE 4
						document.all.hideshow.style.visibility = 'hidden';
					}
				}
			}
			function showDiv() {
				if (document.getElementById) { // DOM3 = IE5, NS6
					document.getElementById('hideshow').style.visibility = 'visible';
				} else {
					if (document.layers) { // Netscape 4
						document.hideshow.visibility = 'visible';
					} else { // IE 4
						document.all.hideshow.style.visibility = 'visible';
					}
				}
			}
			document.onclick=check;
			function check(e) {
				var target = (e && e.target) || (event && event.srcElement); 
				var obj = document.getElementById('hideshow'); 
				var obj2 = document.getElementById('sho');
				checkParent(target)?obj.style.visibility='hidden':null; 
				target==obj2?obj.style.visibility='visible':null; 
			}
			function checkParent(t) {
				while (t.parentNode) {
					if (t==document.getElementById('hideshow')) {
						return false;
					}
					t=t.parentNode;
				}
				return true;
			}
		</script>
		<style>
			table, tr, td {
				font-size: 10pt;
				background-repeat: no-repeat;
				border-width: 0px;
				border-collapse: collapse;
				padding: 0;
			}
			#mainbox {
				text-align:left;
				<?php
					if ($c_bgc) { echo "background: $c_bgc; "; }
					if ($c_mbb && !$c_bg) { echo "background-position: -4px -4px;"; }
					if ($c_mbb) { echo "border: 2px solid $c_mbb; border-radius: 10px;"; }
				?>
				background-image: url("<?php echo ($c_bg) ? $c_bg : 'background.png'; ?>");
				width:<?php if (!$c_mbb) {echo "592";} else {echo "582";} ?>px;
				height:<?php if (!$c_mbb) {echo "266";} else {echo "256";} ?>px;
				margin-left: auto;
				margin-right: auto;
				position: absolute;
				z-index:3;
			}
			#rounder {
				position:absolute;
				z-index:1;
				width:364px;
				height:93px;
				margin-left: <?php echo $c_ha; ?>px;
				margin-top: <?php echo $c_va; ?>px;
				<?php if ($c_sbb) { echo "border-radius: 10px;"; } ?>
				<?php if ($c_sbb) { echo "opacity:0.75; filter:alpha(opacity=75); background: $c_sbc; border: 2px solid $c_sbb;"; } ?>
			}
			<?php
				if ($c_mbs) {
					echo "
						#boxglow {
							background: $c_mbs;
							border: 3px solid $c_mbs;
							width: 582px;
							height: 256px;
							margin-left: -1px;
							margin-top: -1px;
							position: absolute;
							z-index:1;
							opacity:0.20;
							filter:alpha(opacity=20);
						}
						#boxglow2 {
							background: $c_mbs;
							border: 4px solid $c_mbs;
							width: 582px;
							height: 256px;
							margin-left: -2px;
							margin-top: -2px;
							position: absolute;
							z-index:1;
							opacity:0.10;
							filter:alpha(opacity=10);
						}
						#boxglow3 {
							background: $c_mbs;
							border: 5px solid $c_mbs;
							position: absolute;
							width: 582px;
							height: 256px;
							margin-left: -3px;
							margin-top: -3px;
							position: absolute;
							z-index:1;
							opacity:0.05;
							filter:alpha(opacity=05);
						}
						#boxglow, #boxglow2, #boxglow3 {
							border-radius: 10px;
						}
					";
				}
			?>
			body {
				color: <?php echo ($c_fc) ? $c_fc : '#FFF' ?>;
				font-size: 14px;
				font-family: HelveticaNeue, 'Helvetica Neue', Helvetica, Arial, sans-serif;
				position: relative;
				margin: 1px 5px 0px;
				background: <?php echo ($c_bgc) ? $c_bgc : '#000'; ?>;
			}
			a:any-link {
				font-weight: bold;
			}
			a:link, a:active, a:visited {
				color:<?php echo $c_lc; ?>;
			}
			a:hover {
				color: <?php echo $c_hc; ?>;
			}
			form {
				margin: 0;
			}
			#hideshow {
				position: absolute;
				width: 234px;
				z-index: 9;
				top: 0;
				right: 0;
				border: 1px solid #222;
				margin-top: 15px;
			}
			.popup_block {
				font-size: .9em;
				position: relative;
				float: right;
				width: 220px;
				z-index: 100;
				background: #DDD;
				border: 7px solid #000;
			}
			.popup_block p {
				margin: 2px 0 12px 4px;
			}
			.popup_block .popup {
				background: #333;
				border: 1px solid #999;
				padding: 6px;
				color: #DDD;
			}
			#toolBar {
				font-size: .75em;
				text-align: right;
				vertical-align: top;
				height: 15px;
			}
			.roll {
				float: left;
				padding: 2px;
			}
			.roll img {
				height: 33px;
				width: 99px;
			}
			#shareTextarea {
				border: 2px solid #bec7e4;
				color: #666;
				margin-left: 2px;
				resize: none;
			}
			#closeMe {
				margin-top: 5px;
				text-align: right;
				cursor: pointer;
			}
			.popup_block .popup a:link, .popup_block .popup a:active, .popup_block .popup a:visited, #hideShare {
				color: #66F;
				font-weight: bold;
			}
			.popup_block .popup a:hover, #hideShare:hover {
				color: #999;
				font-weight: bold;
			}
			#main, #announce {
				width: 592px;
			}
			#main, #searchInput, #searchButton {
				box-sizing: border-box;
			}
			#main {
				background: transparent url('<?php echo "$thisurl.$ext"; ?>') no-repeat;
				height: 266px;
				margin: 0 auto;
			}
			#searchLinks a:not(li a), #searchLinks span {
				margin-left: 14px;
			}
			#mr-1 li ul.mr-2, #mr-1 li ul.mr-2 {
				z-index: 99;
			}
			#mr-1, #mr-1 li, #mr-1 li ul.mr-2, #mr-1 li ul.mr-2 li ul.mr-3 {
				margin: 0;
			}
			#mr-1 {
				padding: 1px 0;
				list-style: none;
				width: 100%;
				height: 21px;
			}
			#mr-1 li {
				padding: 0;
				float: left;
				position: relative;
			}
			#mr-1 li a:link, #mr-1 li a:visited, #mr-1 li:hover a, #mr-1 li a:hover, #mr-1 li a:active {
				padding: 4px 0;
				text-align: center;
				text-decoration: none;
				height:	13px;
			}
			#mr-1 li ul.mr-2 {
				padding: 1px 1px 0;
				list-style: none;
				display: none;
				width: 100px;
				position: absolute;
				top: 21px;
				left: -1px;
				border-top: none;
			}
			#mr-1 li, #mr-1 li a:link, #mr-1 li a:visited, #mr-1 li:hover a, #mr-1 li a:hover, #mr-1 li a:active, #mr-1 li:hover ul.mr-2, #mr-1 li ul.mr-2 li:hover ul.mr-3 {
				display: block;
			}
			#mr-1 li ul.mr-2 li {
				clear: left;
				width: 100px;
			}
			#mr-1 li ul.mr-2 li a:link, #mr-1 li ul.mr-2 li a:visited, #mr-1 li ul.mr-2 li:hover a, #mr-1 li ul.mr-2 li a:active, #mr-1 li ul.mr-2 li a:hover {
				clear: left;
				position: relative;
				padding: 4px 0;
				width: 100px;
				z-index: 1000;
			}
			#mr-1 li ul.mr-2 li ul.mr-3 {
				display: none;
				padding: 0;
				list-style: none;
				position: absolute;
				left: 100px;
				top: -2px;
				padding: 1px 1px 0 1px;
				z-index: 900;
			}
			#mr-1 li ul.mr-2 li a span, #mr-1 li ul.mr-2 li:hover a span, #mr-1 li ul.mr-2 li a:hover span {
				position: absolute;
				top: 0;
				left: 100px;
			}
			#mr-1 {
				padding: 0px 0px 3px;
				margin: 0;
				list-style: none;
				width: 20px;
				height: 1em;
				display: inline-block;
			}
			#searchBox {
				text-align: center;
				display: inline-block;
				position:absolute;
				z-index:2;
				padding-left:8px;
				padding-top:7px;
				margin-left:<?php echo $c_ha; ?>px ;
				margin-top:<?php echo $c_va; ?>px ;
			}
			#searchLinks {
				margin-bottom: 12px;
			}
			#searchInput, #searchButton {
				height: 34px;
				border: 1px solid #AAA;
				display: inline-block;
				vertical-align: middle;
			}
			#searchInput {
				font-size: 1.1em;
				font-family: HelveticaNeue-Light, HelveticaNeue, sans-serif;
				width: 250px;
				outline: none;
				color: #333;
				padding: 0 18px 0 12px;
				border-top-right-radius: 0px;
				border-bottom-right-radius: 0px;
				border-top-left-radius: 4px;
				border-bottom-left-radius: 4px;
			}
			#searchButton {
				font-size: .95em;
				color: #666;
				width: 96px;
				cursor: pointer;
				border-top-right-radius: 4px;
				border-bottom-right-radius: 4px;
				border-top-left-radius: 0px;
				border-bottom-left-radius: 0px;
				margin-left: -5px;
				box-shadow: inset 0px 1px 0px 0px #EEE;
				background: #f9f9f9; /* Incase browser doesn't understand gradient! */
				background: linear-gradient(#F9F9F9,#E9E9E9);
				font-weight: normal;
				font-style: normal;
				line-height: 19px;
				text-decoration: none;
				text-align: center;
				padding: 0px;
			}
			#searchButton:active {
				box-shadow: inset 0px 1px 0px 0px #BBB;
				padding: 1px 0 0 1px;
				position: relative;
				background: #EEE; /* Incase browser doesn't understand gradient! */
				background: linear-gradient(#CCC,#EEE);
				cursor: pointer;
			}
			#announce {
				position: relative;
				text-align: center;
				padding: 20px 0px;
				margin-left: auto;
				margin-right: auto;
				min-height: 120px;
				box-sizing: border-box;
			}
			#aChild {
				position: absolute;
				top: 50%;
				transform: translateY(-50%);
				margin-left: auto;
				margin-right: auto;
				width: 100%;
			}
			#bottomLinks {
				text-align: center;
				margin: 0 auto;
			}
			#bottomLinks a {
				margin: 0 16px;
			}
			#mr-1 li ul.mr-2 li:hover a span, #mr-1 li ul.mr-2 li a:hover span {
				color: <?php echo $altborder; ?>;
			}
			#mr-1 li ul.mr-2 {
				border: 1px solid <?php echo $altbg; ?>;
			}
			#mr-1 li ul.mr-2 li ul.mr-3 {
				border: 1px solid <?php echo $altbg; ?>;
				border-left: 1px solid <?php echo $altbg; ?>;
				background: <?php echo $altborder; ?>;
			}
			#mr-1 li ul.mr-2 {
				background: <?php echo $altborder; ?>;
			}
			#mr-1 li ul.mr-2 li ul.mr-3 li:hover a, #mr-1 li ul.mr-2 li ul.mr-3 li a:hover, #mr-1 li ul.mr-2 li ul.mr-3 li a:active {
				background: <?php echo $altbg; ?>;
			}
			#mr-1 li ul.mr-2 li a:link, #mr-1 li ul.mr-2 li a:visited, #mr-1 li ul.mr-2 li:hover a, #mr-1 li ul.mr-2 li a:active, #mr-1 li ul.mr-2 li a:hover {
				border: none;
				border-bottom: 1px solid <?php echo $altborder; ?>; }
			}
		</style>
	</head>

	<body onload="document.f.q.focus();">

		<div id='toolBar'>
			<?php
				echo "<a href='/create/",empty($login) ? "login'>Login" : "mydesigns'>My Designs","</a> |
					<a href='/preferences/?s=public>Preferences</a> |
					<a href='/gallery/'>Gallery</a> |
					<script>
					//<!--
					document.write('<a href=\"\" onclick=\"this.blur(); javascript:showDiv(); return false;\" id=\"sho\">Share</a> | ');
					//-->
					</script>
					<noscript><a href='/$thisurl/?st=share'>Share</a> | </noscript>";
				if ($blink) { echo "<a href='/faq/homepage' target='_blank'>Set Homepage</a>"; }
			?>
			
			<span id='hp' style='behavior:url(#default#homepage)'></span>
			<script>
			//<!--
				if (!hp.isHomePage('/<?php echo $thisurl; ?>/' )) {
					document.write("<a href=\"<?php echo $thisurl; ?>/\" onclick=\"style.behavior='url(#default#homepage)';setHomePage('https://awesomestart.com/public/<?php echo $thisurl; ?>/');\">Set Homepage!</a>");
				} else {
					document.write("Homepage Set");
				}
			//-->
			</script>
		</div>

		<!-- Wraps Mainbox and Shadow Together-->
		<div style='
			width: 592px;
			height: 266px;
			margin-left: auto;
			margin-right: auto;
			<?php if ($c_mbs) { echo "margin-top: 3px; margin-bottom:-3px;" ;}?>
			'>
			
			<!-- Mainbox, the one with Picture -->
			<div id="mainbox">

				<!-- Searchbox, with links and search -->
				<div id="searchbox">
					<?php

						// Create form for searching
						$searchName = 'q';
						if ($st=='i') {
							echo makeForm('duckduckgo.com/?ia=images');
						} else if ($st=='n') {
							echo makeForm('duckduckgo.com/?ia=news');
						} else if ($st=='m') {
							echo makeForm('maps.bing.com');
						} else if ($st=='v') {
							echo makeForm('duckduckgo.com/?ia=videos');
						} else if ($st=='a' || $st=='b' || $st=='sh') {
							$searchName = 'keyword';
							echo makeForm('amazon.com','get');
						} else if ($st=='s' || $st=='w') {
							$searchName = 'search';
							echo makeForm('wikipedia.org/w/','get');
						} else if ($st=='f') {
							echo makeForm('finance.search.yahoo.com/search;_ylt=A0SO8y.paAhZNxIAO4JXNyoA;_ylu=X3oDMTE0aDd2a2hsBGNvbG8DZ3ExBHBvcwMxBHZ0aWQDQjM2MjBfMQRzZWMDcGl2cw--','get');
						} else if ($st=='bl') {
							echo makeForm('tumblr.com/search/');
						} else {
							echo makeForm('duckduckgo.com','post',false);
						}

					?>

					<table class="mainpad">
						<tbody>
							<tr>
								<td nowrap="nowrap" valign="top" align="center" height="32" style="display: inline-block;">
									<table>
										<tbody>
											<tr>
												<td>
													<?php
														// Create search type links
														echo (empty($st) ? "<span>Web</span>" : "<a href='../public/$thisurl'>Web</a>");
													?>
												</td>
												<td width="14"></td>
												<td>
													<?php
														// Image Link
														if (empty($image)) {
															echo (($st=='i') ? "<span>Images</span>" : "<a href='?st=i'>Images</a>");
														} else {
															echo "<a href='$image'>Images</a>";
														}
													?>
												</td>
												<td width="14"></td>
												<td>
													<?php
														// News Link
														if (empty($news)) {
															if ($st!='n') { echo '<a href="?st=n">News</a>'; } else { echo "<span>News</span>"; }
														} else {
															echo "<a href='$news'>News</a>";
														}
													?>
												</td>
												<td width="14"></td>
												<td>
													<?php
														// Maps Link
														if (empty($maps)) {
															if ($st!='m') { echo "<a href='?st=m'>Maps</a>"; } else { echo "<span>Maps</span>"; }
														} else {
															echo "<a href='$maps'>Maps</a>";
														}
													?>
												</td>
												<td width="14"></td>
												<td>
													<?php
														// Email Link
														echo "<a href='",(empty($email) ? "https://icloud.com" : $email),"'>Email</a>";
													?>
												</td>
												<td width="9"></td>
												<td>
													<?php
														// Dropdown
														echo "
															<ul id='mr-1'>
																<li><a href='#'>&#9660;</a>
																<ul class='mr-2'>";

																	echo ddLister('a','Amazon');
																	echo ddLister('w','Wikipedia');
																	echo ddLister('v','Video');
																	echo ddLister('b','Books');
																	echo ddLister('s','Scholar');
																	echo ddLister('f','Finance');
																	echo ddLister('sh','Shopping');
																	echo ddLister('bl','Blogs');

															echo "
																</ul>
																</li>
															</ul>";
														?>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							<tr>
								<td valign="top" style="text-align:left">
									<input id="searchInput" type="text" name="<?php echo $searchName; ?>" tabindex="1" autocomplete="off" autocapitalize="off" autocorrect="off">
									<button id="searchButton" type="submit">Search</button>
								</td>
							</tr>
						</tbody>
					</table>
					</form>
				</div>

				<!-- Searchbox Background -->
				<div id="rounder"></div>

			</div>
			
			<?php
				if ($c_mbs) {
					echo '
						<!-- Shadowbox behind main div -->
						<div id="boxglow"></div>

						<!-- Shadowbox behind main div -->
						<div id="boxglow2"></div>

						<!-- Shadowbox behind main div -->
						<div id="boxglow3"></div>
					';
				}
			?>

		</div>

		<div id='announce'>
			<div id='aChild'>
				<?php include("announce.php"); ?>
			</div>
		</div>

		<div id='bottomLinks'>
			<?php

				// User customizable links
				foreach ($uL as $uL) {
					echo bottomLinker($uL['n'],$uL['u'],$uL['n_d'],$uL['u_d']);
				}

				// Additional user customizable links
				if (!empty($l5u) || !empty($l6u) || !empty($l7u) || !empty($l8u)) { echo "<br><br>"; }
				if (!empty($l5u)) { echo "<a href='$l5u'>$l5n</a>"; }
				if (!empty($l6u)) { echo "<a href='$l6u'>$l6n</a>"; }
				if (!empty($l7u)) { echo "<a href='$l7u'>$l7n</a>"; }
				if (!empty($l8u)) { echo "<a href='$l8u'>$l8n</a>";}

			?>
		</div>

	</body>
</html>
