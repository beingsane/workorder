<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WorkOrder */

$this->title = $model->wo;
$this->params['breadcrumbs'][] = ['label' => 'Work Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->wo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->wo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'wo',
            'date',
            'company',
            'work_type',
            'priority',
            'client_name',
            'assigned__taken_by',
            'spec_information',
            'date_required',
            'sale_date',
            'photo_details',
            'photo_location',
            'photo_upload',
            'ad_specification',
            'add_color',
            'other_ad_information:ntext',
            'proof_to_client_by',
            'send_proof_via',
            'via_other',
            'files_to_printer_by',
            'catalogue_sale_name',
            'sale_time',
            'location',
            'sale_phone_1',
            'sale_phone_2',
            'sale_phone_3',
            'auctioneer',
            'auctioneer_phone',
            'auctioneer_cell',
            'ringman_1',
            'ringman_1_phone',
            'ringman_1_cell',
            'ringman_2',
            'ringman_2_phone',
            'ringman_2_cell',
            'ringman_3',
            'ringman_3_phone',
            'ringman_3_cell',
            'ringman_4',
            'ringman_4_phone',
            'ringman_4_cell',
            'other_sales_staff',
            'other_title_page_info',
            'forward',
            'other:ntext',
            'status',
            'article_name',
            'article_location',
            'storage',
        ],
    ]) ?>

</div>
