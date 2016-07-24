<?php

use yii\db\Migration;

/**
 * Handles the creation for table `permisos`.
 */
class m160723_215449_create_permisos_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('permisos', [
            'id' => $this->primaryKey(),
            'permiso' => $this->string(50)->notNull(),
            'descripcion' => $this->string(100)->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('permisos');
    }
}
