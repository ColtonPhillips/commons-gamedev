<?php

$doc_root = $_SERVER['DOCUMENT_ROOT'].'/beyamor';

function englishList($words) {

	$s = '';

	// THE SWITCH LOOP. IT LIVES
	for ($i = 0; $i < count($words); ++$i) {

		switch($i) {
			case 0:
				$s = $words[$i];
				break;
			case 1:
				$s = $words[$i] + ' and ' + $s;
				break;
			default:
				$s = $words[$i] + ', ' + $s;
				break;
		}

		return $s;
	}
}

function writeAuthors($gameId) {

	$authors = mysql_query('SELECT `authors`.`name`
							FROM `authors` INNER JOIN `gameauthors` ON `authors`.`name` = `gameauthors`.`authors.name`
							WHERE `gameauthors`.`games.id` = '.$gameId) or die(mysql_error());

	$names = array();
	while ($author = mysql_fetch_array($authors)) {

		$names[] = $author['name'];
	}

	echo englishList($names);
}

function writeEntry($game) {
	?>
	<div class="gallery-entry">
		<div "class=thumbnail">
			<img src="<?php echo($game['thumbnail']); ?>"/>
		</div>
		<div class="info">
			<div class="author">
				<span class="section">Authors: </span><?php writeAuthors($game['id']); ?>.
			</div>
			<?php if ($game['description'] != '') { ?>
				<div class="description">
					<span class="section">Description: </span><?php echo $game['description']; ?>
				</div>
			<?php } ?>
			<?php if ($game['instructions'] != '') { ?>
				<div class="instructions">
					<span class="section">Instructions: </span><?php echo $game['instructions']; ?>
				</div>
			<?php } ?>
		</div>
	</div>
	<?php
}

function writeAllEntries() {

	// god, let's just do this in the worst way imaginable because it fuckin' works.
	include($_SERVER['DOCUMENT_ROOT']."/settings.php");
	$con = mysql_connect($DB_HOST, $DB_USER, $DB_PASSWORD) or die("datamabase goof");
	mysql_select_db($DB_NAME, $con) or die(mysql_error());

	$games = mysql_query("SELECT * FROM games", $con) or die(mysql_error());

	while ($game = mysql_fetch_array($games)) {

		writeEntry($game);
	}

	mysql_close($con);
}

?>

<!DOCTYPE HTML>
<html>
	<?php include $doc_root.'/core/head.php'; ?>
<body>
	<div id="main">
		<div id="main-wrapper"> <!-- chince it up - TG, 05/24/2012 -->
			<?php include $doc_root.'/core/header.php'; ?>
			<?php include $doc_root.'/core/nav.php'; ?>
			<div id="content">
				<div id="gallery">
					<?php writeAllEntries(); ?>
				</div>
			</div>
			<?php include $doc_root.'/core/footer.php'; ?>
		</div>
	</div>

	<!-- JAVASCRIPT -->
	<!-- who needs it! -->
	<!--<script type='text/javascript' src='/beyamor/js/jquery-ui-1.8.20.custom.min.js'></script>
	<script type='text/javascript' src='/beyamor/js/jquery.imagefit-0.2.js'></script>
	<script type='text/javascript' src='/beyamor/js/gallery.js'></script>-->

	<!-- CSS -->
	<link rel="stylesheet" href="/beyamor/css/gallery.css" type="text/css" />
</body>
