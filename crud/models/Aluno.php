<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property int $ID_ALUNO
 * @property string $NOME
 * @property string $DATA_NASCIMENTO
 * @property int $LOGRADOURO
 * @property int $NUMERO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $ESTADO
 * @property string $DATA_CRIACAO
 * @property int $CEP
 * @property int $ID_CURSO
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOME', 'BAIRRO', 'CIDADE', 'ESTADO'], 'required'],
            [['DATA_NASCIMENTO', 'DATA_CRIACAO'], 'safe'],
            [['LOGRADOURO', 'NUMERO', 'CEP', 'ID_CURSO'], 'integer'],
            [['NOME', 'BAIRRO', 'CIDADE', 'ESTADO'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_ALUNO' => 'Id  Aluno',
            'NOME' => 'Nome',
            'DATA_NASCIMENTO' => 'Data  Nascimento',
            'LOGRADOURO' => 'Logradouro',
            'NUMERO' => 'Numero',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'ESTADO' => 'Estado',
            'DATA_CRIACAO' => 'Data  Criacao',
            'CEP' => 'Cep',
            'ID_CURSO' => 'Id  Curso',
        ];
    }
}
