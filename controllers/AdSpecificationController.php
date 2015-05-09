<?php

namespace app\controllers;

use Yii;
use app\models\AdSpecification;
use app\models\AdSpecificationSearch;
use app\controllers\BaseCrudController;

/**
 * AdSpecificationController implements the CRUD actions for AdSpecification model.
 */
class AdSpecificationController extends BaseCrudController
{
	public function init()
	{
		$this->modelClass = AdSpecification::className();
		$this->searchModelClass = AdSpecificationSearch::className();
	}
}
