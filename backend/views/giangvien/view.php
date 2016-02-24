<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Giangvien */

$this->title = $model->IDGiangVien;
$this->params['breadcrumbs'][] = ['label' => 'Giangviens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giangvien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDGiangVien], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDGiangVien], [
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
            'IDGiangVien',
            'TenGiangVien',
            'GioiTinh',
            'NamSinh',
            'Email:email',
            'SoDT',
            'DiaChi',
            'DonViID',
            'KhoaID',
            'HocVi',
            'ChucVu',
        ],
    ]) ?>

</div>
