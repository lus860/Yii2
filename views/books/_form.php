<?php

use yii\base\Event;
use yii\helpers\Html;
use yii\db\AfterSaveEvent;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'created_at')->textInput() ?>
    
    <?= $form->field($model, 'author_array')->widget( Select2::classname(),[
    'data'=>$model->data(),
    'language'=>'en',
    'options'=>['placeholder'=>'Choose Authors','multiple'=>true],
    /*'pluginOptinons'=>[
        'allowClear'=>true,
        'authors'=>true,
    ],*/
]) ?>
    
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
