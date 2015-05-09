<?php

namespace app\controllers;

use Yii;
use app\models\PriorityLevel;
use app\models\PriorityLevelSearch;
use app\controllers\BaseCrudController;

/**
 * PriorityLevelController implements the CRUD actions for PriorityLevel model.
 */
class PriorityLevelController extends BaseCrudController
{
	public function init()
	{
		$this->modelClass = PriorityLevel::className();
		$this->searchModelClass = PriorityLevelSearch::className();
	}
}
