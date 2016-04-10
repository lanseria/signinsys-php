<?php
namespace Manager\Model;

use Think\Model;

class ProjectModel extends Model
{

    protected $tableName = 'project';
    // 对象的数据表
    protected $trueTableName = 'm_project';

    public function insertP($pname,$pimg,$pdes,$ptitle1,$pdescribe1,$ptitle2,$pdescribe2,$ptitle3,$pdescribe3,$isgender,$isage,$iscollege,$isnumber,$isdetail,$istel)
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
        
        return $this->data($data)->add();
    }
}