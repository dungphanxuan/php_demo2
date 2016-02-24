<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LopSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lớp học';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lop-index">

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
                'attribute' => 'IDLop',
                'format' => 'raw',
                'contentOptions' => ['style' => 'width:90px;text-align:center'],
            ],
            'TenLop',
            'SoSinhVien',
            'KhoaID',
            'HeDaoTaoID',
            // 'BacDaoTaoID',
            // 'DiaDiemHocID',
            // 'KhoaDaoTaoID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
