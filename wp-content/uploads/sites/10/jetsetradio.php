<?php

	$title = 'Jet Set Radio';
	
	$uL[1]['n_d'] = 'Sega of America';
	$uL[1]['u_d'] = 'http://sega.com/games/game_temp.php?game=jsrf';

	$uL[2]['n_d'] = 'Official Site';
	$uL[2]['u_d'] = 'http://jsrf.com';

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Jet_Set_Radio';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 92px;
			margin-top: 162px;
			color: #e7ef84;
		}
		body {
			color: #172229;
			background:	#e7ef84;
		}
		a:any-link {
			color: #085231;
		}
		a:hover {
			color: #64b631;
		}
		#searchLinks a:any-link {
			color: #e7ef84;
		}
		#searchLinks a:hover {
			color: #feb908;
		}
		#searchInput {
			width: 266px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #39842d;
		}
		#mr-1 li ul.mr-2 li {
			background:	#085231;
			border-bottom: 1px solid #39842d;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #e7ef84;
		}

	';

	require 'start-framework.php';

?>
