<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Chude */

$this->title = 'Cập nhật: ' . ' ' . $model->IDChuDe;
$this->params['breadcrumbs'][] = ['label' => 'Chudes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDChuDe, 'url' => ['view', 'id' => $model->IDChuDe]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chude-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
