<?php

namespace app\controllers;

use Yii;
use app\models\EdcucationExperience;
use app\models\Member;
use app\models\Resume;
use app\models\WorkExperience;


/**
 * 个人用户简历信息处理控制器
 * Class MemberController
 * @package app\controllers
 */
class MemberController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }


    /**
     * 个人简历注册第一步
     */
    public function actionRegister_one(){
        $mem_id = $_POST['member_id'];

        //根据用户id修改用户名
        $member_model = Member::findOne($mem_id);
        $member_model->member_name = $_POST['member_name'];
        $member_model->member_phone = $_POST['member_phone'];
        $member_model->id_card = $_POST['id_card'];
        $member_model->save();

        //添加resume简历信息
        $resume = new Resume();
        $resume->education = $_POST['education'];
        $resume->work_years = $_POST['work_years'];
        $resume->now_status = $_POST['now_status'];
        $resume->addtime = date('Y-m-d H:i:s',time());
        $resume->sex = $_POST['sex'];
        $resume->age = $_POST['age'];
        $resume->happybirthday = $_POST['happybirthday'];
        if($resume->save()){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = '';
        }else{
            $data['status'] = '100';
            $data['msg'] = 'err';
            $data['data'] = '';
        }
        echo json_encode($data);
    }

    /**
     * 个人简历工作经历增加
     */

    public function actionRegister_two(){
        $mem_id = $_POST['member_id'];
        $work = new WorkExperience();
        $work->work_company = $_POST['work_company'];
        $work->work_position = $_POST['work_position'];
        $work->work_begin = $_POST['work_begin'];
        $work->work_end = $_POST['work_end'];
        $work->work_content = $_POST['work_content'];
        $work->member_id = $mem_id;
        if($work->save()){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = '';
        }else{
            $data['status'] = '100';
            $data['msg'] = 'err';
            $data['data'] = '';
        }
        echo json_encode($data);
    }


    /**
     * 个人简历教育经历增加
     */

    public function actionRegister_three(){
        $edu = new EdcucationExperience();
        $edu->e_name = $_POST['e_name'];
        $edu->e_xueli = $_POST['e_xueli'];
        $edu->e_jineng = $_POST['e_jineng'];
        $edu->e_time_end = $_POST['e_time_end'];
        $edu->member_id = $_POST['member_id'];
        if($edu->save()){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = '';
        }else{
            $data['status'] = '100';
            $data['msg'] = 'err';
            $data['data'] = '';
        }
        echo json_encode($data);
    }

    /**
     *个人简历期望增加
     */
    public function actionRegister_four(){
        $resume = Resume::find()->where(['member_id'=>$_POST['member_id']])->one();
        //$resume = Resume->find()->where(['member_id'=>4])->one();
        $resume->hope_salary = $_POST['hope_salary'];
        $resume->hope_position = $_POST['hope_position'];
        $resume->hope_city = $_POST['hope_city'];
        if($resume->save()){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = '';
        }else{
            $data['status'] = '100';
            $data['msg'] = 'err';
            $data['data'] = '';
        }
        echo json_encode($data);
    }


    /**
     * 个人简历修改
     */
    public function actionUpd_resume(){
        $id = $_REQUEST['id'];
        $resume = Resume::findOne($id);
        //根据用户id修改用户名
        $member_model = Member::findOne($resume->member_id);
        $member_model->member_name = $_POST['member_name'];
        $member_model->member_phone = $_POST['member_phone'];
        $member_model->id_card = $_POST['id_card'];
        $member_model->save();

        //添加resume简历信息
        $resume->education = $_POST['education'];
        $resume->work_years = $_POST['work_years'];
        $resume->now_status = $_POST['now_status'];
        $resume->addtime = date('Y-m-d H:i:s',time());
        $resume->sex = $_POST['sex'];
        $resume->age = $_POST['age'];
        $resume->happybirthday = $_POST['happybirthday'];
        if($resume->save()){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = '';
        }else{
            $data['status'] = '100';
            $data['msg'] = 'err';
            $data['data'] = '';
        }
        echo json_encode($data);
    }


    /**
     * 工作经历修改
     */

    public function actionUpd_work(){
        $id = $_REQUEST['id'];
        $work = WorkExperience::findOne($id);
        $work->work_company = $_POST['work_company'];
        $work->work_position = $_POST['work_position'];
        $work->work_begin = $_POST['work_begin'];
        $work->work_end = $_POST['work_end'];
        $work->work_content = $_POST['work_content'];
        if($work->save()){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = '';
        }else{
            $data['status'] = '100';
            $data['msg'] = 'err';
            $data['data'] = '';
        }
        echo json_encode($data);
    }


    /**
     * 教育经历修改
     */
    public function actionUpd_edu(){
        $id = $_REQUEST['id'];
        $edu = EdcucationExperience::findOne($id);
        $edu->e_name = $_POST['e_name'];
        $edu->e_xueli = $_POST['e_xueli'];
        $edu->e_jineng = $_POST['e_jineng'];
        $edu->e_time_end = $_POST['e_time_end'];
        if($edu->save()){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = '';
        }else{
            $data['status'] = '100';
            $data['msg'] = 'err';
            $data['data'] = '';
        }
        echo json_encode($data);
    }


    /**
     * 删除基本简历信息
     */
    public function actionDel_resume(){
        $id = $_REQUEST['id'];
        $resume = Resume::findOne($id);
        if($resume->delete()){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = '';
        }else{
            $data['status'] = '100';
            $data['msg'] = 'err';
            $data['data'] = '';
        }
        echo json_encode($data);
    }

    /**
     * 删除工作经历信息
     */
    public function actionDel_work(){
        $id = $_REQUEST['id'];
        $resume = WorkExperience::findOne($id);
        if($resume->delete()){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = '';
        }else{
            $data['status'] = '100';
            $data['msg'] = 'err';
            $data['data'] = '';
        }
        echo json_encode($data);
    }

    /**
     * 删除教育经历信息
     */
    public function actionDel_edu(){
        $id = $_REQUEST['id'];
        $resume = EdcucationExperience::findOne($id);
        if($resume->delete()){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = '';
        }else{
            $data['status'] = '100';
            $data['msg'] = 'err';
            $data['data'] = '';
        }
        echo json_encode($data);
    }



    /**
     * 个人简历所有信息
     */

    public function actionGet_resume(){
        $mem_id = $_REQUEST['member_id'];
        $info = Resume::find()->where(['member_id'=>$mem_id])->asArray()->one();
        if($info){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = $info;
        }else{
            $data['status'] = '100';
            $data['msg'] = '没有该用户简历信息';
            $data['data'] = '';
        }
        echo json_encode($data);
    }

    /**
     * 查询基本信息
     */
    public function actionGet_info(){
        $mem_id = $_REQUEST['member_id'];
        $sql = "select a.email,a.member_name,a.member_phone,a.id_card,b.sex,b.city,b.happybirthday,b.work_years
                from member a,resume b
                where a.member_id=b.member_id
                and a.member_id=$mem_id";
        $info = Yii::$app->db->createCommand($sql)->queryOne();
        if($info){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = $info;
        }else{
            $data['status'] = '100';
            $data['msg'] = '没有该用户简历信息';
            $data['data'] = '';
        }
        echo json_encode($data);
    }

    /**
     * 查询用户全部信息
     */
    public function actionGet_allinfo(){
        $mem_id = $_REQUEST['member_id'];
        $sql = "select a.email,a.member_name,a.member_phone,a.id_card,b.*,c.*,d.*
                from member a,resume b,work_experience c,edcucation_experience d
                where a.member_id=b.member_id
                and a.member_id=$mem_id
                and c.member_id=$mem_id
                and d.member_id=$mem_id";
        $info = Yii::$app->db->createCommand($sql)->queryOne();
		$info['c_img'] = 'http://www.bwie.com.cn/lagou_group_five/'.$info['c_img'];
        if($info){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = $info;
        }else{
            $data['status'] = '100';
            $data['msg'] = '没有该用户简历信息';
            $data['data'] = '';
        }
        echo json_encode($data);

    }

    /**
     * 获取教育经历信息
     */

    public function actionGet_education(){
        $mem_id = $_REQUEST['member_id'];
        $info = EdcucationExperience::find()->where(['member_id'=>$mem_id])->asArray()->one();
        if($info){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = $info;
        }else{
            $data['status'] = '100';
            $data['msg'] = '没有该用户简历信息';
            $data['data'] = '';
        }
        echo json_encode($data);
    }

    /**
     * 获取工作经历
     */
    public function actionGet_work(){
        $mem_id = $_REQUEST['member_id'];
        $info = WorkExperience::find()->where(['member_id'=>$mem_id])->asArray()->one();
        if($info){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = $info;
        }else{
            $data['status'] = '100';
            $data['msg'] = '没有该用户简历信息';
            $data['data'] = '';
        }
        echo json_encode($data);
    }


    /**
     * 获取求职偏好信息
     */
    public function actionGet_hope(){
        $mem_id = $_REQUEST['member_id'];
        $info = Resume::find()->select(['hope_city','hope_salary','hope_position'])->where(['member_id'=>$mem_id])->asArray()->one();
        if($info){
            $data['status'] = '200';
            $data['msg'] = 'success';
            $data['data'] = $info;
        }else{
            $data['status'] = '100';
            $data['msg'] = '没有该用户简历信息';
            $data['data'] = '';
        }
        echo json_encode($data);
    }
}
