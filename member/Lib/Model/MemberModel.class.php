<?php
class MemberModel extends Model {
  protected $_auto = array ( 
    array('password','md5',1,'function'),
    array('register_time','time',1,'function')
  );

  protected $_validate = array(
    array('email','require','{%MEMBER_NAME_EMPTY}'),
    array('password','require','{%PASSWORD_EMPTY_ERROR}'),
    array('telphone','require','{%TELPHONE_EMPTY_ERROR}'),
    array('email','','{%EMAIL_REPORT_ERROR}',0,'unique',1),
    array('repassword','password','{%PASSWORD_REPORT_ERROR}',0,'confirm'),
);
  
}
