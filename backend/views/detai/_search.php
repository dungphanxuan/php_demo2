<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDDeTai') ?>

    <?= $form->field($model, 'TenDeTai') ?>

    <?= $form->field($model, 'ChuDeID') ?>

    <?= $form->field($model, 'SoSVThamGia') ?>

    <?= $form->field($model, 'BanMemDoAn') ?>

    <?php // echo $form->field($model, 'SourceCode') ?>

    <?php // echo $form->field($model, 'Nam') ?>

    <?php // echo $form->field($model, 'NhanXetChung') ?>

    <?php // echo $form->field($model, 'HoiDongID') ?>

    <?php // echo $form->field($model, 'GiaoVien') ?>

    <?php // echo $form->field($model, 'ThamKhao') ?>

    <?php // echo $form->field($model, 'MoiTruong') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
