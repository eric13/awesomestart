<?php

	$title = 'Something Corporate';
	
	$uL[1]['n_d'] = 'Official Site';
	$uL[1]['u_d'] = 'http://SomethingCorporate.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 67857;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://somethingcorporate.com/community';

	$themeCss = '

		#searchBox {
			margin-left: 176px;
			margin-top: 120px;
		}
		body {
			color: #444;
			background:	#DDEDFA;
		}
		a:any-link {
			color: #1282FF;
		}
		a:hover {
			color: #444;
		}
		#searchInput {
			width: 280px;
		}
		ul.mr-2 {
			border: 1px solid #c4d4e1;
			background: #b0c3d1;
		}
		#mr-1 li ul.mr-2 li {
			background:	#bfdcee;
			border-bottom: 1px solid #b0c3d1;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #cedce7;
		}

	';

	require 'start-framework.php';

?>
