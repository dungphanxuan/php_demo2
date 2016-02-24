<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Donvi */

$this->title = 'Update Donvi: ' . ' ' . $model->IDDonVi;
$this->params['breadcrumbs'][] = ['label' => 'Donvis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDDonVi, 'url' => ['view', 'id' => $model->IDDonVi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="donvi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
