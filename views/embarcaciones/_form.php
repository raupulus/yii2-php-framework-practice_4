<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Embarcaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="embarcaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'propietario_id')->textInput() ?>

    <?= $form->field($model, 'plazas')->textInput() ?>

    <?= $form->field($model, 'precio')->textInput() ?>

    <?= $form->field($model, 'motor')->checkbox() ?>

    <?= $form->field($model, 'vela')->checkbox() ?>

    <?= $form->field($model, 'remo')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
