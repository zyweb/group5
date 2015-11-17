<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "third_login".
 *
 * @property integer $user_id
 * @property string $sina_id
 * @property string $qq_id
 */
class ThirdLogin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'third_login';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'sina_id'], 'integer'],
            [['qq_id'], 'string', 'max' => 64],
            [['user_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'sina_id' => 'Sina ID',
            'qq_id' => 'Qq ID',
        ];
    }
}
