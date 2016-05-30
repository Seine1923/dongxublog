<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = '小城故事';

?>
<!--首页图片展示-->
<div class="pro">
    <div class="common_title">
        <p>简单是最美的天籁</p>
        <i></i>
    </div>
    <div class="pro_con">
        <div class="btn btn_l">
            <i></i>
        </div>
        <div class="out">
            <ul>
                <li><a href="#"><img src="../images/IMG_1273.jpg" alt="" /></a></li>
                <li><a href="#"><img src="../images/IMG_1297.jpg" alt="" /></a></li>
                <li><a href="#"><img src="../images/IMG_1318.jpg" alt="" /></a></li>
                <li><a href="#"><img src="../images/IMG_1327.jpg" alt="" /></a></li>
                <li><a href="#"><img src="../images/pro1.jpg" alt="" /></a></li>
            </ul>
        </div>
        <div class="btn btn_r">
            <i></i>
        </div>
    </div>
    <a href="#" class="pro_more">查看更多<i></i></a>
</div>
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
