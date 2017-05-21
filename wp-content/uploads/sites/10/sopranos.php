<?php
	
	$uL[1]['n_d'] = 7;
	$uL[1]['u_d'] = 141842;

	$uL[2]['n_d'] = 3;
	$uL[2]['u_d'] = 279180831;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'The_Sopranos';

	$themeCss = '

		#searchBox {
			margin-left: 92px;
			margin-top: 160px;
		}
		body {
			background: #000 url(sopranos_bg1.gif) repeat-x;
		}
		a:any-link {
			color: #000;
		}
		a:hover {
			color: #FFF;
		}
		#searchLinks {
			margin-bottom: 6px;
		}
		#toolBar a:any-link {
			color: #de0e1e;
		}
		#toolBar a:hover {
			color: #000;
		}
		#bottomLinks a:any-link, #announce a:any-link {
			color: #de0e1e;
		}
		#bottomLinks a:hover, #announce a:hover {
			color: #FFF;
		}
		#searchInput {
			width: 313px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #FFF;
		}
		#mr-1 li ul.mr-2 li {
			background:	#de0e1e;
			border-bottom: 1px solid #FFF;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #000;
		}

	';

	require 'start-framework.php';

?>
