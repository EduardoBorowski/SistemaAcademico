<?php

class AulaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			/*array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),*/
			array('allow', // allow authenticated user to perform ALL actions
				'actions'=>array('index','view','create','update','admin','delete'),
				'users'=>array('@'),
			),
			/*array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),*/
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$aula = $this->loadModel($id);
		$dataProvider = new CActiveDataProvider('Aluno', array(
				'criteria'=>array(
				    'with'=>array(
				        'codTurma'=>array('with'=>array('aulas')) 
				    ),
					'condition'=>'t.cod_turma='.$aula->cod_turma,
					'order' => 't.nome ASC',
				),
				'pagination'=>array(
						'pageSize'=> 30,
				)
			));
		$this->render('view',array(
			'model'=>$aula,
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($cod_turma)
	{
		$model=new Aula;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Aula']))
		{
			$model->attributes=$_POST['Aula'];
			if($model->save())
				$criteria = new CDbCriteria;
				$criteria->addCondition('t.id_Turma = '. $cod_turma);
				$criteria->with = array('alunos');
				$turma = Turma::model()->find($criteria);
				foreach($turma->alunos as $aluno) {
					$frequencia = new Frequencia;
					$frequencia->cod_aluno = $aluno->id_Aluno;
					$frequencia->cod_aula = $model->id_Aula;
					$frequencia->presenca = 0;
					$frequencia->save();
					unset($frequencia);
				}
				$this->redirect(array('view','id'=>$model->id_Aula));
		}

		$this->render('create',array(
			'model'=>$model,
			'cod_turma'=>$cod_turma,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Aula']))
		{
			$model->attributes=$_POST['Aula'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_Aula));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$userId = $_SESSION['usuario']->id_Professor;
		$username = $_SESSION['usuario']->username;
		if($username == "admin"){
			$dataProvider=new CActiveDataProvider('Aula');
			$this->render('index',array(
					'dataProvider'=>$dataProvider,
			));
		}
		else {
			$dataProvider = new CActiveDataProvider('Aula', array(
				'criteria'=>array(
				    'with'=>array(
				        'codTurma'
				    ),
				    'condition' => 'codTurma.cod_prof='.$_SESSION['usuario']->id_Professor
				),
			));
			$this->render('index',array(
					'dataProvider'=>$dataProvider,
			));
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Aula('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Aula']))
			$model->attributes=$_GET['Aula'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Aula the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Aula::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Aula $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='aula-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
