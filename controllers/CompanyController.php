<?php

namespace app\controllers;

use Yii;
use app\models\Company;
use app\models\CompanySearch;
use app\controllers\BaseCrudController;

/**
 * CompanyController implements the CRUD actions for Company model.
 */
class CompanyController extends BaseCrudController
{
	public function init()
	{
		$this->modelClass = Company::className();
		$this->searchModelClass = CompanySearch::className();
	}
}
