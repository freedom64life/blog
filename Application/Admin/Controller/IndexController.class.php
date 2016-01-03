<?php
/**
 * 后台主页
 * @author Nick
 *
 */
namespace Admin\Controller;
use Think\Controller;

class IndexController extends AdminController {
	
    public function index(){
    	$this->display('Index/index');
    }
    
}