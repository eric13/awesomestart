<?php

	$title = 'Final Fantasy IX';
	
	$uL[1]['n_d'] = 'FFInsider.net';
	$uL[1]['u_d'] = 'http://ffinsider.net/ff9';

	$uL[2]['n_d'] = 'FFShrine.org';
	$uL[2]['u_d'] = 'http://ffshrine.org/ff9/ff9.php';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'FFWorld.co.uk';
	$uL[4]['u_d'] = 'http://finalfantasyworld.co.uk/ffix/ffix.php';

	$themeCss = '

		#searchBox {
			margin-left: 110px;
			margin-top: 174px
		}
		body {
			color: #DDD;
			background: #000 url(ff9_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #B3A470;
		}
		a:hover {
			color: #D4CA8A;
		}
		#searchInput {
			width: 288px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #555;
		}
		#mr-1 li ul.mr-2 li {
			background:	#000;
			border-bottom: 1px solid #555;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #111;
		}

	';

	require 'start-framework.php';

?>
