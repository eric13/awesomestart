<?php

	$title = 'The Colbert Report';
	
	$uL[1]['n_d'] = 'ColbertNation';
	$uL[1]['u_d'] = 'http://colbertnation.com';

	$uL[2]['n_d'] = 3;
	$uL[2]['u_d'] = 129458911;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'The Colboard';
	$uL[4]['u_d'] = 'http://colboard.com';

	$themeCss = '

		#searchBox {
			margin-left: 62px;
			margin-top: 132px;
		}
		body {
			background:	#27275B url(colbertreport_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #CE3030;
		}
		a:hover {
			color: #6590D5;
		}
		#searchLinks a:any-link {
			color: #789EFE;
		}
		#searchLinks a:hover {
			color: #F24542;
		}
		#searchInput {
			width: 230px;
		}
		ul.mr-2 {
			background: #FFF;
			border: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#902221;
			border-bottom: 1px solid #FFF;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #7e1c1a;
		}

	';

	require 'start-framework.php';

?>
