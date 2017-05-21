<?php

	$title = 'Hard-Fi';
	
	$uL[1]['n_d'] = 'Hard-Fi.com';
	$uL[1]['u_d'] = 'http://hard-fi.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 42032512;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Facebook Page';
	$uL[4]['u_d'] = 'https://facebook.com/hardfi';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 40px;
			margin-top: 158px;
		}
		body {
			color: #000;
			background:	#fef420;
		}
		a:any-link {
			color: #d40019;
		}
		a:any-link {
			color: #fef420;
			background: #000;
			text-decoration: none;
			padding: 1px 2px 1px 2px;
		}
		a:hover {
			color: #000;
			text-decoration: underline;
			background: #fef420;
			padding: 1px 2px 1px 2px;
		}
		#searchInput {
			width: 290px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #fef420;
		}
		#mr-1 li ul.mr-2 li {
			background:	#000;
			border-bottom: 1px solid #fef420;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #fef420;
		}

	';

	require 'start-framework.php';

?>
