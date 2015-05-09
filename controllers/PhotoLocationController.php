<?php

namespace app\controllers;

use Yii;
use app\models\PhotoLocation;
use app\models\PhotoLocationSearch;
use app\controllers\BaseCrudController;

/**
 * PhotoLocationController implements the CRUD actions for PhotoLocation model.
 */
class PhotoLocationController extends BaseCrudController
{
	public function init()
	{
		$this->modelClass = PhotoLocation::className();
		$this->searchModelClass = PhotoLocationSearch::className();
	}
}
