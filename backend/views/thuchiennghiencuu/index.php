<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ThuchiennghiencuuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Thực hiện nghiên cứu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thuchiennghiencuu-index">

    <h2><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'IDThucHienNghienCuu',
                'format' => 'raw',
                'contentOptions' => ['style' => 'width:90px;text-align:center'],
            ],
            'HuongNghienCuuID',
            'SoLuongCongTrinhCongBo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
