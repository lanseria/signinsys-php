<?php
namespace Home\Model;

use Think\Model;

class ProjectModel extends Model
{
    protected $tableName = 'project';
    // 对象的数据表
    protected $trueTableName = 'm_project';
    
    public function updateRead($id){
        $this->where('pid='.$id)->setInc('pread');
    }
    public function getMsgById($id)
    {
        $msg = $this->getBypid($id);
        
        return $msg;
    }
    public function searchAllProject() {
        $Model = new \Think\Model();
        $Model = $Model->query("SELECT a.*,(SELECT COUNT(*) FROM m_member WHERE mprojectid = a.pid) AS penroll FROM m_project AS a ORDER BY a.pcreatetime DESC ");
        return $Model;
    }
    public function searchProject_3() {
        $Model = new \Think\Model();
        $Model = $Model->query("SELECT a.*,(SELECT COUNT(*) FROM m_member WHERE mprojectid = a.pid) AS penroll FROM m_project AS a WHERE a.pendtime - NOW() >=0 ORDER BY a.pcreatetime DESC LIMIT 3 ");
        return $Model;
    }
    public function searchProject() {
        $Model = new \Think\Model();
        $Model = $Model->query("SELECT a.*,(SELECT COUNT(*) FROM m_member WHERE mprojectid = a.pid) AS penroll FROM m_project AS a WHERE a.pendtime - NOW() >=0 ORDER BY a.pcreatetime DESC ");
        return $Model;
    }
}
