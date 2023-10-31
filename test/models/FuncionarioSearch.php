<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Funcionario;

/**
 * FuncionarioSearch represents the model behind the search form of `app\models\Funcionario`.
 */
class FuncionarioSearch extends Funcionario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cpf', 'cep', 'numero', 'complemento', 'cargo_id'], 'integer'],
            [['nome', 'logradouro', 'cidade', 'estado'], 'safe'],
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
        $query = Funcionario::find();

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
            'cpf' => $this->cpf,
            'cep' => $this->cep,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'cargo_id' => $this->cargo_id,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'logradouro', $this->logradouro])
            ->andFilterWhere(['like', 'cidade', $this->cidade])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
