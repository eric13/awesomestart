<?php

	$title = 'Powerpuff Girls';
	
	$uL[1]['n_d'] = 'Cartoon Network';
	$uL[1]['u_d'] = 'http://cartoonnetwork.com/ppg/index.html';

	$uL[2]['n_d'] = 3;
	$uL[2]['u_d'] = 1084867672;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'The_Powerpuff_Girls';

	$themeCss = '

		#searchBox {
			margin-left: 252px;
			margin-top: 156px;
		}
		body {
			background:	#111;
		}
		a:any-link {
			color: #FAC;
		}
		a:hover {
			color: #7BE;
		}
		#searchLinks a:any-link {
			color: #222;
		}
		#searchLinks a:hover {
			color: #FFF;
		}
		#searchInput {
			width: 218px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #FFF;
		}
		#mr-1 li ul.mr-2 li {
			background:	#f18db7;
			border-bottom: 1px solid #FFF;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #111;
		}

	';

	require 'start-framework.php';

?>
