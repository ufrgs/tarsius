<?php

/**
 * This is the model class for table "finalizado".
 *
 * The followings are the available columns in table 'distribuido':
 * @property integer $id
 * @property string $nome
 * @property integer $status
 * @property integer $trabalho_id
 * @property string $tempDir
 *
 * The followings are the available model relations:
 * @property Trabalho $trabalho
 */
class Finalizado extends CActiveRecord
{	

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'finalizado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('trabalho_id', 'numerical', 'integerOnly'=>true),
			array('nome, dataFechamento, conteudo', 'safe'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'trabalho_id' => 'Trabalho',
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Distribuido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
