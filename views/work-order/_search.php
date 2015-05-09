<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WorkOrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="work-order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'wo') ?>

    <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::className(), ['dateFormat' => 'MM-dd-yyyy'])->textInput() ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'company') ?>

    <?= $form->field($model, 'client_name') ?>

    <?= $form->field($model, 'work_type') ?>

    <?= $form->field($model, 'priority') ?>
	
    <?= $form->field($model, 'assigned__taken_by') ?>

	<?= $form->field($model, 'sale_date')->widget(\yii\jui\DatePicker::className(), ['dateFormat' => 'MM-dd-yyyy'])->textInput() ?>
	
	
	
	
    <?php // echo $form->field($model, 'spec_information') ?>

    <?php // echo $form->field($model, 'date_required') ?>

    <?php // echo $form->field($model, 'photo_details') ?>

    <?php // echo $form->field($model, 'photo_location') ?>

    <?php // echo $form->field($model, 'photo_upload') ?>

    <?php // echo $form->field($model, 'ad_specification') ?>

    <?php // echo $form->field($model, 'add_color') ?>

    <?php // echo $form->field($model, 'other_ad_information') ?>

    <?php // echo $form->field($model, 'proof_to_client_by') ?>

    <?php // echo $form->field($model, 'send_proof_via') ?>

    <?php // echo $form->field($model, 'via_other') ?>

    <?php // echo $form->field($model, 'files_to_printer_by') ?>

    <?php // echo $form->field($model, 'catalogue_sale_name') ?>

    <?php // echo $form->field($model, 'sale_time') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'sale_phone_1') ?>

    <?php // echo $form->field($model, 'sale_phone_2') ?>

    <?php // echo $form->field($model, 'sale_phone_3') ?>

    <?php // echo $form->field($model, 'auctioneer') ?>

    <?php // echo $form->field($model, 'auctioneer_phone') ?>

    <?php // echo $form->field($model, 'auctioneer_cell') ?>

    <?php // echo $form->field($model, 'ringman_1') ?>

    <?php // echo $form->field($model, 'ringman_1_phone') ?>

    <?php // echo $form->field($model, 'ringman_1_cell') ?>

    <?php // echo $form->field($model, 'ringman_2') ?>

    <?php // echo $form->field($model, 'ringman_2_phone') ?>

    <?php // echo $form->field($model, 'ringman_2_cell') ?>

    <?php // echo $form->field($model, 'ringman_3') ?>

    <?php // echo $form->field($model, 'ringman_3_phone') ?>

    <?php // echo $form->field($model, 'ringman_3_cell') ?>

    <?php // echo $form->field($model, 'ringman_4') ?>

    <?php // echo $form->field($model, 'ringman_4_phone') ?>

    <?php // echo $form->field($model, 'ringman_4_cell') ?>

    <?php // echo $form->field($model, 'other_sales_staff') ?>

    <?php // echo $form->field($model, 'other_title_page_info') ?>

    <?php // echo $form->field($model, 'forward') ?>

    <?php // echo $form->field($model, 'other') ?>

    <?php // echo $form->field($model, 'article_name') ?>

    <?php // echo $form->field($model, 'article_location') ?>

    <?php // echo $form->field($model, 'storage') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Reset', ['index'], ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
