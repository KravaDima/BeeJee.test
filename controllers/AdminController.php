<?php

/**
* Контроллер AdminController
* главная страница в АдминПанеле
*/
class AdminController extends AdminBase
{
	/**
	*Action для стартовой страницы "Панели администратора"
	*/
	public function actionIndex()
	{
		// проверка доступа
		self::checkAdmin();

		//подключаем вид
		require_once(ROOT . "/views/admin/index.php");
		return true;
	}

	public static function actionLogin()
	{
		$name = "";
		$password = "";

		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$password = $_POST['password'];

			$errors = false;

			// Проверяем существует ли пользователь
			$userId = Admin::checkUserData($name, $password);

			if ($userId == false) {
				// если данные неверные то показываем ошибку
				$errors[] = "Неверные данные для входа на сайт";
			} else {
				// если даныне правильные то запоминаем пользователя в сессию
				Admin::auth($userId);
				// перенаправялем пользователя на кабинет
				header("Location: /admin/index");
			}
		}
		require_once(ROOT . "/views/admin/login.php");
		return true;
	}

	public function actionLogout()
	{
		unset($_SESSION['user']);
		header("Location: /");
	}
}