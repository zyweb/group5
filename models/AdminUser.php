<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin_user".
 *
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_email
 * @property string $user_pwd
 * @property string $login_time
 */
class AdminUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'login_time'], 'string', 'max' => 20],
            [['user_email'], 'string', 'max' => 50],
            [['user_pwd'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'user_email' => 'User Email',
            'user_pwd' => 'User Pwd',
            'login_time' => 'Login Time',
        ];
    }
}
