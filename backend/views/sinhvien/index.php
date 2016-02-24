<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SinhvienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sinh viên';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sinhvien-index">

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
                'attribute' => 'IDSinhVien',
                'format' => 'raw',
                'contentOptions' => ['style' => 'width:90px;text-align:center'],
            ],
            'TenSinhVien',
            'GioiTinh',
            'NamSinh',
            'QueQuan',
            // 'HoKhauThuongTru',
            // 'Email:email',
            // 'SoDT',
            // 'LopID',
            // 'DeTaiID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
