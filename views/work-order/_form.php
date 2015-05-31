<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\helpers\DropDownItems;

/* @var $this yii\web\View */
/* @var $model app\models\WorkOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="work-order-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?= $form->field($model, 'date')->widget(\yii\jui\DatePicker::className(), ['dateFormat' => 'MM-dd-yyyy'])->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'status')->dropDownList(DropDownItems::getItems('app\models\Status', 'status')) ?>

    <?= $form->field($model, 'company')->dropDownList(DropDownItems::getItems('app\models\Company', 'company')) ?>

    <?php
        $field = $form->field($model, 'client_name');
        $options = [];
        if ($model->disabledFields['client_name'])
            $options = ['disabled' => 'disabled'];
        $field->dropDownList(DropDownItems::getItems('app\models\Customer', 'name', 'name'), $options);
        echo $field;
    ?>

    <?= $form->field($model, 'work_type')->dropDownList(DropDownItems::getItems('app\models\WorkOrderType', 'work_order_type')) ?>

    <?= $form->field($model, 'priority')->dropDownList(DropDownItems::getItems('app\models\PriorityLevel', 'priority_level')) ?>

    <?= $form->field($model, 'assigned__taken_by')->dropDownList(DropDownItems::getUsers()) ?>

    <?= $form->field($model, 'spec_information')->dropDownList(DropDownItems::getItems('app\models\SpecInformation', 'spec_information')) ?>

    <?= $form->field($model, 'date_required')->widget(\yii\jui\DatePicker::className(), ['dateFormat' => 'MM-dd-yyyy'])->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'sale_date')->widget(\yii\jui\DatePicker::className(), ['dateFormat' => 'MM-dd-yyyy'])->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'photo_details')->dropDownList(DropDownItems::getItems('app\models\PhotoDetails', 'photo_details')) ?>

    <?= $form->field($model, 'photo_location')->dropDownList(DropDownItems::getItems('app\models\PhotoLocation', 'photo_locations')) ?>

    <?= $form->field($model, 'photo_file')->fileInput() ?>

    <?= $form->field($model, 'ad_specification')->dropDownList(DropDownItems::getItems('app\models\AdSpecification', 'ad_specifications')) ?>

    <?= $form->field($model, 'add_color')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'other_ad_information')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'proof_to_client_by')->widget(\yii\jui\DatePicker::className(), ['dateFormat' => 'MM-dd-yyyy'])->textInput(['maxlength' => 50]) ?>

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

    <?= $form->field($model, 'article_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'article_location')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'storage')->dropDownList(['No' => 'No', 'Yes' => 'Yes']) ?>

    <?= $form->field($model, 'other')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
