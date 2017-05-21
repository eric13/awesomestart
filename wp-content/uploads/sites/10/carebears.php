<?php

	$title = 'Care Bears';
	
	$uL[1]['n_d'] = 'IMDB Page';
	$uL[1]['u_d'] = 'http://imdb.com/find?s=all&amp;q=carebears';

	$uL[2]['n_d'] = 4;
	$uL[2]['u_d'] = 407718491;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Care_Bears';

	$ext='png';
	$themeCss = '

		#searchBox {
			margin-left: 114px;
			margin-top: 112px;
			color: #333;
		}
		body {
			background:	#0088de;
		}
		a:any-link {
			color: #bce7f8;
		}
		a:hover {
			color: #ffafc1;
		}
		#searchLinks {
			margin-bottom: 6px;
		}
		#searchLinks a:any-link {
			color: #0977a7;
		}
		#searchLinks a:hover {
			color: #bce7f8;
		}
		#searchInput {
			width: 244px;
		}
		ul.mr-2 {
			background: #a3e1f8;
			border: 1px solid #2dbaf0;
		}
		#mr-1 li ul.mr-2 li {
			background:	#FFF;
			border-bottom: 1px solid #a3e1f8;
		}

	';

	require 'start-framework.php';

?>
