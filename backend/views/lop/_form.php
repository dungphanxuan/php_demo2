<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Lop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lop-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TenLop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SoSinhVien')->textInput() ?>

    <?= $form->field($model, 'KhoaID')->textInput() ?>

    <?= $form->field($model, 'HeDaoTaoID')->textInput() ?>

    <?= $form->field($model, 'BacDaoTaoID')->textInput() ?>

    <?= $form->field($model, 'DiaDiemHocID')->textInput() ?>

    <?= $form->field($model, 'KhoaDaoTaoID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
