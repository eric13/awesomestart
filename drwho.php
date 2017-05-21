<?php

	$title = 'Doctor Who';
	
	$uL[1]['n_d'] = 'Official Site';
	$uL[1]['u_d'] = 'http://BBC.co.uk';

	$uL[2]['n_d'] = 3;
	$uL[2]['u_d'] = 284192420;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Doctor_Who';

	$themeCss = '

		#searchBox {
			margin-left: 53px;
			margin-top: 38px;
		}
		body {
			color: #111;
			background:	#81a9dc;
		}
		a:any-link {
			color: #1e367a;
		}
		a:hover {
			color: #FFF;
		}
		#searchInput {
			width: 240px;
		}
		ul.mr-2 {
			background: #638ab9;
		}
		#mr-1 li ul.mr-2 li {
			background:	#97b8e3;
			border-bottom: 1px solid #638ab9;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #81a9dc;
		}

	';

	require 'start-framework.php';

?>
