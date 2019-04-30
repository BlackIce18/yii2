<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>
<?php 
    (\Yii::$app->session->hasFlash('success')) ? \Yii::$app->session->getFlash('success') : \Yii::$app->session->getFlash('error');
?>

<?php $form = ActiveForm::begin();?>
    <?= $form->field($model,'name');?>
    <?= Html::submitButton('Добавить',['class'=>'btn btn-primary']);?>
<?php ActiveForm::end();?>