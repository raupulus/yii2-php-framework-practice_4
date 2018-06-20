<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Embarcaciones;

/**
 * EmbarcacionesSearch represents the model behind the search form of `app\models\Embarcaciones`.
 */
class EmbarcacionesSearch extends Embarcaciones
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'propietario_id', 'plazas', 'precio'], 'integer'],
            [['motor', 'vela', 'remo'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Embarcaciones::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'propietario_id' => $this->propietario_id,
            'plazas' => $this->plazas,
            'precio' => $this->precio,
            'motor' => $this->motor,
            'vela' => $this->vela,
            'remo' => $this->remo,
        ]);

        return $dataProvider;
    }
}
