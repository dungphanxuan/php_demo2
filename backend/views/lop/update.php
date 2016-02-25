<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Lop */

$this->title = 'Cập nhật: ' . ' ' . $model->TenLop;
$this->params['breadcrumbs'][] = ['label' => 'Lops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TenLop, 'url' => ['view', 'id' => $model->IDLop]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lop-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
