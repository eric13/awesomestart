<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="page">
				<div class="entry-content">
<?php
//		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php
					printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' );
				?></h1>
			</header><!-- .page-header -->

<?php
	require(config.php);
	$q = $_GET['s'];
	if (!$q) { $q=$_POST['s']; }
?>

<div>

<style type="text/css">
	.page-header {
		border-top: none;
		margin: 0px;
		padding-top: 0px;
	}
	div.thumbox {
		margin: 0px 0px 12px 0px !important;
	}
	div.thumb, div.thumbox {
		padding: 0px !important;
		background-color: inherit !important;
		border: 0px !important;
		border-radius: 0px;
	}
	div.thumb {
		line-height: 1.4em;
		vertical-align: top;
		margin: 0px !important;
		display: inline-block !important;
	}
	img.thumb {
		display: inline-block !important;
		margin-right: 20px !important;
	}
	img.user {
		border: 1px solid black;
	}
</style>
<p>Quickly find your favorite themes by searching AwesomeStart.  You
can search for multiple themes, just separate theme names by space!</p>

<?php $q = str_replace("\\","",$q); ?>
<?php $q = str_replace("\"","&quot;",$q); ?>

<form role="search" method="get" class="search-form" action="/">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="Theme Search…" value="<?php print $q; ?>" name="s" title="Search for:">
	</label><br>
	<button type="submit" style="letter-spacing: normal; width:170px; height: 30px; margin: 10px 0px 12px;">Search AwesomeStart</button>
</form>

<hr style='background-color: #000; margin: 0px;'>

<?php

