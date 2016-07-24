<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('@app/views/layouts/_static_background', ['background_src' => '/img/sections/users/main.png']) ?>

<div>
    <div class="section" style="min-height: 250px"></div>
    <div class="section white">
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
                        'nombre',
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
