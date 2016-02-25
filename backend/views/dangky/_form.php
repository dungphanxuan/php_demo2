<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Dangky */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dangky-form">

    <?php $form = ActiveForm::begin(); ?>


    <?php echo $form->field($model, 'student_id')->dropDownList(\yii\helpers\ArrayHelper::map(
        $sinhvien,
        'IDSinhVien',
        'TenSinhVien'
    ), ['prompt'=>'Chọn sinh viên ']) ?>


    <?php echo $form->field($model, 'detai_id')->dropDownList(\yii\helpers\ArrayHelper::map(
        $detai,
        'IDDeTai',
        'TenDeTai'
    ), ['prompt'=>'Chọn đề tài ']) ?>


    <?php echo $form->field($model, 'teacher_id')->dropDownList(\yii\helpers\ArrayHelper::map(
        $giangvien,
        'IDGiangVien',
        'TenGiangVien'
    ), ['prompt'=>'Chọn giảng viên ']) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'giaovien_hd')->dropDownList(\yii\helpers\ArrayHelper::map(
        $giangvien,
        'IDGiangVien',
        'TenGiangVien'
    ), ['prompt'=>'Chọn giảng viên hướng dẫn ']) ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
