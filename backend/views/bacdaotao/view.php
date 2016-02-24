<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Bacdaotao */

$this->title = $model->IDBacDaoTao;
$this->params['breadcrumbs'][] = ['label' => 'Bacdaotaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bacdaotao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDBacDaoTao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDBacDaoTao], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDBacDaoTao',
            'TenBacDaoTao',
        ],
    ]) ?>

</div>
