<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Bacdaotao */

$this->title = 'Update Bacdaotao: ' . ' ' . $model->IDBacDaoTao;
$this->params['breadcrumbs'][] = ['label' => 'Bacdaotaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDBacDaoTao, 'url' => ['view', 'id' => $model->IDBacDaoTao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bacdaotao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
