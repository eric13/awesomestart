<?php

	$title = 'Good Charlotte';
	
	$uL[1]['n_d'] = 'GoodCharlotte.com';
	$uL[1]['u_d'] = 'http://GoodCharlotte.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 468788;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Facebook Page';
	$uL[4]['u_d'] = 'https://facebook.com/goodcharlotte';

	$ext='png';
	$themeCss = '

		#searchBox {
			margin-left: 52px;
			margin-top: 146px;
			color: #EEE;
		}
		body {
			color: #111;
			background: #39664d;
		}
		a:any-link {
			color: #46a8e5;
			text-decoration: none;
		}
		a:hover {
			color: #9DE0FF;
			text-decoration: underline;
		}
		#searchLinks a:any-link {
			color: #3784DA;
			text-decoration: none;
		}
		#searchLinks a:hover {
			color: #9DE0FF;
			text-decoration: underline;
		}
		#searchInput {
			width: 250px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #EEE;
		}
		#mr-1 li ul.mr-2 li {
			background: #08100d;
			border-bottom: 1px solid #EEE;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #000;
		}

	';

	require 'start-framework.php';

?>
