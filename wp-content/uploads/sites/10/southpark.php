<?php

	$title = 'South Park';
	
	$uL[1]['n_d'] = 'Official Site';
	$uL[1]['u_d'] = 'http://SouthParkStudios.com';

	$uL[2]['n_d'] = 3;
	$uL[2]['u_d'] = 118796525;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'South_park';

	$themeCss = '

		#searchBox {
			margin-left: 76px;
			margin-top: 178px;
		}
		body {
			color: #000;
			background:	#fbfbfb url(southpark_bg1.gif) repeat-x;
		}
		a:any-link {
			color: #cd1213;
		}
		a:hover {
			color: #234ea3;
		}
		#searchLinks a:any-link {
			color: #163d8a;
		}
		#searchLinks a:hover {
			color: #cd1213;
		}
		#toolBar a:any-link {
			color: #FFF;
		}
		ul.mr-2 {
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#FFF;
			border-bottom: 1px solid #000;
		}

	';

	require 'start-framework.php';

?>
