<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WorkOrder */

$this->title = 'Work Order '.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Work Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->id;
?>
<div class="work-order-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <div class="no-print">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        &nbsp;&nbsp;
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?= Html::a('Customers Details', ['customer/view-details', 'order_id' => $model->id, 'customer_name' => $model->client_name], ['data-pjax' => '0']) ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?= Html::a('History Details', ['work-order/history', 'WorkOrderSearch[client_name]' => $model->client_name], ['class' => 'text-nowrap', 'data-pjax' => '0']) ?>
        
        <div class="text-muted no-print pull-right">
            <?= Html::a('Print', '#', ['class' => 'text-nowrap print-button', 'data-pjax' => '0']) ?>
        </div>
    </div>
    <br/>
	
	
	<?php
		function show_attributes($model, $attributes)
		{
			$labels = $model->attributeLabels();
			foreach($attributes as $attribute)
			{
				?>
					<th class="col-md-2">
						<?= ($attribute ? Html::encode($labels[$attribute]) : '') ?>
					</th>
					<td class="col-md-2">
						<?= ($attribute ? Html::encode($model->$attribute) : '') ?>
					</td>
				<?php
			}
		}
	?>
	
	<table class="table table-bordered">
		<tr><?= show_attributes($model, ['id', 'date', 'status']) ?></tr>
	</table>
	
	<?php $labels = $model->attributeLabels(); ?>
	<table class="table table-bordered">
		<tr>
			<?php $attribute = 'company'; ?>
			<th class="col-md-2">
				<?= ($attribute ? Html::encode($labels[$attribute]) : '') ?>
			</th>
			<td colspan="5">
				<?= ($attribute ? Html::encode($model->$attribute) : '') ?>
			</td>
		</tr>
		<tr><?= show_attributes($model, ['client_name', 'work_type', 'priority']) ?></tr>
		<tr><?= show_attributes($model, ['assigned__taken_by', 'spec_information', '']) ?></tr>
		<tr><?= show_attributes($model, ['date_required', 'sale_date', '']) ?></tr>
	</table>
	
	<table class="table table-bordered">
		<tr>
			<?= show_attributes($model, ['photo_details', 'photo_location']) ?>
			
			<?php $attribute = 'photo_upload'; ?>
			<th class="col-md-2">
				<?= ($attribute ? Html::encode($labels[$attribute]) : '') ?>
			</th>
			<td class="col-md-2">
				<?= ($attribute ? '<a href="'.Html::encode($model->getFileUrl($model->$attribute)).'">'.Html::encode($model->$attribute).'</a>' : '') ?>
			</td>
		</tr>
		<tr><?= show_attributes($model, ['ad_specification', 'add_color', 'files_to_printer_by']) ?></tr>
	</table>
	
	<table class="table table-bordered">
		<tr><?= show_attributes($model, ['proof_to_client_by', 'send_proof_via', 'via_other']) ?></tr>
	</table>
	
	<table class="table table-bordered">
		<tr>
			<?php $attribute = 'other_ad_information'; ?>
			<th class="col-md-2">
				<?= ($attribute ? Html::encode($labels[$attribute]) : '') ?>
			</th>
			<td colspan="5">
				<?= ($attribute ? nl2br(Html::encode($model->$attribute)) : '') ?>
			</td>
		</tr>
	</table>
	
	<table class="table table-bordered">
		<tr><?= show_attributes($model, ['forward', 'article_name', 'article_location']) ?></tr>
		<tr>
			<?= show_attributes($model, ['other_sales_staff', 'other_title_page_info']) ?>
			
			<?php $attribute = 'other'; ?>
			<th class="col-md-2">
				<?= ($attribute ? Html::encode($labels[$attribute]) : '') ?>
			</th>
			<td>
				<?= ($attribute ? nl2br(Html::encode($model->$attribute)) : '') ?>
			</td>
		</tr>
	</table>
	
	<table class="table table-bordered">
		<tr>
			<?php $attribute = 'storage'; ?>
			<th class="col-md-2">
				<?= ($attribute ? Html::encode($labels[$attribute]) : '') ?>
			</th>
			<td colspan="5">
				<?= ($attribute ? Html::encode($model->$attribute) : '') ?>
			</td>
		</tr>
	</table>
	
</div>
