<?php

use yii\db\Schema;
use yii\db\Migration;


class m150604_155231_create_Articles_table extends Migration
{
    public function up()
    {
        $this->createTable('articles',[
           'id' =>Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING." NOT NULL",
            'index' => Schema::TYPE_STRING,
            'content' => Schema::TYPE_TEXT,
            'create_at'=>Schema::TYPE_DATETIME,
            'status' => Schema::TYPE_INTEGER,
            'type' =>Schema::TYPE_INTEGER."  NOT NULL",


        ]);

    }

    public function down()
    {
        echo "m150604_155231_create_Articles_table cannot be reverted.\n";

        return false;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
