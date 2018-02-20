<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */

use yii\base\View;
use Tugmaks\AdminLTE\Assets\Menu;

/**
 * @var View $this View object itself
 */
?>

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://www.gravatar.com/avatar/<?= md5(
                    strtolower(trim(\Yii::$app->user->identity->email))
                ) ?>&s=160" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= \Yii::$app->user->identity->username ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <?= Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu', 'data' => ['widget' => 'tree']],
                'items'   => [
                    [
                        'label' => 'MAIN NAVIGATION', 'options' => ['class' => 'header'],
                    ],
                    [
                        'label'  => 'Dashboard',
                        'url'    => ['/site/index'],
                        'prefix' => '<i class="fa fa-dashboard"></i>',
                    ],
                    [
                        'label'   => 'Nested Menu #1',
                        'options' => ['class' => 'treeview'],
                        'prefix'  => '<i class="fa fa-files-o"></i>',
                        'suffix'  => '<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>',
                        'items'   => [
                            [
                                'label'  => 'GridView',
                                'url'    => ['/example/grid-view'],
                                'prefix' => '<i class="fa fa-circle-o"></i>',
                            ],
                            [
                                'label'  => 'link2',
                                'prefix' => '<i class="fa fa-circle-o"></i>',
                            ],
                        ],
                    ],
                    [
                        'label'   => 'Nested Menu #2',
                        'options' => ['class' => 'treeview'],
                        'prefix'  => '<i class="fa fa-files-o"></i>',
                        'suffix'  => '<span class="pull-right-container"><span class="label label-primary pull-right">2</span></span>',
                        'items'   => [
                            [
                                'label' => 'link1',
                            ],
                            [
                                'label' => 'link2',
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>
    </section>
</aside>
