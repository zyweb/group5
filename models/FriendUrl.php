<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "friend_url".
 *
 * @property integer $friend_id
 * @property string $friend_name
 * @property string $friend_url
 */
class FriendUrl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'friend_url';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['friend_name'], 'string', 'max' => 60],
            [['friend_url'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'friend_id' => 'Friend ID',
            'friend_name' => 'Friend Name',
            'friend_url' => 'Friend Url',
        ];
    }
}
