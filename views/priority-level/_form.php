<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PriorityLevel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="priority-level-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'priority_level')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'user_level')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
