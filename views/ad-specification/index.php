<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdSpecificationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ad Specifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-specification-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ad Specification', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ad_specifications',
            'user_level',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
