<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "com_stage".
 *
 * @property integer $id
 * @property string $stage
 */
class ComStage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'com_stage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stage'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'stage' => 'Stage',
        ];
    }
}
