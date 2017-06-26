<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }
    public function login(){	
    	$password = I('password');
    	if ($password == "120147") {
    		$this->success("登录成功！", U('/show','',''));
    		return;
    	}
    	$this->error("密码错误", "", 1);
    	return;
    }
}
