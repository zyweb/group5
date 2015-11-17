<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "worktime".
 *
 * @property integer $id
 * @property string $work_time
 */
class Worktime extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'worktime';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['work_time'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'work_time' => 'Work Time',
        ];
    }
}
