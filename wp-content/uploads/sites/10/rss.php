<?php

	$rss_url = $rss;

	// Makes the HTML
	function FormatRow($title, $description, $link, $pubDate) {
	 echo "<!-- RSS FEED ENTRY --><b>$pubDate</b><a href="$link">$title</a><br><table width=450 cellpadding=0 cellspacing=0><tr><td><div align=center>$description</div></td></tr></table>";
	}

	// Buffer the output
	ob_start();

	// Read the feed
	$rss_feed = file_get_contents($rss_url);

	// Replace a few things that may cause problems later
	$rss_feed = str_replace("<![CDATA[", "", $rss_feed);
	$rss_feed = str_replace("]]>", "", $rss_feed);
	$rss_feed = str_replace("\n", "", $rss_feed);

	// If there is an image node remove it. Aren't going to use it anyway and often contains a <title> and <link> that don't want to match on later.
	$rss_feed = preg_replace('#<image>(.*?)</image>#', '', $rss_feed, 1 );

	// Get the nodes interested in
	preg_match_all('#<title>(.*?)</title>#', $rss_feed, $title, PREG_SET_ORDER);
	preg_match_all('#<link>(.*?)</link>#', $rss_feed, $link, PREG_SET_ORDER);
	preg_match_all('#<description>(.*?)</description>#', $rss_feed, $description, PREG_SET_ORDER);
	preg_match_all('#<pubDate>(.*?)</pubDate>#', $rss_feed, $pubDate, PREG_SET_ORDER);

	// If there is not at least one title, then the feed was empty it happens sometimes, so lets be prepared and do something reasonable
	$thecount = count($title);

	if(count($title) <= 1) {
		$message = "The feed you set up did not contain any information.<br>
		Try setting up another feed in the <a href=../preferences/index.php?s=$thisurl>preferences</a>.<br><br>
		<a href=../preferences/resetrss.php?theme=$thisurl>Click Here</a> to disable this message.";
	} else {
		if ($thecount > 5){ $thecount=5;}
		// Well do up the top 3 entries from the feed
		for ($counter = 1; $counter <= $thecount; $counter++ ) {
			// We do a reality check to make sure there is something we can show
			if(!empty($title[$counter][1])) {
				// Make a good faith effort to make the title valid HTML
				$title[$counter][1] = str_replace("&", "&", $title[$counter][1]);
				$title[$counter][1] = str_replace("&apos;", "'", $title[$counter][1]);
				$title[$counter][1] = str_replace("Â","",$title[$counter][1]);
				$title[$counter][1] = str_replace("œ","",$title[$counter][1]);
				$title[$counter][1] = str_replace("€","",$title[$counter][1]);
				$title[$counter][1] = str_replace("â","",$title[$counter][1]);

				// For extra long titles
				$thetitle = $title[$counter][1];
				$compare1 = strlen($thetitle);
				preg_match('#^\s*(.{38,}?)\s+.*$#s', $thetitle, $match);
				$thetitle = $match[1];
				$compare2 = strlen($thetitle);
				if ($compare1 > $compare2 && $compare2 > 0) {
					$title[$counter][1] = "$thetitle...";
				}

				// Decode HTML entities in description
				$thedesc = $description[$counter][1];
				$thedesc = str_replace("nobr"," ",$thedesc);
				$thedesc = html_entity_decode($thedesc);
				$thedesc = str_replace("&#60;","<",$thedesc);
				$thedesc = str_replace("&#62;",">",$thedesc);
				$thedesc = str_replace("Â","",$thedesc);
				$thedesc = str_replace("œ","",$thedesc);
				$thedesc = str_replace("€","",$thedesc);
				$thedesc = str_replace("â","",$thedesc);
				$thedesc = strip_tags($thedesc);
				$description[$counter][1] = $thedesc;

				// For extra long descriptions
				$compare1 = strlen($thedesc);
				preg_match('#^\s*(.{200,}?)\s+.*$#s', $thedesc, $match);
				$thedesc = $match[1];
				$compare2 = strlen($thedesc);
				if ($compare1 > $compare2 && $compare2 > 0) {
					$description[$counter][1] = "$thedesc...";
				}
				$thedate = 	substr_replace($pubDate[$counter-1][1],"",50);
				$day = 		trim(substr($thedate, 5, 2), " ");
				$month = 	trim(substr($thedate, 7, 4), " ");
				if (strlen($day) == 2) {
					$hour = trim(substr($thedate, 17, 2), " ");
					$min = 	trim(substr($thedate, 20, 2), " ");
				} else {
					$hour = trim(substr($thedate, 16, 2), " ");
					$min = 	trim(substr($thedate, 19, 2), " ");
				}

				// For improperly formated date: Sat Oct 28 12:00 EDT 2006
				if ($day < 1 && $month > 0) {
					$day = trim(substr($thedate, 8, 2), " ");
					$month = trim(substr($thedate, 4, 4), " ");
					$hour = trim(substr($thedate, 11, 2), " ");
					$min =  trim(substr($thedate, 14, 2), " ");
				}

				// For 24 Hour Time
				if ($hour == 0) {
					$hour = 12;
					$ampm = 'AM';
				} else if ($hour >12) {
					$hour=$hour-12;
					$ampm = 'PM';
				} else {
					$ampm = 'AM';
				}

				// Abreviation to Full Month
				if ($month == "Jan") {
					$month = "January";
				} else if ($month == "Feb") {
					$month = "February";
				} else if ($month == "Mar") {
					$month = "March";
				} else if ($month == "Apr") {
					$month = "April";
				} else if ($month == "Jun") {
					$month = "June";
				} else if ($month == "Jul") {
					$month = "July";
				} else if ($month == "Aug") {
					$month = "August";
				} else if ($month == "Sep") {
					$month = "September";
				} else if ($month == "Oct") {
					$month = "October";
				} else if ($month == "Nov") {
					$month = "November";
				} else if ($month == "Dec") {
					$month = "December";
				} else {
					$month = "";
				}

				if ($month && $day && $hour && $min){
					$pubDate[$counter-1][1] = "$month $day, $hour:$min $ampm - ";
				} else {
					$pubDate[$counter-1][1] = "";
				}

				// Make a  page bit from data retrieved from the RSS feed using FormatRow
				$row = FormatRow($title[$counter][1],$description[$counter][1],$link[$counter][1],$pubDate[$counter-1][1]);

				// Output the new page bit
				$feeds_ar[$counter-1] = $row;
			}
		}
	}

	ob_end_flush(); // Send output to the browser

	if ($thecount < 5) { $thecount--;}
	?>

