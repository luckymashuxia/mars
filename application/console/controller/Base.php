<?php
namespace app\console\controller;
use think\Db;
use think\Request;
use think\Url;
use think\Controller;
use think\Session;

class Base extends Controller
{
	/**
	 * [_initialize description]初始化方法
	 * @return [type] [description] 权限和菜单控制
	 */
	protected function _initialize() {
	    if (!Session::has('manage_id')) {
            $this->redirect('login/index');
        }
		else{
			  //-------------全局权限 start----------------
			  $authmenu = new \think\Authmenu();
			  $uid = Session::get('manage_id');

			  $auth=$authmenu->check($uid);
			  if (!$auth[0]) {
					 $this->error($auth[1]);
			  }
			  $this->assign('menu_left', $auth[1]);
			  $this->assign('mate_operate', $auth[2]);
			  $this->assign('mate_title', $auth[3]);
			  //-------------全局权限 end ----------------

              //-------------管理员日志 start----------------
			  $param = Request()->param();
			  $param = empty($param)?'':json_encode($param);
			  $operate = $auth[3].'->'.$auth[2];
			  manager_log($uid,$param,$operate);
			  //-------------管理员日志 end------------------

			  $user = db::name('manager')->field('id,username,avatar,nickname,mobile')->find($uid);
			  $this->assign('user', $user);
		}

   }
  

}