<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Apps */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apps-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn' : 'btn']) ?>
        <?= Html::a('Cancelar', $model->isNewRecord ?
            Url::to(['index']) :
            Url::to(['view', 'id' => $model->id]),
            ['class' => 'waves-effect btn-flat']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
