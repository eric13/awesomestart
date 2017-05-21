<?php

	$title = 'Motley Crue';
	
	$uL[1]['n_d'] = 'Official Site';
	$uL[1]['u_d'] = 'http://motley.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 284113;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Last.fm Page';
	$uL[4]['u_d'] = 'http://last.fm/music/Mötley+Crüe';

	$themeCss = '

		#searchBox {
			margin-left: 191px;
			margin-top: 170px;
			color: #FFF;
		}
		body {
			color: #181919;
			background:	#f5faff;
		}
		a:any-link {
			color: #d41d37;
		}
		a:hover {
			color: #565ba8;
		}
		#searchInput {
			width: 282px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #FFF;
		}
		#mr-1 li ul.mr-2 li {
			background:	#181a19;
			border-bottom: 1px solid #FFF;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #111;
		}

	';

	require 'start-framework.php';

?>
