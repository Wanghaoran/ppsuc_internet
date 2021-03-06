<?php
class AboutusAction extends CommonAction {
  public function index(){
    $Aboutus = M('Aboutus');
    $where = array();
    if(!empty($_POST['title'])){
      $where['title'] = array('LIKE', '%' . $this -> _post('title') . '%');
    }
    //记录总数
    $count = $Aboutus -> where($where) -> count('id');
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
    $result = $Aboutus-> field('id,title,addtime') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    //每页条数
    $this -> assign('listRows', $listRows);
    //当前页数
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  public function addaboutus(){
    if(!empty($_POST['title'])){
      $Aboutus = M('Aboutus');
      if(!$Aboutus -> create()){
	$this -> error($Aboutus -> getError());
      }
      $Aboutus -> addtime = time();
      if($Aboutus -> add()){
	$this -> success(L('DATA_ADD_SUCCESS'));
      }else{
	$this -> error(L('DATA_ADD_ERROR'));
      }
    }
    $this -> display();
  }

  public function delaboutus(){
    $Aboutus = M('Aboutus');
    $where_del = array();
    $where_del['id'] = array('in', $_POST['ids']);
    if($Aboutus -> where($where_del) -> delete()){
      $this -> success(L('DATA_DELETE_SUCCESS'));
    }else{
      $this -> error(L('DATA_DELETE_ERROR'));
    }
  }

  public function editaboutus(){
    $Aboutus = M('Aboutus');
    if(!empty($_POST['title'])){
      if(!$Aboutus -> create()){
	$this -> error($Aboutus -> getError());
      }
      if($Aboutus -> save()){
	$this -> success(L('DATA_UPDATE_SUCCESS'));
      }else{
        $this -> error(L('DATA_UPDATE_ERROR'));
      }
    }
    $result = $Aboutus -> field('title,content') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }
}
