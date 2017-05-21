<?php

	$title = 'Sin City';
	
	$uL[1]['n_d'] = 7;
	$uL[1]['u_d'] = 401792;

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 935214487;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Sin_city';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 80px;
			margin-top: 162px;
		}
		body {
			background: #000 url(sincity_bg1.gif);
		}
		a:any-link {
			color: #e01113;
			background: #000;
			padding: 2px;
		}
		a:hover {
			color: #FFF;
			background: #000;
			padding: 2px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #FFF;
		}
		#mr-1 li ul.mr-2 li {
			background:	#000;
			border-bottom: 1px solid #FFF;
		}

	';

	require 'start-framework.php';

?>
