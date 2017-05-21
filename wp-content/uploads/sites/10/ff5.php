<?php

	$title = 'Final Fantasy V';
	
	$uL[1]['n_d'] = 'FFInsider.net';
	$uL[1]['u_d'] = 'http://ffinsider.net';

	$uL[2]['n_d'] = 'FFShrine.org';
	$uL[2]['u_d'] = 'http://ffshrine.org/ff5/ff5.php';

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
			background: #E9E3F8 url(ff5_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #8F7CE0;
		}
		a:hover {
			color: #50F;
		}
		ul.mr-2 {
			border: 1px solid #FFF;
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#ebe8f9;
			border-bottom: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #f2f8fe;
		}

	';

	require 'start-framework.php';

?>
