<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Permiso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="permiso-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="input-field col s12 m6 l6">
            <?= $form->field($model, 'permiso')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="input-field col s12 m6 ml6">
            <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn' : 'btn green waves-effect']) ?>
            <?= Html::a('Cancelar', $model->isNewRecord ?
                Url::to(['index']) :
                Url::to(['view', 'id' => $model->id]),
                ['class' => 'waves-effect btn-flat']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
