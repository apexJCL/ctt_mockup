<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

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
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn waves-effect waves-light' : 'btn accent-2 waves-effect waves-light']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
