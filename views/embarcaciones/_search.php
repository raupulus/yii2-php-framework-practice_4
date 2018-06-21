<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmbarcacionesSearch */
/* @var $form yii\widgets\ActiveForm */

$tiene = ['' => 'Es indiferente', true => 'Si', false => 'No'];
?>

<div class="embarcaciones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'propietario_id') ?>

    <?= $form->field($model, 'plazas') ?>

    <?= $form->field($model, 'precio') ?>

    <?= $form->field($model, 'motor')->dropDownList($tiene) ?>

    <?= $form->field($model, 'vela')->dropDownList($tiene) ?>

    <?= $form->field($model, 'remo')->dropDownList($tiene) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
