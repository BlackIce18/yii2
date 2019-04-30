<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;
?>
<?php 
    (\Yii::$app->session->hasFlash('success')) ? \Yii::$app->session->getFlash('success') : \Yii::$app->session->getFlash('error');
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
     <?= $form->field($GoodsForm,'name');?>
    <?= $form->field($GoodsForm,'price');?>
    <?= $form->field($GoodsForm,'description');?>
    <?= $form->field($GoodsForm,'category_id')->dropdownList(
        Category::find()->select(['name', 'id'])->where(['<>','id','4'])->indexBy('id')->column(),
        ['prompt'=>'Выберите категорию']
    );?>
    <?= $form->field($GoodsForm,'images[]')->fileInput(['multiple'=>'multiple', 'accept' => 'image/*']);?> 
    <?= Html::submitButton('Добавить',['class'=>'btn btn-primary']);?>
<?php ActiveForm::end();?>