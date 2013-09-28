<?php
class IndexAction extends CommonAction {
  public function index(){
    $member_info = M('MemberLoginLog') -> field('login_time,login_ip') -> where(array('mid' => session(C('USER_AUTH_KEY')))) -> order('id DESC') -> limit('2,1') -> select();
    $member_info = $member_info[0];
    $member_info['login_count'] = M('Member') -> getFieldByid(session(C('USER_AUTH_KEY')), 'login_count');
    $this -> assign('member_info', $member_info);
    $this -> display();
  }

  public function courseshow(){
    $Course = M('Course');
    import("ORG.Util.Page");// 导入分页类
    $count = $Course -> count('id');
    $page = new Page($count, 9);
    $show = $page -> show();
    $result = $Course -> field('id,name,pic') -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    $this -> assign('show', $show);
    $this -> display();
  }

  public function courselist(){
    $CourseCategory = M('CourseCategory');
    $info = $CourseCategory -> field('id,name,remark') -> find($this -> _get('id', 'intval'));
    $this -> assign('info', $info);
    $Course = M('Course');
    import("ORG.Util.Page");// 导入分页类
    $count = $Course -> where(array('cid' => $this -> _get('id', 'intval'))) -> count('id');
    $page = new Page($count, 5);
    $show = $page -> show();
    $result = $Course -> field('id,name,content,addtime') -> where(array('cid' => $this -> _get('id', 'intval'))) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    $this -> assign('show', $show);
    $this -> display();
  }

  public function course(){
    $Course = M('Course');
    $result = $Course -> field('id,cid,name,pic,file,addtime,content') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }
}
