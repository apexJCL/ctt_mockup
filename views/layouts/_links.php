<?php use yii\helpers\Url; ?>
<li><a href="#home">INICIO</a></li>
<li><a href="#inventory">INVENTARIOS</a></li>
<li><a href="#clients">CLIENTES</a></li>
<li><a href="#documents">DOCUMENTOS</a></li>
<li><a href="#">USUARIOS</a></li>
<li><a href="<?= Url::to(['login']) ?>" data-method="post">INICIAR SESIÓN</a></li>