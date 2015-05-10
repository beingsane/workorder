<?php

namespace app\controllers;

use Yii;
use app\models\Customer;
use app\models\CustomerSearch;
use app\models\WorkOrder;
use app\controllers\BaseCrudController;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;

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
	
	public function actionViewDetails($customer_name, $order_id)
	{
		Yii::$app->session['main_page'] = Url::to(['view-details', 'customer_name' => $customer_name, 'order_id' => $order_id]);
		
		$queryCustomerName = Customer::find()->where(['name' => $customer_name]);
        $customerDataProvider = new ActiveDataProvider(['query' => $queryCustomerName]);
        $customerDataProvider->pagination = false;
		$customerDataProvider->sort = false;
		
		$queryWorkOrder = WorkOrder::find()->where(['id' => $order_id]);
        $workOrderDataProvider = new ActiveDataProvider(['query' => $queryWorkOrder]);
        $workOrderDataProvider->pagination = false;
		$workOrderDataProvider->sort = false;
		
		return $this->render('view-details', [
            'customerDataProvider' => $customerDataProvider,
			'workOrderDataProvider' => $workOrderDataProvider,
			'order_id' => $order_id,
			'customer_name' => $customer_name,
        ]);
	}
}
