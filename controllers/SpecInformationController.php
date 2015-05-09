<?php

namespace app\controllers;

use Yii;
use app\models\SpecInformation;
use app\models\SpecInformationSearch;
use app\controllers\BaseCrudController;

/**
 * SpecInformationController implements the CRUD actions for SpecInformation model.
 */
class SpecInformationController extends BaseCrudController
{
	public function init()
	{
		$this->modelClass = SpecInformation::className();
		$this->searchModelClass = SpecInformationSearch::className();
	}
}
