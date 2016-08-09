<?php

use yii\db\Migration;

/**
 * Handles the creation for table `apps`.
 */
class m160806_173154_create_apps_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('apps', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(30)->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('apps');
    }
}
