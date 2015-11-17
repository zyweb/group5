<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teamwork".
 *
 * @property integer $team_id
 * @property string $team_name
 * @property string $team_desc
 */
class Teamwork extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teamwork';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['team_name'], 'string', 'max' => 200],
            [['team_desc'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'team_id' => 'Team ID',
            'team_name' => 'Team Name',
            'team_desc' => 'Team Desc',
        ];
    }
}
