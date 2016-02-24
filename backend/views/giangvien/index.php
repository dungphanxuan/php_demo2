<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GiangvienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Giảng viên';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giangvien-index">

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
                'attribute' => 'IDGiangVien',
                'format' => 'raw',
                'contentOptions' => ['style' => 'width:90px;text-align:center'],
            ],

            'TenGiangVien',
            'GioiTinh',
            'NamSinh',
            'Email:email',
            // 'SoDT',
            // 'DiaChi',
            // 'DonViID',
            // 'KhoaID',
            // 'HocVi',
            // 'ChucVu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
