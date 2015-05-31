<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => false],
    'columns' => [
        'id',
        'status',
        'client_name',
        'work_type',
        'priority',
        'assigned__taken_by:text:Assigned',
        'date_required',
        // 'date',
        // 'company',
        // 'spec_information',
        // 'sale_date',
        // 'photo_details',
        // 'photo_location',
        // 'photo_upload',
        // 'ad_specification',
        // 'add_color',
        // 'other_ad_information:ntext',
        // 'proof_to_client_by',
        // 'send_proof_via',
        // 'via_other',
        // 'files_to_printer_by',
        // 'catalogue_sale_name',
        // 'sale_time',
        // 'location',
        // 'sale_phone_1',
        // 'sale_phone_2',
        // 'sale_phone_3',
        // 'auctioneer',
        // 'auctioneer_phone',
        // 'auctioneer_cell',
        // 'ringman_1',
        // 'ringman_1_phone',
        // 'ringman_1_cell',
        // 'ringman_2',
        // 'ringman_2_phone',
        // 'ringman_2_cell',
        // 'ringman_3',
        // 'ringman_3_phone',
        // 'ringman_3_cell',
        // 'ringman_4',
        // 'ringman_4_phone',
        // 'ringman_4_cell',
        // 'other_sales_staff',
        // 'other_title_page_info',
        // 'forward',
        // 'other:ntext',
        // 'article_name',
        // 'article_location',
        // 'storage',

        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{info}',
            'buttons' => [
                'info' => function ($url, $model, $key) {
                    $html = '';
                    
                    $html .= Html::a('Customers Details', ['customer/view-details', 'order_id' => $model->id, 'customer_name' => ''.$model->client_name], ['data-pjax' => '0']);
                    $html .= '<br/>';
                    //$html .= Html::a('Proofing Details', ['work-order/view', 'id' => $model->id], ['class' => 'text-nowrap', 'data-pjax' => '0']);
                    //$html .= '<br/>';
                    $html .= Html::a('History Details', ['work-order/history', 'WorkOrderSearch[client_name]' => $model->client_name], ['class' => 'text-nowrap', 'data-pjax' => '0']);
                    
                    return $html;
                },
            ]
        ],
        
        [
            'class' => 'yii\grid\ActionColumn',
            'controller' => 'work-order',
            'template' => '{view}<br/>{update}<br/>{delete}',
        ]
    ],
]); ?>
