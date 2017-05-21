<?php

	$title = 'Grand Theft Auto';
	
	$uL[1]['n_d'] = 'Rockstar Games';
	$uL[1]['u_d'] = 'http://rockstargames.com';

	$uL[2]['n_d'] = 'GTAGaming.com';
	$uL[2]['u_d'] = 'http://GTAGaming.com';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://gtagaming.com/forums';

	$themeCss = '

		#searchBox {
			margin-left: 118px;
			margin-top: 177px;
			color: #222;
		}
		body {
			color: #d7dcef;
			background:	#2c2c2c;
		}
		#searchLinks a:any-link {
			color: #36408c;
		}
		#searchLinks a:hover {
			color: #196e0e;
		}
		a:any-link {
			color: #6b77ce;
		}
		a:hover {
			color: #86c980;
		}
		#searchInput {
			width: 270px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #222;
		}
		#mr-1 li ul.mr-2 li {
			background:	#adb5bf;
			border-bottom: 1px solid #222;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #9a99ae;
		}

	';

	require 'start-framework.php';

?>
