<?php

namespace app\controllers;

use app\models\QuestionFile;
use app\models\QuestionFileSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * QuestionFileController implements the CRUD actions for QuestionFile model.
 */
class QuestionFileController extends Controller
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
     * Lists all QuestionFile models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new QuestionFileSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single QuestionFile model.
     * @param int $id_question_file Id Question File
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_question_file)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_question_file),
        ]);
    }

    /**
     * Creates a new QuestionFile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new QuestionFile();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_question_file' => $model->id_question_file]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing QuestionFile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_question_file Id Question File
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_question_file)
    {
        $model = $this->findModel($id_question_file);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_question_file' => $model->id_question_file]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing QuestionFile model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_question_file Id Question File
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_question_file)
    {
        $this->findModel($id_question_file)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the QuestionFile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_question_file Id Question File
     * @return QuestionFile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_question_file)
    {
        if (($model = QuestionFile::findOne(['id_question_file' => $id_question_file])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
