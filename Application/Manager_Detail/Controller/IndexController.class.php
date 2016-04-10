<?php
namespace Manager_Detail\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if (session('?logineduser')) {
            if(!empty(I('get.sid')))
            {
                $sourceid = I('get.sid');
            }
            else{
                $sourceid = 1;
            }
            $msg = D('project')->where(array('pid' => $sourceid))->select();
            $datasource = D('project')->select();
            $memberlist = D('vmember')->where(array(
                'mprojectid' => $sourceid
            ))->select();
            $this->assign('iac','active');
            $this->assign('msg',$msg);
            $this->assign('data',$datasource);
            $this->assign('memberlist',$memberlist);
            $this->display();
        } else {
            // 提示
            $this->error('只有管理员才可以进入,请先登录', '/Manager_Detail/User/login');
        }
    }
    public function about(){
        if (session('?logineduser')) {
            $this->display();
        }
        else{
            // 提示
            $this->error('只有管理员才可以进入,请先登录', '/Manager_Detail/User/login');
        }
    }
    
}