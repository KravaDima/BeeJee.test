<?php
	// роуты состоят из запроса и строки
	return array(
		"page-([0-9]+)" => "index/index/$1",
		"" => "index/index",
		// добавление новой задачи
		"task/create" => "task/create",
		// админ кабинет
		"admin" => "admin/index",
		// авторизация
		"admin/login" => "admin/login",
		// просмотр заданий
		"task/view/([0-9]+)" => "task/view/$1",
		// редактирование заданий
		"task/edit/([0-9]+)" => "task/edit/$1"
	);