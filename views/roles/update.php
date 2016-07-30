<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\Rol */

$this->title = 'Actualizando rol: ' . $model->rol;
$this->params['breadcrumbs'][] = ['label' => 'Rols', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('@app/views/layouts/_static_background', ['background_src' => '/img/sections/roles/main.png']) ?>
<div>
    <!-- Sección en blanco para poder ver fondo -->
    <div class="section" style="min-height: 250px"></div>
    <div class="section green lighten-5" id="main">
        <div class="container">
            <h1>
                <?= Html::encode($this->title) ?>
            </h1>
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>