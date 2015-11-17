<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
	public function actionIndex(){
		echo '%%';
	}

    public function actionLogin()
    {
		$model = new Member;
		$email = $_REQUEST['email'];
		$passwd = md5($_REQUEST['passwd']);
		$arr = $model->find()->where(['email'=>$email])->asArray()->one();
		if($arr){
			if($arr['password']==$passwd){
				$res['code'] = '10200';
				$res['mess'] = 'success';
				$res['stat'] = '';
				exit(json_encode($res));
			}
		}
		print_r($arr);die;
    }
}
