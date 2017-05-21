<?php

	$title = 'Bob Marley';
	
	$uL[1]['n_d'] = 'BobMarley.com';
	$uL[1]['u_d'] = 'http://bobmarley.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 121982;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://thirdfield.com/new/community.html';

	$themeCss = '

		#searchBox {
			margin-left: 68px;
			margin-top: 124px;
		}
		body {
			color: #82bd8a;
			background:	#1c1c1c;
		}
		a:any-link {
			color: #c44c45;
		}
		a:hover {
			color: #dedf60;
		}
		#searchInput {
			width: 230px;
		}
		ul.mr-2 {
			background: #555;
			border: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#111;
			border-bottom: 1px solid #555;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #000;
		}

	';

	require 'start-framework.php';

?>
