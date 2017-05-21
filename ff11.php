<?php

	$title = 'Final Fantasy XI';
	
	$uL[1]['n_d'] = 'FFInsider.net';
	$uL[1]['u_d'] = 'http://ffinsider.net/ff11';

	$uL[2]['n_d'] = 'FFShrine.org';
	$uL[2]['u_d'] = 'http://ffshrine.org/ffxi/ffxi.php';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'FFWorld.co.uk';
	$uL[4]['u_d'] = 'http://finalfantasyworld.co.uk';

	$themeCss = '

		#searchBox {
			margin-left: 78px;
			margin-top: 186px
		}
		body {
			color: #000;
			background: #E4EAF8 url(ff11_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #4C7BD2;
		}
		a:hover {
			color: #0098D0;
		}
		ul.mr-2 {
			border: 1px solid #FFF;
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#e6edf9;
			border-bottom: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #e9f3fb;
		}

	';

	require 'start-framework.php';

?>
