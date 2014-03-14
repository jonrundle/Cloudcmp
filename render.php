<?php
$pageID = "render " . $_GET['d'];
include "inc/header.php"; 

require_once(__DIR__ .'/src/CloudApp/API.php');
require_once(__DIR__ .'/src/CloudApp/Exception.php');

$cloud = new CloudApp\API();

$item = $cloud->getItem('http://cl.ly/' . $_GET['i']);

?>

<div id="shell">

<?php echo '<img src="' . $item->content_url . '" alt="' . $item->name . '" />'; ?>

</div>

<?php include "inc/footer.php"; ?>