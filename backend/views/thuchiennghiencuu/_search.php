<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ThuchiennghiencuuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thuchiennghiencuu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDThucHienNghienCuu') ?>

    <?= $form->field($model, 'HuongNghienCuuID') ?>

    <?= $form->field($model, 'SoLuongCongTrinhCongBo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
