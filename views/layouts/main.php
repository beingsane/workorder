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
            <?php
                /*
                if (Url::previous() && Url::previous() != Yii::$app->request->url)
                {
                    $this->params['breadcrumbs'][] = [
                        'label' => '<span class="text-muted">Back</span>',
                        'url' => Url::previous(),
                        'template' => '<li class="pull-right back-link">{link}</li>',
                        'encode' => false,
                        'class' => 'pull-right',
                    ];
                }
                */
            ?>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
			<div class="row">
				<?php if (\Yii::$app->user->isGuest) : ?>
					<div class="col-md-12">
						<?= $content ?>
					</div>
				<?php else: ?>
					<div class="col-md-2">
						<?= $this->render('_left_menu.php') ?>
					</div>
					<div class="col-md-10">
						<?= $content ?>
					</div>
				<?php endif; ?>
			</div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; <?= date('Y') ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
    <script>
        $(document).ready(function() {
            $('.print-button').click(function() {
                window.print();
                $(this).blur();
                return false;
            });
        });
    </script>
</body>
</html>
<?php $this->endPage() ?>
