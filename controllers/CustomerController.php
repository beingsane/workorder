<?php

namespace app\controllers;

use Yii;
use app\models\Customer;
use app\models\CustomerSearch;
use app\controllers\BaseCrudController;

/**
 * CustomerController implements the CRUD actions for Customer model.
 */
class CustomerController extends BaseCrudController
{
	public function init()
	{
		$this->modelClass = Customer::className();
		$this->searchModelClass = CustomerSearch::className();
	}
}
