<?php
class SchoolimageAction extends CommonAction {
  public function index(){
    $SchoolImage = M('SchoolImage');
    $where = array();
    if(!empty($_POST['title'])){
      $where['title'] = array('LIKE', '%' . $this -> _post('title') . '%');
    }
    //记录总数
    $count = $SchoolImage -> where($where) -> count('id');
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
    $result = $SchoolImage -> field('id,title,addtime') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    //每页条数
    $this -> assign('listRows', $listRows);
    //当前页数
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  public function addimage(){
    if(!empty($_POST['title'])){
      if($_FILES['pic']['size'] != 0){
	$info = R('Public/upload');
      }
      $_POST['image'] = $info[0]['savename'];
      $_POST['addtime'] = time();
      $SchoolImage = M('SchoolImage');
      if(!$SchoolImage -> create()){
	$this -> error($SchoolImage -> getError());
      }
      if($SchoolImage -> add()){
	$this -> success(L('DATA_ADD_SUCCESS'));
      }else{
	$this -> error(L('DATA_ADD_ERROR'));
      }
    }
    $this -> display();
  }

  public function delimage(){
    $SchoolImage = M('SchoolImage');
    $where_del = array();
    $where_del['id'] = array('in', $_POST['ids']);
    if($SchoolImage -> where($where_del) -> delete()){
      $this -> success(L('DATA_DELETE_SUCCESS'));
    }else{
      $this -> error(L('DATA_DELETE_ERROR'));
    }
  }

  public function editimage(){
    $SchoolImage = M('SchoolImage');
    if(!empty($_POST['title'])){
      if(!$SchoolImage -> create()){
	$this -> error($SchoolImage -> getError());
      }
      if(!empty($_FILES['pic']['name'])){
	$info = R('Public/upload');
	$SchoolImage -> pic = $info[0]['savename'];
      }
      if($SchoolImage -> save()){
	$this -> success(L('DATA_UPDATE_SUCCESS'));
      }else{
        $this -> error(L('DATA_UPDATE_ERROR'));
      }
    }
    $result = $SchoolImage -> field('id,title,image,content') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }
}
