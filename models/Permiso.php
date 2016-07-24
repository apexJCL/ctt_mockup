<?php

namespace app\models;

use Yii;

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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRolPermisos()
    {
        return $this->hasMany(RolPermisos::className(), ['permiso_id' => 'id']);
    }
}
