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
    dump($_GET);
  }

  public function courselist(){
    dump($_GET);
    echo '课程列表';
  }

  public function course(){
    dump($_GET);
    echo '课程详情';
  }
}
