<?php
namespace app\console\controller;
use think\Db;
use think\Request;
use think\Url;
use think\Session;
use think\Controller;
use app\console\model\Manager;

class Login extends Controller
{

	public function index(){	
		if (Request::instance()->isPost()) {

            $result = Manager::login();

            if (true === $result) {
                //-------------管理员日志 start----------------
                $uid = Session::get('manage_id');
                manager_log($uid,'','管理员->登录');
                //-------------管理员日志 end------------------
                $this->success('登录成功', 'dashboard/index');
            } else {
                $this->error($result);
            }
        }

        /**
         * 检测用户是否登录
         */
        if (true === Session::has('manage_id')) {
            $this->redirect('dashboard/index');
        }

        return $this->fetch('./login', [
            "mate_title" => '管理员登录'
        ]);
	}




    public function logout(){
        //-------------管理员日志 start----------------
        $uid = Session::get('manage_id');
        manager_log($uid,'','管理员->退出');
        //-------------管理员日志 end------------------
        Session::delete('manage_id');
        $this->redirect('login/index');
    }

    /**
     * [update description]更新方法
     * @param  [type] $id [description]主键id
     * @return [type]     [description]
     */
    public function myinfo($id)
    {
        if (Request::instance()->isPOST())
        {
            //-------------管理员日志 start----------------
            $uid = Session::get('manage_id');
            $param = Request()->param();
            $param = empty($param)?'':json_encode($param);
            manager_log($uid,$param,'管理员->更新信息');
            //-------------管理员日志 end------------------

            $post_data = Request::instance()->post();
            $result = Manager::saveVerify($post_data,$id);
            if (true === $result) {
                $this->success('更新成功');
            } else {
                $this->error($result);
            }
        }
    }

     //控制器中 获取验证码
    public function get_captcha(){    
        //使用memcheck 设置session    
        //Session::init(['prefix'=> 'wll_','type'=> '','auto_start' => true]);
        $captcha = new \think\Captcha(86,48,4);
        echo $captcha->showImg();        
       //Session::set('code',$captcha->getCaptcha());
        exit;    
    }
}