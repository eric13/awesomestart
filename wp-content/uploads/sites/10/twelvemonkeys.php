<?php

	$title = 'Twelve Monkeys';
	
	$uL[1]['n_d'] = 7;
	$uL[1]['u_d'] = 114746;

	$uL[2]['n_d'] = 4;
	$uL[2]['u_d'] = 280241027;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Twelve_Monkeys';

	$ext='png';
	$themeCss = '

		#searchBox {
			margin-left: 190px;
			margin-top: 58px;
		}
		body {
			color: #CCC;
			background:	#0a0a0a;
		}
		a:any-link {
			color: #de1d24;
		}
		a:hover {
			color: #CCC;
		}
		#searchInput {
			width: 250px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #b20017;
		}
		#mr-1 li ul.mr-2 li {
			background:	#111;
			border-bottom: 1px solid #b20017;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #000;
		}

	';

	require 'start-framework.php';

?>
