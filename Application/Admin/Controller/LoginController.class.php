<?php
/**
 * 后台入口
 * @author Nick
 *
 */
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
    public function index(){
    	echo 'login Module';
    }
    
    /**
     * 登录
     */
    public function login(){
    	$this->display('Login/login');
    }
    
   	/**
   	 * 注册
   	 */
    public function reg(){

    }
    
    /**
     * 找回密码
     */
    public function forgot_pwd(){

    }
}