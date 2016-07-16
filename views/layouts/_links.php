<?php use yii\helpers\Url; ?>
<li><a href="#home" class="raleway-regular">INICIO</a></li>
<li><a href="#inventory" class="raleway-regular">INVENTARIOS</a></li>
<li><a href="#clients" class="raleway-regular">CLIENTES</a></li>
<li><a href="#documents" class="raleway-regular">DOCUMENTOS</a></li>
<li><a href="#" class="raleway-regular">USUARIOS</a></li>
<li><a href="<?= Url::to(['login']) ?>" data-method="post" class="raleway-regular">INICIAR SESIÓN</a></li>