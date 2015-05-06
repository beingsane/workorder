<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WorkOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="work-order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'work_type')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'priority')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'client_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'assigned__taken_by')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'spec_information')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'date_required')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'sale_date')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'photo_details')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'photo_location')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'photo_upload')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ad_specification')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'add_color')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'other_ad_information')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'proof_to_client_by')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'send_proof_via')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'via_other')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'files_to_printer_by')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'catalogue_sale_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'sale_time')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'sale_phone_1')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'sale_phone_2')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'sale_phone_3')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'auctioneer')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'auctioneer_phone')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'auctioneer_cell')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ringman_1')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ringman_1_phone')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ringman_1_cell')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ringman_2')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ringman_2_phone')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ringman_2_cell')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ringman_3')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ringman_3_phone')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ringman_3_cell')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ringman_4')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ringman_4_phone')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'ringman_4_cell')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'other_sales_staff')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'other_title_page_info')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'forward')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'other')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'article_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'article_location')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'user_level')->textInput(['maxlength' => 50]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
