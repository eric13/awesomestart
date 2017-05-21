<?php

	$title = 'Fire Emblem';
	
	$uL[1]['n_d'] = 'Fire-Emblem.com';
	$uL[1]['u_d'] = 'http://fire-emblem.com';

	$uL[2]['n_d'] = 'FireEmblemWorld';
	$uL[2]['u_d'] = 'http://fireemblemworld.com';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Fire_Emblem';

	$themeCss = '

		#searchBox {
			margin-left: 154px;
			margin-top: 140px;
		}
		body {
			color: #DDD;
			background:	#000;
		}
		a:any-link {
			color: #7E84C5;
		}
		a:hover {
			color: #525CC4;
		}
		#searchInput {
			width: 270px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #362619;
		}
		#mr-1 li ul.mr-2 li {
			background:	#000;
			border-bottom: 1px solid #362619;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #130c05;
		}

	';

	require 'start-framework.php';

?>
