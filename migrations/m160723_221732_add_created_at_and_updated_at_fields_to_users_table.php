<?php

use yii\db\Migration;

class m160723_221732_add_created_at_and_updated_at_fields_to_users_table extends Migration
{
    public function up()
    {
        $this->addColumn('users', 'created_at', 'DATETIME');
        $this->addColumn('users', 'updated_at', 'DATETIME');
    }

    public function down()
    {
        echo "m160723_221732_add_created_at_and_updated_at_fields_to_users_table cannot be reverted.\n";

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
