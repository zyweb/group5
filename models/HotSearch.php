<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hot_search".
 *
 * @property integer $hot_id
 * @property string $keyword
 * @property integer $number
 */
class HotSearch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hot_search';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number'], 'integer'],
            [['keyword'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hot_id' => 'Hot ID',
            'keyword' => 'Keyword',
            'number' => 'Number',
        ];
    }
}
