<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $roles app\models\Rol */
/* @var $form yii\widgets\ActiveForm */
?>
<? Pjax::begin(); ?>
<div class="user-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col s12">
            <h4>Datos del usuario</h4>
        </div>
        <div class="input-field col s12 m4">
            <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="input-field col s12 m4">
            <?= $form->field($model, 'apellido_paterno')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="input-field col s12 m4">
            <?= $form->field($model, 'apellido_materno')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="input-field col s12 m6">
            <?= $form->field($model, 'correo_electronico')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="input-field col s12 m6">
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="input-field col s12 m6">
            <div class="file-field input-field">
                <div class="btn">
                    <span>Imagen de Perfil</span>
                    <?= $form->field($model, 'imageFile')->fileInput()->label('') ?>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content">
                    <div class="card-title">
                        Imagen de perfil
                    </div>
                    <span class="right">
                        <?= Html::img('/img/sad.png', ['class' => 'responsive-img', 'style' => 'max-width:48px']) ?>
                    </span>
                    <p>Si no se selecciona una imagen, se recurrirá a la imagen por defecto:</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <h4>Roles del Usuario</h4>
            <?= $this->render('_roles', [
                'roles' => $roles,
                'model' => $model
            ]) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', ['class' => $model->isNewRecord ? 'btn waves-effect waves-light' : 'btn accent-2 waves-effect waves-light']) ?>
        <?= Html::a('Cancelar', $model->isNewRecord ?
            Url::to(['users/index']) :
            Url::to(['users/view', 'id' => $model->id]),
            ['class' => 'waves-effect btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
<? Pjax::end(); ?>
