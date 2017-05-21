<?php

	$title = 'Antic Cafe';
	
	$uL[1]['n_d'] = 'Official Site';
	$uL[1]['u_d'] = 'http://AnCafe-Web.com';

	$uL[2]['n_d'] = 'AnCafes Blog';
	$uL[2]['u_d'] = 'http://blog.livedoor.jp/antic_cafe';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Antic_Cafe';

	$ext='png';
	$themeCss = '

		#searchBox {
			margin-left: 98px;
			margin-top: 154px;
		}
		body {
			color: #000;
			background:	#EC0E0E url(ancafe_bg1.gif) repeat center top;
		}
		a:any-link {
			color: #FFF;
		}
		a:hover {
			color: #FFCAE6;
		}
		#searchLinks {
			margin-bottom: 8px;
		}
		#aChild {
			background: #ec0e0e;;
			padding: 18px 2px;
		}
		#bottomLinks a:any-link {
			background:	#ec0e0e;
			padding: 3px 4px 3px 4px;
		}
		#bottomLinks a:hover {
			color: #FFF;
			background:	#00c3d5;
			padding: 3px 4px 3px 4px;
		}
		#toolBar a:any-link {
			background:	#ec0e0e;
			padding: 3px 4px 3px 4px;
		}
		#toolBar a:hover {
			color: #FFF;
			background:	#00c3d5;
			padding: 3px 4px 3px 4px;
		}
		#searchInput {
			width: 300px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#00c6d6;
			border-bottom: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #ed1008;
		}

	';

	require 'start-framework.php';

?>
