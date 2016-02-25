<?php

namespace frontend\controllers;

use common\models\Chude;
use common\models\Dangky;
use Yii;
use common\models\Detai;
use common\models\DetaiSearch;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetaiController implements the CRUD actions for Detai model.
 */
class DetaiController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['register'],
                'rules' => [
                    [
                        'actions' => ['register'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Detai models.
     * @return mixed
     */
    public function actionIndex()
    {
        $chude = Yii::$app->request->get('cid');
        $query = Detai::find();
        if($chude){
            $query->where(['ChuDeID' =>$chude]);
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $query,

        ]);

        return $this->render('index', [
            'chude' => Chude::find()->asArray()->all(),
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * Displays a single Detai model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionRegister($id)
    {
        $message = '';
        $detai = $this->findModel($id);

        $dangky = Dangky::find()
            ->where(['detai_id' =>$detai->IDDeTai])
            ->count();
        if($dangky >= $detai->SoSVThamGia){
            $message = 'Đề tài đã đăng ký đủ số lượng sinh viên.';
        }else{
            $isRegister = Dangky::find()->where(['student_id' =>Yii::$app->user->id])->count();
            if($isRegister){
                $message = 'Bạn đã đăng ký!';
            }else{
                $model = new Dangky();
                $model->student_id = Yii::$app->user->id;
                $model->detai_id = $id;
                $model->created_at = time();

                if($model->save()){
                    \Yii::$app->getSession()->setFlash('success', 'Đăng ký niên luận thành công');
                    return $this->goHome();
                }else{
                    $message = reset($model->getErrors());
                }
            }

        }

        \Yii::$app->getSession()->setFlash('error', 'Đăng ký lỗi.'. $message);
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);

    }

    /**
     * Creates a new Detai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Detai();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDDeTai]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'categories' => Chude::find()->all(),
            ]);
        }
    }

    /**
     * Updates an existing Detai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDDeTai]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'categories' => Chude::find()->all(),
            ]);
        }
    }

    /**
     * Deletes an existing Detai model.
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
     * Finds the Detai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Detai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Detai::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
