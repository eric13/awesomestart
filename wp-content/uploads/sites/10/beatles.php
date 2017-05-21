<?php

	$title = 'The Beatles';
	
	$uL[1]['n_d'] = 'Beatles.com';
	$uL[1]['u_d'] = 'http://beatles.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 136975;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://thebeatlesforum.com';

	$ext='png';
	$themeCss = '

		#searchBox {
			margin-left: 78px;
			margin-top: 170px;
		}
		body {
			color: #000;
			background:	#DF0031;
		}
		a:any-link {
			color: #DF0031;
			background: #F0E001;
			padding: 1px;
		}
		a:hover {
			color: #FF9900;
			background: #F0E001;
		}
		#searchLinks a:any-link {
			background: none;
		}
		ul.mr-2 {
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#F1DB3D;
			border-bottom: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #DF0031;
		}

	';

	require 'start-framework.php';

?>
