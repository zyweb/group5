<?php
/*
 * 公司接口
 * @Author : chen
 */
namespace app\controllers;

use Yii;
use app\models\Company;
use app\models\Region;
use app\models\Black;
use app\models\RelJob;

class CompanyController extends \yii\web\Controller
{
    /*
     * 公司列表
     */
    public function actionClists()
    {	
		
        $arr = Company::find()->asArray()->all();
		foreach($arr as $k=>$v){
			$arr[$k]['c_logo'] = "http://www.bwie.com.cn/lagou_group_five/".$v['c_logo'];
		}

        if(empty($arr)){
            $data = [
                "status" => '100',
                "msg" => 'no datas',
            ];
        }else {
            $data = [
                "status" => '200',
                "msg" => 'Success',
                "data" => $arr,
            ];
        }

        echo json_encode($data);

        $input = json_encode($data);
		print_r(json_decode($input));
    }

    /**
     * 公司详情
     * method   get
     */
    public function actionCmark()
    {
        //$cid = intval($_POST['cid']);
        $cid = 1;
        $arr = Company::find($cid)->asArray()->one();
        if(empty($arr)){
            $data = [
                "status" => '100',
                "msg" => 'no datas',
            ];
        }else {
            $data = [
                "status" => '200',
                "msg" => 'Success',
                "data" => $arr,
            ];
        }
        echo json_encode($data);
    }

    /**
     * 拉黑
     */
    public function actionCblack()
    {
        $cid = intval($_POST['cid']);
        $mid = intval($_POST['mid']);
        $blk = new Black();
        $blk -> mem_id  = $mid;
        $blk -> c_black = $cid;
        $blk -> save();
    }

    /*
     * 白名单
     */
    public function actionCwhite()
    {
        $cid = intval($_POST['cid']);
        $mid = intval($_POST['mid']);

        $sql = "delete from black where mem_id='$mid' and c_black='$cid' ";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /*
     * 查询用户拉黑的公司
     */

    public function actionCsel(){
        $mid = intval($_POST['mid']);

        $arr = Black::find($mid)->asArray()->all();
        if(empty($arr)){
            $data = [
                "status" => '100',
                "msg" => 'no datas',
            ];
        }else {
            $data = [
                "status" => '200',
                "msg" => 'Success',
                "data" => $arr,
            ];
        }
        echo json_encode($data);
    }
    /*
     * 城市列表
     */
    public function actionCity(){
        $arr = ['上海','天津','重庆','深圳','广州','杭州','成都','南京','武汉','西安','厦门','长沙','苏州','郑州'
                 ,'青岛','合肥','福州','济南','大连','珠海','无锡','佛山','东莞','宁波','常州','沈阳','石家庄','昆明'
                 ,'南昌','南宁','哈尔滨','海口','中山','惠州','贵阳','长春','太原','嘉兴','泰安','昆山','烟台','兰州'
                 ,'泉州'];
        echo json_encode($arr);
    }

    /*
     * 根据城市查公司
     */
    public function actionCcompany(){
        $city = trim($_GET['city']);
        //$city = '北京';
        $arr = Company::find()->where(['c_city'=>$city])->asArray()->all();
        if(empty($arr)){
            $data = [
                "status" => '100',
                "msg" => 'no datas',
            ];
        }else {
            $data = [
                "status" => '200',
                "msg" => 'Success',
                "data" => $arr,
            ];
        }
        echo json_encode($data);
    }

    /*
 * 根据城市查公司
 */
    public function actionCposition(){
        $city = trim($_GET['city']);
		$cid  = intval($_GET['cid']);
        
		$arr1 = Company::find($cid)->select(['c_logo'])->asArray()->one();
		$arr1 = "http://www.bwie.com.cn/lagou_group_five/".$arr1['c_logo'];
		
        $arr = RelJob::find()->where(['work_city'=>$city])->asArray()->all();

        if(empty($arr)){
            $data = [
                "status" => '100',
                "msg" => 'no datas',
            ];
        }else {
            $data = [
                "status" => '200',
                "msg" => 'Success',
                "data" => ['datas'=>$arr,'c_logo'=>$arr1],
            ];
        }
        echo json_encode($data);
    }

}
