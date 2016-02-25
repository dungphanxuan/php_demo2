<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/3/2016
 * Time: 10:29 AM
 * @var $this yii\web\View
 * @var $model common\models\Detai
 */
use yii\helpers\Url;

$formatter = \Yii::$app->formatter;
$totalRegister = \common\models\Dangky::find()->where(['detai_id' => $model->IDDeTai])->count();
?>
<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <img src="http://placehold.it/320x150" alt="">
        <div class="caption">
            <h4 class="text-center">
                <a href="<?=Url::to(['/detai/view', 'id'=>$model->IDDeTai])?>"><?=$model->TenDeTai?></a>
            </h4>
            <p><?=$model->MoTa?></p>
        </div>
        <div class="ratings">
            <p class="pull-right"><?=$totalRegister?> lượt đăng ký</p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
            </p>
        </div>
    </div>
</div>