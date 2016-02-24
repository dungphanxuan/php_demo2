<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Sinhvien */

$this->title = 'Thêm mới Sinh viên';
$this->params['breadcrumbs'][] = ['label' => 'Sinhviens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sinhvien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
