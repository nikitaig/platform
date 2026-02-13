<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\QuestionFile;

/**
 * QuestionFileSearch represents the model behind the search form of `app\models\QuestionFile`.
 */
class QuestionFileSearch extends QuestionFile
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_question_file', 'question_id'], 'integer'],
            [['question_file'], 'safe'],
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
        $query = QuestionFile::find();

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
            'id_question_file' => $this->id_question_file,
            'question_id' => $this->question_id,
        ]);

        $query->andFilterWhere(['like', 'question_file', $this->question_file]);

        return $dataProvider;
    }
}
