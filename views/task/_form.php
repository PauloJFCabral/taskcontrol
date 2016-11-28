<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use app\models\Task;

/* @var $this yii\web\View */
/* @var $model app\models\Task */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(['id'=>'task','class'=>'form-vertical','options' => ['enctype'=>'multipart/form-data']]); ?>
    

    <?= $form->field($taskChild, 'parent_id')->dropDownList(Task::find()->select(['title','id'])->indexBy('id')->column(),['prompt'=>'Selecionar Terefa, se pretente criar um sub-tarefa']) ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
    <div class="row">
        <div class="col-md-6">    
            <?= $form->field($model, 'status')->dropDownList(['open' => 'Open','work' => 'Work in Progressing','pending'=>'Pending','resolved' => 'Resolved','closed' => 'Closed']) ?>
        </div>
        <div class="col-md-6">
             <?= $form->field($model, 'finish_time')->widget(
                 DatePicker::className(), [
                // inline too, not bad
                'inline' => false, 
                // modify template for custom rendering
                //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-m-dd',
                    'startDate' => date('Y-m-d'),
                ]
            ]);?>
        </div>
    </div>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
