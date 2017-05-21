<?php

	$title = 'Michael Jackson\'s Moonwalker';
	
	$uL[1]['n_d'] = 7;
	$uL[1]['u_d'] = 95655;

	$uL[2]['n_d'] = 'MJNewsOnline';
	$uL[2]['u_d'] = 'http://MJNewsOnline.com';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Wikipedia Page';
	$uL[4]['u_d'] = 'Moonwalker';

	$themeCss = '

		#searchBox {
			margin-left: 130px;
			margin-top: 122px;
		}
		body {
			background:	#000;
		}
		a:any-link {
			color: #296ffd;
		}
		a:hover {
			color: #3ad2fe;
		}
		#searchInput {
			width: 242px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #507dda;
		}
		#mr-1 li ul.mr-2 li {
			background:	#111;
			border-bottom: 1px solid #507dda;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #000;
		}

	';

	require 'start-framework.php';

?>
