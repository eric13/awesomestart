<?php

	$title = 'Kingdom Hearts';
	
	$uL[1]['n_d'] = 'Official Site';
	$uL[1]['u_d'] = 'http://kingdom-hearts.com';

	$uL[2]['n_d'] = 'KHInsider';
	$uL[2]['u_d'] = 'http://khinsider.com';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://forums.khinsider.com';

	$themeCss = '

		#searchBox {
			margin-left: 78px;
			margin-top: 300px;
		}
		body {
			background:	#000;
		}
		a:any-link {
			color: #6785f3;
		}
		a:hover {
			color: #69c5e3;
		}
		#main {
			height: 360px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #DDD;
		}
		#mr-1 li ul.mr-2 li {
			background:	#000;
			border-bottom: 1px solid #DDD;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #111;
		}

	';

	require 'start-framework.php';

?>
