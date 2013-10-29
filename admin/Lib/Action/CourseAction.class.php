<?php
class CourseAction extends CommonAction {
  //课程类别管理
  public function category(){
    $CourseCategory = M('CourseCategory');
    $where = array();
    if(!empty($_POST['name'])){
      $where['name'] = array('LIKE', '%' . $this -> _post('name') . '%');
    }
    //记录总数
    $count = $CourseCategory -> where($where) -> count('id');
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
    $result = $CourseCategory -> field('id,name,addtime,price,remark') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    //每页条数
    $this -> assign('listRows', $listRows);
    //当前页数
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  //增加课程类别管理
  public function addcategory(){
    if(!empty($_POST['name'])){
      $CourseCategory = M('CourseCategory');
      if(!$CourseCategory -> create()){
	$this -> error($CourseCategory -> getError());
      }
      $CourseCategory -> addtime = time();
      if($CourseCategory -> add()){
	$this -> success(L('DATA_ADD_SUCCESS'));
      }else{
	$this -> error(L('DATA_ADD_ERROR'));
      }
    }
    $this -> display();
  }

  //删除课程类别
  public function delcategory(){
    $CourseCategory = M('CourseCategory');
    $where_del = array();
    $where_del['id'] = array('in', $_POST['ids']);
    if($CourseCategory -> where($where_del) -> delete()){
      $this -> success(L('DATA_DELETE_SUCCESS'));
    }else{
      $this -> error(L('DATA_DELETE_ERROR'));
    }
  }

  //编辑课程类别
  public function editcategory(){
    $CourseCategory = M('CourseCategory');
    if(!empty($_POST['name'])){
      if(!$CourseCategory -> create()){
	$this -> error($CourseCategory -> getError());
      }
      if($CourseCategory -> save()){
	$this -> success(L('DATA_UPDATE_SUCCESS'));
      }else{
        $this -> error(L('DATA_UPDATE_ERROR'));
      }
    }
    $result = $CourseCategory -> field('name,price,remark') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }

  //课程管理
  public function course(){
    $Course = M('Course');
    $where = array();
    if(!empty($_POST['name'])){
      $where['c.name'] = array('LIKE', '%' . $this -> _post('name') . '%');
    }
    //记录总数
    $count = $Course -> alias('c') -> where($where) -> count('id');
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
    $result = $Course -> alias('c') -> field('c.id,c.name,cc.name as ccname,c.addtime,c.content') -> join('internet_course_category as cc ON c.cid = cc.id') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    //每页条数
    $this -> assign('listRows', $listRows);
    //当前页数
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  //增加课程
  public function addcourse(){
    if(!empty($_POST['name'])){
      if($_FILES['pic']['size'] != 0){
	$info = R('Public/upload');
      }
      $_POST['pic'] = $info[0]['savename'];
      $_POST['addtime'] = time();
      $Course = M('Course');
      if(!$Course -> create()){
	$this -> error($Course -> getError());
      }
      if($Course -> add()){
	$this -> success(L('DATA_ADD_SUCCESS'));
      }else{
	$this -> error(L('DATA_ADD_ERROR'));
      }
    }
    //课程分类
    $result_category = M('CourseCategory') -> field('id,name') -> order('id DESC') -> select();
    $this -> assign('result_category', $result_category);
    $this -> display();
  }

  //删除课程
  public function delcourse(){
    $Course = M('Course');
    $where_del = array();
    $where_del['id'] = array('in', $_POST['ids']);
    if($Course -> where($where_del) -> delete()){
      $this -> success(L('DATA_DELETE_SUCCESS'));
    }else{
      $this -> error(L('DATA_DELETE_ERROR'));
    }
  }

  //编辑课程
  public function editcourse(){
    $Course = M('Course');
    if(!empty($_POST['name'])){
      if(!$Course -> create()){
	$this -> error($Course -> getError());
      }
      if(!empty($_FILES['pic']['name'])){
	$info = R('Public/upload');
	$Course -> pic = $info[0]['savename'];
      }
      if($Course -> save()){
	$this -> success(L('DATA_UPDATE_SUCCESS'));
      }else{
        $this -> error(L('DATA_UPDATE_ERROR'));
      }
    }
    $result = $Course -> field('id,name,file,content') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }
}
