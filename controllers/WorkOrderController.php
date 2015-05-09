<?php

namespace app\controllers;

use Yii;
use app\models\WorkOrder;
use app\models\WorkOrderSearch;
use app\controllers\BaseCrudController;

/**
 * WorkOrderController implements the CRUD actions for WorkOrder model.
 */
class WorkOrderController extends BaseCrudController
{
	public function init()
	{
		$this->modelClass = WorkOrder::className();
		$this->searchModelClass = WorkOrderSearch::className();
	}
}
