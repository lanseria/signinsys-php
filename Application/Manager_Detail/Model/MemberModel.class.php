<?php
namespace Manager_Detail\Model;
use Think\Model;
class MemberModel extends Model{

	protected $tableName = 'member';
    // 对象的数据表
	protected $trueTableName = 'm_member';
	public function deleteM($pid){
		$r = $this->where('mprojectid='.$pid)->delete();
		return $r;
	}

}
?>
