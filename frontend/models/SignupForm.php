<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $groups;

    const SIGNUPTYPE_ORGANIZATION = '文章管理';
    const SIGNUPTYPE_PRIMARYADMIN  = '用户管理';
    const SIGNUPTYPE_LEADER  = '权限分配';
    const SIGNUPTYPE_COMMITTEE  = '权限管理';
    const SIGNUPTYPE_EXPERT  = '菜单管理';
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            [['groups'], 'string'],
            [['groups'], 'required'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->groups = $this->groups;
        return $user->save() ? $user : null;
    }

    public function getSignupType(){
        return array(self::SIGNUPTYPE_ORGANIZATION => '文章管理', self::SIGNUPTYPE_PRIMARYADMIN => '用户管理',
            self::SIGNUPTYPE_LEADER => '权限分配', self::SIGNUPTYPE_COMMITTEE => '权限管理', self::SIGNUPTYPE_EXPERT => '菜单管理');
    }

    public function attributeLabels()
    {
        return [
            'username' => '用户名',
            'password' => '密码',
            'email' => '邮箱',
            'groups' => '所属用户组',
        ];
    }
}
