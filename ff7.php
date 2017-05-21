<?php

	$title = 'Final Fantasy VII';
	
	$uL[1]['n_d'] = 'FFInsider.net';
	$uL[1]['u_d'] = 'http://ffinsider.net/ff7';

	$uL[2]['n_d'] = 'FFShrine.org';
	$uL[2]['u_d'] = 'http://ffshrine.org/ff7/ff7.php';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'FFWorld.co.uk';
	$uL[4]['u_d'] = 'http://finalfantasyworld.co.uk/ffvii/ffvii.php';

	$themeCss = '

		#searchBox {
			margin-left: 80px;
			margin-top: 178px
		}
		body {
			color: #000;
			background: #EBEDFC url(ff7_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #5F71CE;
		}
		a:hover {
			color: #3FA56D;
		}
		ul.mr-2 {
			border: 1px solid #FFF;
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#ebf0f9;
			border-bottom: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #ebfaf2;
		}

	';

	require 'start-framework.php';

?>
