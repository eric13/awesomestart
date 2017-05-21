<?php
	
	$uL[1]['n_d'] = "MusicBrainz";
	$uL[1]['u_d'] = "http://musicbrainz.org/artist/203389";

	$uL[2]['n_d'] = 2;
	$uL[2]['u_d'] = 388383194;

	$uL[3]['n_d'] = 1;
	$uL[3]['u_d'] = 0;

	$uL[4]['n_d'] = "Last.fm Page";
	$uL[4]['u_d'] = "https://last.fm/music/AILE";

	$themeCss = '

		#searchBox {
			margin-left: 102px;
			margin-top: 191px;
		}
		body {
			color: #000;
			background: #B9BDEE url(aile_bg1.jpg) repeat-x;
		}
		a:any-link {
			color: #503FCA;
		}
		a:hover {
			color: #E00;
		}
		#searchLinks {
			margin-bottom: 6px;
		}
		#searchInput {
			width: 310px;
		}
		ul.mr-2 {
			background: #8794D7;
		}
		#mr-1 li ul.mr-2 li {
			background: #A2B0E5;
			border-bottom: 1px solid #8794D7;
		}
		#mr-1 li ul.mr-2 li:hover {
			background: #000;
		}

	';

	require 'start-framework.php';

?>
