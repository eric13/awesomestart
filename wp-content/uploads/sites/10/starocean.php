<?php

	$title = 'Star Ocean';
	
	$uL[1]['n_d'] = 'Official Site';
	$uL[1]['u_d'] = 'http://na.square-enix.com/games/starocean';

	$uL[2]['n_d'] = 'IGN Page';
	$uL[2]['u_d'] = 'http://search.ign.com/products?query=star+ocean&amp;genNav=true&amp;channelID=70&amp;so=exact&amp;ns=true&amp;sort=date';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Star_Ocean';

	$themeCss = '

		#searchBox {
			margin-left: 30px;
			margin-top: 160px;
		}
		body {
			color: #FFFEEA;
			background:	#000;
		}
		a:any-link {
			color: #56B0B2;
		}
		a:hover {
			color: #63BBBD;
		}
		#searchInput {
			width: 268px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #FFF;
		}
		#mr-1 li ul.mr-2 li {
			background:	#0e1b1c;
			border-bottom: 1px solid #FFF;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #000;
		}

	';

	require 'start-framework.php';

?>
