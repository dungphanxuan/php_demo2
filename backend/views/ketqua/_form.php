<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Ketqua */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ketqua-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dangky_id')->textInput() ?>


    <?php echo $form->field($model, 'giaovien_id')->dropDownList(\yii\helpers\ArrayHelper::map(
        $giangvien,
        'IDGiangVien',
        'TenGiangVien'
    ), ['prompt'=>'Chọn giảng viên ']) ?>

    <?= $form->field($model, 'diem')->textInput() ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <?php echo $form->field($model, 'giaovien_cham')->dropDownList(\yii\helpers\ArrayHelper::map(
        $giangvien,
        'IDGiangVien',
        'TenGiangVien'
    ), ['prompt'=>'Chọn giảng viên ']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
