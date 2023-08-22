<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\WalkinRegistration]].
 *
 * @see \common\models\WalkinRegistration
 */
class WalkinRegistrationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\WalkinRegistration[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\WalkinRegistration|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
