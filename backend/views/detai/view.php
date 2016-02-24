<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Detai */

$this->title = $model->TenDeTai;
$this->params['breadcrumbs'][] = ['label' => 'Detais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detai-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDDeTai], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDDeTai], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDDeTai',
            'TenDeTai',
            'ChuDeID',
            'SoSVThamGia',
            'BanMemDoAn',
            'SourceCode',
            'Nam',
            'NhanXetChung',
            'HoiDongID',
            'GiaoVien',
            'ThamKhao',
            'MoiTruong',
        ],
    ]) ?>

</div>
