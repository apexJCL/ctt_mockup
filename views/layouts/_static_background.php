<?php

/* @var $background_src */
/* @var $div_classes */

?>

<div class="row" style="
position: fixed;
top: 50%;
left: 50%;
min-width: 100%;
min-height:100%;
width: 100vw;
height: auto;
z-index: -100;
-webkit-transform: translate(-50%, -50%);
-moz-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
-o-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
">
    <div class="<?= empty($div_classes) ? '' : $div_classes ?> profile-picture--container">
        <div class="background">
            <img src="<?= $background_src ?>" alt="">
        </div>
        <div class="foreground">
            <img src="<?= $background_src ?>" alt="" class="responsive-img">
        </div>
    </div>
</div>