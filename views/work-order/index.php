<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WorkOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Work Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-order-index">

	<div class="table-info">
		<div class="pull-left"><?= Html::a('Add', ['workorder/create'], ['class' => 'btn btn-success']) ?></div>
		<div class="title pull-right"><?= Html::encode($this->title) ?></div>
		
		<div class="clearfix"></div>
	</div>
	
	<?php echo $this->render('_filter', ['searchModel' => $searchModel]); ?>
    
    <?php echo $this->render('_table', ['dataProvider' => $dataProvider]); ?>
</div>
