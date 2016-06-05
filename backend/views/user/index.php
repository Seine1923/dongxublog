<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '用户管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
            'header' => '编号'],
            'id',
            'username',
//            'auth_key',
//            'password_hash',
//            'password_reset_token',
            // 'email:email',
             'status',
             'created_at',
             'updated_at',
             'groups',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{check}{view}{update}{delete}',
                'buttons' => [
                    // 下面代码来自于 yii\grid\ActionColumn 简单修改了下
                    'check' => function ($url, $model, $key) {
                        $options = [
                            'title' => Yii::t('yii', 'Check'),
                            'aria-label' => Yii::t('yii', 'Check'),
                            'data-pjax' => '0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-ok"></span>', $url, $options);
                    },
                ]
            ],
        ],
    ]); ?>
</div>
