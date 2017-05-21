<?php

function grabCookie($key) {
	return isset($_COOKIE[$key]) ? $_COOKIE[$key] : NULL;
}

function seeBlank($key) {
	$pos = strpos($key , ':');
	$key = !$pos ? "http://".strtolower($key) : strtolower($key);
	return ($key!='http://' && $key!='https://') ? $key : '';
}

function rollMaker($link,$name,$roll,$extraPad = FALSE) {
	$imageName = strtolower($name);
	$return ="<div class='roll'";
	$roll = "roll$roll";
	if ($extraPad) { $return .= " style='padding:0px 2px 2px 2px;'"; }
	$return .="><a href='$link' onmouseover=\"document.$roll.src='/images/s_".$imageName."2.png'\"
	onmouseout=\"document.$roll.src='/images/s_$imageName.png'\" target='_blank'>
	<img src='/images/s_$imageName.png' name='$roll' alt='$name'></a></div>";

	return $return;
}

$skin = grabCookie('skin');
$image = grabCookie('image');
$news = grabCookie('news');
$maps = grabCookie('maps');
$email = grabCookie('email');
$rss = grabCookie('rss');
$link1name = grabCookie('link1name');
$link1url = grabCookie('link1url');
$link2name = grabCookie('link2name');
$link2url = grabCookie('link2url');
$link3name = grabCookie('link3name');
$link3url = grabCookie('link3url');
$link4name = grabCookie('link4name');
$link4url = grabCookie('link4url');
$l5n = grabCookie('l5n');
$l5u = grabCookie('l5u');
$l6n = grabCookie('l6n');
$l6u = grabCookie('l6u');
$l7n = grabCookie('l7n');
$l7u = grabCookie('l7u');
$l8n = grabCookie('l8n');
$l8u = grabCookie('l8u');
$login = grabCookie('login');

$st = isset($_GET['st']) ? $_GET['st'] : NULL;

$link1url = seeBlank($link1url);
$link2url = seeBlank($link2url);
$link3url = seeBlank($link3url);
$link4url = seeBlank($link4url);
$l5u = seeBlank($l5u);
$l6u = seeBlank($l6u);
$l7u = seeBlank($l7u);
$l8u = seeBlank($l8u);

// The search technology variable is used for ease of encoding, then reset.
$share = ($st=="share" ? TRUE : FALSE);

$ip = $_SERVER['REMOTE_ADDR'];
$uagent = strtoupper($_SERVER['HTTP_USER_AGENT']);
$blink = ereg('MSIE ([0-9].[0-9]{1,2})',$uagent) ? FALSE : TRUE;
$searchbot = stristr($uagent,'SEARCHBOT') ? TRUE : FALSE;

$urlSafe = strtolower(str_replace(" ", "%20", "$title"));
$tencoded = str_replace(" ", "+", $title);
$tencoded = str_replace("'", "%27", $tencoded);
$tencoded = str_replace(".", "%2E", $tencoded);
$sUrl = "http%3A%2F%2Fawesomestart.com%2F$thisurl%2F";
$bodTxt = "A+$tencoded+themed+search+homepage.+Everything+on+it+is+customizable%2E";

$linkf = "https://facebook.com/share.php?u=$sUrl&amp;t=$tencoded+Startpage";
$linkt = "https://twitter.com/home?status=Check+out+this+$tencoded+startpage%3A+$sUrl";
$linkdigg = "http://digg.com/submit?url=$sUrl&amp;title=$tencoded+Startpage&amp;bodytext=$bodTxt";
$linkd = "https://del.icio.us/post?url=$sUrl&amp;title=$tencoded+Startpage&amp;notes=$bodTxt";
$links = "http://stumbleupon.com/submit?url=$sUrl&amp;title=$tencoded+Startpage";
$linkr = "https://reddit.com/submit?url=$sUrl&amp;title=Customizable+$tencoded+search+Startpage";
$linklfm = "https://last.fm/search?q=$tencoded";
$linkm = "https://myspace.com/Modules/PostTo/Pages/?u=$sUrl&amp;t=$tencoded&amp;c=%3Ca+href%3D%22http%3A%2F%2Fawesomestart.com%2F$thisurl%22%3E%3Cimg%20src%3D%22http%3A%2F%2Fawesomestart.com%2Fimages%2F_$thisurl.gif%22%3E%3Cbr%3E$tencoded%3C%2Fa%3E";
?>

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

<div id='hideshow' <?php if (!$share) { echo "style='visibility:hidden'"; } ?>>
	<div class='popup_block'>
		<div class='popup'>

			<!-- This fixes a text color issues caused by javascript in IE.  -->
			<table class='ietable'><tr><td>These links open in new windows with the theme information already filled in.</td></tr></table>
			<div style='height:10px;'> </div>

			<?php

			echo rollMaker($linkf,'Facebook','',true);
			echo rollMaker($linkt,'Twitter',2,true);
			echo rollMaker($linkm,'MySpace',3);
			echo rollMaker($linkdigg,'Digg',4);
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

			echo "</textarea><div id='closeMe'><a href='",$share ? "../$thisurl/" : "javascript:hideDiv()","'>Close</a></div>";

			?>
			
		</div>
	</div>
</div>

