<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Permiso */

$this->title = 'Modificando permiso: ' . $model->permiso;
$this->params['breadcrumbs'][] = ['label' => 'Permisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('@app/views/layouts/_static_background', ['background_src' => '/img/sections/permisos/main.png']) ?>
<div>
    <!-- Sección en blanco para poder ver fondo -->
    <div class="section" style="min-height: 250px"></div>
    <div class="section red lighten-5">
        <div class="container">
            <h3><?= Html::encode($this->title) ?></h3>
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>