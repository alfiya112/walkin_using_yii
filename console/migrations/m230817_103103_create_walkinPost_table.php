<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%walkinPost}}`.
 */
class m230817_103103_create_walkinPost_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%walkinPost}}', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(length:512),
            'datetime'=>$this->string(length:512),
            'location'=>$this->string(length:512),
            
            'expiry'=>$this->integer(),
            'datecreated'=>$this->integer(),
            'datemodified'=>$this->integer(),
            'job_id'=>$this->integer(),
        ]);

        $this->addForeignKey(name: 'fk_walkinPost_job_id',table:'%walkinPost', columns:'job_id',refTable:'%jobDetails',refColumns:'id');
    }
    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(name: 'fk_walkinPost_job_id',table:'%walkinPost');
        $this->dropTable('{{%walkinPost}}');
    }
}
