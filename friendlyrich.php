<?php

	$title = 'Friendly Rich';
	
	$uL[1]['n_d'] = 'FriendlyRich.com';
	$uL[1]['u_d'] = 'http://friendlyrich.com';

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 272669650;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = 'Broken Pencil';
	$uL[4]['u_d'] = 'http://brokenpencil.com/features/feature.php?featureid=79';

	$ext='gif';
	$themeCss = '

		#searchBox {
			margin-left: 88px;
			margin-top: 142px;
			color: #FAEFDD;
		}
		body {
			color: #110803;
			background: #faefdd url(friendlyrich_bg1.jpg);
		}
		a:any-link {
			color: #c33424;
		}
		a:hover {
			color: #331606;
		}
		#searchLinks a:any-link {
			color: #c33424;
		}
		#searchLinks a:hover {
			color: #F0EDB6;
		}
		#searchInput {
			width: 330px;
		}
		ul.mr-2 {
			border: 1px solid #000;
			background: #baada0;
		}
		#mr-1 li ul.mr-2 li {
			background:	#160b05;
			border-bottom: 1px solid #baada0;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #2e231c;
		}

	';

	require 'start-framework.php';

?>
