<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property int $ID_CURSO
 * @property string $NOME
 * @property string $DATA_CRIACAO
 * @property int $ID_PROFESSOR
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOME'], 'required'],
            [['DATA_CRIACAO'], 'safe'],
            [['ID_PROFESSOR'], 'integer'],
            [['NOME'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_CURSO' => 'Id  Curso',
            'NOME' => 'Nome',
            'DATA_CRIACAO' => 'Data  Criacao',
            'ID_PROFESSOR' => 'Id  Professor',
        ];
    }
}
