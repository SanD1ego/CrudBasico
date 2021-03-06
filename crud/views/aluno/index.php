<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlunoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alunos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aluno-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Aluno', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_ALUNO',
            'NOME',
            'DATA_NASCIMENTO',
            'LOGRADOURO',
            'NUMERO',
            //'BAIRRO',
            //'CIDADE',
            //'ESTADO',
            //'DATA_CRIACAO',
            //'CEP',
            //'ID_CURSO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
