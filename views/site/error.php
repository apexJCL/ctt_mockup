<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<?= $this->render('@app/views/layouts/_static_background', ['background_src' => '/img/lost.png']) ?>

<div>
    <!-- Sección en blanco para poder ver fondo -->
    <div class="section" style="min-height: 350px"></div>
    <div class="section red lighten-4">
        <div class="container">

            <h1 class="raleway-bold"><?= Html::encode($this->title) ?></h1>

            <div class="alert alert-danger">
                <?= nl2br(Html::encode($message)) ?>
            </div>

            <p>
                Hubo un error, no pudimos encontrar lo que nos solicitó.
            </p>
            <p class="raleway-bold">
                Si cree que esto no debería estar pasando, contacte a Soporte Técnico.
            </p>
        </div>
    </div>
</div>