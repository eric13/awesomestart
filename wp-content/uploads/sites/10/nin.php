<?php

	$title = 'Nine Inch Nails';
	
	$uL[1]['n_d'] = 'NIN.com';
	$uL[1]['u_d'] = 'http://nin.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 107917;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'The NIN Hotline';
	$uL[4]['u_d'] = 'http://theninhotline.net';

	$themeCss = '

		#searchBox {
			margin-left: 76px;
			margin-top: 140px;
		}
		body {
			color: #CCC;
			background:	#191515 url(nin_bg1.jpg);
		}
		a:any-link {
			color: #964d3a;
		}
		a:hover {
			color: #585b77;
		}
		#searchInput {
			width: 304px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#110e0f;
			border-bottom: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #000;
		}

	';

	require 'start-framework.php';

?>
