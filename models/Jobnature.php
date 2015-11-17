<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jobnature".
 *
 * @property integer $id
 * @property string $job_nature
 */
class Jobnature extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jobnature';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['job_nature'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'job_nature' => 'Job Nature',
        ];
    }
}
