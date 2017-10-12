<?php
class Admin
{
	public static function checkName($name)
	{
		if (strlen($name) >= 2){
			return true;
		}
	}

	// проверяем существует ли пользователь
	public static function checkUserData($name, $password)
	{
		$db = Db::getConnection();

		$result = $db->prepare("SELECT * FROM user WHERE name = :name AND password = :password");
		$result->execute(array(":name" => $name, ":password" => $password));

		$user = $result->fetch();

		if ($user) {
			return $user['id'];
		}

		return false;
	}

	// запоминание пользователя
	public static function auth($userId)
	{
		$_SESSION['user'] = $userId;
	}

	// проверка залогинен пользователь или нет
	public static function checkLogged()
	{
		if (isset($_SESSION['user'])) {
			return $_SESSION['user'];
		}
	}

	// Получение инфо о пользователе
	public static function getUserById($userId)
	{	
		$db = Db::getConnection();

		$result = $db->prepare("SELECT * FROM user WHERE id = :id");
		$result->execute(array(":id" => $userId));

		$fetch = $result->fetch();

		return $fetch;
	}
}