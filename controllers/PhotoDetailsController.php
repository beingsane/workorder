<?php

namespace app\controllers;

use Yii;
use app\models\PhotoDetails;
use app\models\PhotoDetailsSearch;
use app\controllers\BaseCrudController;

/**
 * PhotoDetailsController implements the CRUD actions for PhotoDetails model.
 */
class PhotoDetailsController extends BaseCrudController
{
	public function init()
	{
		$this->modelClass = PhotoDetails::className();
		$this->searchModelClass = PhotoDetailsSearch::className();
	}
}
