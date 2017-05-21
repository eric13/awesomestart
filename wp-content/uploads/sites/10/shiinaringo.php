<?php

	$title = 'Shiina Ringo';
	
	$uL[1]['n_d'] = 'DuckDuckGo';
	$uL[1]['u_d'] = 'https://duckduckgo.com';

	$uL[2]['n_d'] = 'AwesomeStart';
	$uL[2]['u_d'] = 'https://awesomestart.com';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Double Feature';
	$uL[4]['u_d'] = 'https://doublefeature.fm';

	$themeCss = '

		#searchBox {
			margin-left: 182px;
			margin-top: 168px;
		}
		body {
			color: #eff0ef;
			background: #455a5b;
		}
		a:any-link {
			color: #439C99;
		}
		a:hover {
			color: #73ccd0;
		}
		#searchLinks a:any-link {
			color: #73ccd0;
		}
		#searchLinks a:hover {
			color: #F0EDB6;
		}
		ul.mr-2 {
			border: 1px solid #455a5b;
			background: #EEE;
		}
		#mr-1 li ul.mr-2 li {
			background: #455a5b;
			border-bottom: 1px solid #EEE;
		}

	';

	require 'start-framework.php';

?>
