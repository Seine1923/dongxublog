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

<style type="text/css">

    div#header {background-color:#99bbbb;}
    div#menu {background-color:#ffff99;height:200px;width:150px;float:left;}
    div#content {background-color:#EEEEEE;}
    div#footer {background-color:#99bbbb;clear:both;text-align:center;}
    h1 {margin-bottom:0;}
    h2 {margin-bottom:0;font-size:18px;}
    ul {margin:0;}
    li {list-style:none;}
</style>

<div id="container">
    <div id="header">
        <h1 align="center", style="font-weight: bold"><?=Html::encode($model->title)?></h1>
    </div>

    <div id="content"><?=$model->content?></div>

    <div id="footer">
        <p align="right">
            <span>作者：<?=Html::encode($model->author)?></span>
            <a>&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <span>时间：<?=Html::encode($model->time)?></span>
        </p>
    </div>
</div>