<?php

	$title = 'The Simpsons';
	
	$uL[1]['n_d'] = 'Official Site';
	$uL[1]['u_d'] = 'http://TheSimpsons.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 404935902;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'The_Simpsons';

	$themeCss = '

		#searchBox {
			margin-left: 226px;
			margin-top: 142px;
		}
		body {
			color: #FFFEEA;
			background:	#7893af;
		}
		a:any-link {
			color: #403d8c;
		}
		a:hover {
			color: #fbd924;
		}
		#searchInput {
			width: 240px;
		}
		ul.mr-2 {
			background: #4c5c76;
		}
		#mr-1 li ul.mr-2 li {
			background:	#7c93bd;
			border-bottom: 1px solid #4c5c76;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #738ab3;
		}

	';

	require 'start-framework.php';

?>
