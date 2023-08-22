<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%registration}}`.
 */
class m230818_075353_create_registration_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%registration}}', [
            'id' => $this->primaryKey(),
            'firstname'=>$this->string(length:512),
            'lastname'=>$this->string(length:512),
            'email'=>$this->string(length:112),
            'phone'=>$this->string(length:112),
            'resume'=>$this->blob,
            'website'=>$this->string(length:112),
            'datetime'=>$this->string(length:512),
            'location'=>$this->string(length:512),
            
            'expiry'=>$this->integer(),
            'datecreated'=>$this->integer(),
            'datemodified'=>$this->integer(),
            'job_id'=>$this->integer(),
        ]);

        $this->addForeignKey(name: 'fk_walkinPost_job_id',table:'%registration', columns:'job_id',refTable:'%jobDetails',refColumns:'id');
    }
    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(name: 'fk_walkinPost_job_id',table:'%registration');
        $this->dropTable('{{%registration}}');
    }
}
