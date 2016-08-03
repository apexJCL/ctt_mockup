<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\db\Query;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $correo_electronico
 * @property string $username
 * @property string $created_at
 * @property string $updated_at
 * @property UsuarioRoles[] $usuarioRoles
 */
class User extends \yii\db\ActiveRecord
{

    public $avatarBasepath = 'img/users/profile/';

    /**
     * @var UploadedFile
     */
    public $imageFile;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido_paterno', 'apellido_materno', 'correo_electronico', 'username'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['nombre', 'apellido_paterno', 'apellido_materno', 'username'], 'string', 'max' => 30],
            [['correo_electronico'], 'string', 'max' => 50],
            [['username'], 'unique'],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido_paterno' => 'Apellido Paterno',
            'apellido_materno' => 'Apellido Materno',
            'correo_electronico' => 'Correo Electronico',
            'username' => 'Username',
            'created_at' => 'Creado',
            'updated_at' => 'Modificado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioRoles()
    {
        return $this->hasMany(UsuarioRoles::className(), ['usuario_id' => 'id']);
    }

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

    /**
     * Regresa los ID's de los roles asignados a este usuario
     *
     */
    public function getIDRoles()
    {
        $r = ArrayHelper::toArray(UsuarioRoles::find()->select('rol_id')->where(['usuario_id' => $this->id])->all());
        $roles = [];
        foreach ($r as $rol)
            array_push($roles, $rol['rol_id']);
        return $roles;
    }

    public function updateRoles($roles)
    {
        foreach ($roles as $rid) {
            // Ver si existe
            $ur = UsuarioRoles::find()->where(['usuario_id' => $this->id, 'rol_id' => $rid])->one();
            // Si no existe, lo creamos
            if (empty($ur) or $ur === null) {
                $ur = new UsuarioRoles();
                $ur->usuario_id = $this->id;
                $ur->rol_id = $rid;
                $ur->save();
            }
        }
        // Por último, eliminamos roles no asignados
        UsuarioRoles::deleteAll(['AND', sprintf('usuario_id=%d', $this->id), ['NOT IN', 'rol_id', $roles]]);
    }

    public function revokeRoles()
    {
        return UsuarioRoles::deleteAll(['usuario_id' => $this->id]);
    }

    public function upload()
    {
        if ($this->validate()) {
            $url = $this->avatarBasepath. $this->username . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs($url);
            return true;
        } else {
            return false;
        }
    }

    public function getAvatar(){
        $baseUrl = $this->avatarBasepath.$this->username;
        return file_exists($baseUrl.'.jpg') ? '/'.$baseUrl.'.jpg' : (
            file_exists($baseUrl . '.png') ? '/'.$baseUrl.'.png' : '/img/sad.png'
        );

    }

}
