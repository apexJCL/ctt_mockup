<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $roles app\models\Rol */

$this->title = 'Agregar Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('@app/views/layouts/_static_background', ['background_src' => '/img/sections/users/main.png']) ?>
<div>
    <!-- Sección en blanco para poder ver fondo -->
    <div class="section" style="min-height: 250px"></div>
    <div class="section white">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h1 class="raleway-bold"><?= Html::encode($this->title) ?></h1>
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