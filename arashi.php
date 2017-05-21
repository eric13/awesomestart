<?php

	$uL[1]['n_d'] = 'J-Storm.co.jp';
	$uL[1]['u_d'] = 'http://www.j-storm.co.jp/arashi';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 5917798;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 6;
	$uL[4]['u_d'] = 'Arashi';

	$ext='png';
	$themeCss = '

		#searchBox {
			margin-left: 110px;
			margin-top: 180px;
			border-radius: 2px;
			padding: 10px 12px;
			background: linear-gradient(160deg,rgba(143,183,229,.7),rgba(68,148,179,1));
			color: #000;
		}
		body {
			color: #111;
			background:	#F7FBFF;
		}
		#main {
			height: 300px;
		}
		a:any-link {
			color: #4e96da;
		}
		a:hover {
			color: #2064ff;
		}
		#searchLinks {
			margin-bottom: 8px;
		}
		#searchLinks a:any-link {
			color: #FFF;
		}
		#searchBox a:hover {
			color: #1169E1;
		}
		#searchInput {
			width: 200px;
		}
		ul.mr-2 {
			border: 1px solid #222;
			background: #CCC;
		}
		#mr-1 li ul.mr-2 li {
			background: #222;
			border-bottom: 1px solid #CCC;
		}
		#mr-1 li ul.mr-2 li a:hover {
			color: #4e96da;
		}

	';

	require 'start-framework.php';

?>
