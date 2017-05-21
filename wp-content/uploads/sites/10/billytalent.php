<?php

	$title = 'Billy Talent';
	
	$uL[1]['n_d'] = 'Official Site';
	$uL[1]['u_d'] = 'http://billytalent.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 295015;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Billy_Talent';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 200px;
			margin-top: 100px;
			color: #FFF;
		}
		body {
			color: #111;
			background:	#efd23f url(billytalent_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #c51e24;
		}
		a:hover {
			color: #000;
		}
		#searchLinks a:any-link {
			color: #E9D751;
		}
		#searchLinks a:hover {
			color: #000;
		}
		#searchInput {
			width: 290px;
		}
		#toolBar a:any-link {
			color: #ffe763;
		}
		#toolBar a:hover {
			color: #000;
		}
		ul.mr-2 {
			border: 1px solid #111;
			background: #111;
		}
		#mr-1 li ul.mr-2 li {
			background: #C51D24;
			border-bottom: 1px solid #111;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #F2E25F;
		}

	';

	require 'start-framework.php';

?>
