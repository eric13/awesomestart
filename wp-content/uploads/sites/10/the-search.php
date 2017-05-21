<?php

	$ip = $_SERVER['REMOTE_ADDR'];

	function makeForm($urlPart,$method='post',$topper=true) {
		$return = '<form name="f" action="https://'.$urlPart.'" method="$method" id="cse-search-box"';
		if ($topper) { $return .= ' target="_top"'; }
		$return .= '>';
		return $return;
	}

	if ($st=='i') {
		echo makeForm('duckduckgo.com/?ia=images');
	} else if ($st=='n') {
		echo makeForm('duckduckgo.com/?ia=news');
	} else if ($st=='m') {
		echo makeForm('maps.bing.com');
	} else if ($st=='v') {
		echo makeForm('duckduckgo.com/?ia=videos');
	} else if ($st=='a' || $st=='b' || $st=='sh') {
		echo makeForm('amazon.com','get');
	} else if ($st=='s' || $st=='w') {
		echo makeForm('wikipedia.org/w/','get');
	} else if ($st=='f') {
		echo makeForm('finance.search.yahoo.com/search;_ylt=A0SO8y.paAhZNxIAO4JXNyoA;_ylu=X3oDMTE0aDd2a2hsBGNvbG8DZ3ExBHBvcwMxBHZ0aWQDQjM2MjBfMQRzZWMDcGl2cw--','get');
	} else if ($st=='bl') {
		echo makeForm('tumblr.com/search/');
	} else {
		echo makeForm('duckduckgo.com','post',false);
	}
?>
