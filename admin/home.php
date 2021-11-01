<?php 
include('../login/functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login/login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" sizes="16x16" href="/image/favicon.ico" />
    <link rel="shortcut icon" href="/static/favicon/favicon.ico" />
    <meta name="msapplication-TileColor" content="#000000" />
    <meta name="theme-color" content="#000" />
    <meta name="viewport" content="width=device-width" />
    <meta charSet="utf-8" />
    <link rel="stylesheet" href="../../css/stylzes.css" />
</head>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>
					<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
					<br>
					<a href="home.php?logout='1'" style="color: red;">logout</a>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>