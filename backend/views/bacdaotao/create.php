<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Bacdaotao */

$this->title = 'Create Bacdaotao';
$this->params['breadcrumbs'][] = ['label' => 'Bacdaotaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bacdaotao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
