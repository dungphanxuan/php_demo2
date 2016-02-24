<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\GiangvienSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="giangvien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDGiangVien') ?>

    <?= $form->field($model, 'TenGiangVien') ?>

    <?= $form->field($model, 'GioiTinh') ?>

    <?= $form->field($model, 'NamSinh') ?>

    <?= $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'SoDT') ?>

    <?php // echo $form->field($model, 'DiaChi') ?>

    <?php // echo $form->field($model, 'DonViID') ?>

    <?php // echo $form->field($model, 'KhoaID') ?>

    <?php // echo $form->field($model, 'HocVi') ?>

    <?php // echo $form->field($model, 'ChucVu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
