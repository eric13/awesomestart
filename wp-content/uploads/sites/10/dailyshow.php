<?php

	$title = 'The Daily Show';
	
	$uL[1]['n_d'] = 7;
	$uL[1]['u_d'] = 115147;

	$uL[2]['n_d'] = 3;
	$uL[2]['u_d'] = 129455338;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'The_Daily_Show';

	$themeCss = '

		#searchBox {
			margin-left: 58px;
			margin-top: 124px;
		}
		body {
			background:	#142651 url(dailyshow_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #789EFE;
		}
		a:hover {
			color: #1854FF;
		}
		#searchLinks a:any-link {
			color: #789EFE;
		}
		#searchLinks a:hover {
			color: #102E67;
		}
		#searchInput {
			width: 238px;
		}
		ul.mr-2 {
			background: #FFF;
			border: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#20538c;
			border-bottom: 1px solid #FFF;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #245b94;
		}

	';

	require 'start-framework.php';

?>
