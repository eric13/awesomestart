<?php

	$title = 'McFLY';

	$uL[1]['n_d'] = 'Official Site';
	$uL[1]['u_d'] = 'http://mcfly.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 13492528;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://mcfly-unofficial.proboards.com';

	$ext='png';
	$themeCss = '

		#searchBox {
			margin-left: 68px;
			margin-top: 164px;
			padding: 12px 20px 20px 20px;
			border: 2px solid #FFF;
			border-radius: 2px;
			background: rgba(15,149,150,.5);
		}
		#searchInput {
			width: 280px;
		}
		body {
			background:	#0f9596;
		}
		a:any-link {
			color: #adf2e9;
		}
		a:hover {
			color: #b0d8fa;
		}
		#searchInput {
			width: 290px;
		}
		ul.mr-2 {
			border: 1px solid #0f9596;
			background: #FFF;
		}
		#mr-1 li ul.mr-2 li {
			background: #0f9596;
			border-bottom: 1px solid #FFF;
		}

	';

	require 'start-framework.php';

?>
