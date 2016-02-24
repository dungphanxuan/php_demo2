<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Chude */

$this->title = $model->IDChuDe;
$this->params['breadcrumbs'][] = ['label' => 'Chudes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chude-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDChuDe], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDChuDe], [
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
            'IDChuDe',
            'TenChuDe',
            'GhiChu',
        ],
    ]) ?>

</div>
