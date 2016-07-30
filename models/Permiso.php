<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "permisos".
 *
 * @property integer $id
 * @property string $permiso
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 *
 * @property RolPermisos[] $rolPermisos
 */
class Permiso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'permisos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['permiso', 'descripcion'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['permiso'], 'string', 'max' => 50],
            [['descripcion'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'permiso' => 'Permiso',
            'descripcion' => 'Descripcion',
            'created_at' => 'Creado',
            'updated_at' => 'Modificado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolPermisos()
    {
        return $this->hasMany(RolPermisos::className(), ['permiso_id' => 'id']);
    }

    /**
     * Define acciones por defecto
     *
     * @return array
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }
}
