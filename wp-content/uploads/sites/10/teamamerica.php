<?php

	$title = 'Team America';
	
	$uL[1]['n_d'] = 7;
	$uL[1]['u_d'] = 372588;

	$uL[2]['n_d'] = 4;
	$uL[2]['u_d'] = 212831808;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Team_America:_World_Police';

	$ext='png';
	$themeCss = '

		#searchBox {
			margin-left: 30px;
			margin-top: 152px;
			padding: 10px 18px 16px 18px;
			border: 3px solid #0e196c;
			background: rgba(0, 0, 0, .8);
			border-radius: 6px;
		}
		body {
			background:	#0e1a72;
			margin: 0;
		}
		a:any-link {
			color: #e92d2c;
			text-decoration: none;
		}
		a:hover {
			color: #5656f5;
		}
		#toolBar {
			margin-bottom: -14px;
		}
		#searchLinks a:any-link {
			color: #5656f5;
			text-decoration: none;
		}
		#searchLinks a:hover {
			color: #e92d2c;
		}
		#searchInput {
			width: 240px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #0e1a72;
		}
		#mr-1 li ul.mr-2 li {
			background:	#07080A;
			border-bottom: 1px solid #0e1a72;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #000;
		}

	';

	require 'start-framework.php';

?>
