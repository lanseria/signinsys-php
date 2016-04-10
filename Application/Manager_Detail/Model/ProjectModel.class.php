<?php
namespace Manager_Detail\Model;
use Think\Model;
class ProjectModel extends Model{

    protected $tableName = 'project';
    // 对象的数据表
    protected $trueTableName = 'm_project';

    public function insertP($pname,$pimg,$pdes,$ptitle1,$pdescribe1,$ptitle2,$pdescribe2,$ptitle3,$pdescribe3,$isgender,$isage,$iscollege,$isnumber,$isdetail,$istel,$penddate)
    {
        $data['pname']=$pname;
        $data['ptitle1']=$ptitle1;
        $data['ptitle2']=$ptitle2;
        $data['ptitle3']=$ptitle3;
        
        $data['pdescribe1']=$pdescribe1;
        $data['pdescribe2']=$pdescribe2;
        $data['pdescribe3']=$pdescribe3;
        $data['pdes']=$pdes;
        
        $data['pimg1']=current($pimg);
        next($pimg);
        $data['pimg2']=current($pimg);
        next($pimg);
        $data['pimg3']=current($pimg);
        
        $data['isgender']=$isgender;
        $data['isage']=$isage;
        $data['iscollege']=$iscollege;
        $data['isnumber']=$isnumber;
        $data['isdetail']=$isdetail;
        $data['istel']=$istel;
        $data['pcreatetime']=date('Y-m-d H:i:s');
        $data['pendtime']=$penddate;
        
        return $this->data($data)->add();
    }
    //t./Public/pic/project1/2016-04-02/56ff7c0c7a4bd.pngf./Public/pic/project1/2016-04-02/56ff7c0c7d589.pngt./Public/pic/project1/2016-04-02/56ff7c0c88335.jpgdata_del
//     ./Public/pic/project1/2016-04-05/570375bf848fc.jpgf
// ./Public/pic/project1/2016-04-05/570375bf8b256.jpgt
// ./Public/pic/project1/2016-04-05/570375bf8c363.jpg
// data_del
    public function deleteP($pid){
        $pro = $this->where(array('pid' => $pid))->select();
        $member = D('member');
        $r = "";
        if(unlink('./Public/pic/project1/'.$pro[0]['pimg1']))
            $r .= '<br/>./Public/pic/project1/'.$pro[0]['pimg1'];
        else
            $r .= '发生错误<br/>./Public/pic/project1/'.$pro[0]['pimg1'];
        if(unlink('./Public/pic/project1/'.$pro[0]['pimg2']))
            $r .= '成功删除<br/>./Public/pic/project1/'.$pro[0]['pimg2'];
        else
            $r .= '发生错误<br/>./Public/pic/project1/'.$pro[0]['pimg2'];
        if(unlink('./Public/pic/project1/'.$pro[0]['pimg3']))
            $r .= '成功删除<br/>./Public/pic/project1/'.$pro[0]['pimg3'];
        else
            $r .= '发生错误<br/>./Public/pic/project1/'.$pro[0]['pimg3'];
        if($this->where(array('pid' => $pid))->delete())
            $r .= '<br/>data_del';
         if (false !== $member->deleteM($pid)) 
            $r .= '<br/>sub_data_del';
        return $r;
        //return ($this->where(array('pid' => $pid))->delete() && $r);
    }
}