// There is a search query
if ($q) {


	// -- GALLERY THEMES --

	// Remove "the" at beginning for better matching later
	$id_1 = substr($id, 0, 3);
	if ($id_1=="the") { $id = substr($id, 3, (strlen($id)-3)); }

	// Maximum results to display per page
	$MAXRESULTS = 50;
	$info = array();

	// Number of results found
	$found = 0;
	
	$info[$found++] = 0;

	// Run specific SQL search of the gallery
	if (($sql = mysql_query("SELECT id, foldername, propername, type, author
		FROM gallery
		WHERE MATCH (keywords, propername, alphaname, foldername, author)
		AGAINST ('$q' in boolean mode)
		LIMIT $MAXRESULTS")) != FALSE) {
			while (($row = mysql_fetch_row($sql)) != FALSE)
			$info[$found++] = $row[0].":".$row[1].":".$row[2].":".$row[3].":".$row[4]; }
		$found--;

	// Found some results
	if ($found > 0) {

		if ($found > 1) { $numba = "themes"; } else { $numba = "theme"; }

		echo "<p>Found $found official $numba matching search query \"$q\".</p>";

		for ($i=0; $i < $found; $i++) {
			$_s=explode(":",$info[$i+1]);
			$_id=$_s[0];
			$_foldername=$_s[1];
			$_propername=$_s[2];
			$_type=$_s[3];
			$_author=$_s[4];

			echo "<div class='thumbox'><a href=\"/$_foldername/\"><img class='thumb' src=\"/images/_$_foldername.gif\" alt=\"\" /></a><div class='thumb'>
				<a href=\"/$_foldername/\">$_propername</a><br>
				Type: $_type<br>
				Designer: $_author<br>
				<a href=\"/preferences/?s=$_foldername\">Setup a page with this theme</a></div></div>";
		}

	// Otherwise Run less strict SQL search of gallery
	} else {
		$rs2 = mysql_query ("SELECT * 
			FROM gallery
			WHERE propername
			LIKE '%$q%'
			ORDER BY propername ASC LIMIT $MAXRESULTS");
		$found = mysql_num_rows($rs2);

		// Found some results
		if ($found > 0) {

			if ($found > 1) { $numba = "themes"; } else { $numba = "theme"; }

			echo "<p>Found $found official $numba matching search query \"$q\".</p>";

			for ($i=0; $i< $found; $i++) { 
				$_foldername = mysql_result($rs2,$i,"foldername");
				$_propername = mysql_result($rs2,$i,"propername");
				$_type = mysql_result($rs2,$i,"type");
				$_author = mysql_result($rs2,$i,"author");

				echo"<div class='thumbox'><a href=\"/$_foldername/\"><img class='thumb' src=\"/images/_$_foldername.gif\" alt=\"\" /></a><div class='thumb'>
					<a href=\"/$_foldername/\">$_propername</a><br>
					Type: $_type<br>
					Designer: $_author<br>
					<a href=\"/preferences/?s=$_foldername\">Setup a page with this theme</a></div></div>";
			}

		}

	}


	// -- USER THEMES --

	// Maximum results to display per page
	$MAXRESULTS = 9;
	$info = array();

	// Number of results found
	$found2 = 0;
	
	$info[$found2++] = 0;

	// Run specific SQL search of the user themes
	if (($sql = mysql_query("SELECT id, name, title, tags
		FROM uthemes
		WHERE approved = 'Y' AND MATCH (name, title, tags)
		AGAINST ('$q' in boolean mode)
		LIMIT $MAXRESULTS")) != FALSE) {
			while (($row = mysql_fetch_row($sql)) != FALSE)
			$info[$found2++] = $row[0].":".$row[1].":".$row[2].":".$row[3]; }
			$found2--;

	// Found some results
	if ($found2 > 0) {

		if ($found2 > 1) { $numba = "themes"; } else { $numba = "theme"; }

		echo "<p>Found $found2 user created $numba matching search query \"$q\".</p>";

		for ($i=0; $i < $found2; $i++) { 
			$_s=explode(":",$info[$i+1]);
			$_id=$_s[0];
			$name=$_s[1];
			$title=$_s[2];
			$tags=substr($_s[3], 0, -1);
			$title_c = substr($title, 0, 17);
			if ($title_c != $title) { $title="$title_c..."; }

			echo "<div class='thumbox'><a href=\"/public/$name\"><img class='usr thumb' src='images/user-$name.gif' alt='' /><div class='usr thumb'>
			<a href='public/$name'>$title</a><br>
			Tags: <i>$tags</i><br>
			<a href='preferences/?s=$_name'>Setup a page with this theme</a></div></div>";
		}

	// Otherwise Run less strict SQL search of gallery
	} else {
		$rs2 = mysql_query ("SELECT *
			FROM uthemes
			WHERE approved = 'Y' AND title LIKE '%$q%'
			ORDER BY name ASC LIMIT $MAXRESULTS");
		$found2 = mysql_num_rows($rs2);

		// Found some results
		if ($found2 > 0) {

			if ($found2 > 1) { $numba = "themes"; } else { $numba = "theme"; }

			echo "<p>Found $found2 user created $numba matching search query \"$q\".</p>";

			for ($i=0; $i< $found2; $i++) { 
				$name = mysql_result($rs2,$i,"name");
				$title = mysql_result($rs2,$i,"title");
				$tags = mysql_result($rs2,$i,"tags");
				$tags = substr($tags, 0, -1);
				$title_c = substr($title, 0, 17);
				if ($title_c != $title) { 
					$title="$title_c...";
				}
		
				echo "<div class='thumbox'><a href=\"/public/$name\"><img class='user thumb' src='images/user-$name.gif' alt='' /><div class='usr thumb'>
					<a href='public/$name'>$title</a><br>
					Tags: <i>$tags</i><br>
					<a href='preferences/?s=$_name'>Setup a page with this theme</a></div></div>";

			}

		}

	}

	// Neither search produced results
	if ($found < 1 && $found2 < 1) {
		echo "<p>No results found for \"$q\". Try browsing for a new theme in our <a href=\"/gallery/\">gallery</a>.</p>";
	}

// There is no search query
} else {

	echo "<p>Search results will appear here if anything is found.</p>";

}

?>

				</div><!-- .entry-content -->
			</div><!-- .page -->
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
