<?php
/**
 * Created by PhpStorm.
 * User: Hary
 * Date: 2016/5/23
 * Time: 17:06
 */
use yii\helpers\Html;
$this->params['breadcrumbs'][] ='最新文章';
?>

<div class="main">
    <div class="message-list">
        <table class="table table-hover">
            <!--<caption>新闻动态</caption>-->
            <thead>
            <tr>
                <th>标题</th>
                <th>日期</th>
            </tr>
            </thead>
            <tbody style="background-color: #00b3ee">
            <?php foreach ($latestArticle as $line):?>
                <tr>
                    <td><?=Html::a($line->title,['news/display','id'=>$line->id,'title'=>$line->title])?></td>
                    <td><?=$line->time?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
