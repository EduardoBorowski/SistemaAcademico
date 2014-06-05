<?php

/**
 * This is the model class for table "aula".
 *
 * The followings are the available columns in table 'aula':
 * @property integer $id_Aula
 * @property string $descricao
 * @property string $conteudo
 * @property string $dataAula
 * @property string $horaInicio
 * @property string $horaTermino
 * @property integer $cod_turma
 *
 * The followings are the available model relations:
 * @property Turma $codTurma
 */
class Aula extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'aula';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_turma, descricao, dataAula, horaInicio, horaTermino', 'required'),
			array('cod_turma', 'numerical', 'integerOnly'=>true),
			array('descricao, conteudo', 'length', 'max'=>200),
			array('dataAula, horaInicio, horaTermino', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_Aula, descricao, conteudo, dataAula, horaInicio, horaTermino, cod_turma', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'codTurma' => array(self::BELONGS_TO, 'Turma', 'cod_turma'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_Aula' => 'Id Aula',
			'descricao' => 'Descricao',
			'conteudo' => 'Conteudo',
			'dataAula' => 'Data Aula',
			'horaInicio' => 'Hora Inicio',
			'horaTermino' => 'Hora Termino',
			'cod_turma' => 'Turma',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_Aula',$this->id_Aula);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('conteudo',$this->conteudo,true);
		$criteria->compare('dataAula',$this->dataAula,true);
		$criteria->compare('horaInicio',$this->horaInicio,true);
		$criteria->compare('horaTermino',$this->horaTermino,true);
		$criteria->compare('cod_turma',$this->cod_turma);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aula the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
