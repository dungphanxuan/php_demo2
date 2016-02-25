<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ketqua */

$this->title = 'Cập nhật: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ketquas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ketqua-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'giangvien' => $giangvien
    ]) ?>

</div>
