<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Aluno;

/**
 * AlunoSearch represents the model behind the search form of `app\models\Aluno`.
 */
class AlunoSearch extends Aluno
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_ALUNO', 'LOGRADOURO', 'NUMERO', 'CEP', 'ID_CURSO'], 'integer'],
            [['NOME', 'DATA_NASCIMENTO', 'BAIRRO', 'CIDADE', 'ESTADO', 'DATA_CRIACAO'], 'safe'],
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
        $query = Aluno::find();

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
            'ID_ALUNO' => $this->ID_ALUNO,
            'DATA_NASCIMENTO' => $this->DATA_NASCIMENTO,
            'LOGRADOURO' => $this->LOGRADOURO,
            'NUMERO' => $this->NUMERO,
            'DATA_CRIACAO' => $this->DATA_CRIACAO,
            'CEP' => $this->CEP,
            'ID_CURSO' => $this->ID_CURSO,
        ]);

        $query->andFilterWhere(['like', 'NOME', $this->NOME])
            ->andFilterWhere(['like', 'BAIRRO', $this->BAIRRO])
            ->andFilterWhere(['like', 'CIDADE', $this->CIDADE])
            ->andFilterWhere(['like', 'ESTADO', $this->ESTADO]);

        return $dataProvider;
    }
}
