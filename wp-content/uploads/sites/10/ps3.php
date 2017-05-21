<?php

	$title = 'Playstation';
	
	$uL[1]['n_d'] = 'Official Site';
	$uL[1]['u_d'] = 'http://playstation.com';

	$uL[2]['n_d'] = 'PS3 @ IGN';
	$uL[2]['u_d'] = 'http://ps3.ign.com';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'LP Alien Isolation';
	$uL[4]['u_d'] = 'https://letsplayalienisolation.com';

	$themeCss = '

		#searchBox {
			margin-left: 46px;
			margin-top: 172px;
		}
		body {
			background:	#1a1a1e url(ps3_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #949aa7;
		}
		a:hover {
			color: #7093b6;
		}
		#searchInput {
			width: 260px;
		}
		ul.mr-2 {
			border: 1px solid #1a1a1e;
			background: #949aa7;
		}
		#mr-1 li ul.mr-2 li {
			background:	#18181c;
			border-bottom: 1px solid #949aa7;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #24252a;
		}

	';

	require 'start-framework.php';

?>
