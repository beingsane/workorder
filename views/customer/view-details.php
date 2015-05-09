<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = $customer_name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-details">

    <h6><?= Html::encode($this->title) ?></h6>

	<br/>
	<br/>
	Work order:
	<br/>
	
	<?= GridView::widget([
        'dataProvider' => $workOrderDataProvider,
		'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => false],
		'layout' => "{items}",
        'columns' => [
            'id',
            'status',
			'client_name',
			'work_type',
            'priority',
			'assigned__taken_by:text:Assigned',
            'date_required',
        ],
    ]); ?>
	
	<br/>
	<br/>
	Customer:
	<br/>
	
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
	
</div>
