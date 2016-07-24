<?php

use yii\db\Migration;

/**
 * Handles the creation for table `roles`.
 */
class m160723_214518_create_roles_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('roles', [
            'id' => $this->primaryKey(),
            'rol' => $this->string(30)->notNull(),
            'descripcion' => $this->string(100)->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('roles');
    }
}
