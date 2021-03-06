<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Detai */

$this->title = 'Cập nhật niên luận: ' . ' ' . $model->TenDeTai;
$this->params['breadcrumbs'][] = ['label' => 'Niên luận', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TenDeTai, 'url' => ['view', 'id' => $model->IDDeTai]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="detai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'categories' =>$categories
    ]) ?>

</div>
