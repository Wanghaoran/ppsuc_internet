<?php
class IndexAction extends CommonAction {

  public function index(){
    $News = M('News');
    $result_news = $News -> field('id,title,addtime') -> order('addtime DESC') -> limit(8) -> select();
    $this -> assign('result_news', $result_news);
    $Course = M('Course');
    $result_courses = $Course -> field('id,name,addtime') -> order('addtime DESC') -> limit(3) -> select();
    $this -> assign('result_courses', $result_courses);
    $this -> display();
  }

  //关于我们
  public function aboutus(){
    $Abouts = M('Aboutus');
    $result = $Abouts -> field('title,content') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }

  //新闻动态 - 列表页
  public function newslist(){
    $News = M('News');
    import("ORG.Util.Page");// 导入分页类
    $count = $News -> count('id');
    $page = new Page($count, 10);
    $show = $page -> show();
    $result = $News -> field('id,title,content,addtime') -> order('addtime DESC') -> limit($page -> firstRow . ',' . $page -> listRows) -> select();
    $this -> assign('result', $result);
    $this -> assign('show', $show);
    $this -> display();
  }

  //新闻动态 - 详情页
  public function news(){
    $News = M('News');
    $result = $News -> field('title,content,addtime') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }
}
