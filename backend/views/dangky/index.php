<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DangkySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Đăng ký';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dangky-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'id',
                'format' => 'raw',
                'contentOptions' => ['style' => 'width:90px;text-align:center'],
            ],

            [
                'attribute' => 'student_id',
                'format' => 'raw',
                'contentOptions' => ['style' => 'width:90px;text-align:center'],
                'value' => function ($data) {
                    $student = \common\models\Sinhvien::findOne($data->student_id);
                    if($student){
                        return $student->TenSinhVien;
                    }else{
                        return '';
                    }

                },
                'contentOptions' => ['style' => 'width:25%;text-align:center'],
            ],
            [
                'attribute' => 'detai_id',
                'format' => 'raw',
                'contentOptions' => ['style' => 'width:90px;text-align:center'],
                'value' => function ($data) {
                    $student = \common\models\Detai::findOne($data->detai_id);
                    if($student){
                        return $student->TenDeTai;
                    }else{
                        return '';
                    }

                },
                'contentOptions' => ['style' => 'width:25%;text-align:center'],
            ],
            [
                'attribute' => 'teacher_id',
                'format' => 'raw',
                'contentOptions' => ['style' => 'width:90px;text-align:center'],
                'value' => function ($data) {
                    $student = \common\models\Giangvien::findOne($data->teacher_id);
                    if($student){
                        return $student->TenGiangVien;
                    }else{
                        return '';
                    }

                },
                'contentOptions' => ['style' => 'width:20%;text-align:center'],
            ],
            'created_at:datetime',
            // 'status',
            // 'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
