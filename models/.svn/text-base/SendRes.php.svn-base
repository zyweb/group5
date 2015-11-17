<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "send_res".
 *
 * @property integer $sr_id
 * @property integer $member_id
 * @property integer $rj_id
 * @property integer $c_id
 * @property integer $addtime
 * @property integer $status
 */
class SendRes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'send_res';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id', 'rj_id', 'c_id', 'addtime', 'status'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sr_id' => 'Sr ID',
            'member_id' => 'Member ID',
            'rj_id' => 'Rj ID',
            'c_id' => 'C ID',
            'addtime' => 'Addtime',
            'status' => 'Status',
        ];
    }
}
