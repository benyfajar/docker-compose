<?php

class KotakController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionInput()
	{
		$model= new Kotak;
		$model->unsetAttributes(); 

		$this->performAjaxValidation($model);
			
			if(isset($_POST['Kotak']))
			{
				$model->attributes= $_POST['Kotak'];
				$panjang = $_POST['Kotak'] ['panjang'];
				$lebar = $_POST['Kotak'] ['lebar'];
				$tebal = $_POST['Kotak'] ['tebal'];
				$jari = $_POST['Kotak'] ['jari'];
				$tinggi = $_POST['Kotak'] ['tinggi'];
			
			$this->redirect(array('luas','volume','panjang'=>$panjang,
									'lebar'=>$lebar,'tebal'=>$tebal, 
									'jari'=>$jari,
									'tinggi'=>$tinggi));
			}
			$this->render('input',array('model'=>$model));
	}

	public function actionLuas() 
	{
		$model = new Kotak;
		$model->unsetAttributes();

		//if(isset($_GET['Kotak']))
			//$model->attributes=$_GET['Kotak'];
			$this->render('luas',array('model'=>$model));
		

	}

	public function actionVolume() 
	{
		$model = new Kotak;
		$model->unsetAttributes();

		//if(isset($_GET['Kotak']))
			//$model->attributes=$_GET['Kotak'];
			$this->render('volume',array('model'=>$model));
		

	}	

	public function actionLuasLingkaran() 
	{
		$model = new Kotak;
		$model->unsetAttributes();

		//if(isset($_GET['Kotak']))
			//$model->attributes=$_GET['Kotak'];
			$this->render('luaslingkaran',array('model'=>$model));
	}	

		public function actionSilinder() 
	{
		$model = new Kotak;
		$model->unsetAttributes();

		//if(isset($_GET['Kotak']))
			//$model->attributes=$_GET['Kotak'];
			$this->render('silinder',array('model'=>$model));
	}			


	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='kotak-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

	}

}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
