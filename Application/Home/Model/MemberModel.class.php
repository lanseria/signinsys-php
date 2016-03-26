<?php
namespace Home\Model;

use Think\Model;

class MemberModel extends Model{

    protected $tableName = 'member';
    // 对象的数据表
    protected $trueTableName = 'm_member';
    
    public function insertM($pid,$name,$gender,$age,$province,$city,$number,$detail,$tel)
    {
        $data['mprojectid']=$pid;
        $data['mname']=$name;
        $data['mgender']=$gender;
        $data['mage']=$age;
        $data['mcollogeid']=$province;
        $data['mclassid']=$city;
        $data['mnumber']=$number;
        $data['mdetail']=$detail;
        $data['mtel']=$tel;
        $data['mcreate_date']=date('Y-m-d H:i:s');
    
        return $this->data($data)->add();
    }
}