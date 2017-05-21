<?php

	$title = 'Fight Club';
	
	$uL[1]['n_d'] = 7;
	$uL[1]['u_d'] = 137523;

	$uL[2]['n_d'] = 4;
	$uL[2]['u_d'] = 290531770;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Fight_Club_(film)';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 140px;
			margin-top: 72px;
		}
		body {
			background: #000 url(fightclub_bg1.gif);
		}
		a:any-link {
			color: #d82a5c;
		}
		a:hover {
			color: #cd112b;
		}
		#searchLinks a:any-link {
			color: #000;
		}
		#searchLinks a:hover {
			color: #ffd9f3;
		}
		#searchInput {
			width: 190px;
		}
		ul.mr-2 {
			border: 1px solid #222;
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#d84983;
			border-bottom: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #000;
		}

	';

	require 'start-framework.php';

?>
