<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Dangky */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Dangkies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dangky-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'detai' => $detai,
        'giangvien' => $giangvien,
        'sinhvien' => $sinhvien,
    ]) ?>

</div>
