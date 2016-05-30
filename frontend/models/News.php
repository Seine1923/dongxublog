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
//用来定义验证规则,rules() 返回的每个规则必须是以下格式：
//array('AttributeList', 'Validator', 'on'=>'ScenarioList', ...附加选项)
// 其中 AttributeList（特性列表） 是需要通过此规则验证的特性列表字符串，每个特性名字由逗号分隔;
//Validator（验证器） 指定要执行验证的种类；
//on 参数是可选的，它指定此规则应被应用到的场景列表；
// 附加选项是一个名值对数组，用于初始化相应验证器的属性值。
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
// 声明属性对于的标签名称
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
