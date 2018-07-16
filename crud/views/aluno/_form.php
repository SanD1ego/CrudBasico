<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aluno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NOME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_NASCIMENTO')->textInput() ?>

    <?= $form->field($model, 'LOGRADOURO')->textInput() ?>

    <?= $form->field($model, 'NUMERO')->textInput() ?>

    <?= $form->field($model, 'BAIRRO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CIDADE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESTADO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_CRIACAO')->textInput() ?>

    <?= $form->field($model, 'CEP')->textInput() ?>

    <?= $form->field($model, 'ID_CURSO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
