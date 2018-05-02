<?php
namespace Home\Controller;
use Think\Controller;
class AjaxController extends Controller {
    public function getArea(){
        $where['colloge_id']=$_REQUEST['areaId'];
        $area=D('class')->where($where)->select();
        $this->ajaxReturn($area);
    }
}