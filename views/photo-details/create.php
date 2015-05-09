<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PhotoDetails */

$this->title = 'Create Photo Details';
$this->params['breadcrumbs'][] = ['label' => 'Photo Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
