<?php
namespace Home\Model;

use Think\Model;

class MemberModel extends Model{

    protected $tableName = 'member';
    // 对象的数据表
    protected $trueTableName = 'm_member';
    protected $_validate = array(
     array('mname','require','姓名必须！'), //默认情况下用正则进行验证
     array('mage','number','年龄必须是数字！'), //默认情况下用正则进行验证
     array('mtel','require','电话必须！'), //默认情况下用正则进行验证
     array('mnumber','number','必须是数字！'),
     array('mcollogeid',-1,'请填写学院！',2,'notequal'),
     array('mclassid',-1,'请填写专业！',2,'notequal'),
     array('mdetail','require','个人信息必须！'), //默认情况下用正则进行验证
     array('mgender',array(0,1),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内
   );
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
        if ($this->create($data)) {
            return $this->add();
        }
        return false;
    }
}