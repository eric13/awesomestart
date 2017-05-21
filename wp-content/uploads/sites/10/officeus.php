<?php

	$title = 'The Office';
	
	$uL[1]['n_d'] = 7;
	$uL[1]['u_d'] = 386676;

	$uL[2]['n_d'] = 3;
	$uL[2]['u_d'] = 102772946;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'The_Office_(US)';

	$ext='png';
	$themeCss = '

		#searchBox {
			margin-left: 66px;
			margin-top: 190px;
			background: #f2e179;
			border: 2px solid #16C;
			border-radius: 12px;
			padding: 4px 8px 6px;
		}
		body {
			color: #111;
			background:	#FFF;
		}
		a:any-link {
			color: #16C;
		}
		a:hover {
			color: #fde13d;
		}
		#searchLinks a:hover {
			color: #000;
		}
		ul.mr-2 {
			border: 1px solid #2355d0;
			background: #2355d0;
		}
		#mr-1 li ul.mr-2 li {
			background:	#f9ef79;
			border-bottom: 2px solid #2355d0;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #fdf289;
		}

	';

	require 'start-framework.php';

?>
