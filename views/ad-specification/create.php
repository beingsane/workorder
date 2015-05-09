<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AdSpecification */

$this->title = 'Create Ad Specification';
$this->params['breadcrumbs'][] = ['label' => 'Ad Specifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-specification-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
