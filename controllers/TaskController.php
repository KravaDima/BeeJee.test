<?php
class TaskController
{
	public static function actionCreate()
	{
		// массив по товару
		$options = array();

		// если форма отправлена
		if (isset($_POST['submit'])) {
			// получаем данные из формы
			$options['name'] = $_POST['name'];
			$options['email'] = $_POST['email'];
			$options['description'] = $_POST['description'];
			$options['img'] = "";
			$image = $_FILES['image'];
			$imageType = $image['type'];
			// флаг ошибок в форме
			$errors = false;

			if (!isset($options['name']) || empty($options['name'])) {
				$errors[] = "Некорректно заполнено поле!";
			}
			if (!isset($options['email']) || empty($options['email'])) {
				$errors[] = "Некорректно заполнено поле!";
			}
			if (!($imageType == 'image/jpeg' || $imageType == 'image/png' || $imageType == 'image/gif')) {
				$errors[] = "Неверное разрешение картинки! Допустимые значения - *.jpg, *.png, *.gif";
			}

			if ($errors == false) {
				// если ошибок нет
				// Добавляем новую задачу
				// Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/tasks/" . time() . ".jpg");
                    $options['img'] = "/upload/images/tasks/" . time() . ".jpg";
                }
				$id = Task::createTask($options);
				// если товар добавлен
				if ($id) {
                 	// перенаправляем на страницу с задачами
					header("Location: /");  
                };
			}
		}

		// подключаем вид
		require_once(ROOT . "/views/tasks/create.php");
		return true;
	}

	public static function actionView($id)
	{
		$task = Task::getTask($id);
		require_once(ROOT . "/views/tasks/view.php");
		return true;
	}

	public static function actionEdit($id)
	{
		$task = Task::getTask($id);
		if (isset($_POST['submit'])) {
			$status = $_POST['status'];
			if ($id = Task::updateTask($status, $id)){
				header("Location: /");
			}
		}
		require_once(ROOT . "/views/tasks/edit.php");
		return true;
	}
}