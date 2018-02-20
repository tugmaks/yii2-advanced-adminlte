<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */

use yii\base\View;
use yii\helpers\Html;

/**
 * @var View $this View object itself
 */
?>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.

    <p class="pull-left">&copy; <?= Html::encode(\Yii::$app->name) ?> <?= date('Y') ?></p>

    <p class="pull-right"><?= \Yii::t(
            'yii',
            'Powered by {yii}',
            [
                'yii' => '<a href="http://www.yiiframework.com/" rel="external">' . \Yii::t(
                        'yii',
                        'Yii Framework'
                    ) . '</a>',
            ]
        ); ?></p>
</footer>
