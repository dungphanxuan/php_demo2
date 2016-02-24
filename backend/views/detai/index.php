<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DetaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Niên luận';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detai-index">

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
                'attribute' => 'IDDeTai',
                'format' => 'raw',
                'contentOptions' => ['style' => 'width:90px;text-align:center'],
            ],

            'IDDeTai',
            'TenDeTai',
            'ChuDeID',
            'SoSVThamGia',
            'BanMemDoAn',
            // 'SourceCode',
            // 'Nam',
            // 'NhanXetChung',
            // 'HoiDongID',
            // 'GiaoVien',
            // 'ThamKhao',
            // 'MoiTruong',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
