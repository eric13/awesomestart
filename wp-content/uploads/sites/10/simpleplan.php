<?php

	$title = 'Simple Plan';
	
	$uL[1]['n_d'] = 'Official Site';
	$uL[1]['u_d'] = 'http://simpleplan.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 150861;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Facebook Page';
	$uL[4]['u_d'] = 'https://facebook.com/simpleplan';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 104px;
			margin-top: 177px;
		}
		body {
			color: #def4eb;
			background:	#0c144f;
		}
		a:any-link {
			color: #6774ce;
		}
		a:hover {
			color: #00d34a;
		}
		#searchInput {
			width: 326px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#2e3566;
			border-bottom: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #0c144f;
		}

	';

	require 'start-framework.php';

?>
