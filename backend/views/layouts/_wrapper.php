<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */

use yii\base\View;

/**
 * @var View   $this    View object itself
 * @var string $content Something that should be rendered
 */
?>

<div class="wrapper">
    <?= $this->render('_main-header'); ?>
    <?= $this->render('_main-sidebar'); ?>
    <?= $this->render('_content', ['content' => $content]); ?>
    <?= $this->render('_main-footer') ?>
    <?= $this->render('_control-sidebar') ?>
</div>