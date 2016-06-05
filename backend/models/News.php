<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $type
 * @property string $time
 * @property string $author
 * @property integer $top_level
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'type', 'author'], 'required'],
            [['content'], 'string'],
            [['type', 'top_level'], 'integer'],
            [['time'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '文章ID',
            'title' => '文章标题',
            'content' => '文章内容',
            'type' => '文章类型',
            'time' => '修改时间',
            'author' => '作者',
            'top_level' => '重要度',
        ];
    }
}
