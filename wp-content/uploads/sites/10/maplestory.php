<?php

	$title = 'MapleStory';
	
	$uL[1]['n_d'] = 'English Site';
	$uL[1]['u_d'] = 'http://maplestory.nexon.net';

	$uL[2]['n_d'] = 'Korean Site';
	$uL[2]['u_d'] = 'http://maplestory.nexon.com';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'MapleStory';

	$themeCss = '

		#searchBox {
			margin-left: 144px;
			margin-top: 156px;
		}
		body {
			color: #000;
			background:	#f3f1db;
		}
		a:any-link {
			color: #a9080e;
		}
		a:hover {
			color: #222;
		}
		#searchInput {
			width: 210px;
		}
		ul.mr-2 {
			border: 1px solid #f3f1db;
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background: #f3f1db;
			border-bottom: 1px solid #000;
		}

	';

	require 'start-framework.php';

?>
