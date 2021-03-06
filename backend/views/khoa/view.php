<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Khoa */

$this->title = $model->IDKhoa;
$this->params['breadcrumbs'][] = ['label' => 'Khoas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khoa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDKhoa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDKhoa], [
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
            'IDKhoa',
            'TenKhoa',
            'TruongKhoa',
        ],
    ]) ?>

</div>
