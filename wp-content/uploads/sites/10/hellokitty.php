<?php

	$title = 'Hello Kitty';

	$uL[1]['n_d'] = 'Sanrio Website';
	$uL[1]['u_d'] = 'https://sanrio.com';

	$uL[2]['n_d'] = 'SanrioTown';
	$uL[2]['u_d'] = 'http://sanriotown.com';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Hello_Kitty';

	$ext='png';
	$themeCss = '

		#searchBox {
			margin-left: 45px;
			margin-top: 145px;
			text-align: left;
		}
		#searchInput {
			width: 260px;
		}
		body {
			background:	#f682c0 url(hellokitty_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #d4317a;
		}
		a:hover {
			color: #222;
		}
		ul.mr-2 {
			background: #333;
			border: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#f38dc5;
			border-bottom: #333;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #FFF;
		}

	';

	require 'start-framework.php';

?>
