<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SinhvienSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sinhvien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDSinhVien') ?>

    <?= $form->field($model, 'TenSinhVien') ?>

    <?= $form->field($model, 'GioiTinh') ?>

    <?= $form->field($model, 'NamSinh') ?>

    <?= $form->field($model, 'QueQuan') ?>

    <?php // echo $form->field($model, 'HoKhauThuongTru') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'SoDT') ?>

    <?php // echo $form->field($model, 'LopID') ?>

    <?php // echo $form->field($model, 'DeTaiID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
