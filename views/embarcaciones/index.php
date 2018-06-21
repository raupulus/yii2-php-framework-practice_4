<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmbarcacionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Embarcaciones';
$this->params['breadcrumbs'][] = $this->title;

$mostrarTelefono = <<<EOT
    $('.telefono').on('click', function() {
        $(this).val($(this).data('tel'));
    });
EOT;

$this->registerJs($mostrarTelefono);

?>

<div class="embarcaciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'propietario.nombre',
            'plazas',
            'precio',
            'motor:boolean',
            'vela:boolean',
            'remo:boolean',
            [
                'attribute' => 'propietario.telefono',
                'format' => 'raw',
                'value' => function($model, $x, $y) {
                    return Html::buttonInput('Mostrar teléfono', [
                        'class' => 'telefono btn btn-success',
                        'data-tel' => $model->propietario->telefono,
                    ]);
                }
            ],

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
