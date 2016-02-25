<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Nộp niên luận';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Vui lòng chọn file báo cáo và gửi:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php
            $form = ActiveForm::begin([
                'options' => ['enctype' => 'multipart/form-data']
            ])
            ?>
            <h4 class="text-center"><strong>Thông tin niên luận</strong></h4>
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td>Tên niên luận</td>
                    <td> <?= $detai->TenDeTai ?></td>
                </tr>
                <tr>
                    <td>Số sinh viên</td>
                    <td> <?= $detai->SoSVThamGia ?></td>
                </tr>

                </tbody>
            </table>
            <?= $form->field($model, 'dangky_id')->hiddenInput()->label(false) ?>

            <?= $form->field($model, 'imageFile')->fileInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Nộp bài', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
