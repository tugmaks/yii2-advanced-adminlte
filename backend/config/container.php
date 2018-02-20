<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */

return [
    'singletons' => [
        \Tugmaks\AdminLTE\Assets\Bower\JqueryAsset::class          => \yii\web\JqueryAsset::class,
        \Tugmaks\AdminLTE\Assets\Bower\BootstrapPluginAsset::class => \yii\bootstrap\BootstrapPluginAsset::class,
        \Tugmaks\AdminLTE\Assets\Bower\BootstrapAsset::class       => \yii\bootstrap\BootstrapAsset::class,
    ],
];
