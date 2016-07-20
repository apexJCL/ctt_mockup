<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Panel de Control';
?>

<!-- Welcome -->
<div class="video-header--container scrollspy" id="home">
    <div class="login">
<!--        <div class="row">-->
<!--            <div class="col l1 m1 s1 teal">1</div>-->
<!--            <div class="col l1 m1 s1 teal">2</div>-->
<!--            <div class="col l1 m1 s1 teal">3</div>-->
<!--            <div class="col l1 m1 s1 teal">4</div>-->
<!--            <div class="col l1 m1 s1 teal">5</div>-->
<!--            <div class="col l1 m1 s1 teal">6</div>-->
<!--            <div class="col l1 m1 s1 teal">7</div>-->
<!--            <div class="col l1 m1 s1 teal">8</div>-->
<!--            <div class="col l1 m1 s1 teal">9</div>-->
<!--            <div class="col l1 m1 s1 teal">10</div>-->
<!--            <div class="col l1 m1 s1 teal">11</div>-->
<!--            <div class="col l1 m1 s1 teal">12</div>-->
<!--        </div>-->
        <div class="row margin-big">
            <div class="col s12 m6 offset-m3 l4 offset-l1 center">
                <img src="/img/logo.png" alt="" class="responsive-img">
            </div>
            <div class="col s8 offset-s2 l5 title-margin">
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
<!-- Clientes -->
<div class="parallax-container" style="background-color: rgba(41, 103, 155, 0.4);">
    <div class="container-small">
        <h1 class="raleway-bold">
            <div style="background-color:  rgba(61, 155, 233, 1); max-width: 50px; min-height: 15px;" id="clients"
                 class="scrollspy"></div>
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
<div class="section-big white scrollspy" id="documents">
    <div class="container-small">
        <h1 class="raleway-bold">
            <div style="background-color:  rgba(61, 155, 233, 1); max-width: 50px; min-height: 15px;"></div>
            Documentos
        </h1>
        <div class="row">
            <div class="col s12 raleway">
                I'm a paragraph. Click here to add your own text and edit me.
                It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the
                font.
            </div>
        </div>
    </div>
</div>


<div class="row no-margin">
    <div class="col s12 m6 l4 no-padding">
        <div class="caption-container">
            <img src="/img/showcase/1.jpg" alt="" class="responsive-img">
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
    <div class="col s12 m6 l4 no-padding">
        <div class="caption-container">
            <img src="/img/showcase/2.jpg" alt="" class="responsive-img">
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
    <div class="col s12 m6 l4 no-padding">
        <div class="caption-container">
            <img src="/img/showcase/3.jpg" alt="" class="responsive-img">
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
    <div class="col s12 m6 l4 no-padding">
        <div class="caption-container">
            <img src="/img/showcase/4.jpg" alt="">
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
    <div class="col s12 m6 l4 no-padding">
        <div class="caption-container">
            <img src="/img/showcase/5.jpg" alt="">
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
    <div class="col s12 m6 l4 no-padding">
        <div class="caption-container">
            <img src="/img/showcase/6.jpg" alt="">
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

<!-- Estadísticas -->
<div class="section-big white scrollspy" id="statistics">
    <div class="container-small">
        <h1 class="raleway-bold">
            <div style="background-color:  rgba(61, 155, 233, 1); max-width: 50px; min-height: 15px;"></div>
            Estadísticas
        </h1>
        <div class="row raleway">
            <div class="col s12">
                I'm a paragraph. Click here to add your own text and edit me.
                It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the
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


<!-- Usuarios -->
<div class="section-big grey lighten-2 scrollspy" id="users">
    <div class="container-small">
        <h1 class="raleway-bold">
            <div style="background-color:  rgba(61, 155, 233, 1); max-width: 50px; min-height: 15px;"></div>
            Usuarios
        </h1>
        <div class="row raleway">
            <div class="col s12">
                I'm a paragraph. Click here to add your own text and edit me.
                It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the
                font
            </div>
        </div>
    </div>
</div>
<div class="row center no-margin">
    <div class="col s12 m6 l3 no-padding">
        <div class="caption-container">
            <img src="/img/users/1.jpg" alt="">
            <div class="caption-container--container grey-overlay">
                <div class="caption-container--text">
                    <h4 class="white-text raleway-bold">David Salazar</h4>
                    <p class="white-text raleway">Social Strategist</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m6 l3 no-padding">
        <div class="caption-container">
            <img src="/img/users/2.jpg" alt="">
            <div class="caption-container--container grey-overlay">
                <div class="caption-container--text">
                    <h4 class="white-text raleway-bold">Ashley Stewart</h4>
                    <p class="white-text raleway">Community Manager</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m6 l3 no-padding">
        <div class="caption-container">
            <img src="/img/users/3.jpg" alt="">
            <div class="caption-container--container grey-overlay">
                <div class="caption-container--text">
                    <h4 class="white-text raleway-bold">Patrick Stone</h4>
                    <p class="white-text raleway">PR Manager</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m6 l3 no-padding">
        <div class="caption-container">
            <img src="/img/users/4.jpg" alt="">
            <div class="caption-container--container grey-overlay">
                <div class="caption-container--text">
                    <h4 class="white-text raleway-bold">Lisa Riley</h4>
                    <p class="white-text raleway">CEO</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Reservaciones -->
<div class="parallax-container" style="background-color: rgba(41, 103, 155, 0.4);">
    <div class="container">
        <h1 class="raleway-bold white-text">
            <div style="background-color:  rgb(255, 255, 255); max-width: 50px; min-height: 15px;" id="reservation"
                 class="scrollspy"></div>
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
    <div class="parallax"><img src="\img\parallax_user.jpg" alt="" style="opacity: 0.7" class="responsive-img"></div>
</div>

<!-- Contacto -->
<div class="section-big white scrollspy" id="support">
    <div class="container-small">
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
                        <textarea name="message" id="" cols="30" rows="10" class="materialize-textarea" placeholder="Mensaje"></textarea>
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