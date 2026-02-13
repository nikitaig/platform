<?php

namespace app\controllers;

use app\models\AnswerChoice;
use app\models\AnswerChoiceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AnswerChoiceController implements the CRUD actions for AnswerChoice model.
 */
class AnswerChoiceController extends Controller
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
     * Lists all AnswerChoice models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AnswerChoiceSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AnswerChoice model.
     * @param int $id_answer_choice Id Answer Choice
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_answer_choice)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_answer_choice),
        ]);
    }

    /**
     * Creates a new AnswerChoice model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new AnswerChoice();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_answer_choice' => $model->id_answer_choice]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AnswerChoice model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_answer_choice Id Answer Choice
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_answer_choice)
    {
        $model = $this->findModel($id_answer_choice);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_answer_choice' => $model->id_answer_choice]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AnswerChoice model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_answer_choice Id Answer Choice
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_answer_choice)
    {
        $this->findModel($id_answer_choice)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AnswerChoice model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_answer_choice Id Answer Choice
     * @return AnswerChoice the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_answer_choice)
    {
        if (($model = AnswerChoice::findOne(['id_answer_choice' => $id_answer_choice])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
