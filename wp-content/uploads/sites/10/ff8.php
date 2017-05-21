<?php

	$title = 'Final Fantasy VIII';
	
	$uL[1]['n_d'] = 'FFInsider.net';
	$uL[1]['u_d'] = 'http://ffinsider.net/ff8';

	$uL[2]['n_d'] = 'FFShrine.org';
	$uL[2]['u_d'] = 'http://ffshrine.org/ff8/ff8.php';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'FFWorld.co.uk';
	$uL[4]['u_d'] = 'http://finalfantasyworld.co.uk/ffviii/ffviii.php';

	$themeCss = '

		#searchBox {
			margin-left: 80px;
			margin-top: 178px
		}
		body {
			color: #000;
			background: #FFEFE8 url(ff8_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #D03D2E;
		}
		a:hover {
			color: #AD1414;
		}
		ul.mr-2 {
			border: 1px solid #FFF;
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#fff1e8;
			border-bottom: 1px solid #000;
		}

	';

	require 'start-framework.php';

?>
