<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_walkin_registration".
 *
 * @property int $user_id
 * @property string $first_name
 * @property string|null $last_name
 * @property string $email
 * @property string $phone
 * @property resource|null $avatar
 * @property resource|null $resume
 * @property resource|null $portfolio_url
 * @property string|null $job_roles
 * @property int|null $subscription
 * @property string|null $datecreated
 * @property string|null $datemodified
 *
 * @property Profession[] $professions
 * @property UserEducationDetails $userEducationDetails
 * @property UserLogin[] $userLogins
 * @property WalkinApplicationDetails[] $walkinApplicationDetails
 */
class WalkinRegistration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_walkin_registration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'email', 'phone'], 'required'],
            [['avatar', 'resume', 'portfolio_url', 'job_roles'], 'string'],
            [['subscription'], 'integer'],
            [['datecreated', 'datemodified'], 'safe'],
            [['first_name', 'last_name', 'email', 'phone'], 'string', 'max' => 45],
            [['email'], 'unique'],
            [['phone'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'avatar' => 'Avatar',
            'resume' => 'Resume',
            'portfolio_url' => 'Portfolio Url',
            'job_roles' => 'Job Roles',
            'subscription' => 'Subscription',
            'datecreated' => 'Datecreated',
            'datemodified' => 'Datemodified',
        ];
    }

    /**
     * Gets query for [[Professions]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ProfessionQuery
     */
    public function getProfessions()
    {
        return $this->hasMany(Profession::class, ['users_u_id' => 'user_id']);
    }

    /**
     * Gets query for [[UserEducationDetails]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserEducationDetailsQuery
     */
    public function getUserEducationDetails()
    {
        return $this->hasOne(UserEducationDetails::class, ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[UserLogins]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserLoginQuery
     */
    public function getUserLogins()
    {
        return $this->hasMany(UserLogin::class, ['users_u_id' => 'user_id']);
    }

    /**
     * Gets query for [[WalkinApplicationDetails]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\WalkinApplicationDetailsQuery
     */
    public function getWalkinApplicationDetails()
    {
        return $this->hasMany(WalkinApplicationDetails::class, ['users_u_id' => 'user_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\WalkinRegistrationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\WalkinRegistrationQuery(get_called_class());
    }
}
