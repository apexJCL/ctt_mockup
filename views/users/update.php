<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $roles app\models\Rol */

$this->title = 'Modificar cliente: ' . sprintf('%s', $model->correo_electronico);
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('@app/views/layouts/_static_background', [
    'background_src' => $model->getAvatar(),
    'div_classes'  => 'black z-depth-1'
]) ?>
<div>
    <!-- Sección en blanco para poder ver fondo -->
    <div class="section" style="min-height: 250px"></div>
    <div class="section red green lighten-5">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h3 class="raleway-thin"><?= Html::encode($this->title) ?></h3>
                </div>
                <div class="col s12">
                    <?= $this->render('_form', [
                        'model' => $model,
                        'roles' => $roles
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>