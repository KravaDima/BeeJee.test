<?php include ROOT."/views/layout/header.php" ?>
	<div class="row">
		<div class="col-sx-6">Имя: <?=$task['name']?></div>
		<div class="col-sx-6">Email: <?=$task['email']?></div>			
			
		<dir class="clearfix"></dir>
		<div class="col-sx-6">
			<p>Задача:</p>
			<p><?=$task['description']?></p>
		</div>
	</div>
	<form class="form" action="" method="post" enctype="multipart/form-data">
		<p>
			<select class="form-control" name="status">
				<option value="0">Невыполнено</option>
				<option <?=$task['status']? 'selected' : "" ?> value="1">Выполнено</option>
			</select>
		</p>
		<input class="btn btn-danger" name="submit" type="submit" value="Сохранить">
	</form>
	
	<a class="btn btn-default" href="/"><span class="glyphicon glyphicon-arrow-left"></span> Назад</a>
	
<?php include ROOT."/views/layout/footer.php" ?>