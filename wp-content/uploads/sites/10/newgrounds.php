<?php
	
	$uL[1]['n_d'] = 'Newgrounds.com';
	$uL[1]['u_d'] = 'http://newgrounds.com';

	$uL[2]['n_d'] = 'Alien Hominid';
	$uL[2]['u_d'] = 'http://alienhominid.com';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://newgrounds.com/bbs';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 254px;
			margin-top: 94px;
		}
		body {
			color: #000;
			background:	#F8D2AB url(newgrounds_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #000;
		}
		a:hover {
			color: #FFB30F;
		}
		#searchLinks a:hover {
			color: #555;
		}
		#searchInput {
			width: 194px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #FFF;
		}
		#mr-1 li ul.mr-2 li {
			background:	#ffb30f;
			border-bottom: 1px solid #FFF;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #fff07d;
		}

	';

	require 'start-framework.php';

?>
