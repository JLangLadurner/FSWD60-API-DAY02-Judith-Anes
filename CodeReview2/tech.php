

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CodeReview 2 </title>
	<link rel="stylesheet" href="css/CodeReview.css">
</head>
<body>
	<div class="container">
		<div id="header">
			<header>
				<div id="first">
					<img src="img/logo-newspaper-cf.png" alt="logo">
				</div>
				<div id="second">
				<a href= "https://codefactory.wien/de/home/"><img src="img/banner-1.png" alt="codefactory banner1"></a>
			</div>
			</header>
		</div>
		<div id="navBar">
			<ul>
				<li><a href="CodeReview.html">Home</a></li> 
				<li><a href="tech.php">Tech</a></li> 
				<li><a href="">Culture</a></li> 
				<li><a href="">Video</a></li> 
			</ul>
		</div>
		<main class="main">
		<div class="mainTitle2">
			<div id=joke>
			<p>Jokes</p>
			</div>
		</div>
		<?php 
			require_once 'RESTfull.php';
			$url = 'http://api.serri.codefactory.live/random/';
			$response = curl_get($url);
			$result = json_decode($response);
			echo $result->joke;			

		 ?>
		<div class="mainTitle2">
			<p>Tech</p>
		</div>
		<?php


/*

* Fetch the RSS feed

* that contains BBC’s technology news

*/
require_once 'RESTfull.php';
$url = 'http://feeds.bbci.co.uk/news/technology/rss.xml';
$response = curl_get($url);
$xml = simplexml_load_string($response);
foreach ($xml->channel->item as $item) {
echo '<a href="'.$item->link.'" target="_blank">'.$item->title.'</a><br><img src="'.$item->media.'" alt="pic"><br>';
}


?>


		</main>
		<footer class="footer">
			<div id="navBar2">
				<ul>
				<li><a href="CodeReview.html">Home</a></li> 
				<li><a href="tech.php">Tech</a></li> 
				<li><a href="#">Culture</a></li> 
				<li><a href="#">Video</a></li> 
			</ul>
			</div>
			<div id="banner5">
				<a href= "https://codefactory.wien/de/home/"><img src="img/logo-newspaper-cf.png" alt="Banner5"></a>
			</div>
				<h5>Smajic Anes - CodeFactory 2018</h5>

		</footer>
	</div>
		
</body>
</html>