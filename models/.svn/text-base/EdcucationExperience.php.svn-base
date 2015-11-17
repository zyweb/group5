<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "edcucation_experience".
 *
 * @property integer $e_id
 * @property string $e_name
 * @property string $e_xueli
 * @property string $e_jineng
 * @property string $e_time_end
 * @property integer $member_id
 */
class EdcucationExperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'edcucation_experience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id'], 'integer'],
            [['e_name', 'e_xueli', 'e_jineng', 'e_time_end'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'e_id' => 'E ID',
            'e_name' => 'E Name',
            'e_xueli' => 'E Xueli',
            'e_jineng' => 'E Jineng',
            'e_time_end' => 'E Time End',
            'member_id' => 'Member ID',
        ];
    }
}
