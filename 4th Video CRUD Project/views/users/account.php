<?php include('header.php')?>
	<div class="navbar navbar-dark bg-primary">
		<div class="container">
			<h3 class="navbar-brand">Welcome <?php echo $loggedInUser['first_name'].' '.$loggedInUser['last_name']; ?> !</h3>
			<h3 class="navbar-brand">Login Email: <?php echo $loggedInUser['email']; ?></h3>
		    <a class="navbar-brand" href="<?php echo base_url('index.php/users/logout'); ?>" class="logout">Logout</a>
		</div>
	</div>

<div class="container" style="padding-top: 20px;">
<h1>
	CRUD Application in Code-Igniter
</h1>
</div>
  <?php include('footer.php')?>