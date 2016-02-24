<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Thuchiennghiencuu */

$this->title = $model->IDThucHienNghienCuu;
$this->params['breadcrumbs'][] = ['label' => 'Thuchiennghiencuus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thuchiennghiencuu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDThucHienNghienCuu], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDThucHienNghienCuu], [
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
            'IDThucHienNghienCuu',
            'HuongNghienCuuID',
            'SoLuongCongTrinhCongBo',
        ],
    ]) ?>

</div>
