<?php

	$title = 'Foo Fighters';
	
	$uL[1]['n_d'] = 'FooFighters.com';
	$uL[1]['u_d'] = 'http://foofighters.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 6906197;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Message Board';
	$uL[4]['u_d'] = 'http://bbs.foofighters.com';

	$themeCss = '

		#searchBox {
			margin-left: 110px;
			margin-top: 120px;
		}
		body {
			color: #000;
			background:	#D8D8E5;
		}
		a:any-link {
			color: #797A9F;
		}
		a:hover {
			color: #21244E;
		}
		#searchInput {
			width: 280px;
		}
		ul.mr-2 {
			background: #8d8d95;
		}
		#mr-1 li ul.mr-2 li {
			background:	#D8D8E5;
			border-bottom: 1px solid #8d8d95;
		}

	';

	require 'start-framework.php';

?>
