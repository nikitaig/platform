<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property int $id_question
 * @property int $test_id
 * @property string $text_question
 * @property int $type_answer
 *
 * @property AnswerChoice[] $answerChoices
 * @property Answer[] $answers
 * @property QuestionFile[] $questionFiles
 * @property Test $test
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['test_id', 'text_question'], 'required'],
            [['test_id', 'type_answer'], 'integer'],
            [['text_question'], 'string'],
            [['test_id'], 'exist', 'skipOnError' => true, 'targetClass' => Test::class, 'targetAttribute' => ['test_id' => 'id_test']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_question' => 'Id Question',
            'test_id' => 'Test ID',
            'text_question' => 'Text Question',
            'type_answer' => 'Poly Answer',
        ];
    }

    /**
     * Gets query for [[AnswerChoices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnswerChoices()
    {
        return $this->hasMany(AnswerChoice::class, ['question_id' => 'id_question']);
    }

    /**
     * Gets query for [[Answers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnswers()
    {
        return $this->hasMany(Answer::class, ['question_id' => 'id_question']);
    }

    /**
     * Gets query for [[QuestionFiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getQuestionFiles()
    {
        return $this->hasMany(QuestionFile::class, ['question_id' => 'id_question']);
    }

    /**
     * Gets query for [[Test]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTest()
    {
        return $this->hasOne(Test::class, ['id_test' => 'test_id']);
    }
}
