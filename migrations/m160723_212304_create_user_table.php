<?php

use yii\db\Migration;

/**
 * Maneja la creación de la tabla 'usuarios'
 * Esta tabla albergará los datos referentes a los usuarios que acceden a la aplicación
 */
class m160723_212304_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id'        => $this->primaryKey(),
            'nombre'    => $this->string(30)->notNull(),
            'apellido_paterno' => $this->string(30)->notNull(),
            'apellido_materno' => $this->string(30)->notNull(),
            'correo_electronico' => $this->string(50)->notNull(),
            'username' => $this->string(30)->unique()->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
