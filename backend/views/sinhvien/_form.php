<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Sinhvien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sinhvien-form">

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
    ]); ?>

    <?= $form->field($model, 'IDSinhVien')->textInput() ?>

    <?= $form->field($model, 'TenSinhVien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GioiTinh')->textInput() ?>

    <?= $form->field($model, 'NamSinh')->textInput() ?>

    <?= $form->field($model, 'QueQuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HoKhauThuongTru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SoDT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LopID')->textInput() ?>

    <?= $form->field($model, 'DeTaiID')->textInput() ?>

    <div class="form-group">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
