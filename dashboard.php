<?php 
if(!isset($_POST['email'])) {
	header('Location: /?l=no');
}

require_once(__DIR__ .'/src/CloudApp/API.php');
require_once(__DIR__ .'/src/CloudApp/Exception.php');

try { 
	$cloud = new CloudApp\API($_POST['email'], $_POST['password']);
	// Get items
	$items = $cloud->getItems(1, 20, image);
	//print_r($cloud->getItems(1, 20, image));
} catch (Exception $e) {
    if(isset($_POST['email'])) {
	   header('Location: /?l=no&usr=' . $_POST['email'] . '');
	} else {
    	header('Location: /?l=no');
	}
}

$pageID = "dashboard";
include "inc/header.php"; ?>

<h2 class="animated fadeInDown">Choose an Image</h2>
<p class="animated fadeInDown">We've pulled in your 20 latest images from <a href="http://getcloudapp.com" target="_blank">CloudApp</a>. Choose an image from below, select a device to present it in and we'll do the rest.</p>

<div id="cloud-images" class="animated fadeInUp">
	<ul>

<?php	

if (!empty($items)){
    foreach ($items as $img){
	    echo '<li><span class="check-icon animated bounceIn"><img src="/img/checkIcon.png" alt="" /></span><a data-imgname="' . $img->name . '" data-imgurl="' . $img->url . '" class="cloud-img" href="#"><img src="' . $img->thumbnail_url . '" alt="' . $img->name . '" /></a></li>';
    }
}

?>

	</ul>
</div>

<?php include "inc/footer.php"; ?>