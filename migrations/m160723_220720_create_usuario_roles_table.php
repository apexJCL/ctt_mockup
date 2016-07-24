<?php

use yii\db\Migration;

/**
 * Handles the creation for table `usuario_roles`.
 */
class m160723_220720_create_usuario_roles_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('usuario_roles', [
            'id' => $this->primaryKey(),
            'usuario_id' => $this->integer()->notNull(),
            'rol_id' => $this->integer()->notNull()
        ]);
        $this->addForeignKey('fk_usuario_roles_usuario', 'usuario_roles', 'usuario_id', 'users', 'id', 'CASCADE');
        $this->addForeignKey('fk_usuario_roles_rol', 'usuario_roles', 'rol_id', 'roles', 'id', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('usuario_roles');
    }
}
