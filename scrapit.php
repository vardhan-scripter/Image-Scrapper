<?php
error_reporting(0);
$url=$_POST['url'];
$page = file_get_contents($url);
echo "<h1 class='main_heading'>Scrapped Images</h1><br>";
$count = 1;
$page = explode(" ", htmlspecialchars($page));
foreach ($page as $key => $value) {
	if (substr($value, 0, 3)=='src'&&substr($value, 10, 4)=='http') {
		if ((substr($value, strlen($value)-9, 3)=='png'||substr($value, strlen($value)-9, 3)=='jpg')) {
			echo "<h1 class='image-caption'>Image ".$count.":</h1>";
			echo "<img src='".substr($value, 10, strlen($value)-16)."'><hr>";
			$count++;
		}
		else if ((substr($value, strlen($value)-15, 3)=='png'||substr($value, strlen($value)-15, 3)=='jpg')) {
			echo "<h1 class='image-caption'>Image ".$count.":</h1>";
			echo "<img src='".substr($value, 10, strlen($value)-22)."'><hr>";
			$count++;
		}
		
	}
	else if (substr($value, 0, 3)=='src') {
		if ((substr($value, strlen($value)-9, 3)=='png'||substr($value, strlen($value)-9, 3)=='jpg')) {
			echo "<h1 class='image-caption'>Image ".$count.":</h1>";
			echo "<img src='".$url.substr($value, 10, strlen($value)-16)."'><hr>";
			$count++;
		}
		else if ((substr($value, strlen($value)-15, 3)=='png'||substr($value, strlen($value)-15, 3)=='jpg')) {
			echo "<h1 class='image-caption'>Image ".$count.":</h1>";
			echo "<img src='".$url.substr($value, 10, strlen($value)-22)."'><hr>";
			$count++;
		}
	}
}
if ($count==0) {
	echo "<h1 class='caption'>There are no images for this website</h1>";
}
else if ($count>1) {
	$count=$count-1;
	echo "<h1 class='caption'>Total Images Count:".$count."</h1>";
	?><script type="text/javascript">
		document.getElementById('question').style.display='none';
		document.getElementById('answer').style.display='block';
	</script><?php
} 
?>