<?php

	$title = 'Plain Black';
	
	$uL[1]['n_d'] = 'Change these links!';
	$uL[1]['u_d'] = 'https://awesomestart.com/preferences';

	$uL[2]['n_d'] = 'Theme Gallery';
	$uL[2]['u_d'] = 'https://awesomestart.com/gallery';

	$uL[3]['n_d'] = 'Developer\'s Log';
	$uL[3]['u_d'] = 'https://awesomestart.com/devlog';

	$uL[4]['n_d'] = 'Deviant Art';
	$uL[4]['u_d'] = 'http://awesomestart.deviantart.com';

	$themeCss = '

		#searchBox {
			margin-left: 82px;
			margin-top: 90px;
		}
		body {
			color: #666;
			background: #272727 url(plainblack_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #BBB;
		}
		a:hover {
			color: #444;
		}
		#searchInput {
			width: 320px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #555;
		}
		#mr-1 li ul.mr-2 li {
			background:	#111;
			border-bottom: 1px solid #666;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #000;
		}

	';

	require 'start-framework.php';

?>
