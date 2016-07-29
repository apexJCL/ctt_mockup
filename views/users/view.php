<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = sprintf('%s %s %s', $model->nombre, $model->apellido_paterno, $model->apellido_materno);
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('@app/views/layouts/_static_background', ['background_src' => '/img/sections/users/main.png']) ?>

<div class="div">
    <!-- Sección en blanco para poder ver fondo -->
    <div class="section" style="min-height: 250px"></div>
    <div class="section white">
        <? Pjax::begin(); ?>
        <div class="fixed-action-btn horizontal main-fab">
            <a class="btn-floating btn-large">
                <i class="large material-icons">menu</i>
            </a>
            <ul>
                <li>
                    <a href="#delete" class="btn-floating red modal-trigger tooltipped" data-position="bottom"
                       data-delay="1000" data-tooltip="Eliminar"><i class="material-icons">delete</i></a>
                </li>
                <li>
                    <?= Html::a(Html::tag('i', 'edit', ['class' => 'material-icons']),
                        ['update', 'id' => $model->id],
                        [
                            'class' => 'btn-floating light-blue accent-2 tooltipped',
                            'data-position' => "bottom",
                            'data-delay' => '1000',
                            'data-tooltip' => 'Editar'
                        ])
                    ?>
                </li>
                <li>
                    <?= Html::a(Html::tag('i', 'undo', ['class' => 'material-icons']),
                        Url::to(['users/index']),
                        [
                            'class' => 'btn-floating blue accent-1 tooltipped',
                            'data-position' => "bottom",
                            'data-delay' => '1000',
                            'data-tooltip' => 'Volver'
                        ]
                    ) ?>
                </li>
            </ul>
        </div>
        <? Pjax::end(); ?>
        <div class="container">
            <? Pjax::begin(); ?>
            <h1><?= Html::encode($this->title) ?></h1>
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
            <? Pjax::end(); ?>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal white" id="delete">
        <div class="modal-content">
            <h4>¿Seguro que desea eliminar a este cliente?</h4>
            <p>Esta acción no se puede revertir</p>
        </div>
        <div class="modal-footer blue accent-1">
            <?= Html::a("Eliminar", ['delete', 'id' => $model->id],
                ['class' => 'btn waves-effect waves-light red accent-2',
                    'data' => [
                        'method' => 'post'
                    ],
                ])
            ?>
            <a href="#!" class=" waves-effect waves-ripple btn-flat modal-close">Cancelar</a>
        </div>
    </div>
</div>