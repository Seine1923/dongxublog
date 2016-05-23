<?php

namespace frontend\models;

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
    const ARTICLE_ORIGINAL = 10;
    const ARTICLE_FORWARY = 20;
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
            'id' => 'ID',
            'title' => '文章标题',
            'content' => '文章内容',
            'type' => '文章类型',
            'time' => '发表时间',
            'author' => '作者',
            'top_level' => '文章级别',
        ];
    }

    public function getArticleType() {
        return array (self::ARTICLE_ORIGINAL=>'原创',self::ARTICLE_FORWARY=>'转载');
    }

    public function getArticleTypeLabel($type) {
        if ($type==self::ARTICLE_ORIGINAL) {
            return 'Original';
        } else {
            return 'Forward';
        }
    }
}
