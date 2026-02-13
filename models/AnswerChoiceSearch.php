<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AnswerChoice;

/**
 * AnswerChoiceSearch represents the model behind the search form of `app\models\AnswerChoice`.
 */
class AnswerChoiceSearch extends AnswerChoice
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_answer_choice', 'question_id', 'point'], 'integer'],
            [['text_answer_choice'], 'safe'],
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
        $query = AnswerChoice::find();

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
            'id_answer_choice' => $this->id_answer_choice,
            'question_id' => $this->question_id,
            'point' => $this->point,
        ]);

        $query->andFilterWhere(['like', 'text_answer_choice', $this->text_answer_choice]);

        return $dataProvider;
    }
}
