<?php include ROOT."/views/layout/header.php" ?>
	<?php if($errors):?>
		<?php foreach($errors as $error):?>
		<?php echo "- $error"; ?>
		<?php endforeach; ?>
	<?php endif?>
	<h1>Добавление новой задачи</h1>
	<form class="form" action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Ваше имя</label>
			<input id="name" class="form-control" type="text" name="name">
		</div>
		<div class="form-group">
			<label>Ваш email</label>
			<input id="mail" class="form-control" type="email" name="email">
		</div>
		<div class="form-group">
			<label>Изображение</label>
			<input id="input-image" size="50" class="form-control" type="file" name="image" placeholder="" value=""/>
		</div>
		<div class="form-group">
			<label>Описание задачи</label>
			<textarea id="task" class="form-control" name="description"></textarea>
		</div>
		<input type="submit" name="submit" class="btn btn-success" value="Опубликовать">
		<a class="btn btn-danger" href="#modal" data-toggle="modal" onclick="prev()" href="">Просмотреть</a>
	</form>
<?php include ROOT."/views/layout/footer.php" ?>