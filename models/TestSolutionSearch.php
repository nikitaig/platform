<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TestSolution;

/**
 * TestSolutionSearch represents the model behind the search form of `app\models\TestSolution`.
 */
class TestSolutionSearch extends TestSolution
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_test_solution', 'user_id', 'test_id', 'point', 'try'], 'integer'],
            [['begin_at', 'end_at'], 'safe'],
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
        $query = TestSolution::find();

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
            'id_test_solution' => $this->id_test_solution,
            'user_id' => $this->user_id,
            'test_id' => $this->test_id,
            'begin_at' => $this->begin_at,
            'point' => $this->point,
            'end_at' => $this->end_at,
            'try' => $this->try,
        ]);

        return $dataProvider;
    }
}
