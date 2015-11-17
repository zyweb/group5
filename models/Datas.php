<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datas".
 *
 * @property integer $j_id
 * @property integer $uid
 * @property integer $cid
 * @property string $datas
 */
class Datas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'datas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'cid'], 'integer'],
            [['datas'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'j_id' => 'J ID',
            'uid' => 'Uid',
            'cid' => 'Cid',
            'datas' => 'Datas',
        ];
    }
}
