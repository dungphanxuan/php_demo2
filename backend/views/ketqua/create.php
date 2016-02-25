<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Ketqua */

$this->title = 'Create Ketqua';
$this->params['breadcrumbs'][] = ['label' => 'Ketquas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ketqua-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>