<?php

	if (!isset($skin)) {
		echo "<b>CUSTOMIZE ::</b> <a href='/preferences/?s=$thisurl'>Click Here</a> to customize the links on this page.<br>What's a Start Page?? Here's a <a href='/faq'>full description</a>.";
	} else if ($rss && $reset !=1) {
		include('rss.php');
	} else if ($reset==1) {
		echo "Your RSS feed has been disabled. You can turn it back on in the <a href=/preferences/?s=$thisurl>preferences</a>.";
	} else {
		// Pick one at random!
		$r = rand(1, 13);
		switch ($r) {
			case 1:
				echo "Tired of your current startpage theme?<br>Flip through the <a href='/gallery'>gallery</a> for a new one!";
				break;
			case 2:
				echo "450 themes and counting.<br>Try browsing the <a href='/gallery'>gallery</a> for a new one!";
				break;
			case 3:
				echo "Want more than four custom links? Go to the<br><a href='/preferences'>preferences</a> page and click \"Add Links\" for more.";
				break;
			case 4:
				echo "Have the latest news delivered to your startpage.<br>Just click \"RSS Feeds\" on the <a href='/preferences'>preferences page</a> to set it up.";
				break;
			case 5:
				echo "Like movies? Check out this podcast.<br><a href='https://doublefeature.fm'>Double Feature</a> pairs two films every week.";
				break;
			case 6:
				echo "See the most recent themes from every<br>category on the <a href='/'>main page</a>.";
				break;
			case 7:
				echo "All pages delivered to you ad free :)<br>Help us out by <a href='/promote'>promoting</a> AwesomeStart.";
				break;
			case 8:
				echo "Have feedback on improving the site?<br>We want to hear your ideas. <a href='/contact'>Contact</a> us.";
				break;
			case 9:
				echo "Podcast tip: there's a free show called<br><a href='https://doublefeature.fm'>Double Feature</a> you should check out.";
				break;
			case 10:
				echo "Make your own theme! Try out the <br>super easy AwesomeStart <a href='/create'>theme creator</a>.";
				break;
			case 11:
				echo "<a href='../preferences'ß>Replace these messages</a> with an RSS feed!<br>Just click \"RSS Feeds\" on the <a href='/preferences'>preferences page</a>.";
				break;
			case 12:
				echo "Looking for a theme we don't have?<br>Try <a href='/create'>making one</a> using the create page. It's easy!";
				break;
			case 13:
				echo "There's now a pop up \"Share\" feature in the upper<br>right hand corner. Try it out, it's fun.";
				break;
		}
	}	
?>
