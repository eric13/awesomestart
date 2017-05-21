<?php

	$title = 'Pink Floyd';
	
	$uL[1]['n_d'] = 'PinkFloyd.com';
	$uL[1]['u_d'] = 'http://pinkfloyd.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 487143;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://pinkfloydonline.com/forums';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 92px;
			margin-top: 146px;
		}
		body {
			color: #000;
			background:	#FFF url(pinkfloyd_bg1.gif);
		}
		a:any-link {
			color: #000;
		}
		a:hover {
			color: #888;
		}
		#searchInput {
			width: 298px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #000;
		}
		#mr-1 li ul.mr-2 li {
			background:	#FFF;
			border-bottom: 1px solid #000;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #EEE;
		}

	';

	require 'start-framework.php';

?>
