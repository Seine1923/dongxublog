<?php
/**
 * Created by PhpStorm.
 * User: Hary
 * Date: 2016/5/23
 * Time: 18:42
 */
use yii\helpers\Html;
$this->params['breadcrumbs'][] = '最新文章';
?>

<div class="panel">
    <article>
        <header>
            <h1><?=Html::encode($model->title)?></h1>
</header>
<?=$model->content?>
<footer>
    <p>
        <span>作者：<?=Html::encode($model->author)?></span>
        <span>时间：<?=Html::encode($model->time)?></span>
    </p>
</footer>
</article>
</div>
