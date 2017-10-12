<?php
class IndexController
{
	public function actionIndex($page = 1)
	{
		$tasks = Task::getTasksList($page);
		$total = Task::getTotalTasks();
		$pagination = new Pagination($total, $page, Task::SHOW_BY_DEFAULT, "page-");

		require_once(ROOT . "/views/site/index.php");
		return true;
	}	
}