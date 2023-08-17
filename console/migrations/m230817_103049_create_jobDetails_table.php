<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%jobDetails}}`.
 */
class m230817_103049_create_jobDetails_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%jobDetails}}', [
            'id' => $this->primaryKey(),
            'peference'=>$this->string(length:512),
            'ctc'=>$this->string(length:512),
            'role_desc'=>'LONGTEXT',
            'requirements'=>'LONGTEXT',
            'datecreated'=>$this->integer(),
            'datemodified'=>$this->integer(),




        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%jobDetails}}');
    }
}
