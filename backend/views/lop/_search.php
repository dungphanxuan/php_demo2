<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LopSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lop-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDLop') ?>

    <?= $form->field($model, 'TenLop') ?>

    <?= $form->field($model, 'SoSinhVien') ?>

    <?= $form->field($model, 'KhoaID') ?>

    <?= $form->field($model, 'HeDaoTaoID') ?>

    <?php // echo $form->field($model, 'BacDaoTaoID') ?>

    <?php // echo $form->field($model, 'DiaDiemHocID') ?>

    <?php // echo $form->field($model, 'KhoaDaoTaoID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
