<?php
namespace Manager\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
    if(IS_POST)
        {
            // 1.创建数据表操作对象
            $userTable = D('user');
            // 2.获取表单数据
            $username = I('post.username');
            $pwd = I('post.password');
            //判断用户名有效性
            if($userTable->isValidUser($username,$pwd))
            {
                //3.1把用户名信息放到session中
                session('logineduser',$username);
                session('logineduserid',$userTable->getUserIdByUserName($username));
                
                //dump($_SESSION);
                //3.2跳转到首页
                $this->success('登录成功','/Manager/Index/index');
            }
            else{
                $this->error('用户名或密码错误，请重新填写');
            }
    
        }
        else{
            $this->display();
        }
    }
    
    public function logout()
    {
        //1注销session
        session('logineduser',null);
        session('logineduserid',null);
        //跳转首页
        $this->success('注销成功','/Manager/Index/index');
    }
}

?>