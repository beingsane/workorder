<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="panel panel-default">
    <div class="panel-heading">
        <a data-toggle="collapse" href="#work-orders-filter">
            Filter
        </a>
        <?= Html::a('<span class="text-muted">Reset filter</span>', Url::previous(), ['class' => 'pull-right']) ?>
    </div>
    <div id="work-orders-filter" class="panel-collapse collapse out">
        <div class="panel-body">
            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>
</div>
