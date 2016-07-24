<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Actualizando datos de: ' . sprintf('%s %s %s', $model->nombre, $model->apellido_paterno, $model->apellido_materno);
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="section white">

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h4 class="raleway-bold"><?= Html::encode($this->title) ?></h4>
            </div>
            <div class="col s12">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
    
</div>
