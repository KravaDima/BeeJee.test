<!DOCTYPE HTML>
<html lang="ru">
	<head>
		<title>Приложение-задачник</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="/lib/css/bootstrap.min.css" rel="stylesheet">
	    <link href="/lib/js/themes/blue/style.css" rel="stylesheet">
	    <link href="/lib/css/style.css" rel="stylesheet">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="/lib/js/bootstrap.min.js"></script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
		<script src="/lib/js/jquery-latest.js"></script>
		<script src="/lib/js/prev.js"></script>
		<script src="/lib/js/jquery.tablesorter.js"></script>
		<script type="text/javascript">
			$(document).ready(function() 
			    { 
			        $("#myTable").tablesorter({headers: { 0: { sorter: false}, 3: {sorter: false}, 5: {sorter: false} }}); 
			    } 
			);
		</script>
	</head>
	<body>
	<!-- HTML-код модального окна -->
	<div id="modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<span>Предпросмотр!</span>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<img id="preview-img">
						<div class="col-xs-12 col-sm-6 col-md-8 col-lg-9">
							<div>Имя: <span id="prev-name"></span></div>
							<div>Email: <span id="prev-mail"></span></div>
						</div>			
						<dir class="clearfix"></dir>
						<div class="col-xs-12">
							<p>Задача:</p>
							<p id="prev-task"></p>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn btn-danger close" data-dismiss="modal" aria-hidden="true">Вернуться
					</div>
				</div>
			</div>
		</div>		
	</div>
	<div class="container">
		<nav class="navbar navbar-inverse" role="navigator">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
					<span class="sr-only">Toggle navigator</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">BeeJee</a>
			</div>
			<div class="collapse navbar-collapse" id="main-menu">
				<!-- Список ссылок, расположенных слева -->
				<ul class="nav navbar-nav">
					<li class="active"><a href="/">Главная<span class="sr-only">(current)</span></a></li>
				</ul>
				<!-- Список ссылок, расположенный справа -->
				<ul class="nav navbar-nav navbar-right">
					<? if(Admin::checkLogged()): ?>
						<li><a href="/admin/logout/">Выйти</a></li>
					<?php else: ?>
						<li><a href="/admin/login/">Войти</a></li>
					<? endif ?>
				</ul>
				<a href="/task/create" class="btn btn-primary navbar-btn">Добавить задачу</a>
			</div>
		</nav>
	