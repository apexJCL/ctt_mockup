<?php use yii\helpers\Url; ?>
<li><a href="#home">Inicio</a></li>
<li><a href="#inventory">Inventarios</a></li>
<li><a href="#clients">Clientes</a></li>
<li><a href="#documents">Documentos</a></li>
<li><a href="#">Usuarios</a></li>
<li><a href="<?= Url::to(['login']) ?>" data-method="post">Iniciar Sesión</a></li>