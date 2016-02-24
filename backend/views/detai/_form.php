<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Detai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'ChuDeID')->dropDownList(\yii\helpers\ArrayHelper::map(
        $categories,
        'IDChuDe',
        'TenChuDe'
    ), ['prompt'=>'Chọn chủ đề ']) ?>

    <?= $form->field($model, 'TenDeTai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SoSVThamGia')->textInput() ?>

    <?= $form->field($model, 'BanMemDoAn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SourceCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nam')->textInput() ?>

    <?= $form->field($model, 'NhanXetChung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HoiDongID')->textInput() ?>

    <?= $form->field($model, 'GiaoVien')->textInput() ?>

    <?= $form->field($model, 'ThamKhao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MoiTruong')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
