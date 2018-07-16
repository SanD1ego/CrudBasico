<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "professor".
 *
 * @property int $ID_PROFESSOR
 * @property string $NOME
 * @property string $DATA_NASCIMENTO
 * @property string $DATA_CRIACAO
 */
class Professor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'professor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOME'], 'required'],
            [['DATA_NASCIMENTO', 'DATA_CRIACAO'], 'safe'],
            [['NOME'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_PROFESSOR' => 'Id  Professor',
            'NOME' => 'Nome',
            'DATA_NASCIMENTO' => 'Data  Nascimento',
            'DATA_CRIACAO' => 'Data  Criacao',
        ];
    }
}
