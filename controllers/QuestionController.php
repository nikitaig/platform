<?php

namespace app\controllers;

use app\models\Question;
use app\models\AnswerChoice;
use app\models\QuestionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * QuestionController implements the CRUD actions for Question model.
 */
class QuestionController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Question models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new QuestionSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Question model.
     * @param int $id_question Id Question
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_question)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_question),
        ]);
    }

    /**
     * Creates a new Question model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($id_test)
    {
        $models = [];
        $model = new Question();
        if ($this->request->isPost) {
            $model->load($this->request->post());
            $model->test_id = $id_test;
            $model->save();
            $postData = $this->request->post('AnswerChoice', []);

            // echo"<pre>";
            // var_dump($model);
            // die();
            foreach($postData as $data){
                $mod = new AnswerChoice();
                $mod->text_answer_choice = $data['text_answer_choice'];
                $mod->point = $data['point'];
                $mod->question_id = $model->id_question;
                $mod->save();
            }
            return $this->redirect(['create', 'id_test' => $id_test]);

        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'id_test' => $id_test,
        ]);
    }

    /**
     * Updates an existing Question model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_question Id Question
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_question)
    {
        $model = $this->findModel($id_question);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_question' => $model->id_question]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Question model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_question Id Question
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_question)
    {
        $this->findModel($id_question)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Question model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_question Id Question
     * @return Question the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_question)
    {
        if (($model = Question::findOne(['id_question' => $id_question])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
