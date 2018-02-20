<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */

use backend\assets\AppAsset;
use yii\base\View;
use yii\helpers\Html;

/**
 * @var View   $this    View object itself
 * @var string $content Something that should be rendered
 */

AppAsset::register($this);
$this->beginPage()
?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <?php $this->head() ?>
    </head>
    <!-- ADD THE CLASS sidebar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
    <body class="hold-transition skin-blue fixed sidebar-mini">

    <?php $this->beginBody() ?>


    <?= $content ?>


    <?php $this->endBody() ?>

    </body>
    </html>
<?php $this->endPage() ?>