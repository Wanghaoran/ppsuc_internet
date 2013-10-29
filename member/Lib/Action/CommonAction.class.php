<?php
class CommonAction extends Action {
  public function _initialize(){
    $url_list = '';
    foreach($_GET['_URL_'] as $value){
	$url_list .= ',' . $value;
    }
    if(!$_SESSION[C('USER_AUTH_KEY')]){      
      $this->error(L('NOT_LOGIN'), __APP__ . '/' . C('USER_AUTH_GATEWAY') . '/url_jump/' . $url_list);
    }
    //关于我们
    $Aboutus = M('Aboutus');
    $result_aboutus = $Aboutus -> field('id,title') -> select();
    $this -> assign('result_aboutus', $result_aboutus);
    //课程
    $CourseCategory = M('CourseCategory');
    $Course = M('Course');
    $result_course = $CourseCategory -> field('id,name') -> order('addtime DESC') -> limit(4) -> select();
    foreach($result_course as $key => $value){
      $result_course[$key]['course'] = $Course -> field('id,name') -> where(array('cid' => $value['id'])) -> order('addtime DESC') -> limit(4) -> select();
    }
    $this -> assign('result_course', $result_course);
  }
}
