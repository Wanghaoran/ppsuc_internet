<?php
class PublicAction extends Action {
  public function login(){
    $this -> display();
  }

  public function checklogin(){
    $member = M('Member');
    if($result = $member -> field('id,email,name') -> where(array('email' => $this -> _post('email'), 'password' => $this -> _post('password', 'md5'))) -> find()){
      session(C('USER_AUTH_KEY'), $result['id']);
      session('member_name', $result['name']);
      session('member_email', $result['email']);
      //更新登陆次数
      $member -> where(array('id' => $result['id'])) -> setInc('login_count');
      //记录登陆日志
      M('MemberLoginLog') -> add(array('mid' => $result['id'], 'login_time' => time(), 'login_ip' => get_client_ip()));
      if(!empty($_POST['url_jump'])){
	$url_jump = str_replace(',', '/', $_POST['url_jump']);
	$this -> success(L('MEMBER_LOGIN_SUCCESS'), __APP__ . $url_jump);   
      }else{
	$this -> success(L('MEMBER_LOGIN_SUCCESS'), U('Index/index'));      
      }
    }else{
      $this -> error(L('MEMBER_LOGIN_ERROR'));
    }
  }

  public function register(){
    $this -> display();
  }

  public function checkregister(){
    $member = D('Member');
    if(!$member -> create()){
      $this -> error($member -> getError());
    }
    if($member -> add()){
      $this -> success(L('REGISTER_SUCCESS'), U('Public/login'));
    }else{
      $this -> error(L('REGISTER_ERROR'));
    }
  }

  public function logout(){
    if(isset($_SESSION[C('USER_AUTH_KEY')])){
      session(C('USER_AUTH_KEY'), null);
      session(null);
      session('[destroy]');
      $this -> success(L('LOGOUT_SUCCESS'));
    }else{
      $this -> error(L('LOGOUT_ERROR'));
    }
  }
}
