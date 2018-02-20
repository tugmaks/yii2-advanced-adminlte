<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */

use yii\base\View;
use yii\widgets\Breadcrumbs;

/**
 * @var View   $this    View object itself
 * @var string $content Something that should be rendered
 */
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $this->title ?>
        </h1>
        <?= Breadcrumbs::widget(
            [
                'tag'          => 'ol',
                'links'        => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ); ?>
    </section>

    <!-- Main content -->
    <section class="content">
        <?= $content ?>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
