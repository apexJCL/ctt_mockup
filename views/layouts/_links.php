<?php use yii\helpers\Url; ?>
<li>
    <a href="#home" class="raleway">INICIO</a>
</li>
<li>
    <a href="#inventory" class="raleway">INVENTARIOS</a>
</li>
<li>
    <a href="#!" data-activates="dropdown-clientes" data-beloworigin="true" class="raleway dropdown-button">CLIENTES</a>
</li>
<li>
    <a href="#documents" class="raleway">DOCUMENTOS</a>
</li>
<li>
    <a href="#!" data-activates="dd-usuarios" data-beloworigin="true" data-hover="true" class="raleway dropdown-button">USUARIOS</a>
</li>
<li>
    <a href="#login-modal" class="raleway modal-trigger">INICIAR SESIÓN</a>
</li>

<!-- Dropdown clientes -->
<ul class="dropdown-content" id="dropdown-clientes">
    <li><a href="#">Uno</a></li>
    <li><a href="#">Dos</a></li>
    <li><a href="#">Tres</a></li>
</ul>

<!-- Dropdown Usuarios -->
<ul class="dropdown-content" id="dd-usuarios">
    <li><a href="<?= Url::to(['users/index']) ?>">Administrar<i class="material-icons md-18 left">edit</i></a></li>
    <li><a href="<?= Url::to(['roles/index']) ?>">Roles</a></li>
    <li><a href="<?= Url::to(['permisos/index']) ?>">Permisos</a></li>
</ul>