<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Lop */

$this->title = $model->IDLop;
$this->params['breadcrumbs'][] = ['label' => 'Lops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lop-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDLop], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDLop], [
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
            'IDLop',
            'TenLop',
            'SoSinhVien',
            'KhoaID',
            'HeDaoTaoID',
            'BacDaoTaoID',
            'DiaDiemHocID',
            'KhoaDaoTaoID',
        ],
    ]) ?>

</div>
