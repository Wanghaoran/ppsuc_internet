<?php
class MemberAction extends CommonAction {
  //注册学员管理
  public function member(){
    $member = M('Member');
    $where = array();
    //构建查询条件
    if(!empty($_POST['name'])){
      $where[$this -> _post('key')] = $this -> _post('name');
    }
   
    //记录总数
    $count = $member -> where($where) -> count('id');
    import('ORG.Util.Page');
    if(! empty ( $_REQUEST ['listRows'] )){
      $listRows = $_REQUEST ['listRows'];
    } else {
      $listRows = 15;
    }
    $page = new Page($count, $listRows);
    //当前页数
    $pageNum = !empty($_REQUEST['pageNum']) ? $_REQUEST['pageNum'] : 1;
    $page -> firstRow = ($pageNum - 1) * $listRows;
    $result = $member -> field('id,email,telphone,name,register_time,login_count') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('id DESC') -> select();
    $this -> assign('result', $result);
    //每页条数
    $this -> assign('listRows', $listRows);
    //当前页数
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  //删除学员
  public function delmember(){
    $member = M('Member');
    $where_del = array();
    $where_del['id'] = array('in', $_POST['ids']);
    if($member -> where($where_del) -> delete()){
      $this -> success(L('DATA_DELETE_SUCCESS'));
    }else{
      $this -> error(L('DATA_DELETE_ERROR'));
    }
  }

  //编辑学员
  public function editmember(){
    $member = M('Member');
    if(!empty($_POST['email'])){
      if(empty($_POST['password'])){
	unset($_POST['password']);
      }else{
	$_POST['password'] = $this -> _post('password', 'md5');
      }
      if(!$member -> create()){
	$this -> error($member -> getError());
      }
      if($member -> save()){
	$this -> success(L('DATA_UPDATE_SUCCESS'));
      }else{
        $this -> error(L('DATA_UPDATE_ERROR'));
      }
    }
    $result = $member -> field('id,email,name,telphone') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }
}
