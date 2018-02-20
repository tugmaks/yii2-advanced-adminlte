<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */

use yii\base\View;


/**
 * @var View   $this    View object itself
 * @var string $content Something that should be rendered
 */
$this->beginContent('@backend/views/layouts/blank.php');
echo $this->render('_wrapper', ['content' => $content]);
$this->endContent();
