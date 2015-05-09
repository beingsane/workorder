<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<link rel="icon" type="image/gif" href="<?= Url::home() ?>img/database.gif"/>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => '<div class="text-nowrap"><img alt="Work Order System" src="'.Url::home().'img/database.gif">&nbsp;&nbsp;Work Order System</div>',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top navbar-main',
                ],
            ]);
			
			$items = [
				['label' => 'Home', 'url' => ['/']],
				Yii::$app->user->isGuest ?
					['label' => 'Login', 'url' => ['/user/login']] :
					['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
						'url' => ['/user/logout'],
						'linkOptions' => ['data-method' => 'post']],
			];
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $items,
            ]);
            NavBar::end();
        ?>

		
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
			<div class="row">
				<div class="col-md-2">
					<div class="nav-tables">
						<a href="<?= Url::to(['ad-specification/']) ?>">Ad Specifications</a><br/>
						<a href="<?= Url::to(['company/']) ?>">Company</a><br/>
						<a href="<?= Url::to(['customer/']) ?>">Customers</a><br/>
						<a href="">- Delivery</a><br/>
						<a href="">- Forward</a><br/>
						<a href="<?= Url::to(['photo-details/']) ?>">Photo Details</a><br/>
						<a href="<?= Url::to(['photo-location/']) ?>">Photo Locations</a><br/>
						<a href="<?= Url::to(['priority-level/']) ?>">Priority Level</a><br/>
						<a href="">- Proofing</a><br/>
						<a href="<?= Url::to(['spec-information/']) ?>">Spec Information</a><br/>
						<a href="<?= Url::to(['status/']) ?>">Status</a><br/>
						<a href="">-| Users</a><br/>
						<a href="<?= Url::to(['work-order-type/']) ?>">Work Order Type</a><br/>
						<a href="<?= Url::to(['work-order/']) ?>">Work Orders</a><br/>
						<a href="">-- User Level Permissions</a><br/>
						<a href="">-- User Levels</a><br/>
						<a href="">-| History</a><br/>
					</div>
				</div>
				<div class="col-md-10">
					<?= $content ?>
				</div>
			</div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; <?= date('Y') ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
