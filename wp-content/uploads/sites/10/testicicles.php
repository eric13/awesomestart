<?php

	$title = 'Test Icicles';
	
	$uL[1]['n_d'] = 'TestIcicles.com';
	$uL[1]['u_d'] = 'http://test-icicles.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 75799098;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Domino Records';
	$uL[4]['u_d'] = 'http://dominorecordco.com/site/index.php?page=artists&amp;artistID=210';

	$themeCss = '

		#searchBox {
			margin-left: 155px;
			margin-top: 110px;
		}
		body {
			color: #000;
			background:	#f6f6f6;
		}
		a:any-link {
			color: #09ec37;
		}
		a:hover {
			color: #ff01cb;
		}
		#searchInput {
			width: 250px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#FFF;
			border-bottom: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #EEE;
		}

	';

	require 'start-framework.php';

?>
