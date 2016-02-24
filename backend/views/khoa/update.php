<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Khoa */

$this->title = 'Update Khoa: ' . ' ' . $model->IDKhoa;
$this->params['breadcrumbs'][] = ['label' => 'Khoas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDKhoa, 'url' => ['view', 'id' => $model->IDKhoa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="khoa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
