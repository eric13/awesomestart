<?php
	
	$uL[1]['n_d'] = 'Official Site';
	$uL[1]['u_d'] = 'http://u2.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 78500;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://forums.interference.com';

	$ext='png';
	$themeCss = '

		#searchBox {
			margin-left: 54px;
			margin-top: 154px;
			color: #FFF;
			text-shadow: 1px 1px 2px #000;
		}
		body {
			color: #333;
			background: #7A7A7A;
		}
		a:any-link {
			color: #FFF;
		}
		a:hover {
			color: #CCC;
		}
		#searchLinks a:any-link {
			text-shadow: 1px 1px 2px #000;
		}
		#searchInput {
			width: 318px;
		}
		ul.mr-2 {
			border: 1px solid #777;
			background: #333;
		}
		#mr-1 li ul.mr-2 li {
			background: #777;
			border-bottom: 1px solid #333;
		}

	';

	require 'start-framework.php';

?>
