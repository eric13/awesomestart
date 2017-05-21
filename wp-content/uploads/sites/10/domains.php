<?php

if (isset($st)=='a') {
	$h_dsearch = "Amazon.com";
} else if (isset($st)=='w') {
	$h_dsearch = "Wikipedia.org";
} else {
	$h_dsearch = isset($dsearch);
}

?>