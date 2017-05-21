<?php

	$title = 'Final Fantasy IV';
	
	$uL[1]['n_d'] = 'FFInsider.net';
	$uL[1]['u_d'] = 'http://ffinsider.net/ff4';

	$uL[2]['n_d'] = 'FFShrine.org';
	$uL[2]['u_d'] = 'http://ffshrine.org/ff4/ff4.php';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'FFWorld.co.uk';
	$uL[4]['u_d'] = 'http://finalfantasyworld.co.uk';

	$themeCss = '

		#searchBox {
			margin-left: 80px;
			margin-top: 178px
		}
		body {
			color: #000;
			background: #DFE5F3 url(ff4_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #5065D2;
		}
		a:hover {
			color: #0029FF;
		}
		ul.mr-2 {
			border: 1px solid #FFF;
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#e3e8f5;
			border-bottom: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #d9deec;
		}

	';

	require 'start-framework.php';

?>
