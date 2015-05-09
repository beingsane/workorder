<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
			]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
		'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => false],
        'attributes' => [
            'id',
            'account_number',
            'name',
            'contact',
            'address',
            'city',
            'prov_state',
            'postal_zip',
            'telephone',
            'fax',
            'email:email',
            'website',
            'billing_instructions',
            'shipping_instructions',
            'contract_expires',
        ],
    ]) ?>

</div>
