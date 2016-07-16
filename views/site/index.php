<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
$this->title = 'Panel de Control';
?>

<!-- Welcome -->
<div class="video-header--container scrollspy" id="home">
    <div class="login">
        <div class="row" style="margin-top: 200px">
            <div class="col s12 m6 offset-m3 l4 offset-l2 center">
                <img src="/img/logo.png" alt="" class="responsive-img">
            </div>
            <div class="col s8 offset-s2 l5">
                <span><hr></span>
                <div class="raleway-bold white-text" style="font-size: 6rem">Wapp Beta</div>
                <h5 class="raleway-bold white-text">
                    Web Application Beta Version
                </h5>
            </div>
        </div>
    </div>
    <video autoplay poster="" id="bgvid" loop>
        <source src="/video/CDMX.webm" type="video/webm">
    </video>
</div>
<!-- Inventarios -->
<div class="section-big grey darken-3 white-text scrollspy" id="inventory">
    <div class="container-small">
        <h1 class="raleway-bold">
            <div style="background-color:  white; max-width: 40px; min-height: 10px; margin-bottom: 5px"></div>
            Inventarios
        </h1>
        <div class="row">
            <div class="col s12 m6 l3 hvr-float-shadow">
                <div style="background-color:  rgba(61, 155, 233, 1); max-width: 30px; min-height: 10px;"></div>
                <h6 class="raleway">CATÁLOGOS</h6>
            </div>
            <div class="col s12 m6 l3 hvr-float-shadow">
                <div style="background-color:  rgba(61, 155, 233, 1); max-width: 30px; min-height: 10px;"></div>
                <h6 class="raleway">ARTÍCULOS</h6>
            </div>
            <div class="col s12 m6 l3 hvr-float-shadow">
                <div style="background-color:  rgba(61, 155, 233, 1); max-width: 30px; min-height: 10px;"></div>
                <h6 class="raleway">EXISTENCIAS</h6>
            </div>
            <div class="col s12 m6 l3 hvr-float-shadow">
                <div style="background-color:  rgba(61, 155, 233, 1); max-width: 30px; min-height: 10px;"></div>
                <h6 class="raleway">MÓVILES</h6>
            </div>
        </div>
    </div>
</div>
<!--<div class="section white no-padding">
    <div class="row" style="margin: 0px; padding: 0px;">
        <div class="col s12 l4">
            <div class="overlay-wrapper">
                <img src="/img/showcase/lenses.jpg" alt="" class="responsive-img">
                <div class="overlay-content">
                    <a href="<?/*= Url::to(['showcase/index']) */?>">
                        <div class="overlay-text_area">
                            <h4 class="roboto-thin">Lentes</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col s12 l4">
            <div class="overlay-wrapper">
                <img src="/img/showcase/red_camera.jpg" alt="" class="responsive-img">
                <div class="overlay-content">
                    <a href="#camaras">
                        <div class="overlay-text_area">
                            <h4 class="roboto-thin">Cámaras</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col s12 l4">
            <div class="overlay-wrapper">
                <img src="/img/showcase/filters.jpg" alt="" class="responsive-img">
                <div class="overlay-content">
                    <a href="#hello">
                        <div class="overlay-text_area">
                            <h4 class="roboto-thin">Filtros</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- Clientes -->
<div class="parallax-container" style="background-color: rgba(41, 103, 155, 0.4);">
    <div class="container-small">
        <h1 class="raleway-bold">
            <div style="background-color:  rgba(61, 155, 233, 1); max-width: 50px; min-height: 15px;"></div>
            Clientes
        </h1>
        <div class="row">
            <p class="raleway">
                I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or
                double click me to add your own content and make changes to the font. Feel free to drag and
                drop me anywhere you like on your page. I’m a great place for you to tell a story and let your
                users know a little more about you
            </p>
        </div>
    </div>
    <div class="parallax"><img src="\img\filters.jpg" alt="" style="opacity: 0.7" class="responsive-img"></div>
</div>
<!-- Documentos -->
<div class="section grey lighten-4 scrollspy" id="documents">
    <div class="container-small">
        <h1 class="raleway-bold">
            <div style="background-color:  rgba(61, 155, 233, 1); max-width: 50px; min-height: 15px;"></div>
            Documentos
        </h1>
        <div class="row">
            <div class="col s12 m4 hvr-grow-rotate">
                <div style="background-color:  rgba(61, 155, 233, 1); max-width: 50px; min-height: 15px;"></div>
                <h4 class="roboto-thin">Facturas</h4>
            </div>
            <div class="col s12 m4 hvr-grow-rotate">
                <div style="background-color:  rgba(61, 155, 233, 1); max-width: 50px; min-height: 15px;"></div>
                <h4 class="roboto-thin">Pedidos</h4>
            </div>
            <div class="col s12 m4 hvr-grow-rotate">
                <div style="background-color:  rgba(61, 155, 233, 1); max-width: 50px; min-height: 15px;"></div>
                <h4 class="roboto-thin">Presupuestos</h4>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="\img\whitepapers.jpg" alt="" class="responsive-img"></div>
</div>
<!-- Table of Contents -->
<div class="row content-table">
    <div class="col hide-on-small-only m3 l2">
        <ul class="section table-of-contents">
            <li>
                <a href="#home" class="white-text">
                    🔘 Inicio
                </a>
            </li>
            <li>
                <a href="#inventory" class="white-text">
                    🔘 Inventario
                </a>
            </li>
            <li>
                <a href="#clients" class="white-text">
                    🔘 Clientes
                </a>
            </li>
            <li>
                <a href="#documents" class="white-text">
                    🔘 Documentos
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Modal Structure -->
<div id="login-modal" class="modal">
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
                <h4>Inicia Sesión</h4>
            </div>
            <div class="col s12">
                <div class="container">
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'options' => ['class' => 'form-horizontal'],
                        'fieldConfig' => [
                            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                            'labelOptions' => ['class' => 'col-lg-1 control-label'],
                        ],
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    ]) ?>

                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <?= Html::submitButton('Aceptar', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
    </div>
</div>