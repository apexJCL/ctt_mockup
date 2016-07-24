<?php

use yii\db\Migration;

/**
 * Handles the creation for table `rol_permisos`.
 */
class m160723_215654_create_rol_permisos_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('rol_permisos', [
            'id' => $this->primaryKey(),
            'rol_id' => $this->integer()->notNull(),
            'permiso_id' => $this->integer()->notNull()
        ]);
        $this->addForeignKey('fk_rol_permisos_rol', 'rol_permisos', 'rol_id', 'roles', 'id', 'CASCADE');
        $this->addForeignKey('fk_rol_permisos_permisos', 'rol_permisos', 'permiso_id', 'permisos', 'id', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('rol_permisos');
    }
}
