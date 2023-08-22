<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "walkin_application".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $job_id
 * @property int|null $post_id
 * @property int|null $timeslot
 * @property int|null $poefeence
 * @property int|null $datecreated
 * @property int|null $datemodified
 */
class WalkinApplication extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'walkin_application';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['job_id', 'post_id', 'timeslot', 'poefeence', 'datecreated', 'datemodified'], 'integer'],
            [['title'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'job_id' => 'Job ID',
            'post_id' => 'Post ID',
            'timeslot' => 'Timeslot',
            'poefeence' => 'Poefeence',
            'datecreated' => 'Datecreated',
            'datemodified' => 'Datemodified',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\WalkinApplicationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\WalkinApplicationQuery(get_called_class());
    }
}
