<?php

	$title = 'Family Guy';
	
	$uL[1]['n_d'] = 'Official Site';
	$uL[1]['u_d'] = 'http://familyguy.com';

	$uL[2]['n_d'] = 3;
	$uL[2]['u_d'] = 268501446;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://forum.familyguy.com';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 255px;
			margin-top: 144px;
		}
		body {
			color: #DEF;
			background:	#26292e;
		}
		a:any-link {
			color: #0065f9;
		}
		a:hover {
			color: #e00b24;
		}
		#searchInput {
			width: 220px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #235cb0;
		}
		#mr-1 li ul.mr-2 li {
			background:	#111;
			border-bottom: 1px solid #235cb0;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #000;
		}

	';

	require 'start-framework.php';

?>
