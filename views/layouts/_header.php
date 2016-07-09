<?php use yii\helpers\Url; ?>
<header>
    <nav class="black">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo">CTT EXP & RENTALS</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?= Url::to(['logout']) ?>" data-method="post">Cerrar Sesión</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="<?= Url::to(['logout']) ?>" data-method="post">Cerrar Sesión</a></li>
            </ul>
        </div>
    </nav>
</header>