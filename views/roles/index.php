<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Roles';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('@app/views/layouts/_static_background', ['background_src' => '/img/sections/roles/main.png']) ?>

<div>
    <!-- Sección en blanco para poder ver fondo -->
    <div class="section" style="min-height: 250px"></div>
    <div class="section grey lighten-4" id="main">
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
            <h1>
                <?= Html::encode($this->title) ?>
            </h1>
            <?php Pjax::begin(); ?>    <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'id',
                    'rol',
                    'descripcion',
                    'created_at',
                    'updated_at',
                    [
                        'header' => '',
                        'format' => 'raw',
                        'value' => function ($data){
                            return Html::a(
                                Html::tag('i', 'remove_red_eye', ['class' => 'material-icons black-text']),
                                Url::to(['view', 'id' => $data->id]),['data-pjax' => '0']);
                        }
                    ],
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
            <?php Pjax::end(); ?></div>

    </div>
</div>