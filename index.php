<?php

	// FRONT CONTROLLER

	// 1.Общме настройки
	session_start();

	
	// 2.Подключение файлов системы
	define("ROOT", dirname(__FILE__));	// абсолютный путь

	require_once(ROOT."/components/Autoload.php");

	// 3. Установка соединения с БД

	// 4. Вызов Router
	$router = new Router();
	$router->run();
