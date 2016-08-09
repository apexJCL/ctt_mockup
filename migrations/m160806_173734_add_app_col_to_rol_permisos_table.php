<?php

use yii\db\Migration;

class m160806_173734_add_app_col_to_rol_permisos_table extends Migration
{
    public function up()
    {
        $this->addColumn('rol_permisos', 'app_id', 'int');
        $this->addForeignKey('rol_permisos_app_fk', 'rol_permisos', 'app_id', 'apps', 'id', 'CASCADE');
    }

    public function down()
    {
        echo "m160806_173734_add_app_col_to_rol_permisos_table cannot be reverted.\n";

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
