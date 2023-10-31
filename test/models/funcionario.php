<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionario".
 *
 * @property int $id
 * @property string $nome
 * @property int $cpf
 * @property string $logradouro
 * @property int $cep
 * @property string $cidade
 * @property string $estado
 * @property int $numero
 * @property int $complemento
 * @property int $cargo_id
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cpf', 'logradouro', 'cep', 'cidade', 'estado', 'numero', 'complemento', 'cargo_id'], 'required'],
            [['cpf', 'cep', 'numero', 'complemento', 'cargo_id'], 'integer'],
            [['nome', 'logradouro', 'cidade', 'estado'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'cpf' => 'Cpf',
            'logradouro' => 'Logradouro',
            'cep' => 'Cep',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'numero' => 'Numero',
            'complemento' => 'Complemento',
            'cargo_id' => 'Cargo ID',
        ];
    }
}
