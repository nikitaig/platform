<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question_file".
 *
 * @property int $id_question_file
 * @property int $question_id
 * @property string $question_file
 *
 * @property Question $question
 */
class QuestionFile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question_file';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_id', 'question_file'], 'required'],
            [['question_id'], 'integer'],
            [['question_file'], 'string', 'max' => 255],
            [['question_id'], 'exist', 'skipOnError' => true, 'targetClass' => Question::class, 'targetAttribute' => ['question_id' => 'id_question']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_question_file' => 'Id Question File',
            'question_id' => 'Question ID',
            'question_file' => 'Question File',
        ];
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
