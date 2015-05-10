<?php

namespace app\controllers;

use Yii;
use app\models\WorkOrder;
use app\models\WorkOrderSearch;
use app\controllers\BaseCrudController;
use yii\helpers\Url;

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
	
	public function actionHistory()
	{
		Yii::$app->session['main_page'] = Url::to(['history']);
		
        $searchModel = new $this->searchModelClass();
		$params = Yii::$app->request->queryParams;
		$params['WorkOrderSearch']['storage'] = 'Yes';
        $dataProvider = $searchModel->search($params);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
	}
}
