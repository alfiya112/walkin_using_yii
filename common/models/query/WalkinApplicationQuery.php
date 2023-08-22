<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\WalkinApplication]].
 *
 * @see \common\models\WalkinApplication
 */
class WalkinApplicationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\WalkinApplication[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\WalkinApplication|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
