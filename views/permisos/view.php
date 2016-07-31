<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Permiso */

$this->title = $model->permiso;
$this->params['breadcrumbs'][] = ['label' => 'Permisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('@app/views/layouts/_static_background', ['background_src' => '/img/sections/permisos/main.png']) ?>

<div>
    <!-- Sección en blanco para poder ver fondo -->
    <div class="section" style="min-height: 250px"></div>
    <div class="section grey lighten-5 fab-container">
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
                    <?= Html::a(Html::tag('i', 'list', ['class' => 'material-icons']),
                        Url::to(['index']),
                        [
                            'class' => 'btn-floating blue accent-1 tooltipped',
                            'data-position' => "bottom",
                            'data-delay' => '1000',
                            'data-tooltip' => 'Lista de Usuarios'
                        ]
                    ) ?>
                </li>
            </ul>
        </div>
        <div class="container" id="main">
            <h1><?= Html::encode($this->title) ?></h1>
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'permiso',
                    'descripcion',
                    'created_at',
                    'updated_at',
                ],
            ]) ?>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal red accent-4 white-text" id="delete">
    <div class="modal-content">
        <h4>¿Seguro que desea eliminar el permiso <span class="raleway-bold"><?= $model->permiso ?></span>?</h4>
        <p>Esta acción no se puede revertir</p>
    </div>
    <div class="modal-footer">
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