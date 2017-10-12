<?php include ROOT."/views/layout/header.php" ?>
	<div class="row">
		<img class="col-xs-12 col-sm-6 col-md-4 col-lg-3" src="<?=$task['img']?>">
		<div class="col-xs-12 col-sm-6 col-md-8 col-lg-9">
			<div>Имя: <?=$task['name']?></div>
			<div>Email: <?=$task['email']?></div>
		</div>			
		<dir class="clearfix"></dir>
		<div class="col-xs-12">
			<p>Задача:</p>
			<p><?=$task['description']?></p>
		</div>
	</div>
	<a class="btn btn-danger" href="/"><span class="glyphicon glyphicon-arrow-left"></span> Назад</a>
<?php include ROOT."/views/layout/footer.php" ?>