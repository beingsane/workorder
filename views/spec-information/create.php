<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SpecInformation */

$this->title = 'Create Spec Information';
$this->params['breadcrumbs'][] = ['label' => 'Spec Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spec-information-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
