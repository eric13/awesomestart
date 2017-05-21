<?php

	$title = 'Korn';
	
	$uL[1]['n_d'] = 'Ko&#1071;n.com';
	$uL[1]['u_d'] = 'http://korn.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 466532;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Forum';
	$uL[4]['u_d'] = 'http://korn.bhlabs.com/kornboard';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 78px;
			margin-top: 300px;
		}
		body {
			background: #000 url(korn_bg1.jpg);
		}
		a:any-link {
			color: #5b7eff;
		}
		a:hover {
			color: #eb1919;
		}
		#main {
			height: 360px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #DDD;
		}
		#mr-1 li ul.mr-2 li {
			background:	#000;
			border-bottom: 1px solid #DDD;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #111;
		}

	';

	require 'start-framework.php';

?>
