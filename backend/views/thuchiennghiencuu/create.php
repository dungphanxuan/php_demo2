<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Thuchiennghiencuu */

$this->title = 'Create Thuchiennghiencuu';
$this->params['breadcrumbs'][] = ['label' => 'Thuchiennghiencuus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thuchiennghiencuu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
