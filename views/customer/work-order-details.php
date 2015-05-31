<?php

use yii\helpers\Html;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = $model->name.' - Work Order Details';
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Work Order Details';

?>
<div class="customer-work-orderr-details">

    <?php
        $customerDataProvider = new ArrayDataProvider(['allModels' => [$model]]);
    ?>
    <?= GridView::widget([
        'dataProvider' => $customerDataProvider,
		'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => false],
		'layout' => "{items}",
        'columns' => [
            'id',
            'name',
            'contact',
            'city',
            'address',
            'prov_state',
            'account_number',
            'telephone',
        ],
    ]); ?>
    
    <br/>
    <br/>
    
    <div class="table-info">
		<div class="pull-left"><?= Html::a('Add', ['create-work-order', 'id' => $model->id], ['class' => 'btn btn-success']) ?></div>
		<div class="title pull-right"><?= Html::encode($this->title) ?></div>
		
		<div class="clearfix"></div>
	</div>
    
    <?php echo $this->render('/work-order/_filter', ['searchModel' => $searchModel]); ?>
    
    <?php echo $this->render('/work-order/_table', ['dataProvider' => $dataProvider]); ?>
</div>
