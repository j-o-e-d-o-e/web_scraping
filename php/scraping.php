<?php
$subreddit = $_GET["subreddit"];
$res = json_decode(shell_exec("..\py\scraping.py $subreddit"));
if (isset($res)) {
  	foreach($res as $title => $content) {
		echo "<section class='r_box'>";
		echo "<h3 class='headline'><a href='" . $content[0] . "' target='_blank'>" . $content[1] . "</a></h3>";
		if($content[2] != ""){
			echo $content[2] . "<br>";
		}
		if (strpos($content[3], "reddit") === false){
			echo "<i class='fa fa-external-link'></i>" . " ";
			echo "<a class='r_link' href='" . $content[3] . "' target='_blank'>" . $content[3] . "</a><br>";
		}
		echo "<span style='color: #006621'>" . $content[4] . " comments | submitted " . $content[5] . "</span>";
		echo "</section>";
	} 
} else {
	echo "Time out. Please try again.";
}
?>