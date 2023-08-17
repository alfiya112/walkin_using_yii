<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Jobdetails]].
 *
 * @see \common\models\Jobdetails
 */
class JobdetailsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Jobdetails[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Jobdetails|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
