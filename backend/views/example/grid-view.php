<?php

use yii\web\View;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;

/**
 * @var View              $this         View object itself
 * @var ArrayDataProvider $dataProvider Data provider object
 */
?>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Grid View Example</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <?= GridView::widget(
            [
                'dataProvider' => $dataProvider,
            ]
        );
        ?>
    </div>
</div>