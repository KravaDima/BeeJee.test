<?php include ROOT."/views/layout/header.php" ?>
	<h1>Список задач</h1>
	<table id="myTable" class="table table-striped tablesorter">
		<thead>
		<tr>
			<th>Картинка</th>
			<th>Имя пользователя</th>
			<th>e-mail</th>
			<th>Текст задачи</th>
			<th>Статус задачи</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach($tasks as $task):?>
		<tr>
			<td><img src="<?=$task['img']?>" alt="Task" class="img-circle"></td>
			<td><?=$task['name']?></td>
			<td><?=$task['email']?></td>
			<td><?=$task['description']?></td>
			<td><?=$task['status']?></td>
			<td>
				<a class="btn btn-default" href="/task/view/<?=$task['id']?>"><span class="glyphicon glyphicon-eye-open"></span> Просмотр</a>
				<? if(Admin::checkLogged()): ?>
					<a class="btn btn-danger" href="/task/edit/<?=$task['id']?>"><span class="glyphicon glyphicon-pencil"></span> Изменить</a>
				<? endif ?>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	<?php echo $pagination->get(); ?>
<?php include ROOT."/views/layout/footer.php" ?>