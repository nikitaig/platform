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
 * @property string|null $end_at
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
    public $is_timer;
    public $is_end;
    /**
     * {@inheritdoc}
     */
    const SCENARIO_TIMER = 'timer';
    const SCENARIO_END = 'end';
    const SCENARIO_TIMEREND = 'timerend';
    const SCENARIO_DEFAULT = 'default';
    public function rules()
    {
        return [
            [['name_test', 'user_id', 'category_id'], 'required'],
            [['user_id', 'category_id', 'anon', 'auto_mark', 'try'], 'integer'],
            [['create_at', 'is_timer', 'is_end', 'timer', 'end_at'], 'safe'],
            [['is_end','is_timer'], 'boolean'],
            [['timer'], 'required', 'on' => self::SCENARIO_TIMER],
            [['timer'], 'required', 'on' =>  self::SCENARIO_TIMEREND],
            [['end_at'], 'required', 'on' =>  self::SCENARIO_TIMEREND],
            [['end_at'], 'required', 'on' => self::SCENARIO_END],
            [['name_test', 'image'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id_category']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id_user']],
        ];
    }




    public function scenarios() {  
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_DEFAULT] = [ 'name_test', 'user_id',
            'create_at', 'category_id', 'timer', 'image', 'anon', 'auto_mark', 'try',
            'end_at', 'is_timer', 'is_end'];
        $scenarios[self::SCENARIO_TIMER] = [ 'name_test', 'user_id',
            'create_at', 'category_id', 'timer', 'image', 'anon', 'auto_mark', 'try',
            'end_at', 'is_timer', 'is_end'];
        $scenarios[self::SCENARIO_END] = [ 'name_test', 'user_id',
            'create_at', 'category_id', 'timer', 'image', 'anon', 'auto_mark', 'try',
            'end_at', 'is_timer', 'is_end'];
        $scenarios[self::SCENARIO_TIMEREND] = [ 'name_test', 'user_id',
            'create_at', 'category_id', 'timer', 'image', 'anon', 'auto_mark', 'try',
            'end_at', 'is_timer', 'is_end'];
        return $scenarios;  
    }  

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_test' => 'Id Test',
            'name_test' => 'Название',
            'user_id' => 'User ID',
            'create_at' => 'Create At',
            'category_id' => 'Категория',
            'timer' => 'Время на прохождение',
            'image' => 'Обложка',
            'anon' => 'Анонимный',
            'auto_mark' => 'Проверять автоматически',
            'try' => 'Количество попыток',
            'end_at' => 'Дата окончания',
            'is_end' => 'Установить Дата окончания',
            'is_timer' => 'Установить огриничение по времени',
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
