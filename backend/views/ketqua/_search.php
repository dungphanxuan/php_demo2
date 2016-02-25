<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\KetquaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ketqua-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dangky_id') ?>

    <?= $form->field($model, 'giaovien_id') ?>

    <?= $form->field($model, 'diem') ?>

    <?= $form->field($model, 'time') ?>

    <?php // echo $form->field($model, 'giaovien_cham') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
