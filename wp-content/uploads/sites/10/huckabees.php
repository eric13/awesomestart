<?php

	$title = 'I Heart Huckabees';
	
	$uL[1]['n_d'] = 7;
	$uL[1]['u_d'] = 356721;

	$uL[2]['n_d'] = 4;
	$uL[2]['u_d'] = 271099205;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'I_Heart_Huckabees';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 120px;
			margin-top: 100px;
			color: #222;
		}
		body {
			color: #fceac2;
			background: #e59424 url(huckabees_bg1.gif);
		}
		a:any-link {
			color: #111;
		}
		a:hover {
			color: #aa4109;
		}
		#searchInput {
			width: 240px;
		}
		#searchLinks a:any-link {
			color: #639BCC;
		}
		#searchLinks a:hover {
			color: #000;
		}	
		ul.mr-2 {
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#f4f7f9;
			border-bottom: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #f4f7f9;
		}

	';

	require 'start-framework.php';

?>
