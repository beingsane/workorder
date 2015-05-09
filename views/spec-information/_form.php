<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SpecInformation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="spec-information-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'spec_information')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'user_level')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
