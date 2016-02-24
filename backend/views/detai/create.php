<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Detai */

$this->title = 'Create Detai';
$this->params['breadcrumbs'][] = ['label' => 'Detais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'categories' =>$categories
    ]) ?>

</div>
