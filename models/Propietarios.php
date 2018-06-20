<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "propietarios".
 *
 * @property int $id
 * @property string $nombre
 * @property string $dni
 * @property string $telefono
 *
 * @property Embarcaciones[] $embarcaciones
 */
class Propietarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'propietarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'dni', 'telefono'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'dni' => 'Dni',
            'telefono' => 'Telefono',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmbarcaciones()
    {
        return $this->hasMany(Embarcaciones::className(), ['propietario_id' => 'id']);
    }
}
