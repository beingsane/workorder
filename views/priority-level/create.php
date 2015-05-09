<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PriorityLevel */

$this->title = 'Create Priority Level';
$this->params['breadcrumbs'][] = ['label' => 'Priority Levels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priority-level-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
