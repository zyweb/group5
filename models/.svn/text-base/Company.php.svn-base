<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property integer $c_id
 * @property string $c_logo
 * @property string $c_name
 * @property string $c_desc
 * @property string $c_peoples
 * @property string $c_city
 * @property string $c_url
 * @property string $c_job
 * @property string $c_address
 * @property string $c_label
 * @property string $c_location
 * @property string $c_status
 * @property string $founder
 * @property string $fder_position
 * @property string $weibo_url
 * @property string $founder_desc
 * @property string $founder_tou
 * @property string $poster
 * @property string $pos_name
 * @property string $pos_url
 * @property string $pos_desc
 * @property string $progress
 * @property integer $member_id
 * @property integer $is_index
 * @property string $c_mark
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_desc'], 'string'],
            [['member_id', 'is_index'], 'integer'],
            [['c_logo', 'founder_tou', 'poster', 'progress'], 'string', 'max' => 100],
            [['c_name', 'c_url', 'c_job', 'c_label', 'c_location', 'c_status', 'weibo_url', 'pos_name', 'pos_url'], 'string', 'max' => 50],
            [['c_peoples', 'c_city'], 'string', 'max' => 10],
            [['c_address'], 'string', 'max' => 255],
            [['founder', 'fder_position', 'c_mark'], 'string', 'max' => 20],
            [['founder_desc', 'pos_desc'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c_id' => 'C ID',
            'c_logo' => 'C Logo',
            'c_name' => 'C Name',
            'c_desc' => 'C Desc',
            'c_peoples' => 'C Peoples',
            'c_city' => 'C City',
            'c_url' => 'C Url',
            'c_job' => 'C Job',
            'c_address' => 'C Address',
            'c_label' => 'C Label',
            'c_location' => 'C Location',
            'c_status' => 'C Status',
            'founder' => 'Founder',
            'fder_position' => 'Fder Position',
            'weibo_url' => 'Weibo Url',
            'founder_desc' => 'Founder Desc',
            'founder_tou' => 'Founder Tou',
            'poster' => 'Poster',
            'pos_name' => 'Pos Name',
            'pos_url' => 'Pos Url',
            'pos_desc' => 'Pos Desc',
            'progress' => 'Progress',
            'member_id' => 'Member ID',
            'is_index' => 'Is Index',
            'c_mark' => 'C Mark',
        ];
    }
}
