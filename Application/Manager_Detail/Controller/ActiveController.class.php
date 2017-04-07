<?php
namespace Manager_Detail\Controller;
use Think\Controller;
class ActiveController extends Controller {
	public function addproject(){
        if(IS_POST)
        {
            $post = $_POST;
            $pimg = array();
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     0 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =      './Public/pic/project1/'; // 设置附件上传根目录
            $upload->savePath  =      ''; // 设置附件上传（子）目录
            // 上传文件
            $info   =   $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息
                foreach($info as $k => $file){
                    $pimg[$k] = $file['savepath'].$file['savename'];
                }
                $ptitle1 = I('post.title1');
                $ptitle2 = I('post.title2');
                $ptitle3 = I('post.title3');
                $pdescribe1 = I('post.pdes1');
                $pdescribe2 = I('post.pdes2');
                $pdescribe3 = I('post.pdes3');
                $pdes = I('post.pdes');
                
                $penddate = I('post.penddate');

                $isgender = 0;
                $isage = 0;
                $iscollege = 0;
                $isnumber = 0;
                $isdetail = 0;
                $istel = 0;
                if($post['name0']==0)
                    $isgender = 1;
                if ($post['name1']==1)
                    $isage = 1;
                if ($post['name2']==2)
                    $iscollege = 1;
                if ($post['name3']==3)
                    $isnumber = 1;
                if ($post['name4']==4)
                    $isdetail = 1;
                if ($post['name5']==5)
                    $istel = 1;

                $project = D("project");

                $data = $project->insertP($post['pname'],$pimg,$pdes,$ptitle1,$pdescribe1,$ptitle2,$pdescribe2,$ptitle3,$pdescribe3,$isgender,$isage,$iscollege,$isnumber,$isdetail,$istel,$penddate);
                if($data)
                {
                    $this->success('申请成功');
                }
                else{
                    $this->error('申请失败，请检查');
                }
            }
            
        }
        else{
            if (session('?logineduser')) {
                $this->assign('aac','open active');
                $this->assign('aac1','active');
                $this->assign('Amode','Simple_Mode');
                $this->display();
            } else {
                // 提示
                $this->error('只有管理员才可以进入,请先登录', '/Manager_Detail/User/login');
            }
        }
    }

    public function del(){
        $pid = I('get.pid');
        $project = D("project");
        $r = $project->deleteP($pid);
        if($r)
        {
            $this->error('已删除'.$r, "/Manager_Detail/Active/delproject",10);
        }
    }
    public function delproject(){
        if(IS_POST)
        {

        }
        else{
            if (session('?logineduser')) {
                $datasource = D('vproject')->select();
                $this->assign('projectdata',$datasource);
                $this->assign('aac','open active');
                $this->assign('aac2','active');
                $this->display('delproject');
            } else {
                // 提示
                $this->error('只有管理员才可以进入,请先登录', '/Manager_Detail/User/login');
            }
        }
    }
    public function editproject(){
        if(IS_POST)
        {
            $post = $_POST;
            
            $pimg = array();
            
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =      './Public/pic/project1/'; // 设置附件上传根目录
            $upload->savePath  =      ''; // 设置附件上传（子）目录
            // 上传文件
            $info   =   $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息
                foreach($info as $k => $file){
                    $pimg[$k] = $file['savepath'].$file['savename'];
                    
                }
                $pid = I('post.pid');
                
                $ptitle1 = I('post.title1');
                $ptitle2 = I('post.title2');
                $ptitle3 = I('post.title3');
                $pdescribe1 = I('post.pdes1');
                $pdescribe2 = I('post.pdes2');
                $pdescribe3 = I('post.pdes3');
                $pdes = I('post.pdes');
                
                $isgender = 0;
                $isage = 0;
                $iscollege = 0;
                $isnumber = 0;
                $isdetail = 0;
                $istel = 0;
                if($post['name2']=='gender')
                    $isgender = 1;
                if ($post['name3']=='age')
                    $isage = 1;
                if ($post['name4']=='college')
                    $iscollege = 1;
                if ($post['name5']=='number')
                    $isnumber = 1;
                if ($post['name6']=='detail')
                    $isdetail = 1;
                if ($post['name7']=='tel')
                    $istel = 1;

                $project = D("project");

                $data = $project->updateP($pid,$post['pname'],$pimg,$pdes,$ptitle1,$pdescribe1,$ptitle2,$pdescribe2,$ptitle3,$pdescribe3,$isgender,$isage,$iscollege,$isnumber,$isdetail,$istel);
                if($data)
                {
                    $this->success('申请成功');
                }
                else{
                    $this->error('申请失败，请检查');
                }
            }
            
        }
        else{
            if (session('?logineduser')) {
                $datasource = D('vproject')->select();
                $this->assign('projectdata', $datasource[0]);
                $this->assign('data',$datasource);
                $this->assign('aac','open active');
                $this->assign('aac2','active');
                $this->assign('Amode','Big_Mode');
                $this->display();
            } else {
                // 提示
                $this->error('只有管理员才可以进入,请先登录', '/Manager_Detail/User/login');
            }
        }
    }
    public function sumproject(){
        if (session('?logineduser')) {
            $activities = D('project')->select();
            $this->assign('aac','open active');
            $this->assign('aac4','active');
            $this->assign('activities',$activities);
            $this->display();
        } else {
            // 提示
            $this->error('只有管理员才可以进入,请先登录', '/Manager_Detail/User/login');
        }
    }
}
?>