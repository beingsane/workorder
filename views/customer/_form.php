<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account_number')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'contact')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'prov_state')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'postal_zip')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'telephone')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'billing_instructions')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'shipping_instructions')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'contract_expires')->textInput(['maxlength' => 50]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
