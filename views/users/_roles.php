<?php

/* @var $roles app\models\Rol */
/* @var $model app\models\User */
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
?>
<div class="row">
    <div class="col s12 m6 l4">
        <select name="roles[]" id="roles" multiple>
            <option value="" disabled selected>Marque los roles que correspondan</option>
            <?php
            foreach ($roles as $role) {
                echo Html::tag('option', $role->rol,
                    ($model->isNewRecord) ? ['value' => $role->id] : (in_array($role->id, $model->getIDRoles()) ?
                            ['value' => $role->id, 'selected' => ''] :
                            ['value' => $role->id]));
            }
            ?>
        </select>
    </div>
</div>
