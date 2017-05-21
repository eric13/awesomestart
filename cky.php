<?php

	$title = 'CKY';
	
	$uL[1]['n_d'] = 'Island Records';
	$uL[1]['u_d'] = 'http://www6.islandrecords.com/cky/index.php';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 91599;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://ckyforums.com';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 88px;
			margin-top: 130px;
		}
		body {
			color: #fee504;
			background:	#000;
		}
		a:any-link {
			color: #de0016;
		}
		a:hover {
			color: #fee504;
		}
		#searchInput {
			width: 290px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #fee504;
		}
		#mr-1 li ul.mr-2 li {
			background:	#000;
			border-bottom: 1px solid #fee504;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #111;
		}

	';

	require 'start-framework.php';

?>
