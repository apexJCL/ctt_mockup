<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('@app/views/layouts/_static_background', ['background_src' => '/img/sections/users/main.png']) ?>

<div>
    <!-- Sección en blanco para poder ver fondo -->
    <div class="section" style="min-height: 250px"></div>
    <div class="section white" id="main">
        <?=
        Html::a('<i class="material-icons">add</i>', ['create'], [
            'class' => 'btn btn-floating btn-large waves-effect waves-light blue accent-2 main-fab'
        ]) ?>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="thin-line primary-overlay"></div>
                    <h1 class="raleway-bold"><?= Html::encode($this->title) ?></h1>
                </div>
            </div>
            <div class="col s12">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                            'header' => Html::a('Nombre', Url::to(['users/index?sort=nombre'])),
                            'format' => 'raw',
                            'value' => function ($data) {
                                return Html::a($data->nombre, Url::to(['users/view', 'id' => $data->id]));
                            }
                        ],
                        'username',
                        'created_at',
                        'updated_at',
                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>
