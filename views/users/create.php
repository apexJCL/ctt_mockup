<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Agregar Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">
</div>

<div class="container">
    <div class="row">
        <div class="col s12">
            <h1 class="raleway-bold"><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="col s12">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>