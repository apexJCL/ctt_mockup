<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Panel de Control';
?>
<!-- Ruler Guide -->
<!--<div>-->
<!--    <div class="row no-margin">-->
<!--        <div class="col s1 m1 l1 cyan">col 1</div>-->
<!--        <div class="col s1 m1 l1 cyan">col 1</div>-->
<!--        <div class="col s1 m1 l1 cyan">col 1</div>-->
<!--        <div class="col s1 m1 l1 cyan">col 1</div>-->
<!--        <div class="col s1 m1 l1 cyan">col 1</div>-->
<!--        <div class="col s1 m1 l1 cyan">col 1</div>-->
<!--        <div class="col s1 m1 l1 cyan">col 1</div>-->
<!--        <div class="col s1 m1 l1 cyan">col 1</div>-->
<!--        <div class="col s1 m1 l1 cyan">col 1</div>-->
<!--        <div class="col s1 m1 l1 cyan">col 1</div>-->
<!--        <div class="col s1 m1 l1 cyan">col 1</div>-->
<!--        <div class="col s1 m1 l1 cyan">col 1</div>-->
<!--    </div>-->
<!--</div>-->

<!-- Aquí comienza el sitio -->
<div>
    <!-- Fondo Video -->
    <div class="hide-on-small-and-down">
        <video autoplay loop class="background-video">
            <source src="video/CDMX.webm" type="video/webm">
        </video>
    </div>

    <!--  Principal: Logo  -->
    <div class="section primary-overlay welcome-section scrollspy" id="home">
        <div class="row">
            <div class="col s12 m4 offset-m1 l4 center offset-l1">
                <img src="/img/logo.png" alt="" class="responsive-img">
            </div>
            <div class="col s12 m5 l5 white-text">
                <hr align="left" width="450rem;">
                <h1 class="raleway-bold page-title">
                    Wapp Beta
                </h1>
                <h5 class="raleway-bold">
                    Web Application Beta Version
                </h5>
            </div>
        </div>
    </div>
    <!-- Inventarios -->
    <div class="section-big grey darken-3 white-text scrollspy" id="inventory">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="raleway-bold">
                        <div
                            style="background-color:  white; max-width: 40px; min-height: 10px; margin-bottom: 5px"></div>
                        Inventarios
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l3 no-padding raleway">
                    <div style="background-color:  rgba(61, 155, 233, 1); max-width: 30px; min-height: 10px;"></div>
                    CATÁLOGOS
                </div>
                <div class="col s12 m6 l3 no-padding raleway">
                    <div style="background-color:  rgba(61, 155, 233, 1); max-width: 30px; min-height: 10px;"></div>
                    ARTÍCULOS
                </div>
                <div class="col s12 m6 l3 no-padding raleway">
                    <div style="background-color:  rgba(61, 155, 233, 1); max-width: 30px; min-height: 10px;"></div>
                    EXISTENCIAS
                </div>
                <div class="col s12 m6 l3 no-padding raleway">
                    <div style="background-color:  rgba(61, 155, 233, 1); max-width: 30px; min-height: 10px;"></div>
                    MÓVILES
                </div>
            </div>
        </div>
    </div>

    <!--  Clientes  -->
    <div id="clients" class="scrollspy">
        <div class="parallax-container" style="background-color: rgba(41, 103, 155, 0.4);">
            <div class="container-small">
                <h1 class="raleway-bold">
                    <div style="background-color:  rgba(61, 155, 233, 1); max-width: 50px; min-height: 15px;"></div>
                    Clientes
                </h1>
                <div class="row">
                    <p class="raleway">
                        I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text”
                        or
                        double click me to add your own content and make changes to the font. Feel free to drag and
                        drop me anywhere you like on your page. I’m a great place for you to tell a story and let your
                        users know a little more about you
                    </p>
                </div>
            </div>
            <div class="parallax"><img src="\img\filters.jpg" alt="" style="opacity: 0.7"></div>
        </div>
    </div>

    <!--  Documentos  -->
    <div id="documents" class="scrollspy">
        <div class="section white black-text">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <h1 class="raleway-bold">
                            <div
                                style="background-color:  rgba(61, 155, 233, 1); max-width: 50px; min-height: 15px;"></div>
                            Documentos
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6 l8">
                        <p class="raleway">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just
                            click “Edit Text” or double click me to add your own content and make changes to the
                            font.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section no-padding">
            <div class="row no-margin">
                <div class="col s12 m6 l4 no-padding"
                     style="background: url(/img/showcase/1.jpg); min-height: 320px; background-size: cover;">
                    <div class="caption-container">
                        <div class="caption-container--container primary-overlay">
                            <a href="/showcase/index">
                                <div class="caption-container--text">
                                    <h4 class="white-text raleway-bold">Cámara</h4>
                                    <p class="white-text raleway">Equipos de alto desempeño</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4 no-padding" style="background: url(/img/showcase/2.jpg); min-height: 320px">
                    <div class="caption-container">
                        <div class="caption-container--container primary-overlay">
                            <a href="/showcase/index">
                                <div class="caption-container--text">
                                    <h4 class="white-text raleway-bold">Lentes</h4>
                                    <p class="white-text raleway">Las marcas de mayor prestigio</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4 no-padding" style="background: url(/img/showcase/3.jpg); min-height: 320px">
                    <div class="caption-container">
                        <div class="caption-container--container primary-overlay">
                            <a href="/showcase/index">
                                <div class="caption-container--text">
                                    <h4 class="white-text raleway-bold">Cabezas</h4>
                                    <p class="white-text raleway">Ámplia variedad de cabezas y sistemas rieles</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4 no-padding" style="background: url(/img/showcase/4.jpg); min-height: 320px">
                    <div class="caption-container">
                        <div class="caption-container--container primary-overlay">
                            <a href="/showcase/index">
                                <div class="caption-container--text">
                                    <h4 class="white-text raleway-bold">ARRI Lens</h4>
                                    <p class="white-text raleway">Principal distribuidor de ARRI en México</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4 no-padding" style="background: url(/img/showcase/5.jpg); min-height: 320px">
                    <div class="caption-container">
                        <div class="caption-container--container primary-overlay">
                            <a href="/showcase/index">
                                <div class="caption-container--text">
                                    <h4 class="white-text raleway-bold">Electrónicos</h4>
                                    <p class="white-text raleway">Lo más sofisticado y avanzado en equipos</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4 no-padding" style="background: url(/img/showcase/6.jpg); min-height: 320px">
                    <div class="caption-container">
                        <div class="caption-container--container primary-overlay">
                            <a href="/showcase/index">
                                <div class="caption-container--text">
                                    <h4 class="white-text raleway-bold">Grúas</h4>
                                    <p class="white-text raleway">Ámplio soporte de grúas Eléctricas</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Estadísticas -->
    <div class="scrollspy" id="statistics">
        <div class="section-big white">
            <div class="container-small">
                <h1 class="raleway-bold">
                    <div style="background-color:  rgba(61, 155, 233, 1); max-width: 50px; min-height: 15px;"></div>
                    Estadísticas
                </h1>
                <div class="row raleway">
                    <div class="col s12">
                        I'm a paragraph. Click here to add your own text and edit me.
                        It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to
                        the
                        font
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row center">
                    <div class="col s12 m4 l3"><img src="/img/brands/brand_1.jpg" alt="" class="responsive-img"></div>
                    <div class="col s12 m4 l3"><img src="/img/brands/brand_2.jpg" alt="" class="responsive-img"></div>
                    <div class="col s12 m4 l3"><img src="/img/brands/brand_3.jpg" alt="" class="responsive-img"></div>
                    <div class="col s12 m4 l3"><img src="/img/brands/brand_4.jpg" alt="" class="responsive-img"></div>
                    <div class="col s12 m4 l3"><img src="/img/brands/brand_5.jpg" alt="" class="responsive-img"></div>
                    <div class="col s12 m4 l3"><img src="/img/brands/brand_6.jpg" alt="" class="responsive-img"></div>
                    <div class="col s12 m4 l3"><img src="/img/brands/brand_7.jpg" alt="" class="responsive-img"></div>
                    <div class="col s12 m4 l3"><img src="/img/brands/brand_8.jpg" alt="" class="responsive-img"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Usuarios -->
    <div class="scrollspy" id="users">
        <div class="section grey lighten-2">
            <div class="container-small">
                <h1 class="raleway-bold">
                    <div style="background-color:  rgba(61, 155, 233, 1); max-width: 50px; min-height: 15px;"></div>
                    Usuarios
                </h1>
                <div class="row raleway">
                    <div class="col s12">
                        I'm a paragraph. Click here to add your own text and edit me.
                        It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to
                        the
                        font
                    </div>
                </div>
            </div>
        </div>
        <div class="row center no-margin">
            <div class="col s12 m6 l3 no-padding"
                 style="background: url(/img/users/1.jpg); min-height: 250px; background-size: cover;">
                <div class="caption-container">
                    <div class="caption-container--container grey-overlay">
                        <div class="caption-container--text">
                            <h4 class="white-text raleway-bold">David Salazar</h4>
                            <p class="white-text raleway">Social Strategist</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 no-padding"
                 style="background: url(/img/users/2.jpg); min-height: 250px; background-size: cover;">
                <div class="caption-container">
                    <div class="caption-container--container grey-overlay">
                        <div class="caption-container--text">
                            <h4 class="white-text raleway-bold">Ashley Stewart</h4>
                            <p class="white-text raleway">Community Manager</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 no-padding"
                 style="background: url(/img/users/3.jpg); min-height: 250px; background-size: cover;">
                <div class="caption-container">
                    <div class="caption-container--container grey-overlay">
                        <div class="caption-container--text">
                            <h4 class="white-text raleway-bold">Patrick Stone</h4>
                            <p class="white-text raleway">PR Manager</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 no-padding"
                 style="background: url(/img/users/4.jpg); min-height: 250px; background-size: cover;">
                <div class="caption-container">
                    <div class="caption-container--container grey-overlay">
                        <div class="caption-container--text">
                            <h4 class="white-text raleway-bold">Lisa Riley</h4>
                            <p class="white-text raleway">CEO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reservaciones -->
    <div class="scrollspy" id="reservations">
        <div class="parallax-container" style="background-color: rgba(41, 103, 155, 0.4);">
            <div class="container">
                <h1 class="raleway-bold white-text">
                    <div style="background-color:  rgb(255, 255, 255); max-width: 50px; min-height: 15px;"></div>
                    Reservaciones
                </h1>
                <div class="row white-text">
                    <div class="col s12 m6 l3">
                        <h2 class="raleway-bold">106</h2>
                        <p class="raleway-bold">CÁMARAS</p>
                    </div>
                    <div class="col s12 m6 l3">
                        <h2 class="raleway-bold">198</h2>
                        <p class="raleway-bold">GRÚAS</p>
                    </div>
                    <div class="col s12 m6 l3">
                        <h2 class="raleway-bold">506</h2>
                        <p class="raleway-bold">MÓVILES</p>
                    </div>
                    <div class="col s12 m6 l3">
                        <h2 class="raleway-bold">1603</h2>
                        <p class="raleway-bold">FILMACIONES</p>
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="\img\parallax_user.jpg" alt="" style="opacity: 0.7" class="responsive-img">
            </div>
        </div>
    </div>

    <!-- Contacto -->
    <div class="section-big white scrollspy" id="support">
        <div class="container">
            <h1 class="raleway-bold">
                <div style="background-color:  rgba(61, 155, 233, 1); max-width: 50px; min-height: 15px;"></div>
                Soporte
            </h1>
            <div class="row raleway">
                <div class="col s12 l6">
                    <div class="row">
                        <div class="col s12">
                            <input type="text" placeholder="Nombre">
                        </div>
                        <div class="col s12">
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="col s12">
                            <input type="text" placeholder="Asunto">
                        </div>
                        <div class="col s12">
                            <textarea name="message" id="" cols="30" rows="10" class="materialize-textarea"
                                      placeholder="Mensaje"></textarea>
                        </div>
                        <div class="col s12">
                            <a href="!#" class="btn waves-effect">Enviar</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 l6">
                    <p class="raleway-bold">Esperamos tus comentarios</p>
                    <p>500 Terry Francois Street,<br>
                        San Francisco,<br>
                        CA 94158</p>
                    <p class="raleway-bold">
                        cttexp_info@wapp.com<br>
                        123-456-7890
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Table of Contents -->
<div class="row content-table">
    <div class="col hide-on-small-only table-of-contents">
        <ul>
            <li><a href="#home">
                    <div>
                        <span>INICIO</span>
                        <svg width="12" height="12" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                    </div>
                </a></li>
            <li><a href="#inventory">
                    <div>
                        <span>INVENTARIOS</span>
                        <svg width="12" height="12" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                    </div>
                </a></li>
            <li><a href="#clients">
                    <div>
                        <span>CLIENTES</span>
                        <svg width="12" height="12" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                    </div>
                </a></li>
            <li><a href="#documents">
                    <div>
                        <span>DOCUMENTOS</span>
                        <svg width="12" height="12" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                    </div>
                </a></li>
            <li><a href="#statistics">
                    <div>
                        <span>ESTADÍSTICAS</span>
                        <svg width="12" height="12" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                    </div>
                </a></li>
            <li><a href="#users">
                    <div>
                        <span>USUARIOS</span>
                        <svg width="12" height="12" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                    </div>
                </a></li>
            <li><a href="#reservations">
                    <div>
                        <span>RESERVACIONES</span>
                        <svg width="12" height="12" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                    </div>
                </a></li>
            <li><a href="#support">
                    <div>
                        <span>SOPORTE</span>
                        <svg width="12" height="12" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                    </div>
                </a></li>
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