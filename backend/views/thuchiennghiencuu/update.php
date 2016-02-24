<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Thuchiennghiencuu */

$this->title = 'Update Thuchiennghiencuu: ' . ' ' . $model->IDThucHienNghienCuu;
$this->params['breadcrumbs'][] = ['label' => 'Thuchiennghiencuus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDThucHienNghienCuu, 'url' => ['view', 'id' => $model->IDThucHienNghienCuu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thuchiennghiencuu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
