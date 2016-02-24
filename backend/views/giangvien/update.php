<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Giangvien */

$this->title = 'Cập nhật: ' . ' ' . $model->IDGiangVien;
$this->params['breadcrumbs'][] = ['label' => 'Giangviens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDGiangVien, 'url' => ['view', 'id' => $model->IDGiangVien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="giangvien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>