<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PriorityLevelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Priority Levels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priority-level-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => false],
        'columns' => [
            'id',
            'priority_level',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
