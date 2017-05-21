<?php

	$title = 'The Matrix';
	
	$uL[1]['n_d'] = 7;
	$uL[1]['u_d'] = 133093;

	$uL[2]['n_d'] = 5;
	$uL[2]['u_d'] = 585557627;
	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'The_Matrix_series';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 74px;
			margin-top: 90px;
		}
		body {
			color: #CCC;
			background: #000 url(matrix_bg1.gif);
		}
		a:any-link {
			color: #3C3;
			background: #000;
			padding: 2px;
		}
		a:hover {
			color: #9F9;
			background: #000;
		}
		#announce {
			background: rgba(0,0,0,.2)
		}
		ul.mr-2 {
			background: #666;
		}
		#mr-1 li ul.mr-2 li {
			background:	#000;
			border-bottom: 1px solid #666;
		}
		#mr-1 li ul.mr-2 li:hover {
			background:	#111;
		}

	';

	require 'start-framework.php';

?>
