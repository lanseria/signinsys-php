<?php
namespace Home\Model;

use Think\Model;

class ProjectModel extends Model
{
    protected $tableName = 'project';
    // 对象的数据表
    protected $trueTableName = 'm_project';
    
    public function getMsgById($id)
    {
        $msg = $this->getBypid($id);
        
        return $msg;
    }
    public function searchProject() {
        $Model = new \Think\Model();
        $Model = $Model->query("SELECT a.*,(SELECT COUNT(*) FROM m_member WHERE mprojectid = a.pid) AS penroll FROM m_project AS a ORDER BY a.pcreatetime DESC  LIMIT 3 ");
        return $Model;
    }
}
