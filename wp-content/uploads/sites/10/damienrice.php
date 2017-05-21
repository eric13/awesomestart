<?php

	$title = 'Damien Rice';
	
	$uL[1]['n_d'] = 'damienrice.com';
	$uL[1]['u_d'] = 'http://damienrice.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 2249490;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'twitter';
	$uL[4]['u_d'] = 'https://twitter.com/DamienRice';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 64px;
			margin-top: 138px;
		}
		body {
			color: #F0E8D9;
			text-transform: lowercase;
			background:	#8B877E;
		}
		a:any-link {
			color: #F0E8D9;
		}
		a:hover {
			color: #171711;
		}
		#searchInput {
			width: 320px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#8B877E;
			border-bottom: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #f0e8d9;
		}

	';

	require 'start-framework.php';

?>
