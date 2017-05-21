<?php

	$title = 'Battle Royale';
	
	$uL[1]['n_d'] = 7;
	$uL[1]['u_d'] = 266308;

	$uL[2]['n_d'] = 4;
	$uL[2]['u_d'] = 502334437;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Battle_Royale';

	$ext='png';
	$themeCss = '

		#searchBox {
			margin-left: 66px;
			margin-top: 176px;
			border: 2px solid #ce0a0b;
			background:rgba(0,0,0,.6);
			padding: 8px 14px 14px 14px;
		}
		body {
			color: #EEE;
			background:	#0a0a0a;
		}
		a:any-link {
			color: #ce0a0b;
		}
		a:hover {
			color: #F00;
		}
		ul.mr-2 {
			background: #980303;
		}
		#mr-1 li ul.mr-2 li {
			background: #111;
			border-bottom: 1px solid #980303;
		}
		#mr-1 li ul.mr-2 li:hover {
			color: #000;
		}

	';

	require 'start-framework.php';

?>
