<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DonviSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donvi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDDonVi') ?>

    <?= $form->field($model, 'TenDonVi') ?>

    <?= $form->field($model, 'DiaChi') ?>

    <?= $form->field($model, 'SoDT') ?>

    <?= $form->field($model, 'TruongDonVi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
