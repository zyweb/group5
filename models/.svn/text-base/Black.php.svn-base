<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "black".
 *
 * @property integer $mem_id
 * @property integer $c_black
 */
class Black extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'black';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mem_id', 'c_black'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mem_id' => 'Mem ID',
            'c_black' => 'C Black',
        ];
    }
}
