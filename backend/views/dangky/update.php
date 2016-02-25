<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Dangky */

$this->title = 'Update Dangky: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dangkies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dangky-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'detai' => $detai,
        'giangvien' => $giangvien,
        'sinhvien' => $sinhvien,
    ]) ?>

</div>
