<?php
	
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
			background: #FFF url(plain_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #444;
		}
		a:hover {
			color: #BBB;
		}
		#searchInput {
			width: 320px;
		}
		ul.mr-2 {
			background: #999;
			border: 1px solid #FFF;
		}
		#mr-1 li ul.mr-2 li {
			background:	#FFF;
			border-bottom: 1px solid #999;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #46484A;
		}

	';

	require 'start-framework.php';

?>
