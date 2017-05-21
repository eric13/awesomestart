<?php

	$title = 'Hot Fuzz';
	
	$uL[1]['n_d'] = 7;
	$uL[1]['u_d'] = 425112;

	$uL[2]['n_d'] = 4;
	$uL[2]['u_d'] = 293787238;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Hot_Fuzz';

	$themeCss = '

		#searchBox {
			margin-left: 230px;
			margin-top: 110px;
		}
		body {
			color: #000;
			background:	#6996d4 url(hotfuzz_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #0046ba;
		}
		a:hover {
			color: #333;
		}
		#searchInput {
			width: 230px;
		}
		#searchLinks a:any-link {
			color: #1565d2;
		}
		#searchLinks a:hover {
			color: #333;
		}
		ul.mr-2 {
			border: 1px solid #222;
			background: #676e7a;
		}
		#mr-1 li ul.mr-2 li {
			background:	#f5f8f9;
			border-bottom: 1px solid #676e7a;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #ccd6eb;
		}


	';

	require 'start-framework.php';

?>
