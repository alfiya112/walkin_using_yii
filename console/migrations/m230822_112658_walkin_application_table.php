<?php

use yii\db\Migration;

/**
 * Class m230822_112658_walkin_application_table
 */
class m230822_112658_walkin_application_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%walkin_application}}', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(length:512),
            'job_id'=>$this->integer(),
            'post_id'=>$this->integer(),
            'timeslot'=>$this->integer(),
            'poefeence'=>$this->integer(),
            'datecreated'=>$this->integer(),
            'datemodified'=>$this->integer(),
        
        ]);

        $this->addForeignKey(name: 'fk_walkin_job_id',table:'%walkin_application', columns:'job_id',refTable:'%jobDetails',refColumns:'id');
        $this->addForeignKey(name: 'fk_walkin_post_id',table:'%walkin_application', columns:'post_id',refTable:'%walkinpost',refColumns:'id');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(name: 'fk_walkin_job_id',table:'%walkin_application');
        $this->dropForeignKey(name: 'fk_walkin_post_id',table:'%walkin_application');
        $this->dropTable('{{%walkin_application}}');
  
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230822_112658_walkin_application_table cannot be reverted.\n";

        return false;
    }
    */
}
