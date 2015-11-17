<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projece_experience".
 *
 * @property integer $project_id
 * @property string $project_name
 * @property string $project_position
 * @property string $project_begin
 * @property string $project_end
 * @property string $project_desc
 * @property integer $member_id
 */
class ProjeceExperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projece_experience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_desc'], 'string'],
            [['member_id'], 'integer'],
            [['project_name'], 'string', 'max' => 50],
            [['project_position'], 'string', 'max' => 30],
            [['project_begin', 'project_end'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_id' => 'Project ID',
            'project_name' => 'Project Name',
            'project_position' => 'Project Position',
            'project_begin' => 'Project Begin',
            'project_end' => 'Project End',
            'project_desc' => 'Project Desc',
            'member_id' => 'Member ID',
        ];
    }
}
