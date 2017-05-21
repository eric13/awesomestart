<?php

	$title = 'A Clockwork Orange';
	
	$uL[1]['n_d'] = 7;
	$uL[1]['u_d'] = 66921;

	$uL[2]['n_d'] = 4;
	$uL[2]['u_d'] = 422094672;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'A_Clockwork_Orange_(film)';

	$themeCss = '

		#searchBox {
			margin-left: 200px;
			margin-top: 140px;
			color: #FFF;
		}
		body {
			color: #111;
			background:	#FFF;
		}
		a:any-link {
			color: #EC6428;
		}
		a:hover {
			color: #EEB45C;
		}
		#searchInput {
			width: 256px;
		}
		ul.mr-2 {
			background: #d27e3e;
			border: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#111;
			border-bottom: 1px solid #d27e3e;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #000;
		}

	';

	require 'start-framework.php';

?>
