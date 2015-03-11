<?php
function getFeed($feed_url) {
	$rss = new DOMDocument();
	$rss->load($feed_url);
	$feed = array();
	$limit=0;
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
		array_push($feed, $item);
		$limit++;
	}
	if ($limit>5) {$limit=5;}
    
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		$date = date('l F d, Y', strtotime($feed[$x]['date']));
		echo '<div style="background-color:white;"><h1 style="text-align:right;">'.$title.'</h1>';
		echo '<h3 style="text-align:right;">'.$date.'</h3><br>';
		echo '<div style="background-color:white;">'.$description.'</div></div>';
        echo'<div class="container centered"><hr class="hr-left"><img src="../images/diahoe.png" class="hr-image"><hr class="hr-right"></div>';
	}
}
?>