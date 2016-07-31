<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('@app/views/layouts/_static_background', ['background_src' => '/img/sections/users/main.png']) ?>

<div>
    <!-- Sección en blanco para poder ver fondo -->
    <div class="section" style="min-height: 250px"></div>
    <div class="section grey lighten-5 fab-container" id="main">
        <div class="fixed-action-btn horizontal main-fab">
            <a class="btn-floating btn-large">
                <i class="large material-icons">menu</i>
            </a>
            <ul>
                <li>
                    <?=
                    Html::a('<i class="material-icons">add</i>', ['create'], [
                        'class' => 'btn-floating cyan tooltipped',
                        'data-position' => "bottom",
                        'data-delay' => '1000',
                        'data-tooltip' => 'Añadir'
                    ]) ?>

                </li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="thin-line primary-overlay"></div>
                    <h1 class="raleway-bold"><?= Html::encode($this->title) ?></h1>
                </div>
            </div>
            <div class="col s12">
                <?php Pjax::begin(); ?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'rowOptions' => function ($model, $key, $index, $grid) {
                        return [
                            'class' => ""
                        ];
                    },
                    'tableOptions' => ['class' => 'highlight'],
                    'layout' => "{pager}\n{summary}\n{items}",
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                            'header' => Html::a('Nombre', Url::to(['users/index?sort=nombre'])),
                            'format' => 'raw',
                            'value' => function ($data) {
                                return Html::a($data->nombre, Url::to(['users/view', 'id' => $data->id]),['data-pjax' => '0']);
                            }
                        ],
                        'username',
                        'correo_electronico',
                        'created_at',
                        'updated_at',
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>
