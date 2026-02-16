<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Test;

/**
 * TestSearch represents the model behind the search form of `app\models\Test`.
 */
class TestSearch extends Test
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_test', 'user_id', 'category_id', 'anon', 'auto_mark', 'try'], 'integer'],
            [['name_test', 'create_at', 'timer', 'image'], 'safe'],
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
        $query = Test::find();

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
            'id_test' => $this->id_test,
            'user_id' => $this->user_id,
            'create_at' => $this->create_at,
            'category_id' => $this->category_id,
            'timer' => $this->timer,
            'anon' => $this->anon,
            'auto_mark' => $this->auto_mark,
            'try' => $this->try,
            'is_timer' => $this->is_timer,
        ]);

        $query->andFilterWhere(['like', 'name_test', $this->name_test])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
