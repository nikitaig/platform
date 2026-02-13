<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "answer".
 *
 * @property int $id_answer
 * @property int $test_solution_id
 * @property int $question_id
 * @property int|null $answer_choice_id
 * @property int $point
 * @property string|null $text_answer
 * @property int $try
 *
 * @property AnswerChoice $answerChoice
 * @property Question $question
 * @property TestSolution $testSolution
 */
class Answer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'answer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['test_solution_id', 'question_id', 'point'], 'required'],
            [['test_solution_id', 'question_id', 'answer_choice_id', 'point', 'try'], 'integer'],
            [['text_answer'], 'string'],
            [['answer_choice_id'], 'exist', 'skipOnError' => true, 'targetClass' => AnswerChoice::class, 'targetAttribute' => ['answer_choice_id' => 'id_answer_choice']],
            [['question_id'], 'exist', 'skipOnError' => true, 'targetClass' => Question::class, 'targetAttribute' => ['question_id' => 'id_question']],
            [['test_solution_id'], 'exist', 'skipOnError' => true, 'targetClass' => TestSolution::class, 'targetAttribute' => ['test_solution_id' => 'id_test_solution']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_answer' => 'Id Answer',
            'test_solution_id' => 'Test Solution ID',
            'question_id' => 'Question ID',
            'answer_choice_id' => 'Answer Choice ID',
            'point' => 'Point',
            'text_answer' => 'Text Answer',
            'try' => 'Try',
        ];
    }

    /**
     * Gets query for [[AnswerChoice]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnswerChoice()
    {
        return $this->hasOne(AnswerChoice::class, ['id_answer_choice' => 'answer_choice_id']);
    }

    /**
     * Gets query for [[Question]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getQuestion()
    {
        return $this->hasOne(Question::class, ['id_question' => 'question_id']);
    }

    /**
     * Gets query for [[TestSolution]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTestSolution()
    {
        return $this->hasOne(TestSolution::class, ['id_test_solution' => 'test_solution_id']);
    }
}
