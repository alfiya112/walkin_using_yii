<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "walkinpost".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $datetime
 * @property string|null $location
 * @property int|null $expiry
 * @property int|null $datecreated
 * @property int|null $datemodified
 * @property int|null $job_id
 */
class walkinpost extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'walkinpost';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['expiry', 'datecreated', 'datemodified', 'job_id'], 'integer'],
            [['title', 'datetime', 'location'], 'string', 'max' => 512],
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
            'datetime' => 'Datetime',
            'location' => 'Location',
            'expiry' => 'Expiry',
            'datecreated' => 'Datecreated',
            'datemodified' => 'Datemodified',
            'job_id' => 'Job ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\WalkinpostQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\WalkinpostQuery(get_called_class());
    }
}
