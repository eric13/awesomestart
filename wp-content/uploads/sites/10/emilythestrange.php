<?php

	$title = 'Emily the Strange';
	
	$uL[1]['n_d'] = 'EmilyStrange.com';
	$uL[1]['u_d'] = 'http://EmilyStrange.com';

	$uL[2]['n_d'] = 1;
	$uL[2]['u_d'] = 0;

	$uL[3]['n_d'] = 'Hot Topic';
	$uL[3]['u_d'] = 'http://HotTopic.com';

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://emilystrange.net/beware/forum/login.cfm';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 205px;
			margin-top: 102px;
		}
		body {
			background:	#000;
		}
		a:any-link {
			color: #d02d34;
		}
		a:hover {
			color: #333;
		}
		#searchInput {
			width: 290px;
		}
		ul.mr-2 {
			background: #999;
		}
		#mr-1 li ul.mr-2 li {
			background: #000;
			border-bottom: 1px solid #999;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #111;
		}

	';

	require 'start-framework.php';

?>
