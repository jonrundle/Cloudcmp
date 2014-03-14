<?php 
$pageID = "login";
include "inc/header.php"; ?>

<div id="login" class="animated fadeInDown">

	<img class="logo animated fadeInUp" src="/img/logo.png" alt="Cloud + Comp" />
	
	<?php 
	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	if (strpos($url, "no") !== false) {
	?>
	
	<div class="message error animated fadeInDown">
		<h3>Login failed</h3>
		<p>Your username or password is incorrect or your session has expired, please try again.</p>
	</div>	
	
	<?php } ?>
	
	<h2>Sign in with your <a href="http://getcloudapp.com/" target="_blank">CloudApp</a> credentials</h2>
	
	<form method="post" action="/dashboard">
		<div>
			<label for="email">Email</label>
			<input required="required" type="email" placeholder="email@example.com" id="email" value="<?php echo (isset($_GET['usr']) ? $_GET['usr']: ''); ?>" name="email" />
		</div>
		<div>
			<label for="password">Password</label>
			<input required="required" type="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;" id="password" name="password" />
		</div>
		<input type="submit" value="Submit" class="btn" />
	</form>

</div>

<?php include "inc/footer.php"; ?>