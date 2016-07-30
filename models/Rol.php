<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * This is the model class for table "roles".
 *
 * @property integer $id
 * @property string $rol
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 *
 * @property RolPermisos[] $rolPermisos
 * @property UsuarioRoles[] $usuarioRoles
 */
class Rol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rol', 'descripcion'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['rol'], 'string', 'max' => 30],
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
            'rol' => 'Rol',
            'descripcion' => 'Descripción',
            'created_at' => 'Creado',
            'updated_at' => 'Modificado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolPermisos()
    {
        return $this->hasMany(RolPermisos::className(), ['rol_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioRoles()
    {
        return $this->hasMany(UsuarioRoles::className(), ['rol_id' => 'id']);
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
