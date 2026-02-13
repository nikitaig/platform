<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test_solution".
 *
 * @property int $id_test_solution
 * @property int $user_id
 * @property int $test_id
 * @property string $begin_at
 * @property int|null $point
 * @property string $end_at
 * @property int $try
 *
 * @property Answer[] $answers
 * @property Test $test
 * @property User $user
 */
class TestSolution extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_solution';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'test_id', 'begin_at', 'end_at'], 'required'],
            [['user_id', 'test_id', 'point', 'try'], 'integer'],
            [['begin_at', 'end_at'], 'safe'],
            [['test_id'], 'exist', 'skipOnError' => true, 'targetClass' => Test::class, 'targetAttribute' => ['test_id' => 'id_test']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id_user']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_test_solution' => 'Id Test Solution',
            'user_id' => 'User ID',
            'test_id' => 'Test ID',
            'begin_at' => 'Begin At',
            'point' => 'Point',
            'end_at' => 'End At',
            'try' => 'Try',
        ];
    }

    /**
     * Gets query for [[Answers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnswers()
    {
        return $this->hasMany(Answer::class, ['test_solution_id' => 'id_test_solution']);
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

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id_user' => 'user_id']);
    }
}
