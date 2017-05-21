<?php

	$title = 'Carlos Mencia';
	
	$uL[1]['n_d'] = 'Official Site';
	$uL[1]['u_d'] = 'http://carlosmencia.com';

	$uL[2]['n_d'] = 'Carlos Gear';
	$uL[2]['u_d'] = 'http://carlosmenciagear.com';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://carlosmencia.com/forums';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 54px;
			margin-top: 150px;
		}
		body {
			background:	#BF001D;
		}
		a:any-link {
			color: #FFF;
		}
		a:hover {
			color: #000;
		}
		#searchLinks a:any-link {
			color: #BF001D;
		}
		#searchLinks a:hover {
			color: #FFF;
		}
		#searchInput {
			width: 216px;
		}
		ul.mr-2 {
			background: #FFF;
			border: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#000;
			border-bottom: 1px solid #FFF;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #111;
		}

	';

	require 'start-framework.php';

?>
