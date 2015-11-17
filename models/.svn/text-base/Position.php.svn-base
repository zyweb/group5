<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "position".
 *
 * @property integer $position_id
 * @property string $position_name
 * @property integer $parent_id
 * @property integer $level
 * @property integer $addtime
 * @property integer $is_hot
 * @property integer $is_hurry
 * @property integer $is_first
 * @property integer $is_green
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'level', 'addtime', 'is_hot', 'is_hurry', 'is_first', 'is_green'], 'integer'],
            [['position_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'position_id' => 'Position ID',
            'position_name' => 'Position Name',
            'parent_id' => 'Parent ID',
            'level' => 'Level',
            'addtime' => 'Addtime',
            'is_hot' => 'Is Hot',
            'is_hurry' => 'Is Hurry',
            'is_first' => 'Is First',
            'is_green' => 'Is Green',
        ];
    }
}
