<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DetaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quản lý Niên luận';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detai-index">

    <div class="row">

        <div class="col-md-3">
            <p class="lead">Niên luận</p>
            <div class="list-group">
                <?php foreach($chude as $item): ?>
                <a href="<?=\yii\helpers\Url::to(['/detai/index', 'cid'=> $item['IDChuDe']])?>" class="list-group-item"><?=$item['TenChuDe']?></a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-md-9">

            <div class="row carousel-holder">

                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                            <div class="item active">
                                <img class="slide-image" src="http://placehold.it/800x300" alt="">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row">

                <?php echo \yii\widgets\ListView::widget([
                    'dataProvider'=>$dataProvider,
                    'pager'=>[
                        'hideOnSinglePage'=>true,
                    ],
                    'summary'=>'',
                    'itemView'=>'_item',
                    'options' => [
                        'class'=>'main-wrapper'
                    ],
                    'itemOptions' => [
                        'tag' => false,
                    ],
                    'viewParams'=>[
                        //'user_id' => $user_id
                    ]
                ])?>

            </div>

        </div>

        </div>

    </div>
</div>
