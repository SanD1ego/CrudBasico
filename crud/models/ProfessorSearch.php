<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Professor;

/**
 * ProfessorSearch represents the model behind the search form of `app\models\Professor`.
 */
class ProfessorSearch extends Professor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_PROFESSOR'], 'integer'],
            [['NOME', 'DATA_NASCIMENTO', 'DATA_CRIACAO'], 'safe'],
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
        $query = Professor::find();

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
            'ID_PROFESSOR' => $this->ID_PROFESSOR,
            'DATA_NASCIMENTO' => $this->DATA_NASCIMENTO,
            'DATA_CRIACAO' => $this->DATA_CRIACAO,
        ]);

        $query->andFilterWhere(['like', 'NOME', $this->NOME]);

        return $dataProvider;
    }
}
