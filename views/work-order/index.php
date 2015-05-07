<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WorkOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Work Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-order-index">

	<br/>
    <h3><?= Html::encode('Table: Work Orders') ?></h3>
	<br/>
	
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<a data-toggle="collapse" href="#work-orders-filter">
				Filter
			</a>
			<?= Html::a('Reset filter', ['index'], ['class' => 'pull-right']) ?>
		</div>
		<div id="work-orders-filter" class="panel-collapse collapse out">
			<div class="panel-body">
				<?php echo $this->render('_search', ['model' => $searchModel]); ?>
			</div>
		</div>
	</div>
	

    <p>
        <?= Html::a('Add', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	<br/>
	<br/>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'wo',
            'status',
			'client_name',
			'work_type',
            'priority',
            'assigned__taken_by',
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
            // 'user_level',

			[
				'class' => 'yii\grid\ActionColumn',
				'template' => '{info}',
				'buttons' => [
					'info' => function ($url, $model, $key) {
						$html = '';
						
						$html .= Html::a('Customers Details', ['client/view', 'client_name' => $model->client_name], [
							'data-pjax' => '0',
						]);
						$html .= '<br/>';
						$html .= Html::a('Proofing Details', ['work-order/view', 'id' => $model->wo], [
							'data-pjax' => '0',
						]);
						$html .= '<br/>';
						$html .= Html::a('Customers Details', ['work-order/index', 'WorkOrderSearch[client_name]' => $model->client_name], [
							'data-pjax' => '0',
						]);
						
						return $html;
					},
				]
			],
			
            [
				'class' => 'yii\grid\ActionColumn',
				'template' => '{view}<br/>{update}<br/>{delete}',
				'buttons' => [
					'update' => function ($url, $model, $key) {
						return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
							'title' => 'Edit',
							'data-pjax' => '0',
						]);
					}
				]
			],
			
        ],
    ]); ?>

</div>
