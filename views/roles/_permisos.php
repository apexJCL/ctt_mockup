<?php
use app\models\Permiso;
use app\models\Rol;
use yii\helpers\Html;

/* @var Rol $model */
/* @var Permiso[] $permisos */

?>


<div class="row">
    <div class="col s12">
        <h4>Permisos</h4>
    </div>
    <?php
    $rp = $model->getIDPermisos();
    foreach ($permisos as $permiso) {
        echo Html::tag('div',
            Html::tag('input', $permiso->permiso, in_array($permiso->id, $rp) ? [
                'id' => $permiso->id,
                'value' => $permiso->id,
                'type' => 'checkbox',
                'name' => 'permisos[]',
                'checked' => ''
            ] : [
                'id' => $permiso->id,
                'value' => $permiso->id,
                'type' => 'checkbox',
                'name' => 'permisos[]'
            ]).
            Html::tag('label', $permiso->permiso, ['for' => $permiso->id]),
            [
                'class' => 'col s4 m2 l2 tooltipped',
                'data-position' => 'top',
                'data-delay' => '100',
                'data-tooltip' => $permiso->descripcion
            ]);
    }
    ?>
</div>
