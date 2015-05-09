<?php

namespace app\controllers;

use Yii;
use app\models\WorkOrderType;
use app\models\WorkOrderTypeSearch;
use app\controllers\BaseCrudController;

/**
 * WorkOrderTypeController implements the CRUD actions for WorkOrderType model.
 */
class WorkOrderTypeController extends BaseCrudController
{
	public function init()
	{
		$this->modelClass = WorkOrderType::className();
		$this->searchModelClass = WorkOrderTypeSearch::className();
	}
}
