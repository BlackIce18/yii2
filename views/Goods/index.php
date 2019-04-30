<?php
    use yii\helpers\Html;
    $this->title = 'Категории';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-4">
        <div class="containerCard">
            <div class="containerCardAdd"><h2><?= Html::a('+',['goods/add'])?></h2></div>
        </div>
    </div>  
</div>
