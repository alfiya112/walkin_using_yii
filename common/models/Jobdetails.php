<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jobdetails".
 *
 * @property int $id
 * @property string $preference
 * @property string $ctc
 * @property string $role_desc
 * @property string $requirements
 * @property string $datecreated
 * @property string $datemodified
 */
class Jobdetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jobdetails';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['preference', 'ctc', 'role_desc', 'requirements'], 'required'],
            [['role_desc', 'requirements'], 'string'],
            [['datecreated', 'datemodified'], 'safe'],
            [['preference', 'ctc'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'preference' => 'Preference',
            'ctc' => 'Ctc',
            'role_desc' => 'Role Desc',
            'requirements' => 'Requirements',
            'datecreated' => 'Datecreated',
            'datemodified' => 'Datemodified',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\JobdetailsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\JobdetailsQuery(get_called_class());
    }
}
