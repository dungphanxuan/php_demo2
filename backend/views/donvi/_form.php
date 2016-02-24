<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Donvi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donvi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TenDonVi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DiaChi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SoDT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TruongDonVi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
