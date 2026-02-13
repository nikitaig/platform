<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "answer_choice".
 *
 * @property int $id_answer_choice
 * @property int $question_id
 * @property string $text_answer_choice
 * @property int $point
 *
 * @property Answer[] $answers
 * @property Question $question
 */
class AnswerChoice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'answer_choice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_id', 'text_answer_choice'], 'required'],
            [['question_id', 'point'], 'integer'],
            [['text_answer_choice'], 'string', 'max' => 255],
            [['question_id'], 'exist', 'skipOnError' => true, 'targetClass' => Question::class, 'targetAttribute' => ['question_id' => 'id_question']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_answer_choice' => 'Id Answer Choice',
            'question_id' => 'Question ID',
            'text_answer_choice' => 'Text Answer Choice',
            'point' => 'Point',
        ];
    }

    /**
     * Gets query for [[Answers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnswers()
    {
        return $this->hasMany(Answer::class, ['answer_choice_id' => 'id_answer_choice']);
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
}
