<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "work_experience".
 *
 * @property integer $work_id
 * @property string $work_company
 * @property string $work_position
 * @property string $work_begin
 * @property string $work_end
 * @property integer $member_id
 * @property string $work_salary
 * @property string $region_name
 * @property string $work_content
 * @property string $work_logo
 */
class WorkExperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'work_experience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id'], 'integer'],
            [['work_salary'], 'number'],
            [['work_company'], 'string', 'max' => 50],
            [['work_position', 'region_name', 'work_content'], 'string', 'max' => 30],
            [['work_begin', 'work_end'], 'string', 'max' => 10],
            [['work_logo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'work_id' => 'Work ID',
            'work_company' => 'Work Company',
            'work_position' => 'Work Position',
            'work_begin' => 'Work Begin',
            'work_end' => 'Work End',
            'member_id' => 'Member ID',
            'work_salary' => 'Work Salary',
            'region_name' => 'Region Name',
            'work_content' => 'Work Content',
            'work_logo' => 'Work Logo',
        ];
    }
}
