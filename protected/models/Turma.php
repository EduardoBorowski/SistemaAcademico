<?php

/**
 * This is the model class for table "turma".
 *
 * The followings are the available columns in table 'turma':
 * @property integer $id_Turma
 * @property string $descricao
 * @property integer $cod_prof
 *
 * The followings are the available model relations:
 * @property Aula[] $aulas
 * @property Professor $codProf
 */
class Turma extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'turma';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_prof', 'required'),
			array('cod_prof', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_Turma, descricao, cod_prof', 'safe', 'on'=>'search'),
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
			'aulas' => array(self::HAS_MANY, 'Aula', 'cod_turma'),
			'codProf' => array(self::BELONGS_TO, 'Professor', 'cod_prof'),
		);
	}
	
	// função para retornar lista de aulas para a turma
	public function aulasToString() {
		$return = '';
		foreach ($this->aulas as $aula) {
			$return .= $aula->descricao.'<br>';
		}
		return $return;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_Turma' => 'Id Turma',
			'descricao' => 'Turma',
			'cod_prof' => 'Professor',
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

		$criteria->compare('id_Turma',$this->id_Turma);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('cod_prof',$this->cod_prof);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Turma the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
