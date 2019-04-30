<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\grid\GridView;
?>
<h1>Категории</h1>
<!-- < ?php $form = ActiveForm::begin([
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
            <td>< ?= Html::a('Удалить',['category/', 'id'=>$category->id])?></td>
        </tr>
    < ?php endforeach;?>
    </tbody>
</table>
<td>< ?= Html::a('Добавить',['category/add'])?></td>
< ?php ActiveForm::end();?> -->

<?=
    GridView::widget([
        'dataProvider'=>$dataProvider,
        'filterModel'=>$searchModel,
        'columns' => [
            'id',
            'name',
            'created_at',
            'updated_at',
            [
                'format' => 'raw',
                'value' => function($model) {
                    $result = '';
                    $result .= Html::a('Редактировать',['category/update', 'id'=>$model->id]);
                    $result .= ' ';
                    $result .= Html::a('Просмотреть',['category/view', 'id'=>$model->id]);
                    $result .= ' ';
                    $result .= Html::a('Удалить',['category/update', 'id'=>$model->id]);
                    return $result;
                }
            ],
        ]
    ]);
?>