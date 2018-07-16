<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlunoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aluno-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_ALUNO') ?>

    <?= $form->field($model, 'NOME') ?>

    <?= $form->field($model, 'DATA_NASCIMENTO') ?>

    <?= $form->field($model, 'LOGRADOURO') ?>

    <?= $form->field($model, 'NUMERO') ?>

    <?php // echo $form->field($model, 'BAIRRO') ?>

    <?php // echo $form->field($model, 'CIDADE') ?>

    <?php // echo $form->field($model, 'ESTADO') ?>

    <?php // echo $form->field($model, 'DATA_CRIACAO') ?>

    <?php // echo $form->field($model, 'CEP') ?>

    <?php // echo $form->field($model, 'ID_CURSO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
