<?php
class CommonAction extends Action {
  public function _initialize(){
    //关于我们
    $Aboutus = M('Aboutus');
    $result_aboutus = $Aboutus -> field('id,title') -> select();
    $this -> assign('result_aboutus', $result_aboutus);
  }
}
