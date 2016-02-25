<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\KetquaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kết quả';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ketqua-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ketqua', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'dangky_id',
            'giaovien_id',
            'diem',
            'time:datetime',
            // 'giaovien_cham',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
