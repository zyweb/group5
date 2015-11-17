<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "my_subscription".
 *
 * @property integer $id
 * @property integer $mem_id
 * @property string $email
 * @property string $posi_name
 * @property string $work_address
 * @property string $deve_stage
 * @property string $industry_field
 * @property string $mon_salary
 * @property integer $addtime
 */
class MySubscription extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'my_subscription';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mem_id', 'addtime'], 'integer'],
            [['email', 'work_address', 'deve_stage'], 'string', 'max' => 30],
            [['posi_name', 'mon_salary'], 'string', 'max' => 20],
            [['industry_field'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mem_id' => 'Mem ID',
            'email' => 'Email',
            'posi_name' => 'Posi Name',
            'work_address' => 'Work Address',
            'deve_stage' => 'Deve Stage',
            'industry_field' => 'Industry Field',
            'mon_salary' => 'Mon Salary',
            'addtime' => 'Addtime',
        ];
    }
}
