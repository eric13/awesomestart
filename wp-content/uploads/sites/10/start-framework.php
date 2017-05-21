<?php

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

	// Cookies
	$skin = grabCookie('skin');
	$login = grabCookie('login');
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
	$uL[3]['u'] = grabCookie('link3url');
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

	$uL[1]['u'] = seeBlank($uL[1]['u']);
	$uL[2]['u'] = seeBlank($uL[2]['u']);
	$uL[3]['u'] = seeBlank($uL[3]['u']);
	$uL[4]['u'] = seeBlank($uL[4]['u']);
	$l5u = seeBlank($l5u);
	$l6u = seeBlank($l6u);
	$l7u = seeBlank($l7u);
	$l8u = seeBlank($l8u);

	// Who's using the page?
	$ip = $_SERVER['REMOTE_ADDR'];
	$uagent = strtoupper($_SERVER['HTTP_USER_AGENT']);
	$blink = ereg('MSIE ([0-9].[0-9]{1,2})',$uagent) ? FALSE : TRUE;
	$searchbot = stristr($uagent,'SEARCHBOT') ? TRUE : FALSE;

	// Encode variations of theme title for use in links
	$tencoded = str_replace(" ", "+", $title);
	$tencoded = str_replace("'", "%27", $tencoded);
	$tencoded = str_replace(".", "%2E", $tencoded);
	$sUrl = "http%3A%2F%2Fawesomestart.com%2F$thisurl%2F";
	$bodTxt = "A+$tencoded+themed+search+homepage.+Everything+on+it+is+customizable%2E";

	// The share links
	$linkf = "https://facebook.com/share.php?u=$sUrl&amp;t=$tencoded+Startpage";
	$linkt = "https://twitter.com/home?status=Check+out+this+$tencoded+startpage%3A+$sUrl";
	$linkdigg = "http://digg.com/submit?url=$sUrl&amp;title=$tencoded+Startpage&amp;bodytext=$bodTxt";
	$linkd = "https://del.icio.us/post?url=$sUrl&amp;title=$tencoded+Startpage&amp;notes=$bodTxt";
	$links = "http://stumbleupon.com/submit?url=$sUrl&amp;title=$tencoded+Startpage";
	$linkr = "https://reddit.com/submit?url=$sUrl&amp;title=Customizable+$tencoded+search+Startpage";
	$linklfm = "https://last.fm/search?q=$tencoded";
	$linkm = "https://myspace.com/Modules/PostTo/Pages/?u=$sUrl&amp;t=$tencoded&amp;c=%3Ca+href%3D%22http%3A%2F%2Fawesomestart.com%2F$thisurl%22%3E%3Cimg%20src%3D%22http%3A%2F%2Fawesomestart.com%2Fimages%2F_$thisurl.gif%22%3E%3Cbr%3E$tencoded%3C%2Fa%3E";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?> Start Page</title>
		<meta name="description" content="The perfect homepage for <?php echo $title; ?> fans. A <?php echo $title; ?> startpage with your own links and a private search engine.">
		<meta name="keywords" content="<?php echo $thisurl.", ".$title; ?>, search, startpage, start page, homepage,  home page, privacy, private search engine, duck duck go, customizable">
		<link rel="image_src" href="https://awesomestart.com/images/_<?php echo $thisurl; ?>.gif">
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
			body {
				color: #FFF;
				font-size: 14px;
				font-family: HelveticaNeue, 'Helvetica Neue', Helvetica, Arial, sans-serif;
				position: relative;
				margin: 1px 5px 0px;
			}
			a:any-link {
				font-weight: bold;
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
				width: 350px;
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
				width: 600px;
				margin: 0 auto;
			}
			#bottomLinks a {
				margin: 0 16px;
			}
			<?php echo $themeCss; ?>
		</style>
	</head>

	<body onload="document.f.q.focus();">

		<div id='toolBar'>
			<?php
				echo "<a href='/create/",empty($login) ? "login'>Login" : "mydesigns'>My Designs","</a> |
					<a href='/preferences/?s=$thisurl'>Preferences</a> |
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
					document.write("<a href=\"/<?php echo $thisurl; ?>/\" onclick=\"style.behavior='url(#default#homepage)';setHomePage('https://awesomestart.com/<?php echo $thisurl; ?>/');\">Set Homepage!</a>");
				} else {
					document.write("Homepage Set");
				}
			//-->
			</script>
		</div>

		<div id='hideshow' <?php if ($st!="share") { echo "style='visibility:hidden'"; } ?>>
			<div class='popup_block'>
				<div class='popup'>

					<p>These links open in new windows with the theme information already filled in.</p>

					<?php

					echo rollMaker($linkf,'Facebook','',true);
					echo rollMaker($linkt,'Twitter',2,true);
					echo rollMaker($linkm,'MySpace',3);
					echo rollMaker($linkm,'Digg',4);
					echo rollMaker($linkd,'Delicious',5);
					echo rollMaker($links,'Stumble',6);
					echo rollMaker($linkr,'Reddit',7);
					echo rollMaker('http://livejournal.com','LiveJournal',9);
					echo rollMaker($linklfm,'LastFM',10,true);
					echo rollMaker('https://hello.com/Main#Promote','Orkut',11,true);

					echo "
					
					<div style='clear:both;'> </div>
					<div style='height:8px;'> </div>

					<script>function selectall(field) { field.focus(); field.select(); }</script>

					You can also use this HTML code:<br>
					<textarea id='shareTextarea' onclick='selectall(this)' cols='25' rows='3' readonly='readonly'>";

					// Presentable for searchbots!
					echo $searchbot ? "The perfect homepage for fans of $title. A customizable startpage with your own links and a search search on it." : "&lt;a href=\"https://awesomestart.com/$thisurl\"&gt;&lt;img src=\"https://awesomestart.com/images/_$thisurl.gif\" alt=\"$title Startpage\"&gt;&lt;/a&gt;&lt;br&gt;&lt;a href=\"https://awesomestart.com/$thisurl\"&gt;$title&lt;/a&gt;";

					echo "</textarea><div id='closeMe'>
						<script>
						//<!--
						document.write('<span id=\"hideShare\" onclick=\"this.blur(); javascript:hideDiv();\">Close</span>');
						//-->
						</script>
						<noscript><a href='/$thisurl/'>Close</a></noscript>
						</div>";

					?>
					
				</div>
			</div>
		</div>

		<div id="main">

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

				echo "<div id='searchLinks'>";

					// Create search type links
					echo (empty($st) ? "<span>Web</span>" : "<a href='../$thisurl'>Web</a>");

					// Defaults
					if ($image=='https://duckduckgo.com/images?ia=images') { $image = NULL; }
					if ($news=='https://news.bing.com') { $news = NULL; }
					if ($maps=='https://bing.com/maps') { $maps = NULL; }

					// Image Link
					if (empty($image)) {
						echo (($st=='i') ? "<span>Images</span>" : "<a href='?st=i'>Images</a>");
					} else {
						echo "<a href='$image'>Images</a>";
					}

					// News Link
					if (empty($news)) {
						if ($st!='n') { echo '<a href="?st=n">News</a>'; } else { echo "<span>News</span>"; }
					} else {
						echo "<a href='$news'>News</a>";
					}

					// Maps Link
					if (empty($maps)) {
						if ($st!='m') { echo "<a href='?st=m'>Maps</a>"; } else { echo "<span>Maps</span>"; }
					} else {
						echo "<a href='$maps'>Maps</a>";
					}

					// Email Link
					echo "<a href='",(empty($email) ? "https://icloud.com" : $email),"'>Email</a>";

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
						</ul>
					</div>";
				?>

				<input id="searchInput" type="text" name="<?php echo $searchName; ?>" tabindex="1" autocomplete="off" autocapitalize="off" autocorrect="off">
				<button id="searchButton" type="submit">Search</button>

			</form>

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
