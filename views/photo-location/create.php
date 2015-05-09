<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PhotoLocation */

$this->title = 'Create Photo Location';
$this->params['breadcrumbs'][] = ['label' => 'Photo Locations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-location-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
