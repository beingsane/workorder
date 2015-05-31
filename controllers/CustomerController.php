<?php

namespace app\controllers;

use Yii;
use app\models\Customer;
use app\models\CustomerSearch;
use app\models\WorkOrder;
use app\models\WorkOrderSearch;
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
		Url::remember(
            Url::to(['view-details', 'customer_name' => $customer_name, 'order_id' => $order_id])
        );
		
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
    
    public function actionWorkOrderDetails($id)
    {
        Url::remember(Url::to(['work-order-details', 'id' => $id]));
		
        $model = $this->findModel($id);
        $searchModel = new WorkOrderSearch();
        $params = array_merge_recursive(
            Yii::$app->request->queryParams,
            ['WorkOrderSearch' => ['client_name' => $model->name]]
        );
        $searchModel->disabledFields = ['client_name' => 1];
        $dataProvider = $searchModel->search($params);

        return $this->render('work-order-details', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionCreateWorkOrder($id)
    {
        $model = $this->findModel($id);
        
        $workOrderModel = new WorkOrder();
        $workOrderModel->client_name = $model->name;
        $workOrderModel->disabledFields = ['client_name' => 1];

        if ($workOrderModel->load(Yii::$app->request->post()) && $workOrderModel->save()) {
            return $this->redirect(Url::previous());
        } else {
            return $this->render('/work-order/create', [
                'model' => $workOrderModel,
            ]);
        }
    }
}
