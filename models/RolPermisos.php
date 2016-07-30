<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rol_permisos".
 *
 * @property integer $id
 * @property integer $rol_id
 * @property integer $permiso_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Permisos $permiso
 * @property Roles $rol
 */
class RolPermisos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rol_permisos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rol_id', 'permiso_id'], 'required'],
            [['rol_id', 'permiso_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['permiso_id'], 'exist', 'skipOnError' => true, 'targetClass' => Permisos::className(), 'targetAttribute' => ['permiso_id' => 'id']],
            [['rol_id'], 'exist', 'skipOnError' => true, 'targetClass' => Roles::className(), 'targetAttribute' => ['rol_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rol_id' => 'Rol ID',
            'permiso_id' => 'Permiso ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPermiso()
    {
        return $this->hasOne(Permisos::className(), ['id' => 'permiso_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRol()
    {
        return $this->hasOne(Roles::className(), ['id' => 'rol_id']);
    }
}
