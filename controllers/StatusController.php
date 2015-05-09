<?php

namespace app\controllers;

use Yii;
use app\models\Status;
use app\models\StatusSearch;
use app\controllers\BaseCrudController;

/**
 * StatusController implements the CRUD actions for Status model.
 */
class StatusController extends BaseCrudController
{
    public function init()
	{
		$this->modelClass = Status::className();
		$this->searchModelClass = StatusSearch::className();
	}
}
