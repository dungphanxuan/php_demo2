<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sinhvien */

$this->title = 'Cập nhật: ' . ' ' . $model->IDSinhVien;
$this->params['breadcrumbs'][] = ['label' => 'Sinhviens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDSinhVien, 'url' => ['view', 'id' => $model->IDSinhVien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sinhvien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
