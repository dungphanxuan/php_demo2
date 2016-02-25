<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Giangvien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="giangvien-form">

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
    ]); ?>

    <h3><strong>Tài khoản đăng nhập: <?=$user->username?></strong></h3>

    <?= $form->field($model, 'TenGiangVien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GioiTinh')->textInput() ?>

    <?= $form->field($model, 'NamSinh')->textInput() ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SoDT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DiaChi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DonViID')->textInput() ?>

    <?= $form->field($model, 'KhoaID')->textInput() ?>

    <?= $form->field($model, 'HocVi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ChucVu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
