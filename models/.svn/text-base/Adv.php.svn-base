<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adv".
 *
 * @property integer $adv_id
 * @property string $adv_photo
 * @property string $adv_address
 * @property integer $is_show
 * @property integer $sort
 * @property string $adv_name
 * @property string $adv_desc
 */
class Adv extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adv';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_show', 'sort'], 'integer'],
            [['adv_photo', 'adv_address'], 'string', 'max' => 255],
            [['adv_name'], 'string', 'max' => 30],
            [['adv_desc'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'adv_id' => 'Adv ID',
            'adv_photo' => 'Adv Photo',
            'adv_address' => 'Adv Address',
            'is_show' => 'Is Show',
            'sort' => 'Sort',
            'adv_name' => 'Adv Name',
            'adv_desc' => 'Adv Desc',
        ];
    }
}
