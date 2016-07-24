<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = sprintf('%s %s %s', $model->nombre, $model->apellido_paterno, $model->apellido_materno);
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section white">
    <div class="container">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a(Html::tag('i', 'edit', ['class' => 'material-icons']),
                ['update', 'id' => $model->id],
                ['class' => 'btn light-blue accent-2'])
            ?>
            <?= Html::a(Html::tag('i', 'delete', ['class' => 'material-icons']), ['delete', 'id' => $model->id],
                ['class' => 'btn red accent-2',
                'data' => [
                    'confirm' => '¿Seguro que desea eliminar este cliente?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'nombre',
                'apellido_paterno',
                'apellido_materno',
                'correo_electronico',
                'username',
                'created_at',
                'updated_at',
            ],
        ]) ?>
    </div>
</div>
