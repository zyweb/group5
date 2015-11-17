<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Member;

class UserController extends Controller{
	//用户登录API
	public function actionLogin(){
		$model = new Member;
		$email = trim($_REQUEST['email']);
		$passwd = md5(trim($_REQUEST['passwd']));
		$arr = $model->find()->where(['email'=>$email])->asArray()->one();
		if($arr){
			if($arr['password']==$passwd){
				//登录成功
				$res = array('code' => '10200',
							 'mess' => 'success',
							 'stat' => '200',
							 'data' => $arr);
				exit(json_encode($res));
			}else{
				//密码错误
				$res = array('code' => '10202',
							 'mess' => 'password is error',
							 'stat' => '100',
							 'data' => "");
				exit(json_encode($res));
			}
		}else{
			//邮箱不存在或错误
			$res = array('code' => '10201',
						 'mess' => 'The email is Not Found or error',
						 'stat' => '100',
						 'data' => "");
			exit(json_encode($res));
		}
	}
	//用户注册API
	public function actionRegister(){
		$email = trim($_REQUEST['email']);
		$passwd = md5(trim($_REQUEST['password']));
		$memeber_type = trim($_REQUEST['member_type']);
		$member_name  = trim($_REQUEST['member_name']);
		$member_phone = trim($_REQUEST['member_phone']);
		$model = new Member;
		$model->email = $email;
		$model->password = $passwd;
		$model->member_type = $memeber_type;
		$model->member_name = $member_name;
		$model->member_phone = $member_phone;
		if($model->save()){
			$arr = $model->find()->where(['email'=>$email])->asArray()->one();
			$res = array(
				 'code' => '10200',
				 'mess' => 'success',
				 'stat' => '200',
				 'data' => $arr);
		}else{
			$res = array(
				 'code' => '10204',
				 'mess' => 'The request is error',
				 'stat' => '100',
				 'data' => "");
		}
		exit(json_encode($res));
	}
}