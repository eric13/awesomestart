<?php
	
	$uL[1]['n_d'] = 'KryptonSite';
	$uL[1]['u_d'] = 'http://kryptonsite.com';

	$uL[2]['n_d'] = 3;
	$uL[2]['u_d'] = 1223622477;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Smallville Wiki';
	$uL[4]['u_d'] = 'http://smallville.wikia.com';

	$themeCss = '

		#searchBox {
			margin-left: 248px;
			margin-top: 172px;
		}
		body {
			background:	#1a265d url(smallville_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #5656f5;
		}
		a:hover {
			color: #f03e3e;
		}
		#searchLinks a:any-link {
			color: #f03e3e;
		}
		#searchLinks a:hover {
			color: #5656f5;
		}
		#toolBar a:any-link {
			color: #737dff;
		}
		#toolBar a:hover {
			color: #f03e3e;
		}
		#searchInput {
			width: 230px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#760516;
			border-bottom: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #1a265d;
		}

	';

	require 'start-framework.php';

?>
