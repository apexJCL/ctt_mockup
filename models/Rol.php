<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\helpers\ArrayHelper;

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

    public function getIDPermisos()
    {
        $permisos_rol = ArrayHelper::toArray(RolPermisos::find()->select('permiso_id')->where(['rol_id' => $this->id])->all());
        $permisos = [];
        foreach ($permisos_rol as $permiso)
            array_push($permisos, $permiso['permiso_id']);
        return $permisos;
    }

    public function updatePermisos()
    {
        // Si está definida y no está vacía
        if (isset($_POST['permisos']) && !empty($_POST['permisos'])) {
            foreach ($_POST['permisos'] as $permiso) {
                // Ver si existe
                $p = RolPermisos::find()->where(['rol_id' => $this->id, 'permiso_id' => $permiso])->one();
                // Si no existe, la creamos
                if (empty($p) or $p == null) {
                    $p = new RolPermisos();
                    $p->rol_id = $this->id;
                    $p->permiso_id = $permiso;
                    $p->save();
                }
            }
            // Por último, borramos los que no estén en la lista
            RolPermisos::deleteAll(['AND', sprintf('rol_id=%d', $this->id), ['NOT IN', 'permiso_id', $_POST['permisos']]]);
        } else {
            RolPermisos::deleteAll(['rol_id' => $this->id]);
        }
    }
}
