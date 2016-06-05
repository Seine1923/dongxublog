<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;
    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
//            ['username', 'validateStatus'],
            ['username', 'validateStatus'],

        ];
    }

//    public function validateUser($attribute, $params)
//    {
//        if (!$this->hasErrors()) {
//            $user = $this->getUser();
//            if (!$user || $user->username != 'admin') {
//                $this->addError($attribute, '非管理员禁止登录！');
//            }
//        }
//    }
    public function validateStatus($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUserOnly();
            if (!$user || $user->status != 10) {
                $this->addError($attribute, '请等待管理员审核身份！');
            }
        }
    }
    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute,$params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUserOnly();
            if (!$user ||!$user->validatePassword($this->password)) {
                $this->addError($attribute, '用户名或密码不正确！');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
    protected function getUserOnly()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsernameOnly($this->username);
        }

        return $this->_user;
    }

    public function attributeLabels(){
        return [
            'username' => '用户名',
            'password' => '密码',
            'rememberMe' => '下次自动登录'
        ];
    }
}
