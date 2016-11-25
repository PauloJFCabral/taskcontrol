<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Task */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(['open' => 'Open','work' => 'Work in Progressing','pending'=>'Pending','resolved' => 'Resolved','closed' => 'Closed']) ?>

    <?= $form->field($model, 'finish_time')->widget(\yii\jui\DatePicker::classname(), [
        'language' => 'pt',
    //'dateFormat' => 'yyyy-MM-dd',
]) ?> ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
