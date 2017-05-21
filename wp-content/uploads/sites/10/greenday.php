<?php

	$title = 'Green Day';
	
	$uL[1]['n_d'] = 'GreenDay.com';
	$uL[1]['u_d'] = 'http://greenday.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 954266;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://geekstinkbreath.net/board';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 68px;
			margin-top: 140px;
		}
		body {
			background:	#000;
		}
		a:any-link {
			color: #BE0020;
		}
		a:hover {
			color: #CD0017;
		}
		#searchInput {
			width: 290px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #FFF;
		}
		#mr-1 li ul.mr-2 li {
			background:	#000;
			border-bottom: 1px solid #FFF;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #111;
		}

	';

	require 'start-framework.php';

?>
