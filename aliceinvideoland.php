<?php

	$title = 'Alice in Videoland';
	
	$uL[1]['n_d'] = 'Facebook Page';
	$uL[1]['u_d'] = 'https://facebook.com/aliceinvideolandofficial';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 95530076;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Alice_in_Videoland';

	$ext='png';
	$themeCss = '

		html {
			background: #02A;
		}
		body {
			background: linear-gradient(to bottom, #015 0%, #063be2 26%, #3074e2 38%, #2f71e3 44%, #02A 62%);
			color: #4BE;
			margin: 0;
		}
		a:any-link {
			color: #69F;
		}
		a:hover {
			color: #CCC;
		}
		#searchBox {
			margin-left: 26px;
			margin-top: 140px;
			background: rgba(220,220,220,.8);
			padding: 10px 14px 14px;
			color: #000;
		}
		#searchLinks a:any-link {
			color: #15D;
		}
		#searchLinks a:hover {
			color: #02C;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #DDD;
		}
		#mr-1 li ul.mr-2 li {
			background: #CCD;
			border-bottom: 1px solid #DDD;
		}

	';

	require 'start-framework.php';

?>
