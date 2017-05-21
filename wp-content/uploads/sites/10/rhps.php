<?php

	$title = 'Rocky Horror Picture Show';
	
	$uL[1]['n_d'] = 7;
	$uL[1]['u_d'] = 73629;

	$uL[2]['n_d'] = 4;
	$uL[2]['u_d'] = 292190628;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Rocky_Horror_Picture_Show';

	$themeCss = '

		#searchBox {
			margin-left: 276px;
			margin-top: 138px;
		}
		body {
			background:	#000;
		}
		a:any-link {
			color: #C11;
		}
		a:hover {
			color: #ff2814;
		}
		#searchInput {
			width: 200px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #8a232a;
		}
		#mr-1 li ul.mr-2 li {
			background:	#000;
			border-bottom: 1px solid #8a232a;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #111;
		}

	';

	require 'start-framework.php';

?>
