<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>
<?php 
    (\Yii::$app->session->hasFlash('success')) ? \Yii::$app->session->getFlash('success') : \Yii::$app->session->getFlash('error');
?>
<?php $form = ActiveForm::begin();?>
    <?= $form->field($model,'id')->textInput(['value'=>$model->id,'disabled'=>'disabled']);?>
    <?= $form->field($model,'name')->textInput(['value'=>$model->name]);?>
    <?= $form->field($model,'created_at')->textInput(['value'=>$model->created_at]);?>
    <?= $form->field($model,'updated_at')->textInput(['value'=>$model->updated_at]);?>
    <?= Html::submitButton('Обновить',['class'=>'btn btn-primary']);?>
<?php ActiveForm::end();?>