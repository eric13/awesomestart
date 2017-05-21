	<?php

	$title = "At the Drive-In";
	
	$uL[1]['n_d'] = "Official Site";
	$uL[1]['u_d'] = "http://atthedriveinmusic.com";

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 41990355;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = "At_the_Drive-In";

	$ext='png';
	$themeCss = '

		#searchBox {
			margin-left: 22px;
			margin-top: 144px;
		}
		body {
			color: #000;
			background:	#259661 url(atthedrivein_bg1.gif) repeat-x;
		}
		a:any-link {
			color: #FEB425;
		}
		a:hover {
			color: #FFDC91;
		}
		#searchLinks a:any-link {
			color: #008044;
		}
		#searchLinks a:hover {
			color: #014E2A;
		}
		#toolBar a:any-link {
			color: #008044;
		}
		#toolBar a:hover {
			color: 014E2A;
		}
		#searchInput {
			width: 220px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background: #F09B1E;
			border-bottom: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #259661;
		}

	';

	require 'start-framework.php';

?>
