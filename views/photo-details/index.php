<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhotoDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Photo Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Photo Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'photo_details',
            'user_level',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>