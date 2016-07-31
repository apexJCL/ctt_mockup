<?php
use yii\helpers\Url;
/* @var $user */
?>
<li>
    <a href="#home" class="raleway">INICIO</a>
</li>
<li>
    <a href="#inventory" class="raleway">INVENTARIOS</a>
</li>
<li>
    <a href="#!" class="raleway dropdown-button">CLIENTES</a>
</li>
<li>
    <a href="#documents" class="raleway">DOCUMENTOS</a>
</li>
<li>
    <a href="#!" <?= implode(' ', $user['data'])?> class="raleway dropdown-button">USUARIOS</a>
</li>
<li>
    <a href="#login-modal" class="raleway modal-trigger">INICIAR SESIÓN</a>
</li>

<!-- Dropdown clientes -->
<ul class="dropdown-content dropdown-content-menu" id="dropdown-clientes">
    <li><a href="#">Uno</a></li>
    <li><a href="#">Dos</a></li>
    <li><a href="#">Tres</a></li>
</ul>

<!-- Dropdown Usuarios -->
<ul class="dropdown-content <?= $user['class'] ?>" id="<?= $user['id'] ?>">
    <li class="waves-effect waves-light"><a href="<?= Url::to(['users/index']) ?>">Administrar</a></li>
    <li class="waves-effect waves-light"><a href="<?= Url::to(['roles/index']) ?>">Roles</a></li>
    <li class="waves-effect waves-light"><a href="<?= Url::to(['permisos/index']) ?>">Permisos</a></li>
</ul>