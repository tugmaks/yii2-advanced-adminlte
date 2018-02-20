<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */


namespace backend\controllers;

use yii\web\Controller;
use yii\data\ArrayDataProvider;

/**
 * Class ExampleController
 */
class ExampleController extends Controller
{
    /**
     * Grid view example
     *
     * @return string
     */
    public function actionGridView(): string
    {
        $arrayDataProvider = new ArrayDataProvider(
            [
                'allModels'  => [
                    ['id' => 1, 'name' => 'Afghanistan', 'population' => 29724323],
                    ['id' => 2, 'name' => 'Bulgaria', 'population' => 7101859],
                    ['id' => 3, 'name' => 'Canada', 'population' => 37024400],
                    ['id' => 4, 'name' => 'Germany', 'population' => 82521653],
                    ['id' => 5, 'name' => 'Kazakhstan', 'population' => 18157100],
                    ['id' => 6, 'name' => 'Mexico', 'population' => 123982528],
                    ['id' => 7, 'name' => 'Palau', 'population' => 17800],
                    ['id' => 8, 'name' => 'San Marino', 'population' => 33290],
                    ['id' => 9, 'name' => 'Thailand', 'population' => 66061000],
                    ['id' => 10, 'name' => 'Zimbabwe', 'population' => 14542235],
                ],
                'sort'       => [
                    'attributes'   => ['id', 'name', 'population'],
                    'defaultOrder' => ['id' => SORT_ASC],
                ],
                'key'        => 'id',
                'pagination' => [
                    'pageSize' => 5,
                ],
            ]
        );

        return $this->render('grid-view', ['dataProvider' => $arrayDataProvider]);
    }
}