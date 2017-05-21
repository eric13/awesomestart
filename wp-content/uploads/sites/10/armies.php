<?php

	$title = 'The Armies';
	
	$uL[1]['n_d'] = 'Spiderworld';
	$uL[1]['u_d'] = 'http://voskat.net/spiderworld';

	$uL[2]['n_d'] = 'Mutagenesis';
	$uL[2]['u_d'] = 'http://voskat.net/mutagenesis';

	$uL[3]['n_d'] = 'The Armies';
	$uL[3]['u_d'] = 'http://voskat.net/thearmies';

	$uL[4]['n_d'] = 'Laura Martin';
	$uL[4]['u_d'] = 'http://voskat.net/laura';

	$ext='png';
	$themeCss = '

		#searchBox {
			margin-left: 238px;
			margin-top: 102px;
		}
		body {
			color: #F4F2EE;
			background:	#b89481;
		}
		a:any-link {
			color: #3f4848;
		}
		a:hover {
			color: #F4F2EE;
			background: #2c3333;
			text-decoration: none;
		}
		#searchLinks a:any-link {
			color: #F4F2EE;
		}
		#searchLinks a:hover {
			color: #F4F2EE;
			background: #2c3333;
			text-decoration: none;
		}
		#searchInput {
			width: 200px;
		}
		ul.mr-2 {
			border: 1px solid #60605e;
			background: #FFF;
		}
		#mr-1 li ul.mr-2 li {
			background:	#b89481;
			border-bottom: 1px solid #FFF;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #2c3333;
		}

	';

	require 'start-framework.php';

?>
