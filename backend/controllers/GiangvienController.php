<?php

namespace backend\controllers;

use common\models\User;
use frontend\models\SignupForm;
use Yii;
use common\models\Giangvien;
use common\models\GiangvienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GiangvienController implements the CRUD actions for Giangvien model.
 */
class GiangvienController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Giangvien models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GiangvienSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Giangvien model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Giangvien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Giangvien();
        $modelUser = new SignupForm();

        if ($modelUser->load(Yii::$app->request->post())) {
            if ($user = $modelUser->signup()) {
                /*Create new GiangVien*/
                $model->attributes = Yii::$app->request->post('Giangvien');
                $model->IDGiangVien = $user->id;
                $model->save();

                return $this->redirect(['view', 'id' => $model->IDGiangVien]);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'modelUser' => $modelUser,
        ]);
    }

    /**
     * Updates an existing Giangvien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $user = User::findOne($model->IDGiangVien);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDGiangVien]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'user' => $user,
            ]);
        }
    }

    /**
     * Deletes an existing Giangvien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Giangvien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Giangvien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Giangvien::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
