<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Sinhvien */

$this->title = $model->IDSinhVien;
$this->params['breadcrumbs'][] = ['label' => 'Sinhviens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sinhvien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDSinhVien], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDSinhVien], [
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
            'IDSinhVien',
            'TenSinhVien',
            'GioiTinh',
            'NamSinh',
            'QueQuan',
            'HoKhauThuongTru',
            'Email:email',
            'SoDT',
            'LopID',
            'DeTaiID',
        ],
    ]) ?>

</div>
