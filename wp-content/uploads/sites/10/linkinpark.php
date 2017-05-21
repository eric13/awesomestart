<?php

	$title = 'Linkin Park';
	
	$uL[1]['n_d'] = 'LinkinPark.com';
	$uL[1]['u_d'] = 'http://linkinpark.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 148662;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://forums.linkinpark.com';

	$themeCss = '

		#searchBox {
			margin-left: 72px;
			margin-top: 137px;
		}
		body {
			color: #EEE;
			background:	#80654f;
		}
		a:any-link {
			color: #473226;
		}
		a:hover {
			color: #372923;
		}
		#searchLinks a:any-link {
			color: #806b57;
		}
		#searchLinks a:hover {
			color: #795f46;
		}
		#searchInput {
			width: 334px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #45342d;
		}
		#mr-1 li ul.mr-2 li {
			background:	#1a1814;
			border-bottom: 1px solid #45342d;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #000;
		}

	';

	require 'start-framework.php';

?>
