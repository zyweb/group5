<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "educational".
 *
 * @property integer $id
 * @property string $educational
 */
class Educational extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'educational';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['educational'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'educational' => 'Educational',
        ];
    }
}
