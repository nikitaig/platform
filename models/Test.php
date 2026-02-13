<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property int $id_test
 * @property string $name_test
 * @property int $user_id
 * @property string $create_at
 * @property int $category_id
 * @property string|null $timer
 * @property string $image
 * @property int $anon
 * @property int $auto_mark
 * @property int $try
 *
 * @property Category $category
 * @property Question[] $questions
 * @property TestSolution[] $testSolutions
 * @property User $user
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_test', 'user_id', 'create_at', 'category_id'], 'required'],
            [['user_id', 'category_id', 'anon', 'auto_mark', 'try'], 'integer'],
            [['create_at', 'timer'], 'safe'],
            [['name_test', 'image'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id_category']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id_user']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_test' => 'Id Test',
            'name_test' => 'Name Test',
            'user_id' => 'User ID',
            'create_at' => 'Create At',
            'category_id' => 'Category ID',
            'timer' => 'Timer',
            'image' => 'Image',
            'anon' => 'Anon',
            'auto_mark' => 'Auto Mark',
            'try' => 'Try',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id_category' => 'category_id']);
    }

    /**
     * Gets query for [[Questions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getQuestions()
    {
        return $this->hasMany(Question::class, ['test_id' => 'id_test']);
    }

    /**
     * Gets query for [[TestSolutions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTestSolutions()
    {
        return $this->hasMany(TestSolution::class, ['test_id' => 'id_test']);
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
