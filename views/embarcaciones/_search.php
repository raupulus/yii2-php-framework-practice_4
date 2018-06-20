<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmbarcacionesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="embarcaciones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'propietario_id') ?>

    <?= $form->field($model, 'plazas') ?>

    <?= $form->field($model, 'precio') ?>

    <?= $form->field($model, 'motor')->checkbox() ?>

    <?php // echo $form->field($model, 'vela')->checkbox() ?>

    <?php // echo $form->field($model, 'remo')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
