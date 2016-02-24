<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Detai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detai-form">

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
    ]); ?>

    <?php echo $form->field($model, 'ChuDeID')->dropDownList(\yii\helpers\ArrayHelper::map(
        $categories,
        'IDChuDe',
        'TenChuDe'
    ), ['prompt'=>'Chọn chủ đề ']) ?>

    <?= $form->field($model, 'TenDeTai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SoSVThamGia')->textInput() ?>

    <?= $form->field($model, 'BanMemDoAn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SourceCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NhanXetChung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HoiDongID')->textInput() ?>

    <?= $form->field($model, 'GiaoVien')->textInput() ?>

    <?= $form->field($model, 'ThamKhao')->textarea(['maxlength' => true]) ?>

    <?= $form->field($model, 'MoiTruong')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
