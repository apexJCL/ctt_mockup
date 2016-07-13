<?php use yii\helpers\Url; ?>
<li><a href="#">Inicio</a></li>
<li><a href="#">Inventarios</a></li>
<li><a href="#">Clientes</a></li>
<li><a href="#">Documentos</a></li>
<li><a href="#">Usuarios</a></li>
<li><a href="<?= Url::to(['logout']) ?>" data-method="post">Iniciar Sesión</a></li>