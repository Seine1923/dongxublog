<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = '小城故事';
?>
<div class="site-index">

<!--    <div class="jumbotron">-->
<!--        <h1>Congratulations!</h1>-->
<!---->
<!--        <p class="lead">You have successfully created your Yii-powered application.</p>-->
<!---->
<!--        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get start</a></p>-->
<!--    </div>-->
    <div class="body-content" >
        <div class="row">
            <div class="col-lg-4">
                <h2>最新公告</h2>
                <ol>
                    <?php foreach($topNews as $news): ?>
                    <li><?=Html::a($news->title)?></li>
                    <?php endforeach; ?>
                </ol>
                <p><a class="btn btn-default" href="">更多 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>最新新闻</h2>
                <ol>
                    <?php foreach($topNews as $news)?>
                        <li><?=Html::a($news->title)?></li>
                </ol>
                <p><a class="btn btn-default" href="">更多 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>娱乐新闻</h2>
                <ol>
                    <?php foreach($topNews as $news)?>
                    <li><?=Html::a($news->title)?></li>
                </ol>
                <p><a class="btn btn-default" href="">更多 &raquo;</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <h2>最新公告</h2>
                <ol>
                    <?php foreach($topNews as $news)?>
                    <li><?=Html::a($news->title)?></li>
                </ol>
                <p><a class="btn btn-default" href="">更多 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>最新新闻</h2>
                <ol>
                    <?php foreach($topNews as $news)?>
                    <li><?=Html::a($news->title)?></li>
                </ol>
                <p><a class="btn btn-default" href="">更多 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>娱乐新闻</h2>
                <ol>
                    <?php foreach($topNews as $news)?>
                    <li><?=Html::a($news->title)?></li>
                </ol>
                <p><a class="btn btn-default" href="">更多 &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
