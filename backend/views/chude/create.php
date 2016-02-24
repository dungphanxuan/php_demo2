<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Chude */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Chudes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chude-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
