<?php

	$title = 'Harry Potter';
	
	$uL[1]['n_d'] = 'Mugglenet.com';
	$uL[1]['u_d'] = 'http://mugglenet.com';

	$uL[2]['n_d'] = 5;
	$uL[2]['u_d'] = 658723564;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Harry_Potter';

	$themeCss = '

		#searchBox {
			margin-left: 196px;
			margin-top: 136px;
		}
		body {
			color: #FCFDFD;
			background:	#000;
		}
		a:any-link {
			color: #BDDFEB;
		}
		a:hover {
			color: #A5DBBD;
		}
		#searchInput {
			width: 250px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #38424b;
		}
		#mr-1 li ul.mr-2 li {
			background:	#000;
			border-bottom: 1px solid #38424b;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #111;
		}

	';

	require 'start-framework.php';

?>
