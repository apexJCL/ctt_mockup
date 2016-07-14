<?php
/* @var $this yii\web\View */
$this->title = 'Panel de Control';
?>

<!-- Welcome -->
<div class="video-header--container scrollspy" id="home">
    <div class="login">
        <div class="row">
            <div class="col s12 l4 offset-l1">
                <img src="/img/logo.png" alt="" class="responsive-img">
            </div>
            <div class="col s12 l6">
                <span><hr></span>
                <div class="roboto-regular white-text" style="font-size: 6rem">Wapp Beta</div>
                <h4 class="roboto-thin white-text">
                    Web Application Beta Version
                </h4>
            </div>
        </div>
    </div>
    <video autoplay poster="" id="bgvid" loop>
        <source src="/video/file.webm" type="video/webm">
        <source src="/video/file.mp4" type="video/mp4">
    </video>
</div>
<!-- Inventarios -->
<div class="section grey lighten-4 scrollspy" id="inventory">
    <div class="container">
        <h1 class="roboto-regular">
            <div style="background-color: #00acc1; max-width: 50px; min-height: 15px;"></div>
            Inventarios
        </h1>
        <div class="row">
            <div class="col s12 m6 l3 hvr-float-shadow">
                <div style="background-color: #00acc1; max-width: 50px; min-height: 15px;"></div>
                <h4 class="roboto-thin">Catálogos</h4>
            </div>
            <div class="col s12 m6 l3 hvr-float-shadow">
                <div style="background-color: #00acc1; max-width: 50px; min-height: 16px;"></div>
                <h4 class="roboto-thin">Artículos</h4>
            </div>
            <div class="col s12 m6 l3 hvr-float-shadow">
                <div style="background-color: #00acc1; max-width: 50px; min-height: 16px;"></div>
                <h4 class="roboto-thin">Existencias</h4>
            </div>
            <div class="col s12 m6 l3 hvr-float-shadow">
                <div style="background-color: #00acc1; max-width: 50px; min-height: 16px;"></div>
                <h4 class="roboto-thin">Móviles</h4>
            </div>
        </div>
    </div>
</div>
<div class="section white no-padding">
    <div class="row" style="margin: 0px; padding: 0px;">
        <div class="col s12 l4">
            <div class="overlay-wrapper">
                <img src="/img/showcase/lenses.jpg" alt="" class="responsive-img">
                <div class="overlay-content">
                    <a href="#lentes">
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
</div>
<!-- Clientes -->
<div class="section grey lighten-4 scrollspy" id="clients">
    <div class="container">

        <h1 class="roboto-regular">
            <div style="background-color: #00acc1; max-width: 50px; min-height: 15px;"></div>
            Clientes
        </h1>
        <div class="row">
            <div class="col s12 m6 hvr-underline-from-left">
                <div style="background-color: #00acc1; max-width: 50px; min-height: 15px;"></div>
                <h4 class="roboto-thin">Perfiles</h4>
            </div>
            <div class="col s12 m6 hvr-underline-from-left">
                <div style="background-color: #00acc1; max-width: 50px; min-height: 15px;"></div>
                <h4 class="roboto-thin">Crear</h4>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="\img\people.jpg" alt=""></div>
</div>
<!-- Documentos -->
<div class="section grey lighten-4 scrollspy" id="documents">
    <div class="container">
        <h1 class="roboto-regular">
            <div style="background-color: #00acc1; max-width: 50px; min-height: 15px;"></div>
            Documentos
        </h1>
        <div class="row">
            <div class="col s12 m4 hvr-grow-rotate">
                <div style="background-color: #00acc1; max-width: 50px; min-height: 15px;"></div>
                <h4 class="roboto-thin">Facturas</h4>
            </div>
            <div class="col s12 m4 hvr-grow-rotate">
                <div style="background-color: #00acc1; max-width: 50px; min-height: 15px;"></div>
                <h4 class="roboto-thin">Pedidos</h4>
            </div>
            <div class="col s12 m4 hvr-grow-rotate">
                <div style="background-color: #00acc1; max-width: 50px; min-height: 15px;"></div>
                <h4 class="roboto-thin">Presupuestos</h4>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="\img\whitepapers.jpg" alt=""></div>
</div>
<!-- Table of Contents -->
<div class="row content-table">
    <div class="col hide-on-small-only m3 l2">
        <ul class="section table-of-contents">
            <li><a href="#home" class="white-text">Inicio</a></li>
            <li><a href="#inventory" class="white-text">Inventario</a></li>
            <li><a href="#clients" class="white-text">Clientes</a></li>
            <li><a href="#documents" class="white-text">Documentos</a></li>
        </ul>
    </div>
</div>
