<?php

use yii\db\Migration;

class m160723_222030_add_updated_at_created_at_to_tables extends Migration
{
    public function up()
    {
        $this->addColumn('roles', 'created_at', 'DATETIME');
        $this->addColumn('permisos', 'created_at', 'DATETIME');
        $this->addColumn('rol_permisos', 'created_at', 'DATETIME');
        $this->addColumn('usuario_roles', 'created_at', 'DATETIME');
        $this->addColumn('roles', 'updated_at', 'DATETIME');
        $this->addColumn('permisos', 'updated_at', 'DATETIME');
        $this->addColumn('rol_permisos', 'updated_at', 'DATETIME');
        $this->addColumn('usuario_roles', 'updated_at', 'DATETIME');
    }

    public function down()
    {
        echo "m160723_222030_add_updated_at_created_at_to_tables cannot be reverted.\n";

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