<script>
<!-- bunch of basic js funcs //-->
function gbi(id) { return document.getElementById(id); }
function isnumeric(n) { numeric = /^\d+$/g; if (numeric.test(n)) return true; return false; }
function togglediv(divid) { var e=gbi(divid); if (e) { if (e.style.display=='block') { e.style.display='none'; return false; } else { e.style.display='block'; return true; } } }
function switchdiv(divid,divid2) { var e=gbi(divid); if (e) if (f=gbi(divid2)) { if (e.style.display=='block') { e.style.display='none'; f.style.display='block'; return false; } else { e.style.display='block'; f.style.display='none'; return true; } } }
function setdivdisplay(divid,v) { var e=gbi(divid); if (e) e.style.display=v; }
function setdivvis(divid,v) { var e=gbi(divid); if (e) e.style.visibility=v; }
// Current Feed Index
var curfeed=0;
// Total number of feeds (js) must match php counterpart
var totalfeeds=<?php print $thecount; ?>;


function updatecurrentfeed() {
	for (i=0;i<totalfeeds;i++) {
		if (i==curfeed)
			setdivdisplay('feed'+i,'block');
		else
			setdivdisplay('feed'+i,'none');
	}
}
function browse(n) {
	curfeed+=n;
	if (curfeed==totalfeeds)
		curfeed=0;
	if (curfeed<0)
		curfeed=totalfeeds-1;
	updatecurrentfeed();
}
</script>

<table cellpadding=0 cellspacing=0 width=475 height="105" align="center">
<tbody>
<tr>
<td height=70>
<div align=center>
<?php

	$totalfeeds=$thecount; //(must match 'totalfeeds' var in js)

	//Populate Array $feed_ar
	for ($i=0;$i<$totalfeeds;$i++) {
		echo "<div id=\"feed$i\" style=\"display:";
		if ($i==0) { echo "block"; } else { echo "none"; } echo ";\">";
		print $feeds_ar[$i]; echo "</div>";}
	echo $message;
	?>
</div>
</td>
</tr>
<tr>
<td height="5"></td>
</tr>
<tr>
<td>
<div align=center>
<?php
	if($rss=="http://www.dictionary.com/wordoftheday/wotd.rss" || $message){
		echo "<div style='display: none;'>";} else {echo "<div>";
		}
	?>
<a href="javascript:browse(-1);">&lt;&lt;</a>
Feed Navigation
<a href="javascript:browse(1);">&gt;&gt;</a>
</div>
</div>
</td>
</tr>
</tbody>
</table>
