<?php
namespace Manager_Detail\Controller;
use Think\Controller;
class AjaxController extends Controller {
	public function index(){
		$post = I('get.sid');
		$memberlist = D('vmember')->where(array(
                'mprojectid' => $post
            ))->select();
		$this->ajaxReturn($memberlist);
	}
	public function projectid(){
		$post = I('get.sid');
		$msg = D('project')->where(array('pid' => $post))->select();
		$this->ajaxReturn($msg);
	}
}