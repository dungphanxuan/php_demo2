<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Detai */

$this->title = 'Update Detai: ' . ' ' . $model->IDDeTai;
$this->params['breadcrumbs'][] = ['label' => 'Detais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TenDeTai, 'url' => ['view', 'id' => $model->IDDeTai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'categories' =>$categories
    ]) ?>

</div>
