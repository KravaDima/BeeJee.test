<?php include ROOT."/views/layout/header.php" ?>
	<?php if (isset($errors) && is_array($errors)): ?>
		<ul>
			<?php foreach($errors as $error): ?>
			<li>- <?php echo "$error"; ?></li>
			<?php endforeach;?>
		</ul>
	<?php endif; ?>
	<form action="" method="post">
		<div>
			<span>Name<label>*</label></span>
			<input type="text" name="name"> 
		</div>
		<div>
			<span>Password<label>*</label></span>
			<input type="password" name="password"> 
		</div>
		<input type="submit" name="submit" value="Вход" />
	</form>
<?php include ROOT."/views/layout/footer.php" ?>