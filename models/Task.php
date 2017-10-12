<?php
class Task
{
	const SHOW_BY_DEFAULT = 3; // количество задач для пагинации

	/**
	* Метод получения списка задач
	* @return array
	*/
	public static function getTasksList($page = 1)
	{
		$page = intval($page);
		$offset = ($page - 1) * 3;

		$tasks = array();
		$db = Db::getConnection();
		$sql = "SELECT * FROM tasks ORDER BY id DESC LIMIT " . self::SHOW_BY_DEFAULT . " OFFSET $offset";
		$result = $db->query($sql);

		$i = 0;

		while ($row = $result->fetch()) {
			$tasks[$i]["id"] = $row['id'];
			$tasks[$i]["img"] = $row['img'];
			$tasks[$i]["name"] = $row['name'];
			$tasks[$i]["email"] = $row['email'];
			$tasks[$i]["description"] = $row['description'];
			$tasks[$i]["status"] = $row['status'];
			$i++;
		}

		return $tasks;
	}

	/**
	* Получение количества задач
	* @return array
	*/
	public static function getTotalTasks()
	{
		$db = Db::getConnection();
		$result = $db->query("SELECT count(id) AS count FROM tasks");
		$row = $result->fetch();

		return $row['count'];
	}

	/**
	* Добавление новой задачи
	* @return true
	*/
	public static function createTask($array)
	{
		$db = Db::getConnection();
		$name = $array['name'];
		$email = $array['email'];
		$description = $array['description'];
		$img = $array['img'];
		$sth = $db->prepare("INSERT INTO tasks(name, email, description, img) VALUES(:name, :email, :description, :img)");

		$result = $sth->execute(array(":name" => $name, ":email" => $email, ":description" => $description, ":img" => $img));
		// если запрос выполнен успешно, возвращаем ИД последнего товара
		if ($result) {
			$id = $db->lastInsertId();
			return $id;
		}
				
		// Иначе возвращаем 0
		return 0;
	}

	/**
	* Получение данных конкретной задачи
	* @return array
	*/
	public static function getTask($id)
	{
		$db = Db::getConnection();
		$result = $db->prepare("SELECT * FROM tasks WHERE id = :id");
		$result->execute(array(":id" => $id));
		$res = $result->fetch();
		return $res;
	}

	/**
	* Обновление статуса задачи
	* @return $id
	*/
	public static function updateTask($status, $task)
	{
		$db = Db::getConnection();
		$sth = $db->prepare("UPDATE tasks SET status = :status WHERE id =".$task);
		$result = $sth->execute(array(":status" => $status));
		return $result;
	}
}