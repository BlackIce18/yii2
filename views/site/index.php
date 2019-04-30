<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<?php
use yii\helpers\Html;
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="categorySidebar list-group">

            <?php foreach ($categories as $category) :?>
                <?= Html::a($category->name,['category/remove', 'id'=>$category->name],['class'=>'list-group-item'])?>
            <?php endforeach;?>

            </div>
        </div>

        <div class="col-md-9">
            <h2>Товары</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="containerCard">
                        <img class="containerCardImg" src="https://i.pinimg.com/564x/6f/5a/b1/6f5ab1b470beeeeaf285bb451c63ac8f.jpg" alt="">
                        <div class="overlay">
                            <div class = "items"></div>
                            <div class = "items head">
                                <p>Название товара</p>
                                <hr>
                            </div>
                            <div class = "items price">
                                <p class="old">$344</p>
                                <p class="new">$345</p>
                            </div>
                            <div class="items cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>ADD TO CART</span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- <h1>Категории</h1>
< ?php $form = ActiveForm::begin([
    'id' => 'form-input-example',
    'options' => [
        'class' => 'form-horizontal col-lg-11',
        'enctype' => 'multipart/form-data'
    ],
]);?>
<table class="table">
    <thead>
        <tr>
< ?php
    foreach ($labels as $label) :?>
        <th>< ?=$label;?></th>
< ?php endforeach;?>
        <th></th>
        <th></th>
        <th></th>

        </tr>

    </thead>
    <tbody>
< ?php
    foreach ($categories as $category) :?>
        <tr>
            <td>< ?=$category->id;?></td>
            <td>< ?=$category->name;?></td>
            <td>< ?=$category->created_at;?></td>
            <td>< ?=$category->updated_at;?></td>
            <td>< ?= Html::a('Редактировать',['category/update', 'id'=>$category->id])?></td>
            <td>< ?= Html::a('Просмотреть',['category/view', 'id'=>$category->id])?></td>
            <td>< ?= Html::a('Удалить',['category/remove', 'id'=>$category->id])?></td>
        </tr>
    < ?php endforeach;?>
    </tbody>
</table>
<td>< ?= Html::a('Добавить',['category/add'])?></td>
< ?php ActiveForm::end();?> -->