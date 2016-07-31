<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\Models\Rol */
/* @var $permisos app\Models\Permiso */

$this->title = 'Nuevo rol';
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
                'permisos' => $permisos
            ]) ?>
        </div>
    </div>
</div>