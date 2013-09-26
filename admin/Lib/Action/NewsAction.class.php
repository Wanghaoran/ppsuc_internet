<?php
class NewsAction extends CommonAction {
  //新闻分类管理
  public function category(){
    $NewsCategory = M('NewsCategory');
    $where = array();
    if(!empty($_POST['name'])){
      $where['name'] = array('LIKE', '%' . $this -> _post('name') . '%');
    }
    //记录总数
    $count = $NewsCategory -> where($where) -> count('id');
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
    $result = $NewsCategory -> field('id,name,color,addtime,remark') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    //每页条数
    $this -> assign('listRows', $listRows);
    //当前页数
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  //添加新闻分类
  public function addcategory(){
    if(!empty($_POST['name'])){
      $NewsCategory = M('NewsCategory');
      if(!$NewsCategory -> create()){
	$this -> error($NewsCategory -> getError());
      }
      $NewsCategory -> addtime = time();
      if($NewsCategory -> add()){
	$this -> success(L('DATA_ADD_SUCCESS'));
      }else{
	$this -> error(L('DATA_ADD_ERROR'));
      }
    }
    $this -> display();
  }

  //删除新闻分类
  public function delcategory(){
    $NewsCategory = M('NewsCategory');
    $where_del = array();
    $where_del['id'] = array('in', $_POST['ids']);
    if($NewsCategory -> where($where_del) -> delete()){
      $this -> success(L('DATA_DELETE_SUCCESS'));
    }else{
      $this -> error(L('DATA_DELETE_ERROR'));
    }
  }

  //编辑新闻分类
  public function editcategory(){
    $NewsCategory = M('NewsCategory');
    if(!empty($_POST['name'])){
      if(!$NewsCategory -> create()){
	$this -> error($NewsCategory -> getError());
      }
      if($NewsCategory -> save()){
	$this -> success(L('DATA_UPDATE_SUCCESS'));
      }else{
        $this -> error(L('DATA_UPDATE_ERROR'));
      }
    }
    $result = $NewsCategory -> field('name,color,remark') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }

  //新闻动态
  public function news(){
    $News = M('News');
    $where = array();
    if(!empty($_POST['title'])){
      $where['n.title'] = array('LIKE', '%' . $this -> _post('title') . '%');
    }
    //记录总数
    $count = $News -> alias('n') -> where($where) -> count('id');
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
    $result = $News -> alias('n') -> field('n.id,n.title,nc.name as ncname,n.addtime') -> join('internet_news_category as nc ON n.cid = nc.id') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('n.addtime DESC') -> select();
    $this -> assign('result', $result);
    //每页条数
    $this -> assign('listRows', $listRows);
    //当前页数
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  //增加新闻
  public function addnews(){
    if(!empty($_POST['title'])){
      $News = M('News');
      if(!$News -> create()){
	$this -> error($News -> getError());
      }
      $News -> addtime = time();
      if($News -> add()){
	$this -> success(L('DATA_ADD_SUCCESS'));
      }else{
	$this -> error(L('DATA_ADD_ERROR'));
      }
    }
    $NewsCategory = M('NewsCategory');
    $result_category = $NewsCategory -> field('id,name') -> select();
    $this -> assign('result_category', $result_category);
    $this -> display();
  }

  //删除新闻
  public function delnews(){
    $News = M('News');
    $where_del = array();
    $where_del['id'] = array('in', $_POST['ids']);
    if($News -> where($where_del) -> delete()){
      $this -> success(L('DATA_DELETE_SUCCESS'));
    }else{
      $this -> error(L('DATA_DELETE_ERROR'));
    }
  }

  //编辑新闻
  public function editnews(){
    $News = M('News');
    if(!empty($_POST['title'])){
      if(!$News -> create()){
	$this -> error($News -> getError());
      }
      if($News -> save()){
	$this -> success(L('DATA_UPDATE_SUCCESS'));
      }else{
        $this -> error(L('DATA_UPDATE_ERROR'));
      }
    }
    $result = $News -> field('cid,title,content') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $NewsCategory = M('NewsCategory');
    $result_category = $NewsCategory -> field('id,name') -> select();
    $this -> assign('result_category', $result_category);
    $this -> display();
  }
}
