<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "embarcaciones".
 *
 * @property int $id
 * @property int $propietario_id
 * @property int $plazas
 * @property int $precio
 * @property bool $motor
 * @property bool $vela
 * @property bool $remo
 *
 * @property Propietarios $propietario
 */
class Embarcaciones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'embarcaciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['propietario_id', 'plazas', 'precio'], 'default', 'value' => null],
            [['propietario_id', 'plazas', 'precio'], 'integer'],
            [['plazas', 'precio'], 'required'],
            [['motor', 'vela', 'remo'], 'boolean'],
            [['propietario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Propietarios::className(), 'targetAttribute' => ['propietario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'propietario_id' => 'Propietario ID',
            'plazas' => 'Plazas',
            'precio' => 'Precio',
            'motor' => 'Motor',
            'vela' => 'Vela',
            'remo' => 'Remo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropietario()
    {
        return $this->hasOne(Propietarios::className(), ['id' => 'propietario_id']);
    }
}